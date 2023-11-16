
  <div class="container">
    <div id="carouselExample" class="carousel slide my-3 ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="template/Banner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="template/Banner quảng cáo.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="template/Banner bear.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="template/Banner đặt hàng.png" class="d-block w-100" alt="...">
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
    </div>

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
        <!-- Ruột nổi bật -->
        <h2>Sản phẩm nổi bật</h2>
        <div class="row my-3">
        <?php foreach ($data['dssp'] as $sp): ?>
          <div class="col-sm-3 my-3">
            <a href="index.php?mod=page&act=detail&id=<?=$sp['masp']?>">
              <div class="card">
                <img src="upload/product/<?=$sp['anh']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <a style="text-decoration: none; font-weight: bold;" href="index.php?mod=page&act=detail&id=<?=$sp['masp']?>" class="card-title no-decoration"><?=$sp['tensp']?></a> 
                  <p class="card-text"><?=$sp['dongia']?></p>
                  <div class="d-flex mb-3">
                    <div class="text-warning mr-2">
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star-half-alt"></small>
                      <small class="far fa-star"></small>
                    </div>
                  </div>
                  <a href="#" class="btn btn-dark">Thêm giỏ hàng</a>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>

        <!-- <h2>Sách mới</h2>
        <div class="row">
        <?php foreach($data['dssp'] as $sp): ?>
          <div class="col-sm-3">
            <div class="card" >
              <img src="upload/product/<?=$sp['anh']?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?=$sp['tensp']?></h5>
                <p class="card-text"><?=$sp['dongia']?></p>
                <a href="#" class="btn btn-dark">Thêm giỏ hàng</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?> -->
        
        <!-- <div class="row">
          <div class="col-sm-3">
            <div class="card" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div><div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div><div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card mb-3" >
              <img src="template/truyen-doc-cho-be-truoc-gio-di-ngu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Truyện đọc cho bé trước giờ ngủ</h5>
                <p class="card-text">68.000đ</p>
                <a href="#" class="btn btn-primary">Mượn</a>
              </div>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
      <div class="container text-center">
  <div class="row">
    <div class="col">
      <img src="upload/Pizza-Hut-Menu-1.jpg" alt="" srcset="" style="width: 100%;">
    </div>
    <div class="col">
      <img src="upload/img_2.webp" alt="" srcset="" style="width: 100%;">
    </div>
  </div>
</div>

    </div>

 
