@extends('layout.admin.main')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Thùng rác bài viết</h1>
        <a class="btn btn-info" href="{{BASE_URL}}admin/trash/bai-viet/restore-all">Khôi phục toàn bộ</a>
        <a class="btn btn-warning" href="{{BASE_URL}}admin/trash/bai-viet/delete-all">Làm sạch toàn bộ</a>
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
            @foreach($posts as $row)
                <tr>
                    <td>{{$row['title']}}</td>
                    <td class="post-content">{!! $row['content']!!}</td>
                    <td>{{$row['description_short']}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->topic->name}}</td>
                    <td><img width="150" src="{{PUBLIC_PATH}}image/{{$row['thumbnail_img']}}" alt=""></td>
                    <td class="bnt-remote">
                        <a href="{{BASE_URL}}admin/trash/bai-viet/restore/{{$row['id']}} type="button" class="btn btn-success" ">Khôi phục</a>
                        <button value="{{$row['id']}}" type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger bnt-delete-bin">Xóa</button>
                    </td>
                </tr>
            @endforeach
            @if (count($posts) < 1)
                <tr>
                    <td colspan="7" class="text-center">Thùng rác trống !</td>
                </tr>
            @endif
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
                bntAgree.href = "{{BASE_URL}}admin/trash/bai-viet/delete/"+element.value;
            })
        })
    </script>

@endsection