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
?>