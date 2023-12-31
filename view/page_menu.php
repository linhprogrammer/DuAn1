
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


    <!-- Menu Start -->
       <div class="container-xxl">
            <div class="container">
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-1">
                                <div class="ps-3">
                                    <!-- <small class="text-body"></small> -->
                                    <h6 class="mt-n1 mb-0">All</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-2">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Gà Rán</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-3">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Hamburger</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-4">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Mỳ Ý</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-5">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Đồ Ăn Phụ</h6>
                                </div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-6">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Tráng Miệng</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-7">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Đồ Uống</h6>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  style="color: #C5221F; text-decoration: none;" data-bs-toggle="pill" href="#tab-8">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Combo</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" style="min-height: 700px;">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                
                                <?php foreach($data['ds'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; min-height: 40px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-2" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php foreach($data['ds1'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-3" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                                <?php foreach($data['ds2'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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
                        

                        <div id="tab-4" class="tab-pane fade show p-0 ">
                            <div class="row g-4">
                            <?php foreach($data['ds3'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-5" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php foreach($data['ds4'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-6" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php foreach($data['ds5'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-7" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php foreach($data['ds6'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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

                        <div id="tab-8" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php foreach($data['ds7'] as $sp): ?>
                                <div class="col-lg-3">
                                    <a href="index.php?mod=product&act=detail&id=<?=$sp['masp']?>" style="text-decoration: none; color: #C5221F;">
                                    <div class="card">
                                        <div class="align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?=$sp['hinhanhshow']?>" alt="" style="width: 200px; height: 200px; margin: auto; margin-top: 20px;">
                                            <div class="w-100 text-start ps-4">
                                                <h5 class="justify-content-between pb-2">
                                                    <p style="margin: auto; text-align: center; padding-bottom: 20px;"><?=$sp['tensp']?></p>
                                                    <p style="font-size: 16px; margin: auto; text-align: center;  padding-bottom: 20px;"><?=$sp['motangan']?></p>
                                                </h5>
                                                <p style=" color: #C5221F; font-size: 26px; margin: auto; text-align: center;  padding-bottom: 10px;"><?=$sp['giakm']?></p>
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