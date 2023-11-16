<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Sửa tài khoản</h2>
        <form method="post">
          <div class="mb-3">
            <label for="hoten" class="form-label">Tên tài khoản</label>
            <input  value="<?= $data['tk']['hoten'] ?>" type="text" class="form-control" name="hoten">
          </div>
          <div class="mb-3">
            <label for="anh" class="form-label">Hình ảnh</label>
            <img src="upload/avatar/<?= $data['tk']['anh'] ?>" style="width:100px" alt="">
            <input type="file" class="form-control" name="anh">
          </div>
          <div class="mb-3">
            <label for="sdt" class="form-label">SDT</label>
            <input  value="<?= $data['tk']['sdt'] ?>" type="number" class="form-control" name="sdt">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input  value="<?= $data['tk']['email'] ?>" type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="spnoibat" class="form-label">Quyền</label>
            <select class="form-select" name="quyen">
              <option value="1" selected>Quản lý</option>
              <option value="0">khách hàng</option>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Sửa danh mục</button>
        </form>
      </div>
    </div>
  </div>
</form>