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
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


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

            <div class="container-xxl bg-light py-5 hero-header mb-5">
            </div>
        </div>
        <!-- Navbar & Hero End -->
