<?php
//Quản lý view và model liên quan: trang chủ, giới thiệu, liên hệ
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            $data['sp'] = show_product();
            $data1['time'] = showspmoinhat();
            $data2['sanphamnoibat'] = show_home();
           
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
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    include_once 'view/template_header1.php';
                } else {
                    include_once 'view/template_header.php';
                }
                include_once 'view/page_search.php';
                include_once 'view/template_footer.php';
                break;
            case 'about':
                include_once 'model/connect.php';
                include_once 'view/template_head.php';
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    include_once 'view/template_header1.php';
                } else {
                    include_once 'view/template_header.php';
                }
                include_once 'view/page_about.php';
                include_once 'view/template_footer.php';
                break;
            
            case 'menu':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                $data['ds'] = show_product();
                $data['ds1'] = showdm1();
                $data['ds2'] = showdm2();
                $data['ds3'] = showdm3();
                $data['ds4'] = showdm4();
                $data['ds5'] = showdm5();
                $data['ds6'] = showdm6();
                $data['ds7'] = showdm7();
                include_once 'view/template_head.php';
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    include_once 'view/template_header1.php';
                } else {
                    include_once 'view/template_header.php';
                }
                include_once 'view/page_menu.php';
                include_once 'view/template_footer.php';
                break;
            case 'cart':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/product_extra.php';
    
                include_once 'view/template_head.php';
                if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    include_once 'view/template_header1.php';
                } else {
                    include_once 'view/template_header.php';
                }
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
                break;
            case 'delete_cart':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/product_extra.php';
            
                // Check if the 'index' parameter is provided in the URL
                if (isset($_GET['index'])) {
                    // Get the index value from the URL parameter
                    $index = (int)$_GET['index'];
            
                    // Call the function to remove the product from the cart
                    $result = removeFromCart($index);
            
                    if ($result === 'empty_cart') {
                        echo "Giỏ hàng trống.";
                    } elseif ($result) {
                        // Display a success message before redirecting
                        echo "Xóa thành công sản phẩm.<br>";
                        echo '<div id="countdown">Bạn sẽ được trở về trang giỏ hàng sau <span id="counter">3</span> giây</div>';
                        echo '<script>
                                var counter = 3;
                                var interval = setInterval(function() {
                                    counter--;
                                    document.getElementById("counter").innerText = counter;
                                    if (counter <= 0) {
                                        clearInterval(interval);
                                        window.location.href = "index.php?mod=page&act=cart";
                                    }
                                }, 1000);
                            </script>';
                    } else {
                        echo "Bị lỗi, vui lòng thử lại.";
                    }
                } else {
                    echo "Index not provided.";
                }
                break;
            case 'checkout':
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/user.php';
            include_once 'model/product_extra.php';

            if(isset($_GET['id'])) {
                $data['info'] = showinfo($_GET['id']);
            }

            if(isset($_POST['submit'])) {
                // Xóa địa chỉ khi người dùng xác nhận
                $kq = xoaDiaChi($_GET['id']);
                if($kq) {
                    echo '<script>
                            setTimeout(function(){
                                window.location.href = "index.php?mod=page&act=checkout&id='.$_GET['id'].'";
                            }, 1000); // Tải lại sau 1 giây
                        </script>';
                } else {
                    $thongbao = "Có lỗi, vui lòng thử lại sau";
                }
            }

            if (isset($_POST['submit1'])) {
                // Kiểm tra xem biến submit1 có tồn tại hay không
                $tinh = isset($_POST['tinh']) && $_POST['tinh'] !== "" ? $_POST['tinh'] : $data['info']['tinh'];
                $huyen = isset($_POST['huyen']) && $_POST['huyen'] !== "Chọn Quận/Huyện" ? $_POST['huyen'] : $data['info']['huyen'];
                $xa = isset($_POST['xa']) && $_POST['xa'] !== "Chọn Phường/Xã" ? $_POST['xa'] : $data['info']['xa'];
                $sodienthoai = isset($_POST['sodienthoai']) ? $_POST['sodienthoai'] : '';
                $sonha = isset($_POST['sonha']) ? $_POST['sonha'] : '';
            
                // Kiểm tra xem số điện thoại đã tồn tại chưa
                $userExists = checkSDT($sodienthoai);
            
                // Validate required fields
                if (empty($tinh) || empty($huyen) || empty($xa)) {
                    echo "Vui lòng điền đầy đủ thông tin địa chỉ (Tỉnh/Thành, Quận/Huyện, Phường/Xã).";
                } else {
                    if (isset($_GET['id'])) {
                        // Nếu có $_GET['id'], sử dụng hàm update_diachi và doiDiaChi
                        $kq_update_diachi = update_diachi($_GET['id'], $sonha);
            
                        // Kiểm tra xem $_SESSION['user']['id_cart'] có tồn tại và là một mảng không
                        $cartKey = isset($_SESSION['user']['id_cart']) ? $_SESSION['user']['id_cart'] : null;
            
                        if ($cartKey && is_array($_SESSION[$cartKey]) && !empty($_SESSION[$cartKey])) {
                            // Thực hiện đặt hàng nếu giỏ hàng không trống
                            $orderId = add_order($_SESSION['user']['id']);
            
                            // Hiển thị thông báo "Đơn hàng của quý khách đang chờ duyệt, vui lòng đợi trong giây lát"
                            header("Location: index.php?mod=order&act=status");
                        } else {
                            echo "Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm vào giỏ hàng trước khi đặt hàng.";
                        }
                    }
                }
            }
            
            
            

            include_once 'view/template_head.php';
            include_once 'view/page_check_out.php';
            include_once 'view/template_footer.php';
            break;


        default:
            #code...
            break;
    }
}
?>