
    

            <!-- sa-app__toolbar / end -->
            <!-- sa-app__body -->
            <div id="top" class="sa-app__body">
                <div class="mx-xxl-3 px-4 px-sm-5">
                    <div class="py-5">
                        <div class="row g-4 align-items-center">g
                            <div class="col">
                                <h1 class="h3 m-0">Sản Phẩm</h1>
                            </div>
                            <div class="col-auto d-flex">
    <!-- Tạo nút danh mục -->

    <div class="dropdown">
        <button class="btn btn-primary" id="categoryBtn" data-bs-toggle="dropdown">Danh mục</button>
        <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Danh mục 1</a></li>
            <li><a href="#" class="dropdown-item">Danh mục 2</a></li>
            <li><a href="#" class="dropdown-item">Danh mục 3</a></li>
        </ul>
    </div>
<!--    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        Danh Mục
        </button>
        <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Danh mục 1</a></li>
            <li><a href="#" class="dropdown-item">Danh mục 2</a></li>
            <li><a href="#" class="dropdown-item">Danh mục 3</a></li>
        </ul>
    </div> -->

    <!-- Hiển thị các sự lựa chọn, mặc định ẩn đi -->
    <div id="categoryOptions" style="display: none;">
        <a href="admin.php?mod=product&act=add&category=ga">Gà</a>
        <a href="admin.php?mod=product&act=add&category=pizza">Pizza</a>
        <!-- Thêm các sự lựa chọn khác tại đây -->
    </div>
</div>
                            <div class="col-auto d-flex">
                                <a href="admin.php?mod=product&act=add" class="btn btn-primary">Thêm Sản Phẩm</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
                    <div class="sa-layout">
                        <div class="sa-layout__backdrop" data-sa-layout-sidebar-close=""></div>
                        <div class="sa-layout__content">
                            <div class="card table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="w-min">
                                                <input type="checkbox"
                                                    class="form-check-input m-0 fs-exact-16 d-block" />
                                            </th>
                                            <th class="min-w-20x">Sản Phẩm</th>
                                            <th>Danh mục</th>
                                            <th>Số Lượng</th>
                                            <th>Giá Khuyến Mãi</th>
                                            <th>Số lượt bình luận</th>
                                            <th>Đánh giá</th>
                                            <th class="w-min"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['ds'] as $sp): ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                                    aria-label="..." /></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="app-product.html" class="me-4">
                                                        <div
                                                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="upload/product/<?=$sp['hinhanhshow']?>" width="40"
                                                                height="40" alt="" />
                                                        </div>
                                                    </a>
                                                    <div>
                                                        <a href="app-product.html" class="text-reset"><?=$sp['tensp']?></a>
                                                        <div class="sa-meta mt-0">
                                                            <ul class="sa-meta__list">
                                                                <li class="sa-meta__item">ID:
                                                                    <span title="Click to copy product ID"
                                                                        class="st-copy"><?=$sp['masp']?></span>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="app-category.html" class="text-reset"><?=$sp['tendm']?></a>
                                            </td>
                                            <td>
                                                <div class="badge badge-sa-success"><?=$sp['soluong']?></div>
                                            </td>
                                            <td>
                                                <div class="sa-price">
                                                    <span
                                                        class="sa-price__integer"><?=$sp['giakm']?></span></div>
                                            </td>
                                            <td>
                                                <div class="sa-sale">
                                                    <span
                                                        class="sa-sale__integer">##</span></div>
                                            </td>
                                            <td>
                                                <div class="sa-sale">
                                                    <span
                                                        class="sa-sale__integer">##</span></div>
                                            </td>
                                            <td>
                                            <div class="dropdown">
                                                    <button class="btn btn-sa-muted btn-sm" type="button"
                                                        id="product-context-menu-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false" aria-label="More">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="product-context-menu-0">
                                                        <li>
                                                            <a class="dropdown-item" href="admin.php?mod=product&act=edit&id=<?=$sp['masp']?>">Sửa</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">Ẩn khỏi trang show</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="admin.php?mod=product&act=delete&id=<?=$sp['masp']?>">Xóa</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sa-app__body / end -->
