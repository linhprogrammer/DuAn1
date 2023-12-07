<?php
function signup($hoten, $sodienthoai, $matkhau)
{
        // Validate phone number
        if (!preg_match('/^0[0-9]{9}$/', $sodienthoai)) {
            // Phone number is not valid
            return false;
        }
    
    global $conn;
    $sql = "INSERT INTO taikhoan (`hoten`, `sodienthoai`, `matkhau`, `blocked`) VALUES(:hoten, :sodienthoai, :matkhau, 0)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":sodienthoai", $sodienthoai);
    $stmt->bindParam(":matkhau", $matkhau);

    return $stmt->execute();
}


function login($sodienthoai, $matkhau){
    global $conn;
        // Validate phone number
        if (!preg_match('/^0[0-9]{9}$/', $sodienthoai)) {
            // Phone number is not valid
            return false;
        }
    
    $sql = "SELECT * FROM taikhoan WHERE sodienthoai=:sodienthoai AND matkhau=:matkhau AND blocked=0";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':sodienthoai', $sodienthoai, PDO::PARAM_STR);
    $stmt->bindParam(':matkhau', $matkhau, PDO::PARAM_STR);
    
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && !$user['blocked']) {
        return $user;
    } else {
        return null; // Hoặc có thể trả về một giá trị khác để biểu thị trạng thái đăng nhập không thành công
    }
}

function checkSDT($sodienthoai){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE sodienthoai=:sodienthoai";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":sodienthoai",$sodienthoai);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function showinfo($matk) {
    global $conn;

    $sql = "SELECT taikhoan.*, diachi.tinh, diachi.huyen, diachi.xa 
            FROM taikhoan 
            LEFT JOIN diachi ON taikhoan.matk = diachi.id_tk 
            WHERE taikhoan.matk = :matk";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':matk', $matk);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    return $stmt->fetch();
}

function get_users()
{
    global $conn;
    $sql = "SELECT * FROM taikhoan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll(); // Sử dụng fetchAll() để trả về tất cả các hàng dữ liệu
}
function add_user($hoten, $email, $matkhau, $sodienthoai, $diachi, $quyen, $hinhanh)
{
    global $conn;
    $sql = "INSERT INTO taikhoan (`hoten`, `email`, `matkhau`, `sodienthoai`, `diachi`, `quyen`, `hinhanh`)
            VALUES(:hoten, :email, :matkhau, :sodienthoai, :diachi, :quyen, :hinhanh)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":matkhau", $matkhau);
    $stmt->bindParam(":sodienthoai", $sodienthoai);
    $stmt->bindParam(":diachi", $diachi);
    $stmt->bindParam(":quyen", $quyen);
    $stmt->bindParam(":hinhanh", $hinhanh);

    $result = $stmt->execute();
    if ($_FILES['hinhanh']['error'] == 0) {
        move_uploaded_file(
            $_FILES['hinhanh']['tmp_name'],
            "upload/avatar/" . $_FILES['hinhanh']['name']
        );
    }
}
function edit_user($matk, $hoten, $email, $matkhau, $sodienthoai, $diachi, $quyen, $hinhanh)
{
    global $conn;
    $sql = "UPDATE taikhoan SET `hoten`=:hoten, `email`=:email, `matkhau`=:matkhau, `sodienthoai`=:sodienthoai, `diachi`=:diachi, `quyen`=:quyen, `hinhanh`=:hinhanh WHERE matk=:matk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":matk", $matk);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":matkhau", $matkhau);
    $stmt->bindParam(":sodienthoai", $sodienthoai);
    $stmt->bindParam(":diachi", $diachi);
    $stmt->bindParam(":quyen", $quyen);
    $stmt->bindParam(":hinhanh", $hinhanh);
    return $stmt->execute();
    //print_r($stmt->fetch());
}
function checksdt1($sodienthoai) {
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE sodienthoai = :sodienthoai";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":sodienthoai", $sodienthoai);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    // Trả về true nếu tên sản phẩm đã tồn tại, ngược lại trả về false
    return ($result !== false);
}
function get_user($id)
{
    global $conn;
    $sql = "SELECT * from taikhoan WHERE matk=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();

}
function edit_info($id, $hoten, $sodienthoai, $email, $gioitinh, $hinhanh, $tinh, $huyen, $xa)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Update product information in the taikhoan table
        $sql = "UPDATE taikhoan SET `hoten`=:hoten, `sodienthoai`=:sodienthoai, `email`=:email, 
                `gioitinh`=:gioitinh, `hinhanh`=:hinhanh WHERE matk=:matk";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":matk", $id);
        $stmt->bindParam(":hoten", $hoten);
        $stmt->bindParam(":sodienthoai", $sodienthoai);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":gioitinh", $gioitinh);
        $stmt->bindParam(":hinhanh", $hinhanh);
        $stmt->execute();

        // Update address information in the diachi table
        // Delete existing address
        $sqlDelete = "DELETE FROM diachi WHERE id_tk=:matk";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bindParam(":matk", $id);
        $stmtDelete->execute();

        // Insert new address
        $sqlInsert = "INSERT INTO diachi (`id_tk`, `tinh`, `huyen`, `xa`) VALUES(:matk, :tinh, :huyen, :xa)";
        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bindParam(":matk", $id);
        $stmtInsert->bindParam(":tinh", $tinh);
        $stmtInsert->bindParam(":huyen", $huyen);
        $stmtInsert->bindParam(":xa", $xa);
        $stmtInsert->execute();

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}
function doimatkhau($id, $matkhau)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Update password in the taikhoan table
        $sql = "UPDATE taikhoan SET `matkhau` = :matkhau WHERE matk = :matk";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":matk", $id);
        $stmt->bindParam(":matkhau", $matkhau);
        $stmt->execute();

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}
function block_user($matk) {
    global $conn;

    $sql = "UPDATE taikhoan SET blocked = 1 WHERE matk = :matk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':matk', $matk, PDO::PARAM_INT);

    try {
        $stmt->execute();
        return true; // Trả về true nếu cập nhật thành công
    } catch (PDOException $e) {
        // Xử lý lỗi nếu cần
        return false; // Trả về false nếu có lỗi
    }
}

