
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="text-center">Quản lý sản phẩm</h1>
        <a class="btn btn-info" href="<?php echo e(BASE_URL); ?>admin/san-pham/create">Thêm sản phẩm</a>
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
                    <td><a  class="btn btn-success" href="<?php echo e(BASE_URL); ?>admin/san-pham/update/<?php echo e($row['id']); ?>">Sửa</a>
                        <button value="<?php echo e($row['id']); ?>" class="btn btn-danger bnt-delete-product"  data-toggle="modal" data-target="#exampleModal"">Xóa</button></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                Bạn có chắc chắn muốn xóa vĩnh viễn không? Hành động này không thể khôi phục !
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
        var bntDeleteBin = document.querySelectorAll('.bnt-delete-product');
        var bntAgree = document.querySelector('#agree_confirm');
        bntDeleteBin.forEach((element,index) => {
            element.addEventListener('click',e => {
                bntAgree.href = "<?php echo e(BASE_URL); ?>admin/san-pham/delete/"+element.value;
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/product/index.blade.php ENDPATH**/ ?>