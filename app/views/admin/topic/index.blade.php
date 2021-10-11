@extends('layout.admin.main')
@section('content')
    <div id="toasts">
        
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Quản lý chủ đề</h1>
        <a class="btn btn-info" href="{{BASE_URL}}admin/chu-de/create">Thêm chủ đề</a>
        <table class="table table-striped mt-2">
            <thead>
                <th>ID</th>
                <th>Tên chủ đề</th>
                <th>Trạng thái</th>
                <th>Tác giả</th>
            </thead>
            <tbody>
            @foreach($topics as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td class="topic_name">{{$row['name']}}</td>
                    <td class="bnt-torger"><input type="checkbox" class="statusChecked" value="{{$row['id']}}" {{$row -> StatusBnt()}} data-toggle="toggle"></td>
                    <td>{{$row->user->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection