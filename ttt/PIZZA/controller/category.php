<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'category':
            include_once 'model/connect.php';
            include_once 'model/category.php'; 
            $data['dmsp'] = show_category();
            

            include_once 'view/template_admin_header.php';
            include_once 'view/admin_category.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'add':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            $data['dssp']=show_category();
            if (isset($_POST['submit'])) {
                $kq = add_category(
                    $_POST['tensp'],
                    $_FILES['hinhanh']['name']
                );
                if ($kq) {
                    // xử lý tệp ảnh cho  hinhanh
                    if ($_FILES['hinhanh']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['hinhanh']['tmp_name'],
                            "upload/category/" . $_FILES['hinhanh']['name']
                        );
                    }
                    if (empty($thongbao)) {
                        header("location: admin.php?mod=category&act=category");
                    }
                } else {
                    $thongbao = "Có lỗi xảy ra vui lòng thử lại sau.";
                }
            }

            include_once 'view/template_admin_header.php';
            include_once 'view/admin_add_category.php';
            include_once 'view/template_admin_footer.php'; 
            break;
            case 'edit':
                if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 1)) {
                    header("Location: admin.php");
                }
                include_once 'model/connect.php';
                include_once 'model/category.php';
                if (isset($_GET['id'])) {
                    $data['dm']=get_category($_GET['id']);
                    
                }
                
                if (isset($_POST['submit'])) {
                    $anh = $_FILES['hinhanh']['name'];
                    if ($_FILES['hinhanh']['error'] != 0) {
                        // Không có ảnh hoặc ảnh bị lỗi.
                        $hinhanh = $data['dm']['hinhanh'];
                    }
                    $kq = edit_category(
                        $_GET['id'],
                        $_POST['tendm'],
                        $hinhanh
                    );
                
                    if ($kq) {
                        // Kết quả đúng
                        if ($_FILES['hinhanh']['error'] == 0) {
                            $kq = move_uploaded_file(
                                $_FILES['hinhanh']['tmp_name'], "upload/category/" . $_FILES['hinhanh']['name']
                            );
                        }
                        if ($kq) {
                            header("location: admin.php?mod=category&act=category");
                        }
                    } else {
                        $thongbao = "Có lỗi xảy ra, vui lòng thử lại sau.";
                    }
                }
                
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
                            header("location: admin.php?mod=category&act=category");
                        } else {
                            $thongbao = "có lỗi vui lòng thử lại sau";
                        }
                    }
                    break;
            default:
            // Other cases or default action
            break;
    }
}

?>




