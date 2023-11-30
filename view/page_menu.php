
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="template/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>
           <!-- Navbar & Hero Start -->
           <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="template/img/logo-rem.png" alt="Logo" style="transform: scale(1.8);">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
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
                            <form action="index.php" method="get" class="d-flex" role="search">
                                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                <input type="hidden" name="mod" value="page">
                                <input type="hidden" name="act" value="search">
                            </form>
                        </div>
                    </nav>
                </div>
            </nav>

            <div class="container-xxl bg-dark hero-header mb-5">
                    <div class="container-xxl py-5 bg-dark hero-header mb-5">
                    </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

  <!-- Menu Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center  fw-normal">Thực đơn</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <div class="ps-3">
                                    <!-- <small class="text-body"></small> -->
                                    <h6 class="mt-n1 mb-0">Gà Rán</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Mỳ Ý</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Hamburger</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Đồ Uống</h6>
                                </div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Đồ Ăn Phụ</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-6">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Tráng Miệng</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-7">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Combo</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;">Chicken Burger</p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;">Ipsum ipsum clita erat amet dolor justo diam</p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;">$115</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Menu End -->