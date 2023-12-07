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
            if (isset($_POST['submit'])) {
                $data['ds'] = show_product();
            } elseif (isset($_POST['submit1'])) {
                $data['ds'] = showdm1();
            } elseif (isset($_POST['submit2'])) {
                $data['ds'] = showdm2();
            } elseif (isset($_POST['submit3'])) {
                $data['ds'] = showdm3();
            } elseif (isset($_POST['submit4'])) {
                $data['ds'] = showdm4();
            } elseif (isset($_POST['submit5'])) {
                $data['ds'] = showdm5();
            } elseif (isset($_POST['submit6'])) {
                $data['ds'] = showdm6();
            } elseif (isset($_POST['submit7'])) {
                $data['ds'] = showdm7();
            }

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_product.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'detail':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/product_extra.php';
            include_once 'model/category.php';
            $data['sp1'] = show_product();
            $data['sp2'] = show_product_extra();
            if (isset($_GET['id'])) {
                $data['sp'] = get_products($_GET['id']);
                $data['img'] = show_images($_GET['id']);
            }
            
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                include_once 'view/template_header1.php';
            } else {
                include_once 'view/template_header.php';
            }
            include_once 'view/detail_product.php';
            include_once 'view/template_footer.php';
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
                $ten_sp_moi = $_POST['tensp'];
            
                // Kiểm tra xem tên sản phẩm mới có trùng với tên sản phẩm cũ hay không
                if (checktensp($ten_sp_moi)) {
                    echo '<script>alert("Tên sản phẩm đã tồn tại. Vui lòng chọn tên khác.");</script>';
                } else {
                    // Tiếp tục xử lý khi tên sản phẩm không trùng
                    $kq = add_product(
                        $ten_sp_moi,
                        $_POST['giakm'],
                        $_POST['soluong'],
                        $_POST['motangan'],
                        $_POST['motachitiet'],
                        $_FILES['hinhanhshow']['name'],
                        $_FILES['hinhanh']['name'],
                        $_POST['sanphamnoibat'],
                        $_POST['ngaynhap'],
                        $_POST['madm'],
                        $_POST['meal'],
                        $_POST['nho'],
                        $_POST['vua'],
                        $_POST['lon']
                    );
                }
            
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
            
                    echo '<script>alert("Đã thêm sản phẩm thành công !!!"); window.location.href = "admin.php?mod=product&act=dashboard";</script>';
                }
            }
            

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add_product.php';
            include_once 'view/template_admin_footer.php';
            break;
            case 'edit':
                // Check if the user is logged in as an admin
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                    header("Location: admin.php");
                }
            
                // Include necessary files
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/category.php';
            
                // Get product details and images
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $data['dsdm'] = get_categoies();
                    $data['sp'] = get_product($id);
                    $imgs_product = show_images($id);
                }
            
                // Handle form submission
                if (isset($_POST['submit'])) {
                    $anh = $_FILES['hinhanhshow']['name'];
                    $anh1 = $_FILES['hinhanh']['name'];
            
                    // Check if the 'hinhanhshow' file was uploaded successfully
                    if ($_FILES['hinhanhshow']['error'] != 0) {
                        // No image or image upload error, use the existing image
                        $anh = $data['sp']['hinhanhshow'];
                    }
            
                    // Call the edit_product function
                    $kq = edit_product(
                        $_GET['id'],
                        $_POST['tensp'],
                        $_POST['sizenho'],
                        $_POST['sizevua'],
                        $_POST['sizelon'],
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
                    // Check if the product edit was successful
                    if ($kq) {
                        // Move uploaded images to the destination folder
                        move_uploaded_file($_FILES['hinhanhshow']['tmp_name'], "upload/product/" . $_FILES['hinhanhshow']['name']);
                        foreach ($_FILES['hinhanh']['name'] as $key => $value) {
                            move_uploaded_file($_FILES['hinhanh']['tmp_name'][$key], "upload/product/" . $value);
                        }
            
                        // Redirect to the product dashboard
                        header("location: admin.php?mod=product&act=dashboard");
                    } else {
                        echo "Product edit failed.";
                    }
                }
            
                // Include templates
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
        case 'hidden':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            if (isset($_GET['id'])) {
                $kq = hiddensp($_GET['id']);
                if ($kq) {
                    header("location: admin.php?mod=product&act=dashboard");
                } else {
                    header("location: admin.php?mod=product&act=dashboard");
                }
            }
            break;
        default:
            #code...
            break;
    }
?>