<?php
//Quản lý view và view/model lq đến product
if (isset($_GET['act']))
    switch ($_GET['act']) {
        case 'dashboard':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "admin")) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            $data['ds'] = show_product();
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_product.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'add':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            $data['dsdm'] = get_categoies();
            if (isset($_POST['submit'])) {
                $kq = add_product(
                    $_POST['tensp'],
                    $_POST['gia'],
                    $_POST['giakm'],
                    $_POST['soluong'],
                    $_POST['motangan'],
                    $_POST['motachitiet'],
                    $_FILES['hinhanhshow']['name'],
                    $_FILES['hinhanh']['name'],  // Không truyền nó vào hàm
                    $_POST['sanphamnoibat'],
                    $_POST['ngaynhap'],
                    $_POST['madm'],
                    $_POST['meal']
                );


                if ($kq) {
                    // Xử lý tất cả các tệp ảnh cho hinhanh
                    foreach ($_FILES['hinhanh']['name'] as $key => $value) {
                        if ($_FILES['hinhanh']['error'][$key] == 0) {
                            move_uploaded_file(
                                $_FILES['hinhanh']['tmp_name'][$key],
                                "upload/product/" . $value
                            );
                        }
                    }
                    if ($_FILES['hinhanhshow']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['hinhanhshow']['tmp_name'],
                            "upload/product/" . $_FILES['hinhanhshow']['name']
                        );
                    }

                    if (empty($thongbao)) {
                        header("location: admin.php?mod=product&act=dashboard");
                    }
                }
            }

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add_product.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'edit':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            $data['dsdm'] = get_categoies();
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $data['sp'] = get_product($id);
                $imgs_product = show_images($id);
            }

            if (isset($_POST['submit'])) {
                $anh = $_FILES['hinhanhshow']['name'];
                if ($_FILES['hinhanhshow']['error'] != 0) {
                    //không có ảnh or ảnh bị lỗi
                    $anh = $data['sp']['hinhanhshow'];
                }
                $anh1 = $_FILES['hinhanh']['name'];
                //lỗi không tải ảnh lên thì mất ảnh
                
                

                $kq = edit_product(
                    $_GET['id'],
                    $_POST['tensp'],
                    $_POST['gia'],
                    $_POST['giakm'],
                    $_POST['soluong'],
                    $_POST['motangan'],
                    $_POST['motachitiet'],
                    $anh,
                    $anh1,
                    $_POST['sanphamnoibat'],
                    $_POST['ngaynhap'],
                    $_POST['madm'],
                    $_POST['meal']
                );

                if (isset($_FILES['hinhanh']) && is_array($_FILES['hinhanh']['name'])) {
                    foreach ($_FILES['hinhanh']['name'] as $key => $value) {
                        if ($_FILES['hinhanh']['error'][$key] != 0) {
                            move_uploaded_file(
                                $_FILES['hinhanh']['tmp_name'][$key],
                                "upload/product/" . $value
                            );
                        }
                    }

                    if ($kq) {
                        //kq đúng 
                        if ($_FILES['hinhanhshow']['error'] == 0) {
                            $kq = move_uploaded_file(
                                $_FILES['hinhanhshow']['tmp_name'],
                                "upload/product" . $_FILES['hinhanhshow']['name']
                            );
                        }
                    }

                    // If everything is successful and no errors, update the product with new/old image filenames
                    if (empty($thongbao)) {
                        header("location: admin.php?mod=product&act=dashboard");
                    }
                }
            }

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_edit_product.php';
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
                    header("location: admin.php?mod=product&act=dashboard");
                } else {
                    $thongbao = "có lỗi vui lòng thử lại sau";
                }
            }
            break;
        default:
            #code...
            break;
    }
?>