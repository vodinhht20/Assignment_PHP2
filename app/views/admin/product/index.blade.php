@extends('layout.admin.main')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Quản lý sản phẩm</h1>
        <a class="btn btn-info" href="{{BASE_URL}}admin/san-pham/create">Thêm sản phẩm</a>
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
            @foreach($products as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['price']}}</td>
                    <td><img src="{{PUBLIC_PATH}}image/{{$row['image']}}"  style="width: 100px"></td>
                    <td>{{$row['discount']}}</td>
                    <td>{{$row['description']}}</td>
                    <td><a  class="btn btn-success" href="{{BASE_URL}}admin/san-pham/update/{{$row['id']}}">Sửa</a>
                        <button value="{{$row['id']}}" class="btn btn-danger bnt-delete-product"  data-toggle="modal" data-target="#exampleModal"">Xóa</button></td>
                </tr>
            @endforeach
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
                bntAgree.href = "{{BASE_URL}}admin/san-pham/delete/"+element.value;
            })
        })
    </script>
@endsection