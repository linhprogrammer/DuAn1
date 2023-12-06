<?php
//Quản lý view và model liên quan: trang chủ, giới thiệu, liên hệ
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'signup':
            include_once 'model/connect.php';
            include_once 'model/user.php';
            if (isset($_POST['submit'])) {
                $kq = checkSDT($_POST['sodienthoai']);
                if ($kq) {
                    //kq đúng --> SDT đã có
                    $thongbao2 = "Số điện thoại đã tồn tại, không thể đăng kí";
                } else {
                    //kq sai chưa có SDT --> cho phép đk
                    $kq = signup($_POST['hoten'], $_POST['sodienthoai'], md5($_POST['matkhau']));
                    header("Location: index.php?mod=user&act=login");

                }
            }
            // kiểm tra SDT xem có trong csdl chưa 
            // chưa có thì cho đăng kí
            include_once 'view/template_header.php';
            include_once 'view/signup.php';
            include_once 'view/template_footer.php';
            break;
            case 'login':
                include_once 'model/connect.php';
                include_once 'model/user.php';
            
                // Lấy thông tin nếu có id được truyền qua
                if (isset($_GET['id'])) {
                    $data['info'] = showinfo($_GET['id']);
                }
            
                // Xử lý đăng nhập khi nhận được dữ liệu từ biểu mẫu
                if (isset($_POST['submit'])) {
                    $sodienthoai = $_POST['sodienthoai'];
                    $matkhau = md5($_POST['matkhau']);
            
                    $kq = login($sodienthoai, $matkhau);
            
                    if ($kq) {
                        if ($kq['blocked'] == 1) {
                            // Thông báo sử dụng JavaScript
                            echo '<script>alert("Người dùng có hành vi không đúng nên đã bị khóa tài khoản!");</script>';
                        } else {
                            $_SESSION['user'] = $kq;
            
                            // Chuyển hướng dựa vào quyền của người dùng
                            if ($kq['quyen'] == "admin") {
                                header("Location: admin.php");
                                exit(); // Dừng thực hiện script để tránh chuyển hướng không mong muốn
                            } elseif (empty($kq['quyen'])) {
                                // Chuyển hướng đến trang home với thông tin người dùng nếu quyền trống
                                header("Location: index.php?mod=user&act=home&id=" . $kq['matk']);
                                exit(); // Dừng thực hiện script để tránh chuyển hướng không mong muốn
                            }
                        }
                    } else {
                        // Thông báo sử dụng JavaScript
                        echo '<script>alert("Người dùng có hành vi không đúng nên đã bị khóa tài khoản!");</script>';
                    }
                }
            
                include_once 'view/template_header.php';
                include_once 'view/login.php';
                include_once 'view/template_footer.php';
                break;
            

        case 'home':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "")) {
                header("Location: index.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/user.php';
            $data['sp'] = show_product();
            $data1['time'] = showspmoinhat();
            $data2['sanphamnoibat'] = show_home();
            if (isset($_GET['id'])) {
                $data['info'] = showinfo($_GET['id']);
            }
            include_once 'view/page_home2.php';
            include_once 'view/template_footer.php';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("location: index.php?mod=page&act=home");
            break;
        case 'dashboard':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/user.php';
            $data['dstk'] = get_users();
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_user.php';
            include_once 'view/template_admin_footer.php';
            break;
       
    case 'add':
        if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
            header("Location: admin.php");
        }
        include_once 'model/connect.php';
        include_once 'model/user.php';
        if (isset($_POST['submit'])) {
            $sodienthoai = $_POST['sodienthoai'];
        
            // Kiểm tra xem tên sản phẩm mới có trùng với tên sản phẩm cũ hay không
            if (checksdt1($sodienthoai)) {
                echo '<script>alert("Số điện thoại đã tồn tại, vui lòng đặt sdt khác.");</script>';
            } else {
                // Tiếp tục xử lý khi tên sản phẩm không trùng
                $kq = add_user(
                $_POST['hoten'],
                $_POST['email'],
                $_POST['matkhau'],
                $_POST['sodienthoai'],
                $_POST['diachi'],
                $_POST['quyen'],
                $_FILES['hinhanh']['name']
            );
            if ($kq) {
                if ($_FILES['hinhanh']['error'] == 0) {
                    move_uploaded_file(
                        $_FILES['hinhanh']['tmp_name'],
                        "upload/avatar/" . $_FILES['hinhanh']['name']
                    );
                }
                if (empty($thongbao)) {
                    echo '<script>alert("Đã thêm Tài khoản thành công !!!"); window.location.href = "admin.php?mod=user&act=dashboard";</script>';
                }
            } else {
                $thongbao = "Có lỗi xảy ra vui lòng thử lại sau.";
            }
            }
        }
        
        include_once 'view/template_admin_head.php';
        include_once 'view/template_admin_header.php';
        include_once 'view/admin_add_user.php';
        include_once 'view/template_admin_footer.php';
        break;
        case 'edit':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/user.php';
            if (isset($_GET['id'])) {
                $data['tk'] = get_user($_GET['id']);
            }

            if (isset($_POST['submit'])) {
                $anh = $data['tk']['hinhanh']; 
            
                if ($_FILES['hinhanh']['error'] === 0) {
                    $anh = $_FILES['hinhanh']['name'];
            
                    $kq = move_uploaded_file(
                        $_FILES['hinhanh']['tmp_name'],
                        "upload/avatar/" . $anh
                    );
            
                    if (!$kq) {
                        $thongbao = "Failed to upload the image.";
                    }
                }
            
                $kq = edit_user(
                    $_GET['id'],
                    $_POST['hoten'],
                    $_POST['email'],
                    md5($_POST['matkhau']),
                    $_POST['sodienthoai'],
                    $_POST['diachi'],
                    $_POST['quyen'],
                    $anh
                );
            
                if ($kq) {
                    header("location: admin.php?mod=user&act=dashboard");
                } else {
                    $thongbao = "có lỗi vui lòng thử lại sau";
                }
            }
            

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_edit_user.php';
            include_once 'view/template_admin_footer.php';
            break;
            case 'block':
                include_once 'model/connect.php';
                include_once 'model/user.php';
                
                if (isset($_GET['id'])) {
                    if (block_user($_GET['id'])) {
                        echo '<script>alert("Người dùng đã được chặn thành công!"); window.location.href = "admin.php?mod=user&act=dashboard";</script>';
                        exit();
                    } else {
                        // Xử lý lỗi nếu cần
                        $thongbao = "Có lỗi xảy ra khi chặn người dùng!";
                    }
                }
            
                break;
            
            
            default:
            #code...
            break;
}

}
?>