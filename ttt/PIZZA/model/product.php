<?php
function updateSoluongspByCategory($tendm)
{
    global $conn;
    $sql = "SELECT COUNT(*) AS total FROM sanpham JOIN danhmuc ON sanpham.madm = danhmuc.madm WHERE tendm = :tendm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tendm', $tendm);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Lấy số lượng sản phẩm từ kết quả truy vấn
    $totalProducts = $result['total'];

    $updateSql = "UPDATE danhmuc SET soluongsp = :soluongsp WHERE tendm = :tendm";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':tendm', $tendm);
    $updateStmt->bindParam(':soluongsp', $totalProducts);
    $updateStmt->execute();
}

function add($tensp, $anh, $dongia, $giakhuyenmai, $mota, $sanphamnoibat, $soluong, $madm)
{
    global $conn;
    $sql = "INSERT INTO sanpham (`tensp`, `anh`, `dongia`, `giakhuyenmai`, `mota`, `sanphamnoibat`, `soluong`, `madm`) VALUES (:tensp, :anh, :dongia, :giakhuyenmai, :mota, :sanphamnoibat, :soluong, :madm)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->bindParam(":anh", $anh);
    $stmt->bindParam(":dongia", $dongia);
    $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
    $stmt->bindParam(":mota", $mota);
    $stmt->bindParam(":sanphamnoibat", $sanphamnoibat);
    $stmt->bindParam(":soluong", $soluong);
    $stmt->bindParam(":madm", $madm);

    $result = $stmt->execute();
    
    // Nếu thêm sản phẩm thành công, hãy cập nhật soluongsp cho danh mục sản phẩm tương ứng.
    if ($result) {
        updateSoluongspByCategory($madm);
    }

    // Di chuyển tệp ảnh nếu có
    if ($_FILES['anh']['error'] == 0) {
        move_uploaded_file(
            $_FILES['anh']['tmp_name'],
            "upload/product/" . $_FILES['anh']['name']
        );
    }

    return $result;
}


function edit_product($masp, $tensp, $anh, $dongia, $giakhuyenmai, $mota, $sanphamnoibat, $soluong, $madm){
    global $conn;
    $sql = "UPDATE sanpham SET `tensp` = :tensp, `anh` = :anh, `dongia` = :dongia, `giakhuyenmai` = :giakhuyenmai, `mota` = :mota, `sanphamnoibat` = :sanphamnoibat, `soluong` = :soluong, `madm` = :madm WHERE masp = :masp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":masp", $masp);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->bindParam(":anh", $anh);
    $stmt->bindParam(":dongia", $dongia);
    $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
    $stmt->bindParam(":mota", $mota);
    $stmt->bindParam(":sanphamnoibat", $sanphamnoibat);
    $stmt->bindParam(":soluong", $soluong);
    $stmt->bindParam(":madm", $madm);

    return $stmt->execute();
}
function show_product(){
    global $conn;
    $sql = "SELECT * from sanpham";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function get_product($id){
    global $conn;
    $sql = "SELECT * from sanpham WHERE masp=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function delete_product($masp){
    global $conn;
    $sql = "DELETE FROM sanpham WHERE masp=:masp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":masp",$masp);

    return $stmt->execute();
}
function get_products(){
    global $conn;
    $sql = "SELECT sp.*, dm.* FROM sanpham sp INNER JOIN danhmuc dm ON sp.madm=dm.madm";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function show_detail(){
    global $conn;
    $sql = "SELECT * from sanpham";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}

?>