<form action="" method="post" enctype="multipart/form-data">
  <!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>XÌ FOOD</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  </head>
  <body>
  <style>
      .screen-1 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .matkhau,
    .matkhaunew,
    .xacnhan {
      margin-bottom: 20px;
    }

    .sec-2 {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 5px;
    }

    .sec-2 ion-icon {
      margin-right: 10px;
    }

    .sec-2 input {
      border: none;
      outline: none;
      flex: 1;
    }

    .show-hide {
      cursor: pointer;
    }

    input[type="button"],
    input[type="submit"] {
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      background-color: #C5221F;
      color: white;
    }

    input[type="button"]:hover,
    input[type="submit"]:hover {
      background-color: #C5221F;
      
    }

    input[type="button"]:focus,
    input[type="submit"]:focus {
      outline: none;
    }

  
  </style>
  
  <!-- partial:index.partial.html -->
  <div class="screen-1">
    <div class="container">
      <h2>Thay Đổi Mật Khẩu</h2>
      <div class="matkhau">
        <label for="password">Mật khẩu hiện tại</label>
        <div class="sec-2">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="text" name="matkhau" placeholder="............."/>
        </div>
      </div>
      <div class="matkhaunew">
        <label for="password">Mật khẩu mới</label>
        <div class="sec-2">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="number" name="matkhaunew" placeholder="............."/>
        </div>
      </div>
      <div class="xacnhan">
        <label for="password">Xác nhận mật khẩu mới</label>
        <div class="sec-2">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input class="pas" type="password" name="matkhau" placeholder="············"/>
          <ion-icon class="show-hide" name="eye-outline"></ion-icon>
        </div>
      </div>
      <div style="display: flex;">

        <input type="button" style="display: flex; width: 200px; margin-right: 50px;" value="Thay đổi mật khẩu">
        <input type="submit" style="display: flex; width: 200px; margin-left: 80px;" value="Lưu thay đổi" name="submit">
    </div>
    </div>
  </div>
  <!-- partial -->
    
  </body>
  </html>
  </form>
  