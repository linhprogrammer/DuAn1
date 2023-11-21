<form action="" method="post" enctype="multipart/form-data">
    <!-- sa-app__body -->
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <h1 class="h3 m-0">Sửa sản phẩm</h1>
                        </div>
                        <div class="col-auto d-flex">
                            <input type="submit" class="btn btn-primary" name="submit" value="Sửa sản phẩm">
                        </div>
                    </div>
                </div>
                <div class="sa-entity-layout"
                    data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                    <div class="sa-entity-layout__body">
                        <div class="sa-entity-layout__main">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Thông tin cơ bản</h2>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/name" class="form-label">Tên sản phẩm</label><input
                                            type="text" class="form-control" value="<?= $data['sp']['tensp'] ?>"
                                            id="form-product/name" name="tensp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/description" class="form-label">Giá</label>
                                        <textarea id="form-product/description" class="sa-quill-control form-control"
                                            rows="8" name="gia"><?= $data['sp']['gia'] ?></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/description" class="form-label">Giá khuyến mãi</label>
                                        <textarea id="form-product/description" class="sa-quill-control form-control"
                                            rows="8" name="giakm"><?= $data['sp']['giakm'] ?></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/description" class="form-label">Hiển thị bữa ăn (1.Bữa sáng 2.Bữa trưa 3.Bữa tối)</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2" name="meal"><?= $data['sp']['meal'] ?></textarea>
                                    </div>
                                    <div>
                                        <label for="form-product/short-description" class="form-label">Số lượng</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="soluong"><?= $data['sp']['soluong'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">Mô tả
                                            ngắn</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="motangan"><?= $data['sp']['motangan'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">Mô tả chi
                                            tiết</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="motachitiet"><?= $data['sp']['motachitiet'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">Sản phẩm nổi
                                            bật</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="sanphamnoibat"><?= $data['sp']['sanphamnoibat'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">Ngày nhập sản
                                            phẩm</label>
                                        <input type="datetime-local" value="<?= $data['sp']['ngaynhap'] ?>"
                                            name="ngaynhap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Hình ảnh đại diện</h2>
                                    </div>
                                </div>
                                <div class="mt-n5">
                                    <img src="upload/product/<?= $data['sp']['hinhanhshow'] ?>" class="w-100" alt="">
                                    <input type="file" class="form-control" name="hinhanhshow">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Hình ảnh trong trang chi tiết</h2>
                                    </div>
                                </div>

                                <?php foreach ($imgs_product as $key => $value) { ?>
                                    <div class="mt-n5">
                               
                                        <img src="upload/product/<?php echo $value['images'] ?>" class="w-100" alt="">
                                    </div>
                                <?php } ?>


                                <input type="file" class="form-control" name="hinhanh[]" multiple>
                            </div>



                        </div>


                        <div class="card w-100 mt-5">
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Danh mục</h2>
                                    </div>
                                    <select class="sa-select2 form-select" name="madm">
                                        <?php foreach ($data['dsdm'] as $dm): ?>
                                            <option value="<?= $dm['madm'] ?>" <?= ($dm['madm'] == $data['sp']['madm']) ? 'selected' : '' ?>>
                                                <?= $dm['tendm'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- sa-app__body / end -->


</form>