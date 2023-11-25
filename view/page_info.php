<div class="info">
    <div class="container">
            <h2>Thông tin tài khoản</h2>
            <div class="account">
                <div class="col-lg-3 col-md-3">
                    <div class="avatar">
                        <img src="template/img/avatar.jpg" alt="">
                        <input type="button" value="Thay ảnh"></input>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="user">
                        <form action="">
                            <div class="hoten">
                                <label>Họ và Tên:</label>
                                <input type="text" value="<?= $data ['info']['hoten'] ?>" id="hoten">
                            </div>
                            <div class="sdt">
                                <label>Số Điện Thoại:</label>
                                <input type="text" value="<?= $data ['info']['sodienthoai'] ?>" id="sdt"></input>
                            </div>
                            <div class="email">
                                <label>Email:</label>
                                <input type="text" value="<?= $data ['info']['email'] ?>" id="email">
                            </div>
                            <div class="diachi">
                                <label>Địa chỉ:</label>
                                <div>
                                    <select id="city">
                                        <option value="" selected>Chọn tỉnh thành</option>           
                                    </select>
                                            
                                    <select id="district">
                                        <option value="" selected>Chọn quận huyện</option>
                                    </select>

                                    <select id="ward">
                                        <option value="" selected>Chọn phường xã</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="gioitinh">
                                <label>Giới tính:</label>
                                <div>
                                    <input type="radio" id="radioNam" name="gioitinh" checked>
                                    <label for="radioNam">Nam</label>
                                </div>
                            
                                <div>
                                    <input type="radio" id="radioNu" name="gioitinh">
                                    <label for="radioNu">Nữ</label>
                                </div>
                            
                                <div>
                                    <input type="radio" id="radioKhac" name="gioitinh">
                                    <label for="radioKhac">Khác</label>
                                </div>
                            </div>
                            
                            <div class="matkhau">
                                <label>Mật Khẩu:</label>
                                <input type="button" value="Thay đổi mật khẩu" id="showForm">
                            </div>

                            <div>
                                <a href=""><input type="button" value="Xem trạng thái đơn hàng"></input> </a>
                                <input type="submit" value="Lưu thay đổi">
                            </div>

                    </form>
                </div>
            </div>
        </div>
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
    