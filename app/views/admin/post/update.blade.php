@extends('layout.admin.main')
@section('content')
<div class="container mt-5">
    <h1>Sửa bài viết</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}" required>
        </div>
        <div class="form-group">
            <label for="">Mô tả ngắn</label>
            <input type="text" name="description_short" class="form-control" value="{{$post->description_short}}" required>
        </div>
        <div class="form-group">
            <label for="">Nội Dung</label>
            <textarea name="content" cols="140" rows="10" required>
                {{$post->content}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Lựa Chọn Chủ Đề</label>
            <select type="text" name="topic_id" id="val-category" class="form-control" required>
                <option value="">-- Chọn chủ đề --</option>
                @foreach ($topics as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail_img" id="upFile" class="form-control" accept=".jpg, .jpeg, .png, .jfif" >
            <img id="outputImg" src="{{PUBLIC_PATH}}image/{{$post->thumbnail_img}}"  style="width: 100px; padding: 5px;"/>	
        </div>
        <button name="id" class="btn btn-primary text-center"">Cập Nhật</button>
    </form>
</div>
<script>
    document.querySelector('#val-category').value = {{$post->topic_id}};
 </script>
@endsection
@extends('layout.admin.showUpfile')
