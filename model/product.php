<?php
function add_product($tensp, $giakm, $soluong, $motangan, $motachitiet, $hinhanhshow, $hinhanh, $sanphamnoibat, $ngaynhap, $madm, $meal, $sizenho, $sizevua, $sizelon)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Thêm sản phẩm vào bảng sanpham
        $sql = "INSERT INTO sanpham (`tensp`, `giakm`, `soluong`, `motangan`, `motachitiet`, `hinhanhshow`, `sanphamnoibat`, `ngaynhap`, `madm`, `meal`, `sizenho`, `sizevua`, `sizelon`)
                            VALUES(:tensp, :giakm, :soluong, :motangan, :motachitiet, :hinhanhshow, :sanphamnoibat, NOW(), :madm, :meal, :sizenho, :sizevua, :sizelon)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":giakm", $giakm);
        $stmt->bindParam(":soluong", $soluong);
        $stmt->bindParam(":motangan", $motangan);
        $stmt->bindParam(":motachitiet", $motachitiet);
        $stmt->bindParam(":hinhanhshow", $hinhanhshow);
        $stmt->bindParam(":sanphamnoibat", $sanphamnoibat);
        $stmt->bindParam(":madm", $madm);
        $stmt->bindParam(":meal", $meal);
        $stmt->bindParam(":sizenho", $sizenho);
        $stmt->bindParam(":sizevua", $sizevua);
        $stmt->bindParam(":sizelon", $sizelon);
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





function edit_product($masp, $tensp, $sizenho, $sizevua, $sizelon, $giakm, $soluong, $motangan, $motachitiet, $hinhanhshow, $hinhanh, $sanphamnoibat, $ngaynhap, $madm, $meal)
{
    global $conn;

    try {
        $conn->beginTransaction();

        // Update product information in the sanpham table
        $sql = "UPDATE sanpham SET 
                `tensp`=:tensp, 
                `sizenho`=:sizenho, 
                `sizevua`=:sizevua, 
                `sizelon`=:sizelon,
                `giakm`=:giakm, 
                `soluong`=:soluong, 
                `motangan`=:motangan, 
                `motachitiet`=:motachitiet, 
                `hinhanhshow`=:hinhanhshow, 
                `sanphamnoibat`=:sanphamnoibat, 
                `ngaynhap`=:ngaynhap, 
                `madm`=:madm, 
                `meal`=:meal
 
                WHERE masp=:masp";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":masp", $masp);
        $stmt->bindParam(":tensp", $tensp);
        $stmt->bindParam(":sizenho", $sizenho);
        $stmt->bindParam(":sizevua", $sizevua);
        $stmt->bindParam(":sizelon", $sizelon);
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
            INNER JOIN danhmuc ON sanpham.madm = danhmuc.madm
            ORDER BY sanpham.masp DESC";  // Sắp xếp theo masp từ lớn tới nhỏ
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
function get_products($id){
    global $conn;
    
    $sql = "SELECT *
            FROM sanpham 
            WHERE masp = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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
function hiddensp($masp){
    global $conn;
    $sql = "UPDATE sanpham SET `soluong` = 0 WHERE masp = :masp";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':masp', $masp, PDO::PARAM_STR);
    $stmt->execute();
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
    WHERE danhmuc.tendm = 'Combo'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}
function checktensp($tensp) {
    global $conn;
    $sql = "SELECT * FROM sanpham WHERE tensp = :tensp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    // Trả về true nếu tên sản phẩm đã tồn tại, ngược lại trả về false
    return ($result !== false);
}
function search_products($keyword){
    global $conn;
    $sql = "SELECT * FROM sanpham WHERE tensp LIKE '%".$keyword."%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}

function show_home(){
    global $conn;
    $sql = "SELECT * FROM sanpham WHERE sanphamnoibat = 1 LIMIT 8";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}

function get_sp_add_to_cart($id){
    global $conn;
    $sql = "SELECT * FROM sanpham WHERE masp = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}

function removeFromCart($index) {
    // Kiểm tra xem session cart có tồn tại không
    if (isset($_SESSION['cart_' . $_SESSION['user']['id']]) && is_array($_SESSION['cart_' . $_SESSION['user']['id']])) {
        // Kiểm tra xem index có hợp lệ không
        if ($index >= 0 && $index < count($_SESSION['cart_' . $_SESSION['user']['id']])) {
            // Xóa sản phẩm tại index
            unset($_SESSION['cart_' . $_SESSION['user']['id']][$index]);

            // Cập nhật lại session cart để loại bỏ khoảng trắng
            $_SESSION['cart_' . $_SESSION['user']['id']] = array_values($_SESSION['cart_' . $_SESSION['user']['id']]);

            // Kiểm tra xem giỏ hàng có trống không
            if (empty($_SESSION['cart_' . $_SESSION['user']['id']])) {
                // Nếu giỏ hàng trống, xóa hết session
                session_unset();
                session_destroy();
                return 'empty_cart';
            }

            // Trả về kết quả thành công
            return true;
        }
    }

    // Trả về kết quả thất bại
    return false;
}

function getImageSource($item)
{
    if (isset($item['type']) && $item['type'] == 'main') {
        // Type is main, use upload/product folder
        return 'upload/product/' . $item['image']; // Assuming 'image' is the key for the image name in your session data
    } elseif (isset($item['type']) && $item['type'] == 'extra') {
        // Type is extra, use upload/product_extra folder
        return 'upload/product_extra/' . $item['image'];
    }

    // Default fallback image source
    return 'path_to_default_image'; // Replace with the path to your default image
}
?>
