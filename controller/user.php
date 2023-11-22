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
            include_once 'view/signup.php';
            break;
        case 'login':
            include_once 'model/connect.php';
            include_once 'model/user.php';

            if (isset($_POST['submit'])) {
                $kq = login($_POST['sodienthoai'], md5($_POST['matkhau']));
                if ($kq) {
                    $_SESSION['user'] = $kq;
                    if ($kq['quyen'] == "admin") {
                        header("Location: admin.php");
                    }
                    if ($kq['quyen'] == "") {
                        header("Location: index.php?mod=user&act=home");
                    }
                } else {
                    $thongbao = "SDT hoặc mật khẩu không đúng!";
                }
            }

            include_once 'view/login.php';

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
            $data['info'] = showinfo();
            include_once 'view/page_home2.php';
            include_once 'view/template_footer.php';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("location: index.php?mod=page&act=home");
            break;
        default:
            #code...
            break;
    }
}
?>