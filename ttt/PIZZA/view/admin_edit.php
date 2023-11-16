<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Sửa sản phẩm</h2>
        <form method="post">
        <div class="mb-3">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input value="<?= $data['sp']['tensp'] ?>"  type="text" class="form-control" name="tensp">
          </div>
          <div class="mb-3">
            <label for="anh" class="form-label">Hình ảnh</label>
            <img src="upload/product/<?= $data['sp']['anh'] ?>" style="width:100px" alt="">
            <input type="file" class="form-control" name="anh">
          </div>
          <div class="mb-3">
            <label for="dongia" class="form-label">Đơn giá</label>
            <input value="<?= $data['sp']['dongia'] ?>" type="number" class="form-control" name="dongia">
          </div>
          <div class="mb-3">
            <label for="giakhuyenmai" class="form-label">Giá khuyến mãi</label>
            <input value="<?= $data['sp']['giakhuyenmai'] ?>" type="number" class="form-control" name="giakhuyenmai">
          </div>
          <div class="mb-3">
            <label for="mota" class="form-label">Mô tả</label>
            <input value="<?= $data['sp']['mota'] ?>" type="text" class="form-control" name="mota">
          </div>
          <div class="mb-3">
          <label for="sanphamnoibat" class="form-label">Sản phẩm nổi bật</label>
            <select class="form-select" name="sanphamnoibat">
                <option value="0" <?= ($data['sp']['sanphamnoibat'] == 0) ? 'selected' : '' ?>>Không</option>
                <option value="1" <?= ($data['sp']['sanphamnoibat'] == 1) ? 'selected' : '' ?>>Hiển thị</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="soluong" class="form-label">Số lượng</label>
            <input value="<?= $data['sp']['soluong'] ?>" type="number" class="form-control" name="soluong">
          </div>
          <div class="mb-3">
            <label for="spnoibat" class="form-label">Danh mục sản phẩm</label>
            <select class="form-select" name="sanphamnoibat" >
                <option value="1" selected>Pizza</option>
                <option value="2">Combo</option>
                <option value="3">Khai vị</option>
                <option value="4">Đồ uống</option>
              </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Sửa sản phẩm</button>
        </form>
      </div>
    </div>
</form>

