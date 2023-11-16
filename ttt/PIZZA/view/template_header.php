<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bear Pizza </title>
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  </head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php?mod=page&act=home"><img src="upload/product/logo_chữ_trắng.png" width="120px" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?mod=page&act=home">TRANG CHỦ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              THỰC ĐƠN
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">PIZZA</a></li>
              <li><a class="dropdown-item" href="#">COMBO</a></li>
              <li><a class="dropdown-item" href="#">KHAI VỊ</a></li>
              <li><a class="dropdown-item" href="#">ĐỒ UỐNG</a></li>
            </ul>
          </li>
          <li>
          <a class="nav-link active" aria-current="page" href="#">BÀI VIẾT</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 ">
          <!-- <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Giỏ sách</a>
          </li> -->
          <!-- <li>
            <input type="text" class="form-control" placeholder="Tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TÀI KHOẢN
            </a>
            <ul class="dropdown-menu end-0"  style="left:auto">
              <li><a class="dropdown-item" href="?mod=user&act=signup">Đăng ký</a></li>
              <li><a class="dropdown-item" href="?mod=user&act=login">Đăng nhập</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#" >
              <i class="fa-solid fa-cart-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>