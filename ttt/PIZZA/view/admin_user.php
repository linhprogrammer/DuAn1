<div class="container">
          <a href="admin.php?mod=user&act=add" class="btn btn-success float-end">Thêm tài khoản</a>
          <h2 class="my-3">Tài khoản</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>STT</th>
                <th class="text-start">Họ tên</th>
                <th>Ảnh</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Quyền</th>
                <th class="text-end">Hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data['user'] as $tk): ?>
              <tr>
                <td><?=$tk['matk']?></td>
                <td class="text-start"><?=$tk['hoten']?></td>
                <td><img src="upload/avatar/<?=$tk['anh']?>" class="rounded-3" style="width: 32px;height: 32px;"></td>
                <td><?=$tk['sdt']?></td>
                <td><?=$tk['email']?></td>
                <td><?=$tk['quyen']?></td>
                <td class="text-end">
                <a href="admin.php?mod=user&act=edit&id=<?=$tk['matk']?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="admin.php?mod=user&act=delete&id=<?=$tk['matk']?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>