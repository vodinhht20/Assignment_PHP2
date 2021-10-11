
<?php $__env->startSection('content'); ?>
<main class="search-page post-page">
    <div class="box-title-admin">
        <h1><?php echo e($post->title); ?></h1>
        <div class="path">
            <a href="/">Trang chủ</a> /
            <span>Tin tức</span>
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
                <div class="aside-left similar mt-5">
                    <div class="title-list">
                        <h5 class="text-white">Bài Viết Liên Quan</h5>
                    </div>
                    <div class="list-content">
                        <?php $__currentLoopData = $similarNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="post-item">
                                <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>">
                                    <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item['thumbnail_img']); ?>" alt="">
                                <div class="post-title">
                                    <h4><?php echo e($item->title); ?></h4>
                                </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="container border-bottom col-9">
                <div class="author">
                    <p style="color: #989696;font-style: italic;"><?php echo e($post->created_at); ?></p>
                    <p >Tác giả: <b><?php echo e($post->user->name); ?></b> </p>
                </div>
                <div class="row product-show-main mt-3">
                    <div class="title-post">
                        <h1><?php echo e($post->title); ?></h1>
                    </div>
                    <div class="content-post">
                        <p><?php echo $post->content; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/new/post.blade.php ENDPATH**/ ?>