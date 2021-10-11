
<?php $__env->startSection('content'); ?>
<main class="search-page">
    <div class="box-title-admin">
        <h1>Danh sách sản phẩm</h1>
        <div class="path">
            <a href="/">Trang chủ</a> /
            <span>Sản Phẩm</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-between">
            <div class="col-3 pr-5">
                <div class="aside-left list_category">
                    <div class="title-list">
                        <h5 class="text-white"><i class="fas fa-clipboard-list"></i> Danh Mục Sản Phẩm</h5>
                    </div>
                    <div class="list-content">
                        <ul class="">
                            <li><a href="">Trái cây</a></li>
                            <li><a href="">Thịt tươi</a></li>
                            <li><a href="">Hải sản tươi</a></li>
                            <li><a href="">Rau củ</a></li>
                            <li><a href="">Thực phẩm khô</a></li>
                            <li><a href="">Bơ sữa</a></li>
                            <li><a href="">Thực phẩm tết</a></li>
                            <li><a href="">Hạt Giống</a></li>
                            <li><a href="">Đồ ăn đóng hộp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="aside-left filter-list mt-5">
                    <div class="title-list">
                        <h5 class="text-white"><i class="fas fa-funnel-dollar"></i> Lọc sản phẩm</h5>
                    </div>
                    <div class="list-content">
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="txtRadio" value="1" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Giá dưới 100.000đ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="txtRadio" value="2" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">100.000đ - 200.000đ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="txtRadio" value="3" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">200.000đ - 500.000đ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="txtRadio" value="4" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">500.000đ - 1000.000đ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="txtRadio" value="5" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">Giá trên 1000.000đ</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container border-bottom col-9">
                <div class="option-sort">
                    <form action="">
                        <label class="d-inline" for="">Sắp xếp <i class="fas fa-sort"></i> </label>
                        <select name="" class="border border-info" id="select_sort">
                            <option value="">-- Lựa chọn sắp Xếp --</option>
                            <option value="1">Giá tăng dần</option>
                            <option value="2">Giá giảm dần</option>
                            <option value="3">Sale tăng dần</option>
                            <option value="4">Sale giảm dần</option>
                        </select>
                    </form>
                </div>
                <div class="row product-show-main mt-3">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-item col-lg-3 col-md-4 col-sm-6 col-sx-12"">
                            <div class="product-image">
                                <a href="./san-pham/<?php echo e($row['slug']); ?>">
                                    <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($row['image']); ?>" alt="Hành tây">
                                </a>
                                <div class="icon-on-image-product">
                                    <i class="ti-heart" title="Thêm vào yêu thích"></i>
                                    <a href=""><i class="ti-shopping-cart-full" title="Thêm vào giỏ hàng"></i></a>
                                </div>
                            </div>
                            <div class="product-information">
                                <a href="./product-detail/<?php echo e($row['slug']); ?>">
                                    <p><?php echo e($row['name']); ?></p>
                                    <div class="box-price">
                                        <span class="price-primary"><?php echo e($row['price']); ?> đ</span>
                                    </div>
                                </a>
                            </div>
                            <span class="product-sale">- <?php echo e($row['discount']); ?>%</span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" id="pageBefor" href="" tabindex="">Trước</a>
              </li>
              <li class="page-item active"><a class="page-link" href="?page=1">1</a></li>
              <li class="page-item" ><a class="page-link" href="?page=2">2</a></li>
              <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
              <li class="page-item">
                <a class="page-link" id="pageNext" href="#">Tiếp</a>
              </li>
            </ul>
          </nav>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\mvc2\app\views/product/index.blade.php ENDPATH**/ ?>