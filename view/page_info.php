<div class="container">
        <h2>Thông tin tài khoản</h2>
        <div class="account">
            <div class="col-lg-3 col-md-3">
                <div class="avatar">
                    <img src="img/avatar.jpg" alt="">
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
                            <input type="text" value="<?= $data ['info']['matkhau'] ?>" id="matkhau">
                        </div>
                        <input type="submit" value="Lưu thay đổi">
                    </form>
                </div>
            </div>
        </div>
    </div>
