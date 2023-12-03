
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
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
                        <a href="index.php?mod=page&act=home" class="nav-item nav-link ">Trang Chủ</a>
                        <div class="nav-item dropdown">
                            <a href="index.php?mod=page&act=menu" class="nav-item nav-link ">Thực Đơn</a>
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
                        <a href="index.php?mod=page&act=about" class="nav-item nav-link active">Về Chúng Tôi</a>

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
                            <a href="index.php?mod=user&act=signup" class="dropdown-item ">Đăng Ký</a>
                            <a href="index.php?mod=user&act=login" class="dropdown-item ">Đăng Nhập</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined" style="font-size: 38px; margin-left: 10px;">shopping_cart</span></a>
                </div>
            </nav>

            <div class="container-xxl hero-header mb-5">
                    <div class="container-xxl py-5 hero-header mb-5">
                        <div class="container text-center my-5 pt-5 pb-4">
                            <h1 class="display-3 text-dark mb-3 animated slideInDown">Về chúng tôi</h1>
                            <nav aria-label="breadcrumb"></nav>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-6">
                            <div class="col-8" style="margin-left: 60px;">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="template/img/about-1.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-danger fw-normal">Về Chúng Tôi</h5>
                        <h1 class="mb-4">Chào Mừng Đến Với <i class="fa fa-utensils text-danger me-2"></i>XÌ Food</h1>
                        <p class="mb-4">Chúng tôi là những người trẻ đam mê với việc nấu nướng và muốn mang lại cho mọi người những món ăn ngon tiện lợi.</p>
                        <p class="mb-4">Sự hài lòng của khách hàng là niềm vui của chung tôi.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-danger px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up">5</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Năm</p>
                                        <h6 class="text-uppercase mb-0">Kinh Nghiệm</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-danger px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up">70</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Nhân Viên</p>
                                        <h6 class="text-uppercase mb-0">Chuyên Nghiệp</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-danger py-3 px-5 mt-2" href="">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-danger fw-normal">Thành viên của Xì Food</h5>
                    <h1 class="mb-5">Đầu bếp bậc thầy của chúng tôi</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="template/img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="template/img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="template/img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="template/img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <div class="container" style="display: flex;">
            <div class="col-sm-6"> 
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1385.3810439543702!2d106.62759828597359!3d10.853389333834343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1701012049067!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6">
                <div>
                    <h2 style="font-size: 90px;">XÌ FOOD</h2>
                    <p style="font-size: 28px;"> <b>Địa chỉ:</b>  Tô Ký, Tân Chánh Hiệp, Quận 12, Thành phố Hồ Chí Minh, Việt Nam</p>
                    <p style="font-size: 28px;"> <b>Tel:</b> (84-8) 5416 1072 ~ 79</p>
                    <p style="font-size: 28px;"> <b>Email:</b> cskh@xifood.vn</p>
                </div>
            </div>
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
