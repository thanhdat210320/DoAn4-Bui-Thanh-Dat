@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Loại Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">                      
                        <form role="form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label >Tên loại</label>
                                <input type="" class="form-control" id="" value="{{$cate->tenloai}}" name="tenloai" placeholder="">
                            </div>
                        <div class="form-group">
                            <label >Xuất Xứ</label>
                            <input type="" class="form-control" value="{{$cate->xuatxu}}" name="xuatxu" id="exampleInputPassword1" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection

