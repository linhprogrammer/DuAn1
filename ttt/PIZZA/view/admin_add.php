<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Thêm sản phẩm</h2>
        <form method="post">
          <div class="mb-3">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="tensp">
          </div>
          <div class="mb-3">
            <label for="anh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="anh">
          </div>
          <div class="mb-3">
            <label for="dongia" class="form-label">Đơn giá</label>
            <input type="number" class="form-control" name="dongia">
          </div>
          <div class="mb-3">
            <label for="giakhuyenmai" class="form-label">Giá khuyến mãi</label>
            <input type="number" class="form-control" name="giakhuyenmai">
          </div>
          <div class="mb-3">
            <label for="mota" class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="mota">
          </div>
          <div class="mb-3">
            <label for="spnoibat" class="form-label">Sản phẩm nổi bật</label>
            <select class="form-select" name="sanphamnoibat">
              <option value="1" selected>Hiển thị</option>
              <option value="0">Không</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="soluong" class="form-label">Số lượng</label>
            <input type="number" class="form-control" name="soluong">
          </div>
          <div class="mb-3">
            <label for="madm" class="form-label">Danh mục sản phẩm</label>
            <select class="sa-select2 form-select" name="madm">
              <?php foreach ($data['dssp'] as $dm): ?>
                <option value="<?= $dm['madm'] ?>"><?= $dm['tendm'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
      </div>
    </div>
  </div>
</form>