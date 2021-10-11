
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="text-center">Quản lý sản phẩm</h1>
        <a class="btn btn-info" href="<?php echo e(BASE_URL); ?>admin/san-pham/create">Thêm sinh viên</a>
        <table class="table table-striped mt-2">
            <thead>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Hình ảnh</th>
                <th>Khuyến mãi</th>
                <th>Thông tin</th>
                <th colspan="2">Chức năng</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id']); ?></td>
                    <td><?php echo e($row['name']); ?></td>
                    <td><?php echo e($row['price']); ?></td>
                    <td><img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($row['image']); ?>"  style="width: 100px"></td>
                    <td><?php echo e($row['discount']); ?></td>
                    <td><?php echo e($row['description']); ?></td>
                    <td><a  class="btn btn-success" href="<?php echo e(BASE_URL); ?>admin/san-pham/update?id=<?php echo e($row['id']); ?>">Sửa</a></td>
                    <td><a class="btn btn-danger" href="<?php echo e(BASE_URL); ?>admin/san-pham/delete?id=<?php echo e($row['id']); ?>">Xóa</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\mvc2\app\views/admin/index.blade.php ENDPATH**/ ?>