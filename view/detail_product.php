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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
    background-color: #C5221F; /* Set a background color */
    color: #ffffff; /* Set text color */
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    box-shadow: 0px -5px 5px -5px #333; /* Add shadow for separation from content */
}

.total-price-section p {
    margin: 0; /* Remove default margin for the paragraph inside the total price section */
}

#totalPriceDisplay {
    font-weight: bold; /* Make the total price text bold */
    font-size: 18px; /* Increase font size for better visibility */
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
                <a href="" class="navbar-brand p-0">
                    <img src="template/img/logo1.png" alt="Logo" style="transform: scale(1.8);">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Trang Chủ</a>
                        <div class="nav-item dropdown">
                            <a href="menu.html" class="nav-item nav-link">Thực Đơn</a>
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
                        <a href="service.html" class="nav-item nav-link">Dịch Vụ</a>
                        <a href="index.php?mod=page&act=about" class="nav-item nav-link">Về Chúng Tôi</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined">
                                account_circle
                                </span></a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?mod=user&act=signup" class="dropdown-item">Đăng Ký</a>
                                <a href="index.php?mod=user&act=login" class="dropdown-item">Đăng Nhập</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined">
                            shopping_cart
                            </span></a>
                    </div>
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
        </div>
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
                        <div class="size">
    <input type="radio" id="radio1" name="size" data-price="<?= $data['sp']['sizenho'] ?>">
    <label for="radio1">Nhỏ</label>

    <input type="radio" id="radio2" name="size" data-price="<?= $data['sp']['sizevua'] ?>" checked>
    <label for="radio2">Vừa</label>

    <input type="radio" id="radio3" name="size" data-price="<?= $data['sp']['sizelon'] ?>">
    <label for="radio3">Lớn</label>
</div>

<div class="product__details__quantity">
    <div class="quantity">
        <input type="number" value="1" min="1" id="quantityInput">
    </div>
</div>

<div class="product__details__price" id="productPrice">
    <!-- Display the initial price, assuming it's based on the default size -->
    <?= $data['sp']['sizevua'] ?>
</div>

                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <form action="" method="post">
                            <div class="h2-mota">
                                <p class="h2-mau">Ngon hơn khi ăn kèm</p>
                                <div>
                                    <!-- detail -->
                                    <?php foreach ($data['sp2'] as $spphu): ?>
    <?php if ($spphu['phanloai'] == $data['sp']['madm'] && $spphu['soluong'] > 0): ?>
        <div class="them">
            <img src="upload/product_extra/<?= $spphu['hinhanhshow'] ?>" width="150px" alt="">
            <p class="mo-ta-them"><?= $spphu['tensp'] ?></p>
            <p class="gia-them"><?= $spphu['gia'] ?> </p>
            <div class="quantity">
                <input type="button" class="select-quantity-btn" value="Chọn" onclick="toggleQuantity(this)">
                <div class="pro-qty">
                    <div class="quantity">
                        <input type="number" value="1" min="1" onchange="updatePrice(this, <?= $spphu['gia'] ?>)">
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>



                                    <!--  -->
                                    <!--  -->
                                    <div class="total-price-section">
    <p>Total Price: <span id="totalPriceDisplay">0 đ</span></p>
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
                <h6><a href="index.php?mod=product&act=detail&id=<?= $sp1['masp'] ?>"><?= $sp1['tensp'] ?></a></h6>
                <h5><?= $sp1['giakm'] ?></h5>
            </div>
        </div>
    </div>
    <script>
    const sizeInputs = document.querySelectorAll('input[name="size"]');
    const quantityInput = document.getElementById('quantityInput');
    const productPrice = document.getElementById('productPrice');
    const totalPriceDisplay = document.getElementById('totalPriceDisplay');
    let mainProductPrice = parseFloat('<?= $data['sp']['sizevua'] ?>');
    let totalExtraPrice = 0;

    sizeInputs.forEach(input => {
        input.addEventListener('change', function () {
            mainProductPrice = parseFloat(this.getAttribute('data-price'));
            updateTotalPrice();
        });
    });

    quantityInput.addEventListener('input', function () {
        updateTotalPrice();
        // Ensure the currency symbol 'đ' is always displayed after changing the quantity
        this.value = formatPrice(this.value);
    });

    function updateTotalPrice() {
        const quantity = parseInt(quantityInput.value.replace(/[^\d]/g, '')) || 1;
        const mainProductTotalPrice = quantity * mainProductPrice;
        const total = mainProductTotalPrice + totalExtraPrice;

        productPrice.textContent = formatPrice(mainProductTotalPrice);
        totalPriceDisplay.textContent = formatPrice(total);
    }

    $(document).ready(function () {
        // Set the default size to "Vừa"
        $("input[name='size'][value='sizevua']").prop("checked", true);
        updatePrice();

        // Handle size change event
        $("input[name='size']").change(function () {
            updatePrice();
        });

        // Handle quantity change event
        $("#quantityInput").change(function () {
            updatePrice();
        });

        // Function to update the displayed price
        function updatePrice() {
            var selectedSize = $("input[name='size']:checked").data("price");
            var quantity = $("#quantityInput").val().replace(/[^\d]/g, '') || 1;

            // Calculate the total price
            var mainProductTotalPrice = selectedSize * quantity;

            // Display the updated price
            $("#productPrice").text(formatPrice(mainProductTotalPrice));
            updateTotalPrice();
        }
    });

    function toggleQuantity(button) {
        var quantityDiv = button.parentNode.querySelector('.pro-qty');

        if (quantityDiv.style.display === 'none' || quantityDiv.style.display === '') {
            quantityDiv.style.display = 'block';
            button.style.display = 'none';
        } else {
            quantityDiv.style.display = 'none';
            button.style.display = 'block';
        }
    }

    function updatePrice(input, gia) {
        var quantity = input.value;
        var giaElem = input.closest('.them').querySelector('.gia-them');

        var updatedGia = gia * quantity;
        giaElem.textContent = formatPrice(updatedGia);

        // Update total extra price
        totalExtraPrice = 0;
        $(".pro-qty input").each(function () {
            totalExtraPrice += ($(this).val() * $(this).closest('.them').find('.gia-them').data('price'));
        });

        updateTotalPrice();
    }

    // Function to format the price with 'đ'
    function formatPrice(price) {
        return price.toLocaleString();
    }
</script>



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