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

            $data['info'] = []; // Initialize the variable

            if (isset($_GET['id'])) {
                $data['info'] = showinfo($_GET['id']);
            }
            if (isset($_POST['submit1'])) {
                $matkhaucu = md5($_POST['matkhaucu']);
                $matkhaumoi = md5($_POST['matkhaumoi']);
                $matkhau = md5($_POST['matkhau']);
                
                if ($matkhaucu == $data['info']['matkhau']) {
                    if ($matkhaumoi == $matkhau) {
                        $kq=doimatkhau(
                            $_GET['id'],
                            $matkhau
                        );
                        if (empty($thongbao)) {
                            echo '<p style="color: green;">Đã sửa thành công !!!!</p>';
                        }
                    } else {
                        echo "Mật khẩu mới không khớp với mật khẩu xác nhận.";
                    }
                } else {
                    echo "Mật khẩu cũ không đúng.";
                }
                    
            }

            if (isset($_POST['submit'])) {
                // Get values from the form
                $anh = $_FILES['hinhanh']['name'];
            
                // Check if $tinh, $huyen, $xa are empty or have default values
                $tinh = isset($_POST['tinh']) && $_POST['tinh'] !== "" ? $_POST['tinh'] : $data['info']['tinh'];
                $huyen = isset($_POST['huyen']) && $_POST['huyen'] !== "Chọn Quận/Huyện" ? $_POST['huyen'] : $data['info']['huyen'];
                $xa = isset($_POST['xa']) && $_POST['xa'] !== "Chọn Phường/Xã" ? $_POST['xa'] : $data['info']['xa'];
            
                if ($_FILES['hinhanh']['error'] != 0) {
                    $anh = $data['info']['hinhanh'];
                }
            
                $kq = edit_info(
                    $_GET['id'],
                    $_POST['hoten'],
                    $_POST['sodienthoai'],
                    $_POST['email'],
                    $_POST['gioitinh'],
                    $anh,
                    $tinh,
                    $huyen,
                    $xa
                );
            
            
            

                if ($kq) {
                    // If successful
                    if ($_FILES['hinhanh']['error'] == 0) {
                        $kq = move_uploaded_file(
                            $_FILES['hinhanh']['tmp_name'],
                            "upload/avatar/" . $_FILES['hinhanh']['name']
                        );
                    }

                    // Check if there are no errors
                    if (empty($thongbao)) {
                        echo '<p style="color: green;">Đã sửa thành công !!!!</p>';
                        echo '<script>
                                setTimeout(function(){
                                    window.location.href = "index.php?mod=page&act=info&id=' . $_GET['id'] . '";
                                }, 1000); // Reload after 1 seconds
                              </script>';
                    }
                }
                
            }
            include_once 'view/template_head.php';
            include_once 'view/page_info.php';
            include_once 'view/template_footer.php';
            break;
            case 'search':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if (isset($_GET['keyword'])) {
                    $data['dssp'] = search_products($_GET['keyword']);
                }
    
                include_once 'view/template_head.php';
                include_once 'view/template_header.php';
                include_once 'view/page_search.php';
                include_once 'view/template_footer.php';
                break;
            case 'about':
                include_once 'model/connect.php';
                include_once 'view/template_head.php';
                include_once 'view/page_about.php';
                include_once 'view/template_footer.php';
                break;
            

        default:
            #code...
            break;
    }
}
?>