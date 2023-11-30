<?php
function show_product_extra(){
    global $conn;
    $sql = "SELECT * FROM sanphamphu
    ORDER BY masp DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function add_product_extra($tensp, $gia, $soluong, $hinhanhshow, $phanloai)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Thêm sản phẩm vào bảng sanpham
        $sql = "INSERT INTO sanphamphu (`tensp`, `gia`, `soluong`, `hinhanhshow`, `phanloai`)
                            VALUES(:tensp, :gia, :soluong, :hinhanhshow, :phanloai)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":gia", $gia);
        $stmt->bindParam(":soluong", $soluong);
        $stmt->bindParam(":hinhanhshow", $hinhanhshow);
        $stmt->bindParam(":phanloai", $phanloai);
        $stmt->execute();
        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}
function edit_product_extra($masp, $tensp, $gia, $soluong, $hinhanhshow, $phanloai)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Update product information in the sanphamphu table
        $sql = "UPDATE sanphamphu SET `tensp`=:tensp, `gia`=:gia, `soluong`=:soluong, 
                `hinhanhshow`=:hinhanhshow, `phanloai`=:phanloai WHERE masp=:masp";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":masp", $masp);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":gia", $gia);
        $stmt->bindParam(":soluong", $soluong);
        $stmt->bindParam(":hinhanhshow", $hinhanhshow);
        $stmt->bindParam(":phanloai", $phanloai);
        $stmt->execute();

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}

function get_product_extra($id){
    global $conn;

    $sql = "SELECT * FROM sanphamphu WHERE masp = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Assuming $id is an integer
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function delete_product_extra($id) {
    global $conn;

    // Bắt đầu một giao dịch để đảm bảo tính nhất quán dữ liệu
    $conn->beginTransaction();

    try {
        // Xóa bản ghi sản phẩm trong bảng "sanphamphu"
        $sqlDeleteSanPhamPhu = "DELETE FROM sanphamphu WHERE masp=:id";
        $stmtDeleteSanPhamPhu = $conn->prepare($sqlDeleteSanPhamPhu);
        $stmtDeleteSanPhamPhu->bindParam(":id", $id);
        $stmtDeleteSanPhamPhu->execute();

        // Commit giao dịch nếu tất cả các truy vấn được thực hiện thành công
        $conn->commit();

        return true;
    } catch (PDOException $e) {
        // Rollback giao dịch nếu có bất kỳ lỗi nào xuất hiện
        $conn->rollback();
        // Bạn có thể ghi log hoặc xử lý lỗi theo cách phù hợp với ứng dụng của bạn
        echo "Lỗi: " . $e->getMessage();

        return false;
    }
}
function hiddensp_extra($masp){
    global $conn;
    $sql = "UPDATE sanphamphu SET `soluong` = 0 WHERE masp = :masp";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':masp', $masp, PDO::PARAM_STR);
    $stmt->execute();
}
function showdm1_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
            INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
            WHERE danhmuc.tendm = 'Gà'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm2_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Hamburger'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm3_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Mì ý'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm4_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Đồ ăn phụ'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm5_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Tráng miệng'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm6_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Thức uống'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm7_extra() {
    global $conn;

    $sql = "SELECT sanphamphu.*, danhmuc.tendm FROM sanphamphu
    INNER JOIN danhmuc ON sanphamphu.phanloai = danhmuc.madm
    WHERE danhmuc.tendm = 'Compo'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function checktensp_extra($tensp) {
    global $conn;
    $sql = "SELECT * FROM sanphamphu WHERE tensp = :tensp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    // Trả về true nếu tên sản phẩm đã tồn tại, ngược lại trả về false
    return ($result !== false);
}
?>