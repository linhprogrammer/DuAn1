<form action="" method="post" enctype="multipart/form-data">
    <style>
        .ghichu {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .ghichu h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .ghichu p {
            color: #888;
            font-size: 14px;
        }

        .ghichu textarea{
            width: 100%;
            padding: 10px;
            height: 150px;
            text-align: left;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            line-height: 1.5;
            resize: vertical;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin-left: 20px;
        }

        table, td {
            border: 1px solid #ddd;
        }

         td {
            padding: 8px;
            text-align: left;
        }
        .hoadon {
            border: 1px solid #ccc;
            padding: 20px;
            width: 90%;
            margin-left: 20px;
        }

        .hoadon p {
            margin: 10px 0;
        }

        


        .hoadon input[type="button"] {
            padding: 10px 20px;
            height: 80px;
            width: 100%;
            background-color:  #C5221F;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 26px;
        }

        .hoadon input[type="button"]:hover {
            background-color: #000000;
        }



    </style>
    <div class="container">
        <h2 style="color: #C5221F;">Xì Food</h2>
        <h3>Thông tin thanh toán</h3>
    </div>
    <div class="container" style="display: flex;">
    <div class="col-lg-7 col-md-7">
    <div>
        <div class="hoten">
            <input type="text" placeholder="Họ Và Tên" value="<?= isset($data['info']['hoten']) ? $data['info']['hoten'] : '' ?>" name="hoten" id="hoten">
        </div>
        <div class="gop" style="width: 100%; display: flex;">
            <div class="email" style="width: 58%; margin-right: 20px;">
                <input type="text" placeholder="Email" value="<?= isset($data['info']['email']) ? $data['info']['email'] : '' ?>" name="email" id="email">
            </div>
            <div class="sdt" style="width: 40%;">
                <input type="text" placeholder="Số Điện Thoại" value="<?= isset($data['info']['sodienthoai']) ? $data['info']['sodienthoai'] : '' ?>" name="sodienthoai" id="sdt">
            </div>
        </div>
    </div>

                    <div class="diachi" style="width: 100%;">
    <label>Địa chỉ:</label>

    <div>
    <?php if (!isset($_SESSION['user_id'])) : ?>
        <span>Chúng tôi chưa có địa chỉ của bạn.</span>
    <?php else : ?>
        <span>Tỉnh: </span>
        <span><?php echo !empty($data['info']['tinh']) ? $data['info']['tinh'] : 'Bạn chưa chọn tỉnh'; ?></span> <br>

        <span>Quận/Huyện: </span>
        <span><?php echo !empty($data['info']['huyen']) ? $data['info']['huyen'] : 'Bạn chưa chọn huyện'; ?></span> <br>

        <span>Phường/Xã: </span>
        <span><?php echo !empty($data['info']['xa']) ? $data['info']['xa'] : 'Bạn chưa chọn xã'; ?></span> <br>

        <?php
        // Kiểm tra nếu không có địa chỉ
        if (empty($data['info']['tinh']) || empty($data['info']['huyen']) || empty($data['info']['xa'])) {
            echo '<span style="color: red;">Bạn chưa chọn địa chỉ, vui lòng chọn!</span>';
        }
        ?>
    <?php endif; ?>
</div>

<button type="submit" name="submit">Reset địa chỉ</button>
<div class="chon-diachi" style="width: 100%;">
    <select id="city" name="tinh" style="width: 32%; margin-right: 10px;">
        <option value="" selected>Chọn tỉnh thành</option>
        <?php
        // Assuming $data['info']['tinh'] contains the list of provinces
        foreach ($data['info']['tinh'] as $province) {
            echo '<option value="' . $province . '"';
            if ($province === $data['info']['selected_tinh']) {
                echo ' selected';
            }
            echo '>' . $province . '</option>';
        }
        ?>
    </select>

    <select id="district" name="huyen" style="width: 32%; margin-right: 10px;">
        <option value="" selected>Chọn quận huyện</option>
        <?php
        // Assuming $data['info']['huyen'] contains the list of districts
        foreach ($data['info']['huyen'] as $district) {
            echo '<option value="' . $district . '"';
            if ($district === $data['info']['selected_huyen']) {
                echo ' selected';
            }
            echo '>' . $district . '</option>';
        }
        ?>
    </select>

    <select id="ward" name="xa" style="width: 32%;">
        <option value="" selected>Chọn phường xã</option>
        <?php
        // Assuming $data['info']['xa'] contains the list of wards
        foreach ($data['info']['xa'] as $ward) {
            echo '<option value="' . $ward . '"';
            if ($ward === $data['info']['selected_xa']) {
                echo ' selected';
            }
            echo '>' . $ward . '</option>';
        }
        ?>
    </select>
</div>

                    <div class="ghichu">
                        <h3>Thông tin bổ sung</h3>
                        <p>Ghi chú đơn hàng (Tuỳ chọn)</p>
                        <textarea name="sonha" id="ghichu" placeholder="Ghi chú về đơn hàng, ví dụ: Địa chỉ cụ thể để người giao hàng có thể biết được"></textarea>
                    </div>

  
            </div>
        </div>
        <div class="col-lg-5 col-md-5">
        <table>
    <tbody>
        <?php
        $totalAmount = 0;
        $cartKey = $_SESSION['user']['id_cart'];
        foreach ($_SESSION[$cartKey] as $index => $item) {
            $totalAmount += $item['total_price'];
            ?>
            <tr>
                <td><img src="<?= getImageSource($item) ?>" width="100px" alt=""></td>
                <td class="text-start">
                    <?php
                    if (isset($item['type'])) {
                        if ($item['type'] == 'main') {
                            echo $item['name'] . '<p>Kích thước: ' . $item['size'] . '</p>'
                            .'<p>Số lượng : ' . $item['quantity']  .'</p>';
                        } elseif ($item['type'] == 'extra') {
                            echo $item['name']  .'</p>';
                        }
                    }
                    // Display the hidden field for product code
                    echo '<input type="hidden" name="product_code[]" value="' . $item['masp'] . '">';
                    ?>
                </td>
                <td><?= $item['total_price'] ?> đ</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

    <div class="hoadon">
        <div class="left" style="float: left; font-size: 26px;">
            <p>Tổng:</p>
        </div>
        <div class="right" style="float: right; font-size: 26px; text-align: center;">
            <p><?= number_format($totalAmount, 0, ',', '.') ?> đ</p>
        </div>
        <input type="submit" name="submit1" value="Đặt Hàng">
    </div>
</div>

    
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
    

</body>
</html>
    </form>