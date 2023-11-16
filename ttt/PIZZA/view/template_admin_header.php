<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEAR PIZZA</title>
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 p-0 bg-dark collapse collapse-horizontal show" style="min-height:100vh" id="openMenu">
        <strong class="text-center d-block p-3 text-white">TRANG QUẢN LÝ</strong>
        <div class="list-group list-group-item-secondary m-3">
          <a href="#" class="list-group-item list-group-item-action ">
            Tổng quan
          </a>
          <a href="admin.php?mod=user&act=admin" class="list-group-item list-group-item-action">Sản phẩm</a>
          <a href="admin.php?mod=category&act=category" class="list-group-item list-group-item-action">Danh mục</a>
          <a href="admin.php?mod=user&act=user" class="list-group-item list-group-item-action">Tài khoản</a>
        </div>
      </div>
      <div class="col-md p-0">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
          <div class="container-fluid">
            <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="collapse" data-bs-target="#openMenu" aria-expanded="false" aria-controls="openMenu">
            <i class="fa-solid fa-arrow-right-arrow-left"></i>
            </button>
            <a class="navbar-brand" href="index.php?mod=page&act=home"><img src="upload/product/logo_chữ_trắng.png" width="120px" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xin chào, Phương
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?mod=page&act=home">Xem trang chủ</a></li>
                    <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>