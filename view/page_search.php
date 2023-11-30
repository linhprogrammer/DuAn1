<div class="row g-4">
    <?php foreach ($data['dssp'] as $sp): ?>
        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <a href="index.php?mod=product&act=detail&id=<?= $sp['masp'] ?>" style="text-decoration: none;">
                    <img class="flex-shrink-0 img-fluid rounded" src="upload/product/<?= $sp['hinhanhshow'] ?>" alt="" style="width: 150px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span class="text-danger"><?= $sp['tensp'] ?></span>
                            <span class="text-danger"><?= $sp['giakm'] ?> VNĐ</span>
                        </h5>
                        <small class="fst-italic"><?= $sp['motangan'] ?></small>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
