<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php echo $__env->make('layout.admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <?php echo $__env->make('layout.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-page">
            <div class="content mb-5">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('layout.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <?php echo $__env->make('layout.admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scriptUpfle'); ?>


</body>

</html><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/layout/admin/main.blade.php ENDPATH**/ ?>