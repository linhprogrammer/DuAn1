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

?>