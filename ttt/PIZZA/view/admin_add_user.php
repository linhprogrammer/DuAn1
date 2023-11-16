<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Thêm tài khoản</h2>
        <form method="post">
          <div class="mb-3">
            <label for="hoten" class="form-label">Tên tài khoản</label>
            <input type="text" class="form-control" name="hoten">
          </div>
          <div class="mb-3">
            <label for="hinhanh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="anh">
          </div>
          <div class="mb-3">
            <label for="sdt" class="form-label">SĐT</label>
            <input type="number" class="form-control" name="sdt">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="quyen" class="form-label">Quyền</label>
            <input type="text" class="form-control" name="quyen">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Thêm tài khoản</button>
        </form>
      </div>
    </div>
  </div>
</form>