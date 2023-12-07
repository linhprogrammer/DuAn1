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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<style>
    /* Reset CSS cho Bootstrap */
    .table th,
    .table td {
        text-align: center;
    }

       h2 {
        text-align: center;
        margin-bottom: 28px;
        color: #333;
        font-family: 'Your Font', sans-serif;
    }

    tbody {
        min-height: 500px;
    }

    .text-start {
        font-size: 18px;
        font-weight: 500;
        color: #555;
        font-family: 'Your Font', sans-serif;
    }

    .text-start p {
        font-size: 14px;
        margin: 5px 0;
        color: #777;
        font-family: 'Your Font', sans-serif;
    }

    .gia {
        font-size: 22px;
        font-weight: 500;
        color: #009688;
        font-family: 'Your Font', sans-serif;
    }

    .gia p {
        font-size: 16px;
        font-weight: 500;
        color: #555;
        font-family: 'Your Font', sans-serif;
    }

    /* Thêm kiểu CSS để căn giữa các ô */
    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    /* Thêm kiểu CSS cho nút và chữ "Trạng thái" */
    .status-btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .status-label {
        font-size: 16px;
        font-weight: 500;
        color: #555;
        margin-right: 10px;
        font-family: 'Your Font', sans-serif;
    }

    /* Thêm kiểu CSS cho chỗ bên phải chữ "Chờ duyệt" */
    .right-content {
        text-align: right;
    }
</style>

<div class="container py-5">
    <h2 class="mb-4">Trạng thái đơn hàng</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
                <button class="btn btn-warning" onclick="location.reload()">Cập nhật trạng thái mới nhất</button>
            </thead>
            <tbody>
                <?php foreach ($data['ds'] as $sp): ?>
                    <tr>
                        <td><?= $sp['madonhang'] ?></td>
                        <td><?= $sp['ngaydat'] ?></td>
                        <td><?= $sp['tongtien'] ?>đ</td>
                        <td>
                        <span class="badge <?= ($sp['trangthai'] === 'Đã duyệt') ? 'badge-success' : (($sp['trangthai'] === 'Chờ duyệt') ? 'badge-warning' : 'badge-default') ?>">
    <?= $sp['trangthai'] ?>
</span>


                        </td>
                        <td>
                            <a href="index.php?mod=order&act=statussp&id=<?= $sp['madonhang'] ?>" class="btn btn-primary">Xem</a>
                        </td>
                       
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>