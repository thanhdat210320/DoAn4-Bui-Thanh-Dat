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
                            <input type="text" name="tensanpham" class="form-control" id="exampleInputEmail"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm </label>
                            <input type="text" name="giatien" class="form-control" id="exampleInputEmail"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Nhập </label>
                            <input type="text" name="gianhap" class="form-control" id="exampleInputEmail"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số Lượng</label>
                            <input type="text" name="soluong" class="form-control" id="exampleInputEmail"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh </label>
                            <input type="file" name="anh" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả </label>
                            <textarea class="form-control" name="mota" id="mota"
                                placeholder="Mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhà Cung Cấp </label>
                            <textarea class="form-control" name="nhacungcap" id="exampleInputPassword1"
                                placeholder="Nội dung sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng Thái</label>
                            <textarea class="form-control" name="new" id="exampleInputPassword1"
                                placeholder="Nội dung sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Màu Sắc</label>
                            <textarea class="form-control" name="mausac" id="exampleInputPassword1"
                                placeholder="Nội dung sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Loại Sản Phẩm</label>
                            <select name="cate_id" class="form-control input-sm m-bot15">
                                <?php showCategory($cates) ?>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>


@endsection
<?php
function showCategory($categories,$parent_id=0,$char=''){
    foreach ($categories as $key => $item) {
        if($item->parentid == $parent_id){
            echo "<option value='$item->id'>$char $item->tenloai</option>";
            unset($categories[$key]);
            showCategory($categories, $item->id, $char.' ---');
        }
    };
};
?>
<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>


