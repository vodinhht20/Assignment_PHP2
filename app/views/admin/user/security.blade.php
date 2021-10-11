@extends('layout.admin.main')
@section('content')
<div class="container mt-5">
    <h4>Bảo mật</h4>
    <p>Đổi mật khẩu</p>
    <div class="mySecurity">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Mật khẩu cũ</label>
                <div class="inp-group">
                    <input type="password" name="passwordOld" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Mật khẩu mới</label>
                <div class="inp-group">
                    <input type="password" name="passwordNew"  id="passWordNew" name="name" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Nhập lại mật khẩu</label>
                <div class="inp-group">
                    <input type="password" id="rePassWordNew" class="form-control" required>
                </div>
            </div>
            <div class="notification">
                {!! isset($msg) ? $msg : '' !!}
            </div>
            <div class="form-group">
                <button name="id" id="bnt_update" onclick="return checkPass()" class="btn btn-primary text-center m-auto ">Cập nhật</button>
            </div>
        </form>
    </div>
</div>
<script>
    function checkPass() {
        var passWordNew = document.querySelector('#passWordNew');
        var rePassWordNew = document.querySelector('#rePassWordNew');
        var notification = document.querySelector('.notification');
            if (passWordNew.value != rePassWordNew.value) {
                notification.innerHTML= '<p class="text-danger">Mật khẩu mới chưa trùng khớp !</p>';
                return false;
            } else {
                return true;
            }
    }
    checkPass();
</script>
@endsection
@extends('layout.admin.showUpfile')
