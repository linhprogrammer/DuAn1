<div class="row g-4">
    <?php foreach ($data['dssp'] as $sp): ?>
        <div class="col-lg-3">
            <div class="card">
                <div class="align-items-center">
                    <a href="index.php?mod=product&act=detail&id=<?= $sp['masp'] ?>" style="text-decoration: none;">
                        <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?= $sp['hinhanhshow'] ?>" alt="" style="width: 310px; height: 310px; margin: auto; margin-top: 20px;">
                        <div class="w-100 text-start ps-4">
                            <h5 class=" justify-content-between border-bottom pb-2">
                                <p style=" color: #C5221F; margin: auto; text-align: center;"><?= $sp['tensp'] ?></p>
                                <p style=" color: #C5221F; font-size: 16px; height: 50px; margin: auto; text-align: center;"><?= $sp['motangan'] ?></p>           
                            </h5>
                            <p style="font-size: 26px; padding-bottom: 20px; margin: auto; text-align: center; " class="text-danger"><?= $sp['giakm'] ?> VNĐ</p>
                            <div class="nut-them">
                                <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; margin-bottom: 10px; color: white;  width: 90%;">Thêm vào giỏ hàng</a>
                                <a href="#" class="btn" style="background-color: #C5221F; border-radius: 100px; color: white; width: 90%; margin-bottom: 10px;">Mua ngay</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
