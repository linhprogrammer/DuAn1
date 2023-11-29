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
            include_once 'model/product_extra.php';
            include_once 'model/category.php';
            $data['dsdm'] = get_categoies();
            $data['ds'] = show_product_extra();
            if (isset($_POST['submit'])) {
                $data['ds'] = show_product_extra();
            } elseif (isset($_POST['submit1'])) {
                $data['ds'] = showdm1_extra();
            } elseif (isset($_POST['submit2'])) {
                $data['ds'] = showdm2_extra();
            } elseif (isset($_POST['submit3'])) {
                $data['ds'] = showdm3_extra();
            } elseif (isset($_POST['submit4'])) {
                $data['ds'] = showdm4_extra();
            } elseif (isset($_POST['submit5'])) {
                $data['ds'] = showdm5_extra();
            } elseif (isset($_POST['submit6'])) {
                $data['ds'] = showdm6_extra();
            } elseif (isset($_POST['submit7'])) {
                $data['ds'] = showdm7_extra();
            }

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_extra_product.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'add':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/product_extra.php';
            include_once 'model/category.php';
            $data['dsdm'] = get_categoies();
            if (isset($_POST['submit'])) {
                $ten_sp_moi = $_POST['tensp'];
            
                // Kiểm tra xem tên sản phẩm mới có trùng với tên sản phẩm cũ hay không
                if (checktensp_extra($ten_sp_moi)) {
                    echo '<script>alert("Tên sản phẩm đã tồn tại. Vui lòng chọn tên khác.");</script>';
                } else {
                    // Tiếp tục xử lý khi tên sản phẩm không trùng
                    $kq = add_product_extra(
                        $ten_sp_moi,
                        $_POST['gia'],
                        $_POST['soluong'],
                        $_FILES['hinhanhshow']['name'],
                        $_POST['phanloai']
                    );
                }
            
                if ($kq) {
                    if ($_FILES['hinhanhshow']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['hinhanhshow']['tmp_name'],
                            "upload/product_extra/" . $_FILES['hinhanhshow']['name']
                        );
                    }
            
                    echo '<script>alert("Đã thêm sản phẩm thành công !!!"); window.location.href = "admin.php?mod=product_extra&act=dashboard";</script>';
                }
            }
            

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add_product_extra.php';
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
                include_once 'model/product_extra.php';
                include_once 'model/category.php';
            
                // Get product details and images
                if (isset($_GET['id'])) {
                    $data['dsdm'] = get_categoies();
                    $data['sp'] = get_product_extra($_GET['id']);
                }
                
                // Handle form submission
                if (isset($_POST['submit'])) {
                    $anh = $_FILES['hinhanhshow']['name'];
                    if ($_FILES['hinhanhshow']['error'] != 0) {
                        // No image or image upload error, use the existing image
                        $anh = $data['sp']['hinhanhshow'];
                    }
                
                    // Call the edit_product_extra function
                    $kq = edit_product_extra(
                        $_GET['id'],
                        $_POST['tensp'],
                        $_POST['gia'],
                        $_POST['soluong'],
                        $anh,
                        $_POST['phanloai']
                    );
                
                    // Check if the product edit was successful
                    if ($kq) {
                        // Move uploaded images to the destination folder
                        move_uploaded_file($_FILES['hinhanhshow']['tmp_name'], "upload/product_extra/" . $_FILES['hinhanhshow']['name']);
                        
                
                        // Redirect to the product dashboard
                        header("location: admin.php?mod=product_extra&act=dashboard");
                    } else {
                        echo "Product edit failed.";
                    }
                }
            
                // Include templates
                include_once 'view/template_admin_head.php';
                include_once 'view/template_admin_header.php';
                include_once 'view/admin_edit_product_extra.php';
                include_once 'view/template_admin_footer.php';
                break;
            
        case 'delete':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product_extra.php';
            if (isset($_GET['id'])) {
                $kq = delete_product_extra($_GET['id']);
                if ($kq) {
                    header("location: admin.php?mod=product_extra&act=dashboard");
                } else {
                    $thongbao = "có lỗi vui lòng thử lại sau";
                }
            }
        case 'hidden':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product_extra.php';
            if (isset($_GET['id'])) {
                $kq = hiddensp_extra($_GET['id']);
                if ($kq) {
                    header("location: admin.php?mod=product_extra&act=dashboard");
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