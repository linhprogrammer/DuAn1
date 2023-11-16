<?php
//Quản lý view và model liên quan: trang chủ, giới thiệu, liên hệ
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            $data['dssp']=show_product();
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_footer.php';
            break;
        case 'detail':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/category.php';
            if (isset($_GET['id'])) {
                $data['sp'] = get_product($_GET['id']);
            }
            $data['dssp']=show_detail();
            include_once 'view/template_header.php';
            include_once 'view/page_detail.php';
            include_once 'view/template_footer.php';
        /* case 'dashboard':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header("Location: index.php");
            }
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/page_dashboard.php';
            include_once 'view/template_admin_footer.php';
            break;
         */
        default:
            #code...
            break;
    }
}
?>