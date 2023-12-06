<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chào Mừng Đến Với Xì Food</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php?mod=user&act=home" class="navbar-brand p-0">
                    <img src="upload/logo.png" alt="Logo" style="transform: scale(1.8);">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav py-0 pe-4">
                        <a href="index.php?mod=page&act=home" class="nav-item nav-link active">Trang Chủ</a>
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
                                <a href="index.php?mod=user&act=signup" class="dropdown-item">Xin chào <?= $data ['info']['hoten'] ?> </a>
                                <a href="index.php?mod=page&act=info&id=<?= $data ['info']['matk'] ?>" class="dropdown-item">Thông tin tài khoản</a>
                                <a href="#" class="dropdown-item">Đơn hàng</a>
                                <a href="index.php?mod=user&act=logout" class="dropdown-item">Đăng xuất</a>
                            </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined" style="font-size: 38px; margin-left: 10px;">shopping_cart</span></a>
                </div>
            </nav>

            <div class="container-xxl py-5 hero-header mb-5">
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <div id="slideBanner" class="slideBanner" >
            <div class="carousel-banner">
                <div class="carousel-item active">
                    <img src="upload/banner/banner1.png" style="width: 1320px; height: 720px;" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner2.png" style="width: 1320px; height: 720px;" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner3.png" style="width: 1320px; height: 720px;" alt="Banner 3">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner4.png" style="width: 1320px; height: 720px;" alt="Banner 4">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner5.png" style="width: 1320px; height: 720px;" alt="Banner 5">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner6.png" style="width: 1320px; height: 720px;" alt="Banner 6">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner7.png" style="width: 1320px; height: 720px;" alt="Banner 7">
                </div>
                <div class="carousel-item">
                    <img src="upload/banner/banner8.png" style="width: 1320px; height: 720px;" alt="Banner 8">
                </div>
            </div>
        </div>

        <style>
            .slideBanner {
                position: relative;
                overflow: hidden;
                width: 100%;
                height: 720px; /* Thay đổi kích thước banner theo ý muốn */
                /* Thêm các thuộc tính CSS khác tùy thuộc vào thiết kế của bạn */
            }

            .carousel-banner {
                display: flex;
                transition: transform 0.5s ease-in-out; /* Chuyển đổi di chuyển */
            }

            .carousel-item {
                flex: 0 0 100%;
                opacity: 0; /* Bạn có thể ẩn tất cả các item ban đầu */
                transition: opacity 0.5s ease-in-out; /* Chuyển đổi opacity */
            }

            .carousel-item.active {
                opacity: 1; /* Hiển thị banner có lớp active */
            }
        </style>

        <script>
            const bannerItems = document.querySelectorAll('.carousel-item');
            let currentIndex = 0;
            function nextBanner() {
                bannerItems[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % bannerItems.length;
                bannerItems[currentIndex].classList.add('active');
            }

            // Tự động chuyển banner sau mỗi khoảng thời gian (ở đây là 3 giây)
            setInterval(nextBanner, 3000);



        </script>



            <!-- Menu Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">SẢN PHẨM CÓ LƯỢT MUA NHIỀU</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach ($data2['sanphamnoibat'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center;"><?=$sp['tensp']?></p>
                                                    <p style="display: flex; flex-wrap: wrap; font-size: 16px; padding: 30px; margin: auto; text-align: center; color: gray"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 28px; margin: auto; text-align: center; font-weight: 500;"><?=$sp['sizelon']?> ₫</p>
                                                <p style=" color: #464545; font-size: 18px; margin: auto; text-align: center; text-decoration: line-through;"><?=$sp['giakm']?> ₫</p>
                                                <div class="nut-them">
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <?php endforeach; ?>

                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    <!-- Menu End -->



        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-danger fw-normal">Thực Đơn</h5>
                    <h1 class="mb-5">Món Ăn Được Yêu Thích</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" style="text-decoration: none;" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-danger"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0 text-danger">Bữa Sáng</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" style="text-decoration: none;" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-danger"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0 text-danger">Bữa Trưa</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" style="text-decoration: none;" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-danger"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0 text-danger">Bữa Tối</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                            <?php foreach($data['sp'] as $sp): ?>
                                <?php if ($sp['meal'] == 1 && $sp['soluong'] > 0): ?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                        <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none;">  <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 150px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-danger"><?=$sp['tensp']?></span></a>
                                                    <span class="text-danger"><?=$sp['giakm']?> VNĐ</span>
                                                </h5>
                                                <small class="fst-italic"><?=$sp['motangan']?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($data['sp'] as $sp): ?>
                                <?php if ($sp['meal'] == 2 && $sp['soluong'] > 0): ?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                        <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none;">  <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 150px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-danger"><?=$sp['tensp']?></span></a>
                                                    <span class="text-danger"><?=$sp['giakm']?> VNĐ</span>
                                                </h5>
                                                <small class="fst-italic"><?=$sp['motangan']?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($data['sp'] as $sp): ?>
                                <?php if ($sp['meal'] == 3 && $sp['soluong'] > 0): ?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                        <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none;">  <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 150px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span class="text-danger"><?=$sp['tensp']?></span></a>
                                                    <span class="text-danger"><?=$sp['giakm']?> VNĐ</span>
                                                </h5>
                                                <small class="fst-italic"><?=$sp['motangan']?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->







        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-danger fw-normal">Đóng Góp Ý Kiến</h5>
                    <h1 class="mb-5">Bình Luận</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>

                        <div class=" align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="upload/avatar/avatar.jpg" style="margin: auto; width: 150px;">
                            <div class="ps-3">
                                <h5 class="mb-1" style=" margin: auto; font-size: 28px; font-weight: 600;">Nguyễn Văn Tèo</h5>
                                <small style="padding-bottom: 30px; margin: auto; font-size: 18px;">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho tiện. Mọi người nên thử Gà Tứ vị cho tiện</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>

                        <div class="align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="upload/avatar/avatar.jpg" style=" margin: auto; width: 150px;">
                            <div class="ps-3">
                                <h5 class="mb-1" style=" margin: auto; font-size: 28px; font-weight: 600;">Ngộ Không</h5>
                                <small style="padding-bottom: 30px; margin: auto; font-size: 18px;">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho tiện. Mọi người nên thử Gà Tứ vị cho tiện</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>

                        <div class=" align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="upload/avatar/avatar.jpg" style=" margin: auto; width: 150px;">
                            <div class="ps-3">
                                <h5 class="mb-1" style=" margin: auto; font-size: 28px; font-weight: 600;">Trư Bát Giới</h5>
                                <small style="padding-bottom: 30px; margin: auto; font-size: 18px;">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho tiện. Mọi người nên thử Gà Tứ vị cho tiện</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>

                        <div class=" align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="upload/avatar/avatar.jpg" style=" margin: auto; width: 150px;">
                            <div class="ps-3">
                                <h5 class="mb-1" style=" margin: auto; font-size: 28px; font-weight: 600;">Đường Tăng</h5>
                                <small style="padding-bottom: 30px; margin: auto; font-size: 18px;">10 điểm không có nhưng. Gà mềm thơm ngon. Mình hay ăn combo cho tiện. Mọi người nên thử Gà Tứ vị cho tiện</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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
                                                      
                                
