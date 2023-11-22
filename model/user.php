<?php
function signup($hoten, $sodienthoai, $matkhau)
{
    global $conn;
    $sql = "INSERT INTO taikhoan (`hoten`, `sodienthoai`, `matkhau`) VALUES(:hoten, :sodienthoai, :matkhau)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":sodienthoai", $sodienthoai);
    $stmt->bindParam(":matkhau", $matkhau);

    return $stmt->execute();
    //print_r($stmt->fetch());
}

function login($sodienthoai, $matkhau){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE sodienthoai='".$sodienthoai." 'AND matkhau='".$matkhau."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //print_r($stmt->fetch());
    
    return $stmt->fetch();
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
function showinfo($matk){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE matk = :matk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':matk', $matk);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}

?>