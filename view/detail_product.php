<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chi tiết</title>



    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="template/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="template/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="template/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="template/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="template/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="template/css/style1.css" type="text/css">
</head>

<body>
    <style>
        .total-price-section {
            background-color: #C5221F;
            /* Set a background color */
            color: #ffffff;
            /* Set text color */
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0px -5px 5px -5px #333;
            /* Add shadow for separation from content */
        }

        .total-price-section p {
            margin: 0;
            /* Remove default margin for the paragraph inside the total price section */
        }

        #totalPriceDisplay {
            font-weight: bold;
            /* Make the total price text bold */
            font-size: 18px;
            /* Increase font size for better visibility */
        }

        .quantity .pro-qty {
            display: none;
        }

        .quantity.show-qty .pro-qty {
            display: block;
        }

        .product__details__quantity {
            margin-top: 20px;
        }

        .quantity {
            position: relative;
        }

        .quantity input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
            margin: 0 5px;
            font-size: 16px;
        }

        /* Increase and Decrease buttons */
        .quantity input[type="number"]::-webkit-inner-spin-button,
        .quantity input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .quantity input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        /* Style for increase and decrease buttons */
        .quantity .quantity-controls {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }

        .quantity .quantity-controls button {
            cursor: pointer;
            padding: 5px;
            border: none;
            background-color: #ddd;
            border-radius: 0 5px 5px 0;
        }

        .quantity .quantity-controls button:first-child {
            border-radius: 5px 0 0 5px;
        }
    </style>

 
       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php?mod=page&act=home" class="navbar-brand p-0">
                    <img src="upload/logo.png" alt="Logo" style="transform: scale(1.8);">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav py-0 pe-4">
                        <a href="index.php?mod=user&act=home" class="nav-item nav-link active">Trang Chủ</a>
                        <div class="nav-item dropdown">
                            <a href="index.php?mod=page&act=menu" class="nav-item nav-link">Thực Đơn</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Gà Rán</a>
                                <a href="#" class="dropdown-item">Mì Ý</a>
                                <a href="#" class="dropdown-item">Hamburger</a>
                                <a href="#" class="dropdown-item">Đồ Uống</a>
                                <a href="#" class="dropdown-item">Đồ Ăn Phụ</a>
                                <a href="#" class="dropdown-item">Tráng Miệng</a>
                                <a href="#" class="dropdown-item">ComBo</a>
                            </div>
                        </div>
                        <a href="service.html" class="nav-item nav-link">Bài Viết</a>
                        <a href="index.php?mod=page&act=about" class="nav-item nav-link">Về Chúng Tôi</a>
                    </div>
                    <nav class="navbar bg-body-tertiary" style="margin-left: auto;">
                        <div class="container-fluid">
                            <form action="index.php" method="get" class="d-flex" role="search">
                                <input class="form-control me-2" name="keyword" style="width: 300px;" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><ion-icon style="margin-top: 5px;" name="search-outline"></ion-icon></button>
                                <input type="hidden" name="mod" value="page">
                                <input type="hidden" name="act" value="search">
                            </form>
                        </div>
                    </nav>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined"  style="font-size: 38px; margin-left: 10px;">
                            account_circle
                            </span></a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?mod=user&act=signup" class="dropdown-item">Xin chào  <?= $_SESSION['user']['username'] ?> </a>
                                <a href="index.php?mod=page&act=info&id=<?= $_SESSION['user']['id'] ?>" class="dropdown-item">Thông tin tài khoản</a>
                                <a href="#" class="dropdown-item">Đơn hàng</a>
                                <a href="index.php?mod=user&act=logout" class="dropdown-item">Đăng xuất</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="index.php?mod=page&act=cart"  class="nav-item nav-link"><span class="material-symbols-outlined" style="font-size: 38px; margin-left: 10px;">
                            shopping_cart
                            </span></a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?mod=order&act=status" class="dropdown-item">Đơn hàng</a>
                                <a href="index.php?mod=page&act=info&id=" class="dropdown-item">Lịch sử mua hàng</a>
                            </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->



    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="upload/product/<?= $data['sp']['hinhanhshow'] ?>" alt="">
                        </div>

                        <div class="product__details__pic__slider owl-carousel">
                            <?php foreach ($data['img'] as $img): ?>
                                <img data-imgbigurl="upload/product/<?= $img['images'] ?>"
                                    src="upload/product/<?= $img['images'] ?>" alt="">
                            <?php endforeach; ?>
                        </div>

                        <div>
                            <p>
                                <?= $data['sp']['motachitiet'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>
                            <?= $data['sp']['tensp'] ?>
                        </h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>4.5/5</span>
                        </div>
                        <form id="myForm" action="" method="post">
                            <div class="size">
                                <label for="size_option">Chọn kích thước:</label>
                                <select name="size_option" id="size_option">
                                    <option value="size nhỏ" data-price="<?= $data['sp']['sizenho'] ?>">Nhỏ</option>
                                    <option value="size vừa" data-price="<?= $data['sp']['sizevua'] ?>" selected>Vừa
                                    </option>
                                    <option value="size lớn" data-price="<?= $data['sp']['sizelon'] ?>">Lớn</option>
                                </select>
                            </div>

                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <label for="quantityInput">Số lượng:</label>
                                    <input type="number" name="quantity" value="1" min="1" id="quantityInput">
                                </div>
                            </div>

                            <div class="product__details__price" id="productPrice">
                                <!-- Display the initial price, assuming it's based on the default size -->
                                <?= $data['sp']['sizevua'] ?>
                            </div>

                            <!-- Hidden input fields for the main product details -->
                            <input type="hidden" name="main_product_name" value="<?= $data['sp']['tensp'] ?>">
                            <input type="hidden" name="main_product_size" value="<?= $data['sp']['sizevua'] ?>">
                            <input type="hidden" name="main_product_price" value="<?= $data['sp']['sizevua'] ?>">
                            <input type="hidden" name="main_product_quantity" value="1">
                            <input type="hidden" name="main_product_image" value="<?= $data['sp']['hinhanhshow'] ?>">
                            <input type="hidden" name="main_product_masp" value="<?= $data['sp']['masp'] ?>">



                            <div class="h2-mota">
                                <p class="h2-mau">Ngon hơn khi ăn kèm</p>
                                <div>
                                    <?php foreach ($data['sp2'] as $key => $spphu): ?>
                                        <?php if ($spphu['phanloai'] == $data['sp']['madm'] && $spphu['soluong'] > 0): ?>
                                            <div class="them">
                                                <img src="upload/product_extra/<?= $spphu['hinhanhshow'] ?>" width="150px" alt="">
                                                <p class="mo-ta-them"><?= $spphu['tensp'] ?></p>
                                                <p id="gia_extra_<?= $key ?>" class="gia-them" data-price="<?= $spphu['gia'] ?>"><?= $spphu['gia'] ?></p>
                                                <div class="quantity">
                                                    <input type="number" name="extra_product_quantity[<?= $key ?>]" value="0" min="0" class="quantityInput" id="extraProductQuantityInput_<?= $key ?>">
                                                </div>
                                                <!-- Hidden input fields for each additional product -->
                                                <input type="hidden" name="extra_product_name[<?= $key ?>]" value="<?= $spphu['tensp'] ?>">
                                                <input type="hidden" name="extra_product_price[<?= $key ?>]" value="<?= $spphu['gia'] ?>">
                                                <input type="hidden" name="extra_product_image[<?= $key ?>]" value="<?= $spphu['hinhanhshow'] ?>">
                                                <input type="hidden" name="extra_product_masp[<?= $key ?>]" value="<?= $spphu['masp'] ?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            </div>
                            <button type="button" class="btn btn-danger" onclick="updatePrice()">Cập nhật giá</button>
                            <div class="nut-them">
                            <button type="submit" class="btn btn-danger" name="submit1">Thêm vào giỏ hàng</button>




                                <a href="#" class="btn btn-danger">Mua ngay</a>
                            </div>
                            </div>
                        </form>
<script>

    function updatePrice() {
        // Update main product price
        var sizeOption = document.getElementById('size_option');
        var selectedOption = sizeOption.options[sizeOption.selectedIndex];
        var mainProductPrice = parseFloat(selectedOption.getAttribute('data-price'));
        var mainProductQuantity = document.getElementById('quantityInput').value;

        // Calculate main product total price
        var mainProductTotalPrice = mainProductPrice * mainProductQuantity;

        document.getElementById('productPrice').innerText = mainProductTotalPrice;
        // Update the hidden input for main_product_price
        document.getElementsByName('main_product_price')[0].value = mainProductTotalPrice;

        // Update additional products prices and quantities
        var totalExtraPrice = 0;
    }
</script>





            </div>
        </div>

        </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Binh Luan  -->
    <section class="product-details spad">
        <div class="container">
            <h3>Bình Luận</h3>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="user-comment">
                        <div>
                            <img src="img/avatar.jpg" width="150px" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="comment">
                            <p class="user">Nguyễn Văn Tèo</p>
                            <p class="date">21/11/2023</p>
                            <p class="comment-user">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho
                                tiện. Mọi người nên thử Gà Tứ vị cho tiện</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="user-comment">
                        <div>
                            <img src="img/avatar.jpg" width="150px" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="comment">
                            <p class="user">Nguyễn Văn Tèo</p>
                            <p class="date">21/11/2023</p>
                            <p class="comment-user">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho
                                tiện. Mọi người nên thử Gà Tứ vị cho tiện</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="xem-them">Xem Thêm</a>
            </div>
        </div>
    </section>
    <!-- Binh Luan End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Các sản phẩm có thể bạn sẽ quan tâm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                // Limit the number of products to 4
                $limitedProducts = array_slice($data['sp1'], 0, 4);

                // Loop through the limited set of products
                foreach ($limitedProducts as $sp1):
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg">
                                <img src="upload/product/<?= $sp1['hinhanhshow'] ?>" alt="">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="index.php?mod=product&act=detail&id=<?= $sp1['masp'] ?>">
                                        <?= $sp1['tensp'] ?>
                                    </a></h6>
                                <h5>
                                    <?= $sp1['giakm'] ?>
                                </h5>
                            </div>
                        </div>
                    </div>



                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->



    <!-- Js Plugins -->
    <script src="template/js/jquery-3.3.1.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/jquery.nice-select.min.js"></script>
    <script src="template/js/jquery-ui.min.js"></script>
    <script src="template/js/jquery.slicknav.js"></script>
    <script src="template/js/mixitup.min.js"></script>
    <script src="template/js/owl.carousel.min.js"></script>
    <script src="template/js/main1.js"></script>
    <script src="https://kit.fontawesome.com/592deca63b.js" crossorigin="anonymous"></script>


</body>

</html>