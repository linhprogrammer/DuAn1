<?php
//Quản lý view và model liên quan: trang chủ, giới thiệu, liên hệ
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            $data['sp'] = show_product();
            $data1['time'] = showspmoinhat();
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_footer.php';
            break;
            case 'info':
                include_once 'model/connect.php';
                include_once 'model/user.php';
                if (isset($_GET['id'])) {
                    $data['info'] = showinfo($_GET['id']);
                }
                include_once 'view/template_head.php';
                include_once 'view/page_info.php';
                include_once 'view/template_footer.php';
                break;
        default:
            #code...
            break;
    }
}
?>