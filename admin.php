<?php
session_start();
//Điều hướng đến các controller
// print_r($_GET);
if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            include_once 'controller/page.php';
            break;
        case 'user':
            include_once 'controller/user.php';
            break;
        case 'product':
            include_once 'controller/product.php';
            break;
        case 'product_extra':
            include_once 'controller/product_extra.php';
            break;
        case 'category':
            include_once 'controller/category.php';
            break;
        default:
            # Lỗi 404 - Không tìm thấy trang
            # hoặc
            # chuyển hướng về trang home
            header("Location: ?mod=page&act=home");
            break;
    }
} else {
    header("Location: ?mod=product&act=dashboard");
}
?>