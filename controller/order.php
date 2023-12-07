<?php
//Quản lý view và view/model lq đến product
if(isset($_GET['act']))
    switch($_GET['act']) {
        case 'dashboard':
            if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "admin")) {
                header("Location: admin.php");
            }
            include_once 'model/connect.php';
            include_once 'model/user.php';
            $data['ds'] = get_order();

            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/admin_order.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'load':
            include_once 'model/connect.php';
            include_once 'model/user.php';
            /*  $data['ds'] = get_sp_in_order(); */
           
            include_once 'view/loadstatus.php';
            break;
        case 'duyet':
            include_once 'model/connect.php';
            include_once 'model/user.php';
            $kq = updateTrangThaiDonHang($_GET['id']);
            if($kq) {
                //đúng--> xóa thành công
                header("location: admin.php?mod=order&act=dashboard");
            }
            break;
        case 'status':
            include_once 'model/connect.php';
            include_once 'model/user.php';
            $matk = $_SESSION['user']['id'];
            $data['ds'] = get_donhang($matk);

            include_once 'view/status.php';

            break;
        case 'statussp':
                include_once 'model/connect.php';
                include_once 'model/user.php';
                $data['dss'] = get_donhang_madonhang($_GET['id']);
                $data['ds'] = get_sp_in_order($_GET['id']);
                
                include_once 'view/status_sp.php';

                break;
    
        default:
            #code...
            break;
    }
?>