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
                                <input type="" class="form-control" id="" name="tenloai" placeholder="">
                            </div>
                        <div class="form-group">
                            <label >Danh Mục</label>
                            <div class="form-group">
                                <select class="form-control" name="parentid" id="">
                                    <option value="0">ROOT</option>
                                    <?php showCategories($cate) ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Xuất Xứ</label>
                            <input type="" class="form-control" name="xuatxu" id="exampleInputPassword1" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection
<?php
function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->ParentId == $parent_id)
        {
            echo "<option value='$item->id'>$char $item->tenloai</option>";
            unset($categories[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->id, $char.'---');
        }
    }
}

?>

