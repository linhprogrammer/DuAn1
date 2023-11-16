<?php
//Quản lý view và view/model lq đến product
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'add':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            $data['dssp']=show_category();
            if (isset($_POST['submit'])) {
                $kq = add(
                    $_POST['tensp'],
                    $_FILES['anh']['name'],
                    $_POST['dongia'],
                    $_POST['giakhuyenmai'],
                    $_POST['mota'],
                    $_POST['sanphamnoibat'],
                    $_POST['soluong'],
                    $_POST['madm']
                );
                if ($kq) {
                    // xử lý tệp ảnh cho  anhsp
                    if ($_FILES['anh']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['anh']['tmp_name'],
                            "upload/product/" . $_FILES['anh']['name']
                        );
                    }
                    if (empty($thongbao)) {
                        header("location: admin.php?mod=product&act=add");
                    }
                } else {
                    $thongbao = "Có lỗi xảy ra vui lòng thử lại sau.";
                }
            }

            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add.php';
            include_once 'view/template_admin_footer.php'; 
            break;
        case 'edit':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            if (isset($_GET['id'])) {
                $data['sp']=get_product($_GET['id']);
                
            }
            
            if (isset($_POST['submit'])) {
                $anh = $_FILES['anh']['name'];
                if ($_FILES['anh']['error'] != 0) {
                    // Không có ảnh hoặc ảnh bị lỗi.
                    $anh = $data['sp']['anh'];
                }
            
                $sanphamnoibat = $_POST['sanphamnoibat']; // Lấy giá trị "Sản phẩm nổi bật" từ biểu mẫu.
            
                $kq = edit_product(
                    $_GET['id'],
                    $_POST['tensp'],
                    $anh,
                    $_POST['dongia'],
                    $_POST['giakhuyenmai'],
                    $_POST['mota'],
                    $sanphamnoibat,
                    $_POST['soluong']
                );
            
                if ($kq) {
                    // Kết quả đúng
                    if ($_FILES['anh']['error'] == 0) {
                        $kq = move_uploaded_file(
                            $_FILES['anh']['tmp_name'], "upload/product/" . $_FILES['anh']['name']
                        );
                    }
                    if ($kq) {
                        header("location: admin.php?mod=user&act=admin");
                    }
                } else {
                    $thongbao = "Có lỗi xảy ra, vui lòng thử lại sau.";
                }
            }
            
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_edit.php';
            include_once 'view/template_admin_footer.php';
            break;
            case 'delete':
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                    header("Location: admin.php");
                }
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if (isset($_GET['id'])) {
                    $kq = delete_product($_GET['id']);
                    if ($kq) {
                        //đúng--> xóa thành công
                        header("location: admin.php?mod=user&act=admin");
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