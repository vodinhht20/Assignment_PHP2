
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Thêm Sản Phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Ảnh Sản Phẩm</label>
            <input type="file" name="image" id="upFile" class="form-control" accept=".jpg, .jpeg, .png, .jfif" >
            <img id="outputImg" src=""  style="width: 100px; padding: 5px;"/>	
        </div>
        <div class="form-group">
            <label for="">Discout</label>
            <input type="number" name="discount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Loại Hàng</label>
            <select type="text" name="category_id" class="form-control" required>
                <option value="">-- Chọn Loại Hàng --</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <button name="id" class="btn btn-primary text-center"">Thêm Mới</button>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin.showUpfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/product/create.blade.php ENDPATH**/ ?>