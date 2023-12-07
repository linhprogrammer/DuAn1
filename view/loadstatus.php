<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        h2 {
            text-align: center;
            margin-bottom: 28px;
        }
        
        table{
            margin-top: 130px;
        }

        tbody {
            min-height: 500px;
        }

        tr{
            border: 1px solid black;
        }
    
        .text-start {
            font-size: 26px; 
            font-weight: 500;
        }
    
        .text-start p {
            font-size: 14px;
            margin: 5px 0;
        }
    
        .gia {
            font-size: 26px; 
            font-weight: 500;
        }

        .status {
            width: 800px;
            margin: auto;
            height: 30px;
        }

        .icons {
            display: flex;
            justify-content: space-between;
            font-size: 40px;
        }

        .headset {
            color: #FBBC04;
        }

        .motorcycle {
            color: #D9D9D9;
        }

        .check {
            color: #D9D9D9;
        }

        div span {
            font-size: 26px;
            font-weight: 500;
            color: #FBBC04;
        }

        .loading {
            width: 100%;
            height: 20px;
            background-color: rgb(206, 206, 206);
            position: relative;
            margin-top: 10px;
        }

        .progress {
            width: 0%;
            height: 100%;
            background-color: transparent;
            position: absolute;
            top: 0;
            left: 0;
            transition: width 1s ease; 
        }

        .hoadon {
            border: 1px solid #ccc;
            padding: 20px;
            width: 100%;
            height: 280px;
        }

        .hoadon p {
            margin: 10px 0;
        }

        .nut{
            display: flex;
            justify-content: space-between;
        }

        .nut input[type="button"] {
            width: 250px;
            height: 80px;
            margin-top: 20px;
            padding: 10px 20px;
            background-color:  #C5221F;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 26px;
            border-radius: 20px;
        }

        .nut input[type="button"]:hover {
            background-color: #000000;
        }

    </style>
    

    <div class="container-xxl py-5 " style="margin-top: 40px;">
        <h2>Trạng thái đơn hàng</h2>
        <div class="status">
            <div class="icons">
                <div class="headset"><i class="fa-solid fa-headset"></i></div>
                <div class="motorcycle"><i class="fa-solid fa-motorcycle"></i></div>
                <div class="check"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <div class="loading">
                <div class="progress"></div>
            </div>
            <?php
// Khai báo một biến để lưu trạng thái
$trangThaiDaHienThi = false;

foreach ($data['ds'] as $sp) :
    // Chỉ hiển thị trạng thái một lần
    if (!$trangThaiDaHienThi) :
        $trangthai = $sp['trangthai'];
        echo '<span id="trangthai">' . $trangthai . '</span>';
        $trangThaiDaHienThi = true;
    endif;
endforeach;
?>

<script>
// Check trangthai and show alert if it's "daduyet"
var trangthaiElement = document.getElementById('trangthai');
if (trangthaiElement && trangthaiElement.innerHTML.trim() === 'daduyet') {
    alert('Đơn hàng đã được duyệt');
    // Redirect to index.php?mod=order&act=status
    window.location.href = 'index.php?mod=order&act=status';
} else {
    // Reload the page every 2 seconds if trangthai is not "daduyet"
    setTimeout(function () {
        location.reload();
    }, 2000);
}
</script>



        </div>
        
        <form action="" method="post">
            <table class="table text-center align-middle">
                <tbody>
                <?php foreach($data['ds'] as $sp): ?>
                    <tr>
                        <td><img src="img/product/Burger Bulgogi.png" width="150px" alt=""></td>
                        <td class="text-start">Tên sản phẩm: </td>
                        <td class="gia"><?=$sp['tensp']?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="hoadon">
                <div class="left" style="float: left; font-size: 26px;">
                  
                    <p>Tổng:</p>
                </div>
                <div class="right" style="float: right; font-size: 26px; text-align: center;">
                   
                    <p><?=$sp['tongtien']?></p>
                    
                </div>
            </div>
            <div class="nut">
                <input type="button" value="Đặt Hàng">
                <a href="#"><input type="button" value="Quay về trang chủ"></a>
            </div>
        </form>

    </div>
    <script src="https://kit.fontawesome.com/592deca63b.js" crossorigin="anonymous"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const progress = document.querySelector(".progress");
        const icons = document.querySelector(".icons");
        const trangthaiElement = document.getElementById('trangthai');
        
        function updateProgressBar(percent) {
            if (percent <= 50) {
                progress.style.backgroundColor = "#FBBC04";
            } else if (percent <= 100) {
                progress.style.backgroundColor = "#34A853";
            }
            progress.style.width = percent + "%";
        }

        function updateIcons(loadIcons) {
            const headsetIcon = icons.querySelector(".headset i");
            const motorcycleIcon = icons.querySelector(".motorcycle i");
            const checkIcon = icons.querySelector(".check i");

            if (loadIcons >= 50 && loadIcons < 100) {
                headsetIcon.style.color = "#FBBC04";
                motorcycleIcon.style.color = "#C5221F";
                checkIcon.style.color = "#D9D9D9";
            } else if (loadIcons === 100) {
                headsetIcon.style.color = "#FBBC04";
                motorcycleIcon.style.color = "#C5221F";
                checkIcon.style.color = "#34A853";
            } else {
                headsetIcon.style.color = "#D9D9D9";
                motorcycleIcon.style.color = "#D9D9D9";
                checkIcon.style.color = "#D9D9D9";
            }
        }

        let loadIcons = 0;
        let percent = 0;

        if (trangthaiElement && trangthaiElement.innerHTML.trim() === 'daduyet') {
            // If trangthai is "daduyet," load 100%
            loadIcons = 100;
            percent = 100;
        } else {
            // If trangthai is "choduyet" or other values, load 50%
            loadIcons = 50;
            percent = 50;
        }

        const intervalProgressBar = setInterval(function () {
            if (percent > 100) {
                clearInterval(intervalProgressBar);
            } else {
                updateProgressBar(percent);
                percent += 10;
            }
        }, 100);

        const intervalIcons = setInterval(function () {
            if (loadIcons > 100) {
                clearInterval(intervalIcons);
            } else {
                updateIcons(loadIcons);
                loadIcons += 50;
            }
        }, 500);
    });
</script>
