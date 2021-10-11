
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="text-center">Thùng rác bài viết</h1>
        <a class="btn btn-info" href="<?php echo e(BASE_URL); ?>admin/trash/bai-viet/restore-all">Khôi phục toàn bộ</a>
        <a class="btn btn-warning" href="<?php echo e(BASE_URL); ?>admin/trash/bai-viet/delete-all">Làm sạch toàn bộ</a>
        <table class="table table-striped mt-2">
            <thead class="post-thead">
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Mô tả ngắn</th>
                <th>Tác giả</th>
                <th>Chủ Đề</th>
                <th>Thumbnail</th>
                <th>Chức năng</th>
            </thead>
            <tbody id="listResultSearch">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['title']); ?></td>
                    <td class="post-content"><?php echo $row['content']; ?></td>
                    <td><?php echo e($row['description_short']); ?></td>
                    <td><?php echo e($row->user->name); ?></td>
                    <td><?php echo e($row->topic->name); ?></td>
                    <td><img width="150" src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($row['thumbnail_img']); ?>" alt=""></td>
                    <td class="bnt-remote">
                        <a href="<?php echo e(BASE_URL); ?>admin/trash/bai-viet/restore/<?php echo e($row['id']); ?> type="button" class="btn btn-success" ">Khôi phục</a>
                        <button value="<?php echo e($row['id']); ?>" type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger bnt-delete-bin">Xóa</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($posts) < 1): ?>
                <tr>
                    <td colspan="7" class="text-center">Thùng rác trống !</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hành động nguy hiểm !</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa vĩnh viễn không ! Hành động này không thể khôi phục
            </div>
            <div class="modal-footer">
                <a href='' id="agree_confirm" type="button" class="btn btn-danger">Đồng ý</a>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Đóng</button>
            </div>
        </div>
        </div>
    </div>
    <script>
        //  href="
        var bntDeleteBin = document.querySelectorAll('.bnt-delete-bin');
        var bntAgree = document.querySelector('#agree_confirm');
        bntDeleteBin.forEach((element,index) => {
            element.addEventListener('click',e => {
                bntAgree.href = "<?php echo e(BASE_URL); ?>admin/trash/bai-viet/delete/"+element.value;
            })
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/trash/post.blade.php ENDPATH**/ ?>