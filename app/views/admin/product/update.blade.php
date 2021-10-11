@extends('layout.admin.main')
@section('content')
<div class="container mt-5">
    <h1>Sửa Sản Phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" required>
        </div>
        <div class="form-group">
            <label for="">Ảnh Sản Phẩm</label>
            <input type="file" name="image" id="upFile" class="form-control" accept=".jpg, .jpeg, .png, .jfif" >
            <img id="outputImg" src="{{PUBLIC_PATH}}image/{{$product->image}}"  style="width: 100px; padding: 5px;"/>	
        </div>
        <div class="form-group">
            <label for="">Discout</label>
            <input type="number" name="discount" class="form-control" value="{{$product->discount}}" required>
        </div>
        <div class="form-group">
            <label for="">Loại Hàng</label>
            <select type="text" name="category" id="val-category" class="form-control" required>
                <option value="">-- Chọn Loại Hàng --</option>
                @foreach ($categories as $item)
                <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{$product->description}}" required>
        </div>
        <button name="id" class="btn btn-primary text-center"">Thêm Mới</button>
    </form>
</div>
<script>
   document.querySelector('#val-category').value = {{$product->category_id}};
</script>
@endsection
@extends('layout.admin.showUpfile')
