@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt Kê Hóa Đơn
        </div>
        {{-- <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <a href="{{asset('admin/product/add_product')}}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
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
        </div> --}}
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
                        <th>Tên Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Ghi Chú</th>
                        <th>Trạng Thái</th>
                        <th>Tháo Tác</th>   
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($oder as $item)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox"
                                    name="post[]"><i></i></label></td>
                        <td style="vertical-align: middle;">{{$item->id}}</td>
                        <td style="vertical-align: middle;">{{$item->tenkhachang}}</td>
                        <td style="vertical-align: middle;">{{$item->diachi}}</td>
                        <td style="vertical-align: middle;">{{$item->email}}</td>
                        <td style="vertical-align: middle;">{{$item->sdt}}</td>
                        <td style="vertical-align: middle;">{{$item->ghichu}}</td>
                        <td style="vertical-align: middle;">
                            <a href="{{asset('admin/product/edit_product/'.$item->id)}}" class="active" ui-toggle-class=""> <i class="fa fa-check-square" aria-hidden="true"></i>
                            </a>
                            <a href="{{asset('admin/product/delet_product/'.$item->id)}}"><i
                                class="fa fa-times text-danger text"></i>  </a>                           
                        </td>
                        <td>
                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
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
                   {{$oder->links()}}
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection