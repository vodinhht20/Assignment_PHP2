
<?php $__env->startSection('content'); ?>
<main>
    <div class="banner">
        <picture>
            <source media="(max-width: 567px)" srcset="<?php echo e(PUBLIC_PATH); ?>image/banner-mobile.jpg">
            <img src="<?php echo e(PUBLIC_PATH); ?>image/banner.jpg" alt="">
        </picture>
    </div>
    <div class="container">
        <div class="cartegory-slide-show-home">
            <div class="owl-carousel">
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_1.jpg" alt="">
                        <h3>Trứng và bơ</h3>
                    </a>
                </div>
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_2.jpg" alt="">
                        <h3>Thực phẩm khô</h3>
                    </a>
                </div>
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_3.jpg" alt="">
                        <h3>Thịt tươi sống</h3>
                    </a>
                </div>
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_4.jpg" alt="">
                        <h3>Trái cây</h3>
                    </a>
                </div>
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_5.jpg" alt="">
                        <h3>Rau củ quả</h3>
                    </a>
                </div>
                <div class="category-item">
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/cate_6.jpg" alt="">
                        <h3>Nước ép</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-product-hot">
            <div class="title-product-hot">
                <img src="<?php echo e(PUBLIC_PATH); ?>image/hostsale.gif" alt="">
                <h1>Ưu đãi trong tuần</h1>
            </div>
            <div class="silde-product">
                <div class="owl-carousel">
                    <?php $__currentLoopData = $product_hosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-item">
                            <div class="product-image">
                                <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                    <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item->image); ?>" alt="<?php echo e($item->slug); ?>">
                                </a>
                                <div class="icon-on-image-product">
                                    <i class="ti-heart" title="Thêm vào yêu thích"></i>
                                    <a href="" class="link-cart-full"><i class="ti-shopping-cart-full" title="Thêm vào giỏ hàng"></i></a>
                                </div>
                            </div>
                            <div class="product-information">
                                <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                    <p><?php echo e($item->name); ?></p>
                                    <div class="box-price">
                                        <span class="price-primary"><?php echo e(number_format($item->priceDiscount())); ?> đ</span>
                                        <span class="price-sub"><?php echo e(number_format($item->price)); ?> đ</span>
                                    </div>
                                </a>
                            </div>
                            <span class="product-sale">- <?php echo e($item->discount); ?>%</span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="box-banner-sub">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-sub">
                        <a href=""><img src="<?php echo e(PUBLIC_PATH); ?>image/banner_1.jpg" alt="Giá Sale"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-sub">
                        <a href=""><img src="<?php echo e(PUBLIC_PATH); ?>image/banner_2.jpg" alt="Giá Sale"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="box-product-show section-1">
            <div class="row">
                <div class="col-lg-3 sm-md-12">
                    <div class="title-product-show" style="background-image: url('<?php echo e(PUBLIC_PATH); ?>image/bg-title-cate1.jpg');">
                        <a href=""><h2>Trái cây</h2></a>
                        <div class="list-category">
                            <ul>
                                <li><a href="">Trái cây</a></li>
                                <li><a href="">Thịt tươi</a></li>
                                <li><a href="">Hải sản tươi</a></li>
                                <li><a href="">Rau củ</a></li>
                                <li><a href="">Thực phẩm khô</a></li>
                            </ul>
                            <a href="" class="bnt-buy-now">Mua sắm ngay bây giờ !</a>
                        </div>
                        <div class="bnt-more"><i class="ti-more"></i></div>
                    </div>
                </div>
                <div class="col-lg-9 sm-md-12">
                    <div class="product-show-main">
                        <div class="silde-product">
                            <div class="owl-carousel">
                                <?php $__currentLoopData = $product_eggs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item->image); ?>" alt="<?php echo e($item->slug); ?>">
                                            </a>
                                            <div class="icon-on-image-product">
                                                <i class="ti-heart" title="Thêm vào yêu thích"></i>
                                                <a href="" class="link-cart-full"><i class="ti-shopping-cart-full" title="Thêm vào giỏ hàng"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-information">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <p><?php echo e($item->name); ?></p>
                                                <div class="box-price">
                                                    <span class="price-primary"><?php echo e(number_format($item->priceDiscount())); ?> đ</span>
                                                    <span class="price-sub"><?php echo e(number_format($item->price)); ?> đ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="product-sale">- <?php echo e($item->discount); ?>%</span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="box-product-show section-2">
            <div class="row">
                <div class="col-lg-9 sm-md-12">
                    <div class="product-show-main">
                        <div class="silde-product">
                            <div class="owl-carousel">
                                <?php $__currentLoopData = $product_vegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item->image); ?>" alt="<?php echo e($item->slug); ?>">
                                            </a>
                                            <div class="icon-on-image-product">
                                                <i class="ti-heart" title="Thêm vào yêu thích"></i>
                                                <a href="" class="link-cart-full"><i class="ti-shopping-cart-full" title="Thêm vào giỏ hàng"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-information">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <p><?php echo e($item->name); ?></p>
                                                <div class="box-price">
                                                    <span class="price-primary"><?php echo e(number_format($item->priceDiscount())); ?> đ</span>
                                                    <span class="price-sub"><?php echo e(number_format($item->price)); ?> đ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="product-sale">- <?php echo e($item->discount); ?>%</span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 sm-md-12">
                    <div class="title-product-show" style="background-image: url('<?php echo e(PUBLIC_PATH); ?>image/bg-title-cate2.jpg');">
                        <a href=""><h2>Rau củ quả</h2></a>
                        <div class="list-category">
                            <ul>
                                <li><a href="">Trái cây</a></li>
                                <li><a href="">Thịt tươi</a></li>
                                <li><a href="">Hải sản tươi</a></li>
                                <li><a href="">Rau củ</a></li>
                                <li><a href="">Thực phẩm khô</a></li>
                            </ul>
                            <a href="" class="bnt-buy-now">Mua sắm ngay bây giờ !</a>
                        </div>
                        <div class="bnt-more"><i class="ti-more"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="box-product-show section-2">
            <div class="row">
                <div class="col-lg-3 sm-md-12">
                    <div class="title-product-show" style="background-image: url('<?php echo e(PUBLIC_PATH); ?>image/bg-title-cate3.jpg');">
                        <a href=""><h2>Thực phẩm tươi</h2></a>
                        <div class="list-category">
                            <ul>
                                <li><a href="">Trái cây</a></li>
                                <li><a href="">Thịt tươi</a></li>
                                <li><a href="">Hải sản tươi</a></li>
                                <li><a href="">Rau củ</a></li>
                                <li><a href="">Thực phẩm khô</a></li>
                            </ul>
                            <a href="" class="bnt-buy-now">Mua sắm ngay bây giờ !</a>
                        </div>
                        <div class="bnt-more"><i class="ti-more"></i></div>
                    </div>
                </div>
                <div class="col-lg-9 sm-md-12">
                    <div class="product-show-main">
                        <div class="silde-product">
                            <div class="owl-carousel">
                                <?php $__currentLoopData = $product_meats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item->image); ?>" alt="<?php echo e($item->slug); ?>">
                                            </a>
                                            <div class="icon-on-image-product">
                                                <i class="ti-heart" title="Thêm vào yêu thích"></i>
                                                <a href="" class="link-cart-full"><i class="ti-shopping-cart-full" title="Thêm vào giỏ hàng"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-information">
                                            <a href="<?php echo e(BASE_URL); ?>san-pham/<?php echo e($item->slug); ?>">
                                                <p><?php echo e($item->name); ?></p>
                                                <div class="box-price">
                                                    <span class="price-primary"><?php echo e(number_format($item->priceDiscount())); ?> đ</span>
                                                    <span class="price-sub"><?php echo e(number_format($item->price)); ?> đ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="product-sale">- <?php echo e($item->discount); ?>%</span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="banner-ads-express">
            <h2>Giao hàng miễn phí tận nhà trong vòng 24h</h2>
            <a href="">Tìm hiểu thêm</a>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/home/index.blade.php ENDPATH**/ ?>