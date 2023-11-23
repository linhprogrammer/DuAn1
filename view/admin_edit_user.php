<form action="" method="post" enctype="multipart/form-data">
    <!-- sa-app__body -->
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <h1 class="h3 m-0">Thêm sản phẩm</h1>
                        </div>
                        <div class="col-auto d-flex">
                            <input type="submit" class="btn btn-primary" name="submit" value="Sửa">
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
                                        <label for="form-product/name" class="form-label">Họ và tên</label><input type="text"
                                            class="form-control" id="form-product/name" value="<?= $data['tk']['hoten'] ?>" name="hoten">
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/description" class="form-label">Email</label>
                                        <textarea id="form-product/description" class="sa-quill-control form-control"
                                            rows="8" name="email">"<?= $data['tk']['email'] ?>"</textarea>
                                    </div>
                                    <div>
                                        <label for="form-product/short-description" class="form-label">Mật khẩu</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="matkhau"><?= $data['tk']['matkhau'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">SĐT</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="sodienthoai"><?= $data['tk']['sodienthoai'] ?></textarea>
                                        <label for="form-product/short-description" class="form-label">Địa chỉ</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="diachi"><?= $data['tk']['diachi'] ?></textarea>
                                            <label for="form-product/short-description" class="form-label">Quyền</label>
                                        <textarea id="form-product/short-description" class="form-control" rows="2"
                                            name="quyen"><?= $data['tk']['quyen'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Avatar</h2>
                                    </div>
                                </div>
                                <div class="mt-n5">
                                <img src="upload/avatar/<?= $data['tk']['hinhanh'] ?>" class="w-100" alt="">
                                    <input type="file" class="form-controller" name="hinhanh">
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sa-app__body / end -->


</form>