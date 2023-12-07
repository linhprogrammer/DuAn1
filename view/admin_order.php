
<form action="" method="post" enctype="multipart/form-data">

            <!-- sa-app__toolbar / end -->
            <!-- sa-app__body -->
            <div id="top" class="sa-app__body">
                <div class="mx-xxl-3 px-4 px-sm-5">
                    <div class="py-5">
                        <div class="row g-4 align-items-center">
                            <div class="col">
                                <h1 class="h3 m-0">Đơn hàng</h1>
                            </div>
                            <div class="col-auto d-flex">
    <!-- Tạo nút danh mục -->

    

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
                                            <th>Tổng tiền</th>
                                            <th>Ngày đặt</th>
                                            <th>Trạng thái</th>
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
                                                        
                                                    </a>
                                                    <div>
                                                        <a href="app-product.html" class="text-reset">Mã người đặt hàng :<?=$sp['matk']?></a>
                                                        <div class="sa-meta mt-0">
                                                            <ul class="sa-meta__list">
                                                                <li class="sa-meta__item">Mã đơn hàng: 
                                                                    <span title="Click to copy product ID"
                                                                        class="st-copy"><?=$sp['madonhang']?></span>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="app-category.html" class="text-reset"><?=$sp['tongtien']?>đ</a>
                                            </td>
                                            <td>
                                                <div class="badge badge-sa-success"><?=$sp['ngaydat']?></div>
                                            </td>
                                            <td>
                                                <div class="sa-price">
                                                    <span
                                                        class="sa-price__integer"><?=$sp['trangthai']?></span></div>
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
                                                            <a class="dropdown-item" href="admin.php?mod=order&act=duyet&id=<?=$sp['madonhang']?>">Duyệt</a>
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
</form>