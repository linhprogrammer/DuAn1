<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <!-- <div id="carouselExample" class="carousel slide my-3 ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Banner_Dong_Doi_890x396px-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Banner_Guinness_2024_890x396px.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Banner_Khai_Truong_NS_Lotte_HN__890x396px-01__2_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Banner_mua_he_khong_ten_890x396px.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Banner_Vui_Den_Truong_890x396px-01.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->

    <div class="row">
      <!-- <div class="col-md-3">
        <form action="" method="get" class="mb-3">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nhập tựa sách cần tìm" >
            <button class="btn btn-primary" type="submit" id="search">Tìm</button>
          </div>
        </form>
        <ul class="list-group mb-3">
          <li class="list-group-item active" aria-current="true">Sách đọc nhiều</li>
          <li class="list-group-item">1. Đắc nhân tâm</li>
          <li class="list-group-item">2. Tuổi trẻ dáng giá bao nhiêu?</li>
          <li class="list-group-item">3. Bí quyết không ăn mà vẫn sống</li>
          <li class="list-group-item">4. Sắc đẹp ngàn cân</li>
        </ul>
      </div> -->
      <!-- <div class="col-md-9"> -->
        <h2>Đăng ký</h2>
        <form method="post">
        <div class="mb-3">
            <label for="hoten" class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="hoten">
          </div>
          <div class="mb-3">
            <label for="sdt" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="sdt">
          </div>
        <?php if(isset($thongbao2)): ?>
            <div class="alert alert-warning">
                <?= $thongbao2 ?>
            </div>
        <?php endif; unset($thongbao2); ?>
          <div class="mb-3">
            <label for="matkhau" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="matkhau">
          </div>
        </form>
      <!-- </div> -->
    </div>
    <button type="submit" name="submit" class="btn btn-secondary my-3">Đăng ký</button>
</form>

