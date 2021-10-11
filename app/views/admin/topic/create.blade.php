@extends('layout.admin.main')
@section('content')
<div class="container mt-5">
    <h1>Thêm Chủ Đề</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Chủ Đề</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Trạng thái: </label>
            <select type="text" name="status" class="form-control" required>
                <option value="">-- Chọn Trạng Thái --</option>
                <option value="1">Hoạt Động</option>
                <option value="2">Tạm Đóng</option>
            </select>
        </div>
        <div class="form-group">
            <p>Tác giả: {{$author}}</p>
        </div>
        <button class="btn btn-primary text-center"">Thêm Mới</button>
    </form>
</div>
@endsection
@extends('layout.admin.showUpfile')
