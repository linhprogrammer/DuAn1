
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
                                                      
                                
