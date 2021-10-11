
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="text-center">Quản lý thành viên</h1>
        <a class="btn btn-info" href="<?php echo e(BASE_URL); ?>admin/san-pham/create">Thêm thành viên</a>
        <table class="table table-striped mt-2">
            <thead>
                <th>ID</th>
                <th>Tên thành viên</th>
                <th>Email</th>
                <td>Avatar</td>
                <th colspan="2">Chức năng</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id']); ?></td>
                    <td><?php echo e($row['name']); ?></td>
                    <td><?php echo e($row['email']); ?></td>
                    <td><img src="<?php echo e($row['avatar']); ?>"  style="width: 100px"></td>
                    <td><a  class="btn btn-success" href="<?php echo e(BASE_URL); ?>admin/san-pham/update/<?php echo e($row['id']); ?>">Sửa</a>
                        <button class="btn btn-dark" value="<?php echo e($row['id']); ?>">Chặn</button></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/user/index.blade.php ENDPATH**/ ?>