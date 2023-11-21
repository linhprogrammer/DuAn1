<?php
function add_product($tensp, $gia, $giakm, $soluong, $motangan, $motachitiet, $hinhanhshow, $hinhanh, $sanphamnoibat, $ngaynhap, $madm,$meal)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Thêm sản phẩm vào bảng sanpham
        $sql = "INSERT INTO sanpham (`tensp`, `gia`, `giakm`, `soluong`, `motangan`, `motachitiet`, `hinhanhshow`, `sanphamnoibat`, `ngaynhap`, `madm`,`meal`)
                            VALUES(:tensp, :gia, :giakm, :soluong, :motangan, :motachitiet, :hinhanhshow, :sanphamnoibat, NOW(), :madm,:meal)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":gia", $gia);
        $stmt->bindParam(":giakm", $giakm);
        $stmt->bindParam(":soluong", $soluong);
        $stmt->bindParam(":motangan", $motangan);
        $stmt->bindParam(":motachitiet", $motachitiet);
        $stmt->bindParam(":hinhanhshow", $hinhanhshow);
        $stmt->bindParam(":sanphamnoibat", $sanphamnoibat);
        $stmt->bindParam(":madm", $madm);
        $stmt->bindParam(":meal", $meal);
        $stmt->execute();

        // Lấy masp của sản phẩm vừa thêm
        $masp = $conn->lastInsertId();

        // Thêm ảnh vào bảng anhchitiet
        foreach ($hinhanh as $image) {
            $sql = "INSERT INTO anhchitiet (`id_sp`, `images`) VALUES(:id_sp, :images)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id_sp", $masp);
            $stmt->bindParam(":images", $image);
            $stmt->execute();
        }

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}




function edit_product($masp, $tensp, $gia, $giakm, $soluong, $motangan, $motachitiet, $hinhanhshow, $hinhanh, $sanphamnoibat, $ngaynhap, $madm,$meal)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Update product information in the sanpham table
        $sql = "UPDATE sanpham SET `tensp`=:tensp, `gia`=:gia, `giakm`=:giakm, `soluong`=:soluong, 
        `motangan`=:motangan, `motachitiet`=:motachitiet, `hinhanhshow`=:hinhanhshow, 
        `sanphamnoibat`=:sanphamnoibat, `ngaynhap`=:ngaynhap, `madm`=:madm, `meal`=:meal WHERE masp=:masp
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":masp", $masp);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":gia", $gia);
        $stmt->bindParam(":giakm", $giakm);
        $stmt->bindParam(":soluong", $soluong);
        $stmt->bindParam(":motangan", $motangan);
        $stmt->bindParam(":motachitiet", $motachitiet);
        $stmt->bindParam(":hinhanhshow", $hinhanhshow);
        $stmt->bindParam(":sanphamnoibat", $sanphamnoibat);
        $stmt->bindParam(":ngaynhap", $ngaynhap);
        $stmt->bindParam(":madm", $madm);
        $stmt->bindParam(":meal", $meal);
        $stmt->execute();

        // Update images in the anhchitiet table
        // Delete existing images
        $sqlDelete = "DELETE FROM anhchitiet WHERE id_sp=:masp";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bindParam(":masp", $masp);
        $stmtDelete->execute();

        // Insert new images
        foreach ($hinhanh as $image) {
            $sqlInsert = "INSERT INTO anhchitiet (`id_sp`, `images`) VALUES(:masp, :images)";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bindParam(":masp", $masp);
            $stmtInsert->bindParam(":images", $image);
            $stmtInsert->execute();
        }

        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
        return false;
    }
}

function show_product(){
    global $conn;
    $sql = "SELECT sanpham.*, danhmuc.tendm
            FROM sanpham
            INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}


function show_images($id){
    global $conn;
    $sql = "SELECT images FROM anhchitiet WHERE id_sp = :id";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Assuming $id is an integer, adjust accordingly if it's a string
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        // Handle the exception, log the error, or return an error message
        echo "Error: " . $e->getMessage();
    }
}


function get_product($id){
    global $conn;

    $sql = "SELECT sanpham.*, anhchitiet.* 
            FROM sanpham 
            INNER JOIN anhchitiet ON sanpham.masp = anhchitiet.id_sp 
            WHERE sanpham.masp = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Assuming $id is an integer
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}


function delete_product($id) {
    global $conn;

    // Bắt đầu một giao dịch để đảm bảo tính nhất quán dữ liệu
    $conn->beginTransaction();

    try {
        // Xóa các bản ghi trong bảng "anhchitiet" liên quan đến ID sản phẩm cụ thể
        $sqlDeleteAnhChiTiet = "DELETE FROM anhchitiet WHERE id_sp=:id";
        $stmtDeleteAnhChiTiet = $conn->prepare($sqlDeleteAnhChiTiet);
        $stmtDeleteAnhChiTiet->bindParam(":id", $id);
        $stmtDeleteAnhChiTiet->execute();

        // Xóa bản ghi sản phẩm trong bảng "sanpham"
        $sqlDeleteSanPham = "DELETE FROM sanpham WHERE masp=:id";
        $stmtDeleteSanPham = $conn->prepare($sqlDeleteSanPham);
        $stmtDeleteSanPham->bindParam(":id", $id);
        $stmtDeleteSanPham->execute();

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

function showspmoinhat(){
    global $conn;

    $sql = "SELECT * FROM sanpham ORDER BY ngaynhap DESC LIMIT 10";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function showdm1() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
            INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
            WHERE danhmuc.tendm = 'Gà'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm2() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Hamburger'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm3() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Mì ý'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm4() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Đồ ăn phụ'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm5() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Tráng miệng'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm6() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Thức uống'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function showdm7() {
    global $conn;

    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham
    INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
    WHERE danhmuc.tendm = 'Compo'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
?>