function xoaDiaChi($id) {
    global $conn;
    // Chuẩn bị câu lệnh SQL DELETE
    $sqlDelete = "DELETE FROM diachi WHERE id_tk = :id";

    // Chuẩn bị và thực thi câu lệnh SQL
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bindParam(":id", $id);
    $stmtDelete->execute();

    // Đóng kết nối CSDL
    $conn = null;

    // Trả về true nếu xóa thành công
    return true;
}
function doiDiaChi($id, $tinh, $huyen, $xa) {
    global $conn;

    try {
        $conn->beginTransaction();

        // Delete existing address
        $sqlDelete = "DELETE FROM diachi WHERE id_tk=:matk";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bindParam(":matk", $id);
        $stmtDelete->execute();

        // Insert new address
        $sqlInsert = "INSERT INTO diachi (`id_tk`, `tinh`, `huyen`, `xa`) VALUES(:matk, :tinh, :huyen, :xa)";
        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bindParam(":matk", $id);
        $stmtInsert->bindParam(":tinh", $tinh);
        $stmtInsert->bindParam(":huyen", $huyen);
        $stmtInsert->bindParam(":xa", $xa);
        $stmtInsert->execute();

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: ".$e->getMessage();
        return false;
    }
}
function update_diachi($id, $sonha) {
    global $conn;

    try {
        // Update sonha column in the diachi table
        $sqlUpdateDiachi = "UPDATE diachi SET `sonha` = :sonha WHERE id_tk=:id";
        $stmtUpdateDiachi = $conn->prepare($sqlUpdateDiachi);
        $stmtUpdateDiachi->bindParam(":id", $id);
        $stmtUpdateDiachi->bindParam(":sonha", $sonha);
        $stmtUpdateDiachi->execute();

        return true;
    } catch (Exception $e) {
        echo "Failed to update diachi: ".$e->getMessage();
        return false;
    }
}
function add_user_in_check_out($hoten, $email, $matkhau, $sodienthoai, $tinh, $huyen, $xa, $sonha) {
    global $conn;
    $matkhau = md5($sodienthoai);
    try {
        $conn->beginTransaction();

        // Thêm thông tin người dùng vào bảng taikhoan
        $sqlInsertTaikhoan = "INSERT INTO taikhoan (`hoten`, `email`, `matkhau`, `sodienthoai`, `blocked`)
                              VALUES(:hoten, :email, :matkhau, :sodienthoai, 0)";
        $stmtInsertTaikhoan = $conn->prepare($sqlInsertTaikhoan);
        $stmtInsertTaikhoan->bindParam(":hoten", $hoten);
        $stmtInsertTaikhoan->bindParam(":email", $email);
        $stmtInsertTaikhoan->bindParam(":matkhau", $matkhau);
        $stmtInsertTaikhoan->bindParam(":sodienthoai", $sodienthoai);
        $stmtInsertTaikhoan->execute();

        // Lấy ID mới thêm vào bảng taikhoan
        $matk = $conn->lastInsertId();

        // Thêm thông tin địa chỉ vào bảng diachi và liên kết với taikhoan
        $sqlInsertDiachi = "INSERT INTO diachi (`id_tk`, `tinh`, `huyen`, `xa`, `sonha`)
                            VALUES(:id_tk, :tinh, :huyen, :xa, :sonha)";
        $stmtInsertDiachi = $conn->prepare($sqlInsertDiachi);
        $stmtInsertDiachi->bindParam(":id_tk", $matk);
        $stmtInsertDiachi->bindParam(":tinh", $tinh);
        $stmtInsertDiachi->bindParam(":huyen", $huyen);
        $stmtInsertDiachi->bindParam(":xa", $xa);
        $stmtInsertDiachi->bindParam(":sonha", $sonha);
        $stmtInsertDiachi->execute();

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: ".$e->getMessage();
        return false;
    }
}
function add_order($matk) {
    global $conn;
    try {
        $conn->beginTransaction();
        $ngaydat = date("Y-m-d H:i:s", time());
        $cartKey = isset($_SESSION['user']['id_cart']) ? $_SESSION['user']['id_cart'] : null;

        // Thêm thông tin đơn hàng vào bảng donhang
        $sqlInsertDonhang = "INSERT INTO donhang (`matk`, `trangthai`, `ngaydat`, `tongtien`)
                             VALUES(:matk, 'Chờ duyệt', :ngaydat, :tongtien)";

        $stmtInsertDonhang = $conn->prepare($sqlInsertDonhang);
        $stmtInsertDonhang->bindParam(":matk", $matk);
        $stmtInsertDonhang->bindParam(":ngaydat", $ngaydat);
        if ($cartKey && is_array($_SESSION[$cartKey])) {
            $tongtien = 0; // Khởi tạo tổng tiền
            foreach ($_SESSION[$cartKey] as $index => $item) {
                // Check nếu có 'type' và 'masp' trong $item array
                if (isset($item['type']) && isset($item['masp'])) {
                    // Kiểm tra nếu 'type' là 'main' hoặc 'extra'
                    if ($item['type'] == 'main' || $item['type'] == 'extra') {
                        // Tính tổng tiền dựa trên trường hợp 'main' hoặc 'extra'
                        $tongtien += $item['total_price'];
                    }
                }
            }
        $stmtInsertDonhang->bindParam(":tongtien", $tongtien);

        // Thực hiện thêm đơn hàng
        $stmtInsertDonhang->execute();

        // Lấy mã đơn hàng vừa thêm
        $madonhang = $conn->lastInsertId();
        // Thêm thông tin sản phẩm vào bảng sp_in_dh
        if($cartKey && is_array($_SESSION[$cartKey])) {
            foreach($_SESSION[$cartKey] as $index => $item) {
                // Get the 'masp' value from the $item array
                $masp = $item['masp'];
                $soluongsp = $item['quantity'];
                $gia = $item['price'];
                $anhsp = $item['image'];
                // Thực hiện thêm sản phẩm vào bảng sp_in_dh
                $sqlInsertSpInDh = "INSERT INTO sp_in_dh (`id_madonhang`, `masp`,`gia`,`soluongsp`,`anhsp`)
                            VALUES(:id_madonhang, :masp,:gia,:soluongsp,:anhsp)";
                $stmtInsertSpInDh = $conn->prepare($sqlInsertSpInDh);
                $stmtInsertSpInDh->bindParam(":id_madonhang", $madonhang);
                $stmtInsertSpInDh->bindParam(":masp", $masp);
                $stmtInsertSpInDh->bindParam(":soluongsp", $soluongsp);
                $stmtInsertSpInDh->bindParam(":gia", $gia);
                $stmtInsertSpInDh->bindParam(":anhsp", $anhsp);
                $stmtInsertSpInDh->execute();  // Corrected line
                if($stmtInsertSpInDh->errorCode() != 0) {
                    $errors = $stmtInsertSpInDh->errorInfo();
                    print_r($errors);
                }
            }
        }
    }
        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: ".$e->getMessage();
        return false;
    }
}


