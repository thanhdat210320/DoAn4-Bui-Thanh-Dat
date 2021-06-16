@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt Kê loại Sản Phẩm
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <a href="{{asset('admin/category/add_category')}}" class="btn btn-sm btn-primary">Thêm Loại</a>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>Tên Loại</th>
                        <th>Xuất Xứ</th>
                        <th>parentid</th>
                        <th>Mô Tả</th>
                        <th>Chức Năng</th>
                        <th>Thao Tác</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cate as $item)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox"
                                    name="post[]"><i></i></label></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->tenloai}}</td>
                        <td>{{$item->xuatxu}}</td>
                        <td>{{$item->parentid}}</td>
                        <td>{{$item->mota}}</td>
                        <td>
                            <a href="{{asset('admin/category/edit_category/'.$item->id)}}" class="active" ui-toggle-class=""><i
                                class="fa fa-check text-success text-active"></i>
                            </a>
                            <a href="{{asset('admin/category/delet_category/'.$item->id)}}"><i
                                class="fa fa-times text-danger text"></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                   {{$cate->links()}}
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection