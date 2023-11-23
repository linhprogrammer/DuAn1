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
            $data['dm'] = get_categoies();
            $data['dm'] = get_categories_with_product_count();
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_category.php';
            include_once 'view/template_admin_footer.php';
            break;
    case 'add':
        if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
            header("Location: admin.php");
        }
        include_once 'model/connect.php';
        include_once 'model/category.php';
        if (isset($_POST['submit'])) {
            $ten_dm_moi = $_POST['tendm'];
        
            if (checktendm($ten_dm_moi)) {
                echo '<script>alert("Tên Danh mục đã tồn tại. Vui lòng chọn tên khác.");</script>';
            } else {
                // Tiếp tục xử lý khi tên sản phẩm không trùng
                $kq = add_category(
                $_POST['tendm'],
                $_FILES['anhdaidien']
            );
        
            if ($kq) {
                if ($_FILES['anhdaidien']['error'] == 0) {
                    move_uploaded_file(
                        $_FILES['anhdaidien']['tmp_name'],
                        "upload/category/" . $_FILES['anhdaidien']['name']
                    );
                }
                if (empty($thongbao)) {
                    echo '<script>alert("Đã thêm Danh mục thành công !!!"); window.location.href = "admin.php?mod=category&act=dashboard";</script>';
                }
            } else {
                $thongbao = "Có lỗi xảy ra vui lòng thử lại sau.";
            
            }
        }
    }
        

        include_once 'view/template_admin_head.php';
        include_once 'view/template_admin_header.php';
        include_once 'view/admin_add_category.php';
        include_once 'view/template_admin_footer.php';
        break;
        case 'edit':
            include_once 'model/connect.php';
            include_once 'model/category.php';
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: admin.php");
            }
            if (isset($_GET['id'])) {
                $data['dm'] = get_category($_GET['id']);
            }
            if (isset($_POST['submit'])) {
                $anh = $_FILES['anhdaidien']['name'];
            
                if ($_FILES['anhdaidien']['error'] != 0) {
                    // Không có ảnh hoặc ảnh bị lỗi
                    $anh = $data['dm']['anhdaidien'];
                } else {
                    // Nếu người dùng đã chọn một tệp mới, hãy kiểm tra xem ảnh cũ có tồn tại hay không.
                    // Nếu tồn tại, bạn có thể xóa nó hoặc thực hiện bất kỳ xử lý khác tùy theo yêu cầu của bạn.
                    $old_image = "upload/category/" . $data['dm']['anhdaidien'];
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
            
                    // Tiến hành tải ảnh mới lên
                    $kq = move_uploaded_file(
                        $_FILES['anhdaidien']['tmp_name'],
                        "upload/category/" . $_FILES['anhdaidien']['name']
                    );
                    if (!$kq) {
                        // Xử lý lỗi tải ảnh (nếu có)
                        $thongbao = "Có lỗi xảy ra khi tải ảnh. Vui lòng thử lại sau.";
                    }
                }
            
                // Tiến hành chỉnh sửa danh mục
                $kq = edit_category(
                    $_GET['id'],
                    $_POST['tendm'],
                    $anh
                );
            
                if ($kq) {
                    header("location: admin.php?mod=category&act=dashboard");
                } else {
                    $thongbao = "Có lỗi xảy ra. Vui lòng thử lại sau.";
                }
            }
            
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_edit_category.php';
            include_once 'view/template_admin_footer.php';
            break;
            case 'delete':
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                    header("Location: admin.php");
                }
                include_once 'model/connect.php';
                include_once 'model/category.php';
                if (isset($_GET['id'])) {
                    $kq = delete_category($_GET['id']);
                    if ($kq) {
                        //đúng--> xóa thành công
                        header("location: admin.php?mod=category&act=dashboard");
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