function get_donhang($matk) {
    global $conn;
    $sql = "SELECT *
            FROM donhang
            WHERE matk = :matk";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':matk', $matk, PDO::PARAM_INT);
    $stmt->execute();
    $donhang = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $donhang;
}
function get_sp_in_order($madonhang) {
    global $conn;

    $sql = "SELECT sp_in_dh.*, donhang.* 
            FROM sp_in_dh, donhang
            WHERE sp_in_dh.id_madonhang = donhang.madonhang
            AND sp_in_dh.id_madonhang = :madonhang";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':madonhang', $madonhang, PDO::PARAM_INT);
    $stmt->execute();
    $donhang = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $donhang;
}

function updateTrangThaiDonHang($madonhang) {
    global $conn;

    // Update the trangthai column in the donhang table
    $sql = "UPDATE donhang SET `trangthai` = 'Đã duyệt' WHERE madonhang = :madonhang";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":madonhang", $madonhang, PDO::PARAM_INT);

    // Execute the query and return the result
    return $stmt->execute();
}
function get_donhang_madonhang($madonhang) {
    global $conn;
    $sql = "SELECT *
            FROM donhang
            WHERE madonhang = :madonhang";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':madonhang', $madonhang, PDO::PARAM_INT);
    $stmt->execute();
    $donhang = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $donhang;
}
function get_order() {
    global $conn;

    $sql = "SELECT * FROM donhang";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $orderData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $orderData;
}
?>