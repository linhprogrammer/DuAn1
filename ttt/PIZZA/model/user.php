<?php 
function signup($hoten, $sdt, $matkhau)
{
    global $conn;
    $sql = "INSERT INTO taikhoan (`hoten`,`sdt`,`matkhau`) VALUES(:hoten,:sdt,:matkhau)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":sdt", $sdt);
    $stmt->bindParam(":matkhau", $matkhau);
    return $stmt->execute();
    //print_r($stmt->fetch());
}
function checksdt($sdt)
{
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE sdt=:sdt";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":sdt", $sdt);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function login($sdt, $matkhau){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE sdt='".$sdt." 'AND matkhau='".$matkhau."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //print_r($stmt->fetch());
    
    return $stmt->fetch();
}
function show_user(){
    global $conn;
    $sql = "SELECT * from taikhoan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function add_user($hoten, $anh, $sdt, $email, $quyen)
{
    global $conn;
    $sql = "INSERT INTO taikhoan (`hoten`, `anh`, `sdt`, `email`, `quyen`) VALUES (:hoten, :anh, :sdt, :email, :quyen)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":anh", $anh);
    $stmt->bindParam(":sdt", $sdt);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":quyen", $quyen);
    $result = $stmt->execute();

    if ($result) {
        // xử lý tệp ảnh cho anh
        if ($_FILES['anh']['error'] == 0) {
            move_uploaded_file(
                $_FILES['anh']['tmp_name'],
                "upload/avatar/" . $_FILES['anh']['name']
            );
        }
    }
    return $result;
}
function edit_user($matk, $hoten, $anh, $sdt, $email, $quyen){
    global $conn;
    $sql = "UPDATE taikhoan SET `hoten` = :hoten, `anh` = :anh, `sdt` = :sdt, `email` = :email, `quyen` = :quyen WHERE matk = :matk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":matk", $matk);
    $stmt->bindParam(":hoten", $hoten);
    $stmt->bindParam(":anh", $anh);
    $stmt->bindParam(":sdt", $sdt);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":quyen", $quyen);

    return $stmt->execute();
}
function get_user($id){
    global $conn;
    $sql = "SELECT * from taikhoan WHERE matk=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function delete_user($matk){
    global $conn;
    $sql = "DELETE FROM taikhoan WHERE matk=:matk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":matk",$matk);

    return $stmt->execute();
}

?>