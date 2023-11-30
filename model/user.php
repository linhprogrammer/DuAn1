<?php
function signup($hoten, $sodienthoai, $matkhau)
{
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




?>