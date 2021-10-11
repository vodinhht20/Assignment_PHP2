
<?php $__env->startSection('content'); ?>
<main class="account-page">
    <div class="container">
        <div class="account-main">
            <div class="tab-account">
                <ul>
                    <li class="active"><a href="./login.html">Đăng nhập</a></li>
                    <li><a href="./signin.html">Đăng ký</a></li>
                </ul>
            </div>
            <div class="form-login">
                <form action="" id="login">
                    <div class="form-group">
                        <label for="accEmail">Email</label>
                        <input type="text" class="form-control" id="accEmail" placeholder="Nhập địa chỉ email" required>

                    </div>
                    <div class="form-group">
                        <label for="accPassword">Mật Khẩu</label>
                        <input type="password" class="form-control" id="accPassword" placeholder="Nhập mật khẩu" required>
                        <span class="error-messenger"></span>
                    </div>
                    <div class="form-group">
                        <a href="">Quên mật khẩu ?</a>
                    </div>
                    <button type="submit" class="btn btn-dark">Đăng nhập</button>
                </form>
                <div id="notify"></div>
            </div>
            <div class="line-break mt-4">
                <span>hoặc đăng nhập bằng</span>
            </div>

            <div class="login-social-network mt-5 mb-5">
                <a href="javascript:void(0)" onclick="loginFacebook()" class="login-facebook"><img src="./public/image/fb-btn.svg" alt=""></a>
                <a href="javascript:void(0)" class="login-google"><img src="./public/image/gp-btn.svg" alt=""></a>
            </div>
        </div>

    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/auth/signin.blade.php ENDPATH**/ ?>