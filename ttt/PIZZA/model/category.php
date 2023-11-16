<?php
function show_category(){
    global $conn;
    $sql = "SELECT danhmuc.madm,danhmuc.hinhanh, danhmuc.tendm, COUNT(sanpham.masp) AS soluongsp FROM danhmuc LEFT JOIN sanpham ON danhmuc.madm = sanpham.madm GROUP BY danhmuc.madm, danhmuc.tendm";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function add_category($tendm, $hinhanh)
{
    global $conn;
    $sql = "INSERT INTO danhmuc (`tendm`, `hinhanh`) VALUES (:tendm, :hinhanh)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tendm", $tendm);
    $stmt->bindParam(":hinhanh", $hinhanh);

    $result = $stmt->execute();
    
    // Nếu thêm sản phẩm thành công, hãy cập nhật soluongsp cho danh mục sản phẩm tương ứng.
    if ($result) {
        updateSoluongspByCategory($madm);
    }

    // Di chuyển tệp ảnh nếu có
    if ($_FILES['hinhanh']['error'] == 0) {
        move_uploaded_file(
            $_FILES['hinhanh']['tmp_name'],
            "upload/category/" . $_FILES['hinhanh']['name']
        );
    }

    return $result;
}
function edit_category($madm, $tendm, $hinhanh) {
    global $conn;
    $sql = "UPDATE danhmuc SET `tendm` = :tendm, `hinhanh` = :hinhanh WHERE madm = :madm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":madm", $madm);
    $stmt->bindParam(":tendm", $tendm);
    $stmt->bindParam(":hinhanh", $hinhanh);
    return $stmt->execute();
}

function get_category($id){
    global $conn;
    $sql = "SELECT * from danhmuc WHERE madm=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}

function delete_category($madm){
    global $conn;
    $sql = "DELETE FROM danhmuc WHERE madm=:madm";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":madm",$madm);

    return $stmt->execute();
}
?>