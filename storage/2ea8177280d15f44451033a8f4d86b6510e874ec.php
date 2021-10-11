
<?php $__env->startSection('content'); ?>
<main class="new-page">
    <div class="box-title-admin">
        <h1>Tin tức</h1>
        <div class="path">
            <a href="/">Trang chủ</a> /
            <span>Tin tức</span>
        </div>
  </div>
  <div class="container box-highlights mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  mb-3">
                <div class="news-primary">
                    <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($postNewPrimary->slug); ?>">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($postNewPrimary->thumbnail_img); ?>" class="img-primary" alt="">
                    </a>
                    <div class="short-description">
                        <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($postNewPrimary->slug); ?>">
                            <h2><?php echo e($postNewPrimary->title); ?></h2>
                        </a>
                        <div><?php echo e($postNewPrimary->description_short); ?></div>
                    </div>
                    <img src="<?php echo e(PUBLIC_PATH); ?>/image/new.gif" class="gif-new" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="news-board-right">
                    <div class="row">
                        <?php $__currentLoopData = $postListNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="news-item col-lg-12">
                                <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>"><img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item['thumbnail_img']); ?>" alt=""></a>
                                <div class="short-description">
                                        <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>">
                                            <h3><?php echo e($item['title']); ?></h3>
                                        </a>
                                        <p><?php echo e($item->description_short); ?></p>
                                </div>
                            </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                       
                    </div>
                </div>
            </div>
        </div>
  </div>
  <div class="container box-content-item mt-5">
      <div class="title-topic mb-3">
        <h2>Bản tin rau xanh</h2>
      </div>
      <div class="row">
            <?php $__currentLoopData = $postTopicVegetable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 news-item">
                        <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>" class="news-item-img">
                            <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item['thumbnail_img']); ?>">
                        </a>
                        <p class="news-item-date">Thứ Bảy, 10 tháng 7, 2021</p>
                        <h3>
                            <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>" title="Đi chợ online: Xu hướng lên ngôi mùa dịch Covid-19">Đi chợ online: Xu hướng lên ngôi mùa dịch Covid-19</a>
                        </h3>
                        <div class="article-sum">
                            “Mua hàng online thì cũng chủ yếu mua ở những nơi quen, tin tưởng. Book online rồi nhận vào những giờ cố định như sau giờ đi làm. Hoặc n...
                        </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
  <div class="container box-content-item mt-5">
    <div class="title-topic mb-3">
      <h2>Mẹo vặt cho bạn</h2>
    </div>
    <div class="row">
          <?php $__currentLoopData = $postTopicTips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 news-item">
                      <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>" class="news-item-img">
                          <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($item['thumbnail_img']); ?>">
                      </a>
                      <p class="news-item-date">Thứ Bảy, 10 tháng 7, 2021</p>
                      <h3>
                          <a href="<?php echo e(BASE_URL); ?>tin-tuc/bai-viet/<?php echo e($item->slug); ?>" title="Đi chợ online: Xu hướng lên ngôi mùa dịch Covid-19">Đi chợ online: Xu hướng lên ngôi mùa dịch Covid-19</a>
                      </h3>
                      <div class="article-sum">
                          “Mua hàng online thì cũng chủ yếu mua ở những nơi quen, tin tưởng. Book online rồi nhận vào những giờ cố định như sau giờ đi làm. Hoặc n...
                      </div>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/new/index.blade.php ENDPATH**/ ?>