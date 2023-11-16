<?php
//Quản lý view và model liên quan: trang chủ, giới thiệu, liên hệ
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'model/connect.php';
            include_once 'model/user.php';

            if(isset($_POST['submit'])){
                $kq = login($_POST['sdt'],$_POST['matkhau']);
                if($kq){
                    $_SESSION['user'] = $kq;
                    if ($kq['quyen']==1) {
                        header("Location: admin.php");
                    }else{
                        header("Location: index.php");
                    }
                }
                else{
                    $thongbao= "Số điện thoại hoặc Mật khẩu không đúng!";
                }
            }
            include_once 'view/template_header.php';
            include_once 'view/login.php';
            include_once 'view/template_footer.php';
            break;
        case 'signup':
            include_once 'model/connect.php';
            include_once 'model/user.php';
        if (isset($_POST['submit'])) {
                $kq=checksdt($_POST['sdt']);
                if ($kq) {
                    //kq đúng --> sdt đã có
                    $thongbao2="số điện thoại đã tồn tại, không thể đăng kí";
                }
                else{
                    //kq sai chưa có sdt --> cho phép đk
                    $kq = signup($_POST['hoten'],$_POST['sdt'],$_POST['matkhau']);
            }
                }
                // kiểm tra sdt xem có trong csdl chưa 
                // chưa có thì cho đăng kí
                        
            include_once 'view/template_header.php';
            include_once 'view/signup.php';
            include_once 'view/template_footer.php';
            break;
        case 'admin':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';

            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                header("Location: admin.php");
            }
            $data['dssp']=get_products();
            include_once 'view/template_admin_header.php';
            include_once 'view/page_admin.php';
            include_once 'view/template_admin_footer.php';
            break;  
        case 'user':
            include_once 'model/connect.php';
            include_once 'model/user.php'; 
            $data['user'] = show_user();
            

            include_once 'view/template_admin_header.php';
            include_once 'view/admin_user.php';
            include_once 'view/template_admin_footer.php';
            break;    
        case 'add':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            include_once 'model/user.php';
            $data['dssp']=show_user();
            if (isset($_POST['submit'])) {
                $kq = add_user(
                    $_POST['hoten'],
                    $_FILES['anh']['name'],
                    $_POST['sdt'],
                    $_POST['email'],
                    $_POST['quyen'],
                );
                if ($kq) {
                    // xử lý tệp ảnh cho  anhsp
                    if ($_FILES['anh']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['anh']['tmp_name'],
                            "upload/avatar/" . $_FILES['anh']['name']
                        );
                    }
                    if (empty($thongbao)) {
                        header("location: admin.php?mod=user&act=add");
                    }
                } else {
                    $thongbao = "Có lỗi xảy ra vui lòng thử lại sau.";
                }
            }

            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add_user.php';
            include_once 'view/template_admin_footer.php'; 
            break;    
            case 'edit':
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                    header("Location: admin.php");
                }
                include_once 'model/connect.php';
                include_once 'model/user.php';
            
                if (isset($_GET['id'])) {
                    $data['tk'] = get_user($_GET['id']);
                }
            
                if (isset($_POST['submit'])) {
                    $anh = $_FILES['anh']['name'];
            
                    if ($_FILES['anh']['error'] != 0) {
                        // Không có ảnh mới hoặc ảnh bị lỗi, sử dụng hình cũ
                        $anh = $data['tk']['anh'];
                    } else {
                        // Ảnh mới đã được tải lên, xử lý tại đây
                        $kq = move_uploaded_file(
                            $_FILES['anh']['tmp_name'],
                            "upload/avatar/" . $_FILES['anh']['name']
                        );
            
                        if (!$kq) {
                            // Xử lý lỗi khi tải lên ảnh mới
                            $thongbao = "Có lỗi khi tải lên ảnh mới, vui lòng thử lại sau.";
                        }
                    }
            
                    $quyen = $_POST['quyen'];
            
                    $kq = edit_user(
                        $_GET['id'],
                        $_POST['hoten'],
                        $anh, // Ở đây sử dụng $anh (ảnh mới hoặc cũ)
                        $_POST['sdt'],
                        $_POST['email'],
                        $quyen
                    );
            
                    if ($kq) {
                        header("location: admin.php?mod=user&act=user");
                    } else {
                        $thongbao = "Có lỗi xảy ra, vui lòng thử lại sau.";
                    }
                }
            
                include_once 'view/template_admin_header.php';
                include_once 'view/admin_edit_user.php';
                include_once 'view/template_admin_footer.php';
                break;
            
            case 'delete':
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                    header("Location: admin.php");
                }
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/user.php';
                if (isset($_GET['id'])) {
                    $kq = delete_user($_GET['id']);
                    if ($kq) {
                        //đúng--> xóa thành công
                        header("location: admin.php?mod=user&act=user");
                    } else {
                        $thongbao = "có lỗi vui lòng thử lại sau";
                    }
                }
                break;
        default:
            #code...
            break;
    }
}
?>