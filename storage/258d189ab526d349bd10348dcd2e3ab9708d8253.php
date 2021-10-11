
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
            <select type="text" name="category" class="form-control" required>
                <option value="">-- Chọn Loại Hàng --</option>
                <option value="1">Thịt</option>
                <option value="2">Rau củ quả</option>
                <option value="3">Trứng</option>
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\mvc2\app\views/product/create.blade.php ENDPATH**/ ?>