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
                        <div class="size">
                            <input type="radio" id="radio1" name="size">
                            <label for="radio1">Nhỏ</label>

                            <input type="radio" id="radio2" name="size">
                            <label for="radio2">Vừa</label>

                            <input type="radio" id="radio3" name="size">
                            <label for="radio3">Lớn</label>
                        </div>
                        <div class="product__details__price">
                            <?= $data['sp']['giakm'] ?>
                        </div>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <form action="" method="post">
                            <div class="h2-mota">
                                <p class="h2-mau">Ngon hơn khi ăn kèm</p>
                                <div>
                                    <!-- detail -->
                                    <div class="them">
                                        <img src="img/product/Cơm Gà Sốt Phô Mai.png" width="120px" height="120px"
                                            alt="">
                                        <p class="mo-ta-them">Cá Nugget (3 Miếng)</p>
                                        <p class="gia-them">+25.000 đ</p>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="them">
                                        <img src="img/product/Cơm Bò Trứng Phô Mai.png" width="120px" height="120px"
                                            alt="">
                                        <p class="mo-ta-them">Cá Nugget (3 Miếng)</p>
                                        <p class="gia-them">+25.000 đ</p>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="them">
                                        <img src="img/product/Cơm Teri LChicken.png" width="120px" height="120px"
                                            alt="">
                                        <p class="mo-ta-them">Cá Nugget (3 Miếng)</p>
                                        <p class="gia-them">+25.000 đ</p>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="them">
                                        <img src="img/product/Combo Burger Double Double.png" width="120px"
                                            height="120px" alt="">
                                        <p class="mo-ta-them">Cá Nugget (3 Miếng)</p>
                                        <p class="gia-them">+25.000 đ</p>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="so-luong">
                                        <h5>Số Lượng:</h5>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                        <div class="heart">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="nut-them">
                                        <a href="#" class="btn btn-danger">Thêm vào giỏ hàng</a>
                                        <a href="#" class="btn btn-danger">Mua ngay</a>
                                    </div>
                                </div>
                        </form>
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
            <div class="product__item__pic set-bg" >
                <img src="upload/product/<?= $sp1['hinhanhshow'] ?>" alt="">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#"><?= $sp1['tensp'] ?></a></h6>
                <h5><?= $sp1['giakm'] ?></h5>
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