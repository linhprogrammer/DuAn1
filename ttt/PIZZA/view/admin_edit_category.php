<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Sửa danh mục</h2>
        <form method="post">
          <div class="mb-3">
            <label for="tensp" class="form-label">Tên danh mục</label>
            <input  value="<?= $data['dm']['tendm'] ?>"   type="text" class="form-control" name="tendm">
          </div>
          <div class="mb-3">
            <label for="anh" class="form-label">Hình ảnh</label>
            <img src="upload/category/<?= $data['dm']['hinhanh'] ?>" style="width:100px" alt="">
            <input type="file" class="form-control" name="hinhanh">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Sửa danh mục</button>
        </form>
      </div>
    </div>
  </div>
</form>