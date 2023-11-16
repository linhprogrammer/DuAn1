<div class="container">
          <a href="admin.php?mod=product&act=add" class="btn btn-success float-end">Thêm sản phẩm</a>
          <h2 class="my-3">Sản phẩm</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>STT</th>
                <th>Danh mục</th>
                <th class="text-start">Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Đơn giá</th>
                <th>giá khuyến mãi</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th class="text-end">Hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data['dssp'] as $sp): ?>
                <tr>
                  <td><?=$sp['masp']?></td>
                  <td><?=$sp['tendm']?></td>
                  <td><?=$sp['tensp']?></td>
                  <td><img src="upload/product/<?=$sp['anh']?>" class="rounded-3" style="width: 32px;height: 32px;"></td>
                  <td class="text-start"><?=$sp['dongia']?></td>
                  <td><?=$sp['giakhuyenmai']?></td>
                  <td class="text-start"><?=$sp['mota']?></td>
                  <td><?=$sp['soluong']?></td>
                  <td class="text-end">
                    <a href="admin.php?mod=product&act=edit&id=<?=$sp['masp']?>"><button class="btn btn-warning">Sửa</button></a>
                    <a href="admin.php?mod=product&act=delete&id=<?=$sp['masp']?>"><button class="btn btn-danger">Xóa</button></a>
                  </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>