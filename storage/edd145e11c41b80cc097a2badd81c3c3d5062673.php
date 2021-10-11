
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h4>Thông tin tài khoản</h4>
    
    <div class="my-product">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div id="myAvatar">
                    <img id="outputImg" src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($user->avatar); ?>"/>	
                    <label for="upFile"><i class="fas fa-user-edit"></i></label>
                </div>
            </div>
            <input type="file" name="avatar" id="upFile" accept=".jpg, .jpeg, .png, .jfif" >
            <div class="form-group">
                <label for="">Họ & Tên</label>
                <div class="inp-group">
                    <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" required disabled>
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <div class="inp-group">
                    <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" required disabled>
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>
            <div class="form-group">
                <button name="id" id="bnt_update" value="<?php echo e($user->id); ?>" class="btn btn-primary text-center m-auto ">Cập nhật</button>
            </div>
        </form>
    </div>
</div>
<script>
    function prodfile() {
        var bntEdits = document.querySelectorAll('.form-group .inp-group i');
        var inpProfile = document.querySelectorAll('.form-group .inp-group input');
        var iconI = document.querySelectorAll('.form-group i');
        var bnt_update = document.querySelector('#bnt_update');
        bntEdits.forEach((element,index) => {
            element.addEventListener('click', e => {
                inpProfile[index].disabled = false;
            })
        });
        iconI.forEach((element) => {
            element.addEventListener('click', e => {
                bnt_update.style.display = "block";
            })
        });
    }
    prodfile();
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin.showUpfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/admin/user/profile.blade.php ENDPATH**/ ?>