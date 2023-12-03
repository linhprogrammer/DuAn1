 
 
 
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php?mod=page&act=home" class="navbar-brand p-0">
                    <img src="upload/logo.png" alt="Logo" style="transform: scale(1.8);">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav py-0 pe-4">
                        <a href="index.php?mod=page&act=home" class="nav-item nav-link ">Trang Chủ</a>
                        <div class="nav-item dropdown">
                            <a href="index.php?mod=page&act=menu" class="nav-item nav-link">Thực Đơn</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Gà Rán</a>
                                <a href="#" class="dropdown-item">Mì Ý</a>
                                <a href="#" class="dropdown-item">Hamburger</a>
                                <a href="#" class="dropdown-item">Đồ Uống</a>
                                <a href="#" class="dropdown-item">Đồ Ăn Phụ</a>
                                <a href="#" class="dropdown-item">Tráng Miệng</a>
                                <a href="#" class="dropdown-item">ComBo</a>
                            </div>
                        </div>
                        <a href="service.html" class="nav-item nav-link">Bài Viết</a>
                        <a href="index.php?mod=page&act=about" class="nav-item nav-link">Về Chúng Tôi</a>
                    </div>
                    <nav class="navbar bg-body-tertiary" style="margin-left: auto;">
                        <div class="container-fluid">
                            <form action="index.php" method="get" class="d-flex" role="search">
                                <input class="form-control me-2" name="keyword" style="width: 300px;" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><ion-icon style="margin-top: 5px;" name="search-outline"></ion-icon></button>
                                <input type="hidden" name="mod" value="page">
                                <input type="hidden" name="act" value="search">
                            </form>
                        </div>
                    </nav>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link active"><span class="material-symbols-outlined"  style="font-size: 38px; margin-left: 10px;">
                            account_circle
                            </span></a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?mod=user&act=signup" class="dropdown-item">Xin chào <?= $data ['info']['hoten'] ?> </a>
                                <a href="index.php?mod=page&act=info&id=<?= $data ['info']['matk'] ?>" class="dropdown-item">Thông tin tài khoản</a>
                                <a href="#" class="dropdown-item">Đơn hàng</a>
                                <a href="index.php?mod=user&act=logout" class="dropdown-item">Đăng xuất</a>
                            </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><span class="material-symbols-outlined" style="font-size: 38px; margin-left: 10px;">shopping_cart</span></a>
                </div>
            </nav>

            <div class="container-xxl py-5 hero-header mb-5">
            </div>
        </div>
        <!-- Navbar & Hero End -->


<form action="" method="post" enctype="multipart/form-data">
    <div class="info">
        <div class="container">

            <div class="account">
                <div class="col-lg-4 col-md-4">
                    <div class="avatar">
                        <img src="upload/avatar/<?= $data['info']['hinhanh'] ?>" alt="" name="hinhanh">
                        <label for="changeAvatar" class="change-avatar-btn">Sửa ảnh</label>
                        <input type="file" id="changeAvatar" name="hinhanh" style="display: none;">
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="user">
                        <h2>Thông tin tài khoản</h2>
                        <form action="">
                            <div class="cot-1" style="display: flex;">
                                <div class="hoten col-md-7">
                                    <input type="text" value="<?= $data['info']['hoten'] ?>" name="hoten" id="hoten" placeholder="Họ và Tên">
                                </div>
                                <div class="gioitinh col-md-5">
                                    <div>
                                        <select id="gioitinh" name="gioitinh" aria-placeholder="Giới tính">

                                            <option value="Nam" <?= ($data['info']['gioitinh'] == 'Nam') ? 'selected' : '' ?>>
                                                Nam</option>
                                            <option value="Nữ" <?= ($data['info']['gioitinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ
                                            </option>
                                            <option value="Khác" <?= ($data['info']['gioitinh'] == 'Khác') ? 'selected' : '' ?>>Khác</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cot-2" style="display: flex;">
                                <div class="email col-md-7">
                                    <input type="text" value="<?= $data['info']['email'] ?>" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="sdt col-md-5" style="width: 220px;  border-radius: 4px; margin-left: 20px; font-size: 16px;">
                                    <input type="text" value="<?= $data['info']['sodienthoai'] ?>" name="sodienthoai" id="sdt" placeholder="Số Điện Thoại"></input>
                                </div>
                                

                            </div>
                            <fieldset class="address-frame">

                                <div class="diachi">
                                    <input type="text" value="<?= $data['info']['diachi'] ?>" name="diachi" id="diachi" placeholder="Địa chỉ">
                                    <div class="select-boxes">
                                        <select id="city" name="tinh">
                                            <option value="Chọn Tỉnh" selected>
                                                <?= $data['info']['tinh'] ?>
                                            </option>
                                            <!-- Add other options as needed -->
                                        </select>

                                        <select id="district" name="huyen">
                                            <option value="Chọn Quận/Huyện" selected>
                                                <?= $data['info']['huyen'] ?>
                                            </option>
                                            <!-- Add other options as needed -->
                                        </select>

                                        <select id="ward" name="xa">
                                            <option value="Chọn Phường/Xã" selected>
                                                <?= $data['info']['xa'] ?>
                                            </option>
                                            <!-- Add other options as needed -->
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="ghichu">
                                <h3 style="text-align: start;">Thông tin bổ sung</h3>
                                <p style="text-align: start;">Ghi chú đơn hàng (Tuỳ chọn)</p>
                                <textarea style="width: 575px; height: 150px;" name="ghichu" id="ghichu" placeholder="Ghi chú về đơn hàng, ví dụ: Thời gian hay chỉ dẫn giao hàng chi tiết hơn."></textarea>
                            </div>

                            <div style="display: flex;">
                                <?php if (isset($thongbao)): ?>
                                    <div class="alert alert-warning">
                                        <?= $thongbao ?>
                                    </div>
                                <?php endif;
                                unset($thongbao); ?>

                                <input type="button" style="display: flex; width: 200px; margin-right: 100px;" value="Thay đổi mật khẩu">
                                <input type="submit" style="display: flex; width: 200px; margin-left: 100px;" value="Lưu thay đổi" name="submit">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    const host = "https://provinces.open-api.vn/api/";
    var callAPI = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data, "city");
            });
    }
    callAPI('https://provinces.open-api.vn/api/?depth=1');
    var callApiDistrict = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.districts, "district");
            });
    }
    var callApiWard = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.wards, "ward");
            });
    }

    var renderData = (array, select) => {
        let row = ' <option disable value="">Chọn</option>';
        array.forEach(element => {
            row += `<option data-id="${element.code}" value="${element.name}">${element.name}</option>`
        });
        document.querySelector("#" + select).innerHTML = row
    }

    $("#city").change(() => {
        callApiDistrict(host + "p/" + $("#city").find(':selected').data('id') + "?depth=2");
        printResult();
    });
    $("#district").change(() => {
        callApiWard(host + "d/" + $("#district").find(':selected').data('id') + "?depth=2");
        printResult();
    });
    $("#ward").change(() => {
        printResult();
    })

    var printResult = () => {
        if ($("#district").find(':selected').data('id') != "" && $("#city").find(':selected').data('id') != "" &&
            $("#ward").find(':selected').data('id') != "") {
            let result = $("#city option:selected").text() +
                " | " + $("#district option:selected").text() + " | " +
                $("#ward option:selected").text();
            $("#result").text(result)
        }

    }

</script>
<script>
    document.getElementById("showForm").addEventListener("click", function () {
        // Toggle the visibility of the password change form
        var form = document.getElementById("passwordChangeForm");
        form.style.display = (form.style.display === "none") ? "block" : "none";
    });

    function savePasswordChanges() {
        // Add your logic to save password changes here
        var oldPassword = document.getElementById("oldPassword").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        // Add logic to handle password change (e.g., using AJAX to send data to the server)
        console.log("Old Password: " + oldPassword);
        console.log("New Password: " + newPassword);
        console.log("Confirm Password: " + confirmPassword);

        // You can add AJAX or form submission logic here
    }

</script>
<script>
    function toggleAddressSection() {
        var addressSection = document.getElementById('diachiSection');
        addressSection.style.display = (addressSection.style.display === 'none') ? 'block' : 'none';
    }


</script>
<style>
    .avatar {
        position: relative;
        display: inline-block;
    }

    .avatar img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #ccc;
    }

    .change-avatar-btn {
        margin-top: 10px;
        background-color: #C5221F;
        color: white;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 20px;
    }

    input[type="file"] {
        display: none;
    }

    .user {
        border: 2px solid #ccc; 
        padding: 20px;
        border-radius: 10px; 
        width: 100%; 
        margin: 0 auto; 
    }

    .address-frame {
        margin-bottom: 10px;
    }

    .password-change-frame {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
        width: 550px;
    }

    .select-boxes {
    display: flex;
    }

    .select-boxes select {
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }


    .matkhau,
    #passwordChangeForm {
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }

    #passwordChangeForm {
        display: none;
    }
</style>