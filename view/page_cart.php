<div class="container-xxl py-5 " style="margin-top: 40px;">
    <?php
    // Kiểm tra xem session cart có tồn tại hay không
    $cartKey = $_SESSION['user']['id_cart'];
    if(isset($_SESSION[$cartKey]) && is_array($_SESSION[$cartKey])) {
        ?>
        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh đại diện</th>
                    <th class="text-start">Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng tiền</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $masps = []; // Mảng để lưu trữ tất cả các masp
                $stt = 1;
                foreach($_SESSION[$cartKey] as $index => $item) {
                    ?>
                    <tr>
                        <td>
                            <?= $stt++ ?>
                        </td>
                        <td><img src="<?= getImageSource($item) ?>" width="150px" alt=""></td>
                        <td class="text-start">
                            <?php
                            // Kiểm tra loại sản phẩm
                            if(isset($item['type']) && $item['type'] == 'main') {
                                echo $item['name'].'<p>Kích thước: '.$item['size'].'</p>';
                            } elseif(isset($item['type']) && $item['type'] == 'extra') {
                                echo $item['name'].'</p>';
                            }
                            ?>
                        </td>
                        <td>
                            <?= $item['quantity'] ?>
                        </td>
                        <td>
                            <?= $item['price'] ?>
                        </td>
                        <td>
                            <?= $item['total_price'] ?>
                        </td>
                        <td class="text-center">
    <a href="index.php?mod=page&act=delete_cart&index=<?= $index ?>">
    <ion-icon style="font-size: 3em;" name="trash-outline"></ion-icon>
    </a>
</td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        // Hiển thị thông báo nếu không có sản phẩm trong giỏ hàng
        echo '<p>Không có sản phẩm trong giỏ hàng.</p>';
    }
    ?>

    <div class="tongtienAll">
        <p class="tong" style="font-size: 26px;"><b>Tổng tiền:</b> <span id="totalAmount">0 đ</span></p>
    </div>


    <div class="nut">
        <div class="btn-left">
            <a href="#" class="btn">Thêm sản phẩm </a>
        </div>
        <div class="btn-right">
            <?php
            // Bắt đầu session
// Kiểm tra xem biến session 'user' có tồn tại không và có chứa 'id' không
            if(isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
                // Nếu tồn tại, sử dụng 'id' trong URL
                echo '<a href="index.php?mod=page&act=checkout&id='.$_SESSION['user']['id'].'" class="btn">Tiếp tục</a>';
            } else {
                // Nếu không tồn tại, sử dụng URL mặc định
                echo '<a href="index.php?mod=page&act=checkout" class="btn">Tiếp tục</a>';
            }
            ?>


        </div>
    </div>

</div>

<style>
    .custom-button {
        margin: auto;
        background: none;
        color: rgb(0, 0, 0);
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        outline: none;
        display: flex;
        align-items: center;
    }

    .custom-button ion-icon {
        font-size: 30px;
        margin-right: 5px;
    }
</style>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script>

    function formatCurrency(number) {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        });
        return formatter.format(number);
    }


    document.addEventListener('DOMContentLoaded', function () {
        const rows = document.querySelectorAll('.table tbody tr');
        let totalAmount = 0;

        rows.forEach((row) => {
            const quantity = parseInt(row.cells[3].textContent);
            const price = parseInt(row.cells[4].textContent);
            const total = quantity * price;

            totalAmount += total;
            const formattedTotal = formatCurrency(total); // Đặt số liệu đã định dạng vào cột "Tổng tiền"
            row.cells[5].textContent = formattedTotal;
        });

        const totalAmountElement = document.getElementById('totalAmount');
        totalAmountElement.innerText = formatCurrency(totalAmount); // Đặt tổng tiền đã định dạng
    });


</script>
</body>

</html>