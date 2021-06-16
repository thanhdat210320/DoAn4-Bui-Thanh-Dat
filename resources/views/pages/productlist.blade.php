@extends('master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                {{-- <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($productlist as $prod_l)
                        <li><a href="{{asset('CategoryHome/'.$prod_l->id)}}">{{$prod_l->tenloai}}</a></li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản Phẩm Tìm Thấy</h4>
             
                        <div class="row">
                            @foreach ($prod_list as $prod_l)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{asset('ProductDetail/'.$prod_l->id)}}"><img style="height:200px" src="image/product/{{$prod_l->anh}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$prod_l->tensanpham}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($prod_l->giatien)}}vnd</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$prod_l->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>

                                        <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $prod_l->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach                          
                        </div>
                    </div> <!-- .beta-products-list -->
@endsection