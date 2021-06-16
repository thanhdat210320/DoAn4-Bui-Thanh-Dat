@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($loai as $l)
                        <li><a href="{{asset('CategoryHome/'.$l->id)}}">{{$l->tenloai}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản Phẩm Hiện Có</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm Thấy {{count($sp_theoloai)}} Sản Phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($sp_theoloai as $item)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{asset('ProductDetail/'.$item->id)}}"><img style="height:200px" src="image/product/{{$item->anh}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$item->tensanpham}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($item->giatien)}}vnd</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$item->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>

                                        <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $item->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach                          
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản Phẩm Khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm Thấy {{count($sp_khac)}} Sản Phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                            @foreach ($sp_khac as $sp_k)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{asset('ProductDetail/'.$sp_k->id)}}"><img style="height:200px" src="image/product/{{$sp_k->anh}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp_k->tensanpham}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($sp_k->giatien)}}vnd</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$sp_k->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>

                                        <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $sp_k->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach   
                        </div>
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container --> 
@endsection