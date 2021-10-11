
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Thêm bài viết</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Mô tả ngắn</label>
            <input type="text" name="description_short" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Nội Dung</label>
            <textarea name="content" cols="140" rows="10" >
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Lựa Chọn Chủ Đề</label>
            <select type="text" name="topic_id" class="form-control" required>
                <option value="">-- Chọn chủ đề --</option>
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail_img" id="upFile" class="form-control" accept=".jpg, .jpeg, .png, .jfif" >
            <img id="outputImg" src=""  style="width: 100px; padding: 5px;"/>	
        </div>
        <div class="form-group">
            <p>Tác giả: <?php echo e($author); ?></p>
        </div>
        <button name="id" class="btn btn-primary text-center"">Thêm Mới</button>
    </form>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.admin.showUpfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/post/create.blade.php ENDPATH**/ ?>