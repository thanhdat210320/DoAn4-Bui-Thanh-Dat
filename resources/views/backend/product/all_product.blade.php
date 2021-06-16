@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt Kê loại Sản Phẩm
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <a href="{{asset('admin/product/add_product')}}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    
                    <form action="{{URL::to('Search')}}">
                        @csrf
                        <input name="name" type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="submit">Go!</button>
                    </span>
                    </form>
                    
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
                        <th>Tên Sản Phẩm</th>
                        <th>Loại Sản Phẩm</th>
                        <th>Giá Tiền</th>
                        <th>Giá Nhập</th>
                        <th>Số Lượng</th>
                        <th>Ảnh</th>
                        <th>Nhà Cung Cấp</th>
                        <th>Mô Tả</th>
                        <th>Thao Tác</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prod as $item)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox"
                                    name="post[]"><i></i></label></td>
                        <td style="vertical-align: middle;">{{$item->id}}</td>
                        <td style="vertical-align: middle;">{{$item->tensanpham}}</td>
                        <td style="vertical-align: middle;">{{$item->cate_id}}</td>
                        <td style="vertical-align: middle;">{{number_format($item->giatien)}} vnd</td>
                        <td style="vertical-align: middle;">{{number_format($item->gianhap)}} vnd</td>
                        <td style="vertical-align: middle;">{{$item->soluong}}</td>
                        <td><img width="100px" src="{{asset('storage/app/upload/'.$item->anh)}}" alt=""></td>
                        <td style="vertical-align: middle;">{{$item->nhacungcap}}</td>
                        <td style="vertical-align: middle;">{!!$item->mota!!}</td>
                        <td style="vertical-align: middle;">
                            <a href="{{asset('admin/product/edit_product/'.$item->id)}}" class="active" ui-toggle-class=""><i
                                class="fa fa-check text-success text-active"></i>
                            </a>
                            <a href="{{asset('admin/product/delet_product/'.$item->id)}}"><i
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
                   {{$prod->links()}}
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection