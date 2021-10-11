
<?php $__env->startSection('content'); ?>
    <div id="toasts">
        
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Quản lý chủ đề</h1>
        <a class="btn btn-info" href="<?php echo e(BASE_URL); ?>admin/chu-de/create">Thêm chủ đề</a>
        <table class="table table-striped mt-2">
            <thead>
                <th>ID</th>
                <th>Tên chủ đề</th>
                <th>Trạng thái</th>
                <th>Tác giả</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id']); ?></td>
                    <td class="topic_name"><?php echo e($row['name']); ?></td>
                    <td class="bnt-torger"><input type="checkbox" class="statusChecked" value="<?php echo e($row['id']); ?>" <?php echo e($row -> StatusBnt()); ?> data-toggle="toggle"></td>
                    <td><?php echo e($row->user->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/topic/index.blade.php ENDPATH**/ ?>