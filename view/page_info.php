<form action="" method="post" enctype="multipart/form-data">
    <div class="info">
        <div class="container">
            <h2>Thông tin tài khoản</h2>
            <div class="account">
                <div class="col-lg-3 col-md-3">
                    <div class="avatar">
                        <img src="upload/avatar/<?= $data['info']['hinhanh'] ?>" alt="" name="hinhanh">
                        <input type="file" name="hinhanh" value="Thay ảnh"></input>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="user">
                        <form action="">
                            <div class="hoten">
                                <label>Họ và Tên:</label>
                                <input type="text" value="<?= $data['info']['hoten'] ?>" name="hoten" id="hoten">
                            </div>
                            <div class="sdt">
                                <label>Số Điện Thoại:</label>
                                <input type="text" value="<?= $data['info']['sodienthoai'] ?>" name="sodienthoai"
                                    id="sdt"></input>
                            </div>
                            <div class="email">
                                <label>Email:</label>
                                <input type="text" value="<?= $data['info']['email'] ?>" name="email" id="email">
                            </div>
                            <fieldset class="address-frame">
                                <legend>Địa chỉ</legend>

                                <div class="diachi">
                                    <label>Địa chỉ:</label>

                                    <div>
                                        <span>Tỉnh: </span>
                                        <span>
                                            <?php echo !empty($data['info']['tinh']) ? $data['info']['tinh'] : 'Bạn chưa chọn tỉnh'; ?>
                                        </span> <br>

                                        <span>Quận/Huyện: </span>
                                        <span>
                                            <?php echo !empty($data['info']['huyen']) ? $data['info']['huyen'] : 'Bạn chưa chọn huyện'; ?>
                                        </span> <br>

                                        <span>Phường/Xã: </span>
                                        <span>
                                            <?php echo !empty($data['info']['xa']) ? $data['info']['xa'] : 'Bạn chưa chọn xã'; ?>
                                        </span> <br>
                                    </div>

                                    <!-- Add a button to trigger the address editing section -->
                                    <input type="button" value="Thay đổi địa chỉ" name="thaydoidiachi"
                                        onclick="toggleAddressSection()">

                                    <!-- Address editing section initially hidden -->
                                    <div id="diachiSection" style="display: none;">
                                        <label>Địa chỉ:</label>

                                        <div>
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
                                </div>
                            </fieldset>







                            <div class="password-change-frame">
                                <div class="matkhau">
                                    <label>Mật Khẩu:</label>
                                    <input type="button" value="Thay đổi mật khẩu" id="showForm">
                                </div>

                                <div id="passwordChangeForm" style="display: none;">
                                    <label>Mật khẩu cũ:</label>
                                    <input type="password" id="oldPassword" name="matkhaucu"> <br>

                                    <label>Mật khẩu mới:</label>
                                    <input type="password" id="newPassword" name="matkhaumoi"> <br>

                                    <label>Xác nhận mật khẩu mới:</label>
                                    <input type="password" id="confirmPassword" name="matkhau"> <br>

                                    <input type="submit" value="Lưu thay đổi" name="submit1"
                                        onclick="savePasswordChanges()">
                                </div>
                            </div>

                            <div class="gioitinh">
                                <label>Giới tính:</label>
                                <div>
                                    <select id="gioitinh" name="gioitinh">
                                        <option value="Nam" <?= ($data['info']['gioitinh'] == 'Nam') ? 'selected' : '' ?>>
                                            Nam</option>
                                        <option value="Nữ" <?= ($data['info']['gioitinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ
                                        </option>
                                        <option value="Khác" <?= ($data['info']['gioitinh'] == 'Khác') ? 'selected' : '' ?>>Khác</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <?php if (isset($thongbao)): ?>
                                    <div class="alert alert-warning">
                                        <?= $thongbao ?>
                                    </div>
                                <?php endif;
                                unset($thongbao); ?>
                                <a href=""><input type="button" value="Xem trạng thái đơn hàng"></input></a>
                                <input type="submit" value="Lưu thay đổi" name="submit">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<a href="index.php?mod=user&act=home&id=<?= $data ['info']['matk'] ?>"><input type="button" value="Về trang chủ"></a>



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
    .address-frame {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }

    .password-change-frame {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        width: 300px;
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