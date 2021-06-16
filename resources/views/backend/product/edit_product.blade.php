@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm sản phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm </label>
                        <input type="text" name="tensanpham" class="form-control" value="{{$prod->tensanpham}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm </label>
                        <input type="text" name="giatien" class="form-control" value="{{$prod->giatien}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá Nhập </label>
                        <input type="text" name="gianhap" class="form-control" value="{{$prod->gianhap}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số Lượng</label>
                        <input type="text" name="soluong" class="form-control" value="{{$prod->soluong}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh </label>
                        <input type="file" name="anh" class="form-control" value="{{$prod->anh}}" id="exampleInputEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả </label>
                        <input type="text" name="mota" class="form-control" value="{{$prod->mota}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nhà Cung Cấp </label>
                        <input type="text" name="nhacungcap" class="form-control" value="{{$prod->nhacungcap}}" id="exampleInputEmail"
                            placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loại Sản Phẩm</label>
                        <select name="cate_id" value="{{$prod->cate_id}}" class="form-control input-sm m-bot15">
                            <?php showCategory($cates,$prod->cate_id) ?>
                        </select>
                    </div>
                    <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                </form> sửa sản nãy k có cái hàm kia chạy đc nhưng k hiện loại sp gọi mes ae nói cho
            </div>
        </div>
    </section>
</div>
@endsection
<?php
cha = [1,2,3,4,5]
cha = [parentid = 0];
parent[1];
cha [1] id = 5
function showCategory($categories,$cate_id,$parent_id=0,$char=''){
    foreach ($categories as $key => $item) {
        if($item->parentid == $parent_id){
            if($item->id==$cate_id){
                echo "<option selected  value='$item->id'>$char $item->tenloai</option>";
                unset($categories[$key]);
                showCategory($categories,$cate_id,$item->id, $char.' ---');
            }
            else {
                echo "<option  value='$item->id'>$char $item->tenloai</option>";
                unset($categories[$key]);
                showCategory($categories,$cate_id,$item->id, $char.' ---');
            }         
        }
    };
};
?>