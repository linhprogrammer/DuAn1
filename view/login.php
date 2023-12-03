<form action="" method="post" enctype="multipart/form-data">
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>XÌ FOOD</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="template/dist/style.css">

</head>
<body>
<!-- partial:index.partial.html -->


<div class="screen-1">
  <div class="sdt">
    <label for="sdt">SĐT</label>
    <div class="sec-2">
      <ion-icon name="call-outline"></ion-icon>
      <input type="number" name="sodienthoai" placeholder="0123456789"/>
    </div>
  </div>
  <div class="password">
    <label for="password">Mật khẩu</label>
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="password" name="matkhau" placeholder="············"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <a href="index.php?mod=user&act=home&id=<?= $data['info']['matk'] ?>"><button class="login" name="submit">Đăng nhập</button></a>
  <?php if(isset($thongbao)): ?>
                            <div class="alert alert-warning">
                            <?= $thongbao ?>
                        </div>
                        <?php endif; unset($thongbao); ?>


  <div class="footer"><span><a href="index.php?mod=user&act=signup">Đăng kí</a></span><span>Quên mật khẩu ?</span></div>
</div>
<!-- partial -->
  
</body>
</html>
</form>
