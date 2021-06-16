@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản Phẩm {{$sanpham->tensanpham}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{asset('Home/')}}">Trang Chủ</a> / <span>Thông Tin Chi Tiết Sản Phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img style="height: 300px" src="image/product/{{$sanpham->anh}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <h2 style="font-size: 40px" class="single-item-title">{{$sanpham->tensanpham}}</h2>
                            <p class="single-item-price">
                                <span>{{number_format($sanpham->giatien)}}vnđ</span>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>
                        <p>Số lượng:</p>
                        <form action="{{asset('save_cart')}}" method="POST">
                            {{ csrf_field() }}
                            <p>Màu Sắc</p>
                                <div class="single-item-options">
                                    <input type="hidden" name="productid_hidden" value="{{$sanpham->id}}">
                                    <select class="wc-select" name="color">
                                        <option>Đen</option>
                                        <option value="1">Xanh</option>
                                        <option value="2">Vàng</option>
                                        <option value="3">Đỏ</option>
                                        <option value="4">Trắng</option>
                                        <option value="5">Hồng</option>
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$sanpham->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô Tả</a></li>
                        <li><a href="#tab-reviews">Nhận Xét</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$sanpham->mota}}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>0 Nhận Xét</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản Phẩm Tương Tự</h4>
                    <div class="row">
                    @foreach ($sp_tuongtu as $sptt)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{asset('ProductDetail/'.$sptt->id)}}"><img style="height:200px" src="image/product/{{$sptt->anh}}" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$sptt->tensanpham}}</p>
                                    <p class="single-item-price">
                                        <span>{{number_format($sptt->giatien)}}vnđ</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$sptt->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>

                                    <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $sptt->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>                                         
                    @endforeach
                    </div>
                    <div class="row">{{$sp_tuongtu->Links()}}</div>
                </div> <!-- .beta-products-list -->
            </div>
                <div class="widget">
                    <h3 class="widget-title">Sản Phẩm Mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($sp_tuongtu as $sptt)
                            
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{asset('ProductDetail/'.$sptt->id)}}"><img
                                    src="image/product/{{$sptt->anh}}" alt=""></a>
                                <div class="media-body">
                                    <p class="beta-sales-name">{{$sptt->tensanpham}}</p>
                                    <span class="beta-sales-price">{{number_format($sptt->giatien)}}vnđ</span>
                                </div>
                            </div>                               
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
    
@endsection