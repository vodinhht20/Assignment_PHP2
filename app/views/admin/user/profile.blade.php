@extends('layout.admin.main')
@section('content')
<div class="container mt-5">
    <h4>Thông tin tài khoản</h4>
    
    <div class="my-product">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div id="myAvatar">
                    <img id="outputImg" src="{{PUBLIC_PATH}}image/{{$user->avatar}}"/>	
                    <label for="upFile"><i class="fas fa-user-edit"></i></label>
                </div>
            </div>
            <input type="file" name="avatar" id="upFile" accept=".jpg, .jpeg, .png, .jfif" >
            <div class="form-group">
                <label for="">Họ & Tên</label>
                <div class="inp-group">
                    <input type="text" name="name" value="{{$user->name}}" class="form-control" required disabled>
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <div class="inp-group">
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" required disabled>
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>
            <div class="form-group">
                <button name="id" id="bnt_update" value="{{$user->id}}" class="btn btn-primary text-center m-auto ">Cập nhật</button>
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
@endsection
@extends('layout.admin.showUpfile')
