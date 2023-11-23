<?php
// Tương tác với bảng product trong CDL

function get_categoies()
{
    global $conn;
    $sql = "SELECT * FROM danhmuc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function get_categories_with_product_count()
{
    global $conn;

    $sql = "SELECT danhmuc.*, COUNT(sanpham.madm) AS soluongsp
            FROM danhmuc
            LEFT JOIN sanpham ON danhmuc.madm = sanpham.madm
            GROUP BY danhmuc.madm";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function add_category($tendm, $anhdaidien)
{
    global $conn;

    // Xử lý tệp ảnh cho anhdaidien
    if ($anhdaidien['error'] == 0) {
        $uploadDir = "";
        $uploadedFile = $uploadDir . basename($anhdaidien['name']);
        move_uploaded_file($anhdaidien['tmp_name'], $uploadedFile);
    } else {
        // Xử lý lỗi upload ảnh (nếu có)
        // return hoặc thực hiện xử lý phù hợp với yêu cầu của bạn
        return false;
    }

    // Lưu đường dẫn hoặc tên file ảnh vào cơ sở dữ liệu
    $sql = "INSERT INTO danhmuc (`tendm`, `anhdaidien`) VALUES(:tendm, :anhdaidien)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tendm", $tendm);
    $stmt->bindParam(":anhdaidien", $uploadedFile); // Lưu đường dẫn hoặc tên file ảnh

    $result = $stmt->execute();

    return $result;
}
function checktendm($tendm) {
    global $conn;
    $sql = "SELECT * FROM danhmuc WHERE tendm = :tendm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tendm", $tendm);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    // Trả về true nếu tên sản phẩm đã tồn tại, ngược lại trả về false
    return ($result !== false);
}
function get_category($id)
{
    global $conn;
    $sql = "SELECT * from danhmuc WHERE madm=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();

}
function edit_category($madm, $tendm, $anhdaidien)
{
    global $conn;
    $sql = "UPDATE danhmuc SET `madm`=:madm,`tendm`=:tendm,`anhdaidien`=:anhdaidien WHERE madm=:madm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":madm", $madm);
    $stmt->bindParam(":tendm", $tendm);
    $stmt->bindParam(":anhdaidien", $anhdaidien);
    return $stmt->execute();
    //print_r($stmt->fetch());
}
function delete_category($madm)
{
    global $conn;
    $sql = "DELETE FROM danhmuc WHERE madm=:madm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":madm", $madm);

    return $stmt->execute();
}
?>