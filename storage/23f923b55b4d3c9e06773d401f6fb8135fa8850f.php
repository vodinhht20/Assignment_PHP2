
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Thêm Chủ Đề</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Chủ Đề</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Trạng thái: </label>
            <select type="text" name="status" class="form-control" required>
                <option value="">-- Chọn Trạng Thái --</option>
                <option value="1">Hoạt Động</option>
                <option value="2">Tạm Đóng</option>
            </select>
        </div>
        <div class="form-group">
            <p>Tác giả: <?php echo e($author); ?></p>
        </div>
        <button class="btn btn-primary text-center"">Thêm Mới</button>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin.showUpfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/topic/create.blade.php ENDPATH**/ ?>