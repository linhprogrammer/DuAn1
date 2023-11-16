<div class="container">
          <a href="admin.php?mod=category&act=add" class="btn btn-success float-end">Thêm danh mục</a>
          <h2 class="my-3">Danh mục sản phẩm</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>STT</th>
                <th class="text-start">Danh mục sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th class="text-end">Hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data['dmsp'] as $dm): ?>
              <tr>
                <td><?=$dm['madm']?></td>
                <td class="text-start"><?=$dm['tendm']?></td>
                <td><img src="upload/product/<?=$dm['hinhanh']?>" class="rounded-3" style="width: 32px;height: 32px;"></td>
                <td><?=$dm['soluongsp']?></td>
                <td class="text-end">
                <a href="admin.php?mod=category&act=edit&id=<?=$dm['madm']?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="admin.php?mod=category&act=delete&id=<?=$dm['madm']?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>