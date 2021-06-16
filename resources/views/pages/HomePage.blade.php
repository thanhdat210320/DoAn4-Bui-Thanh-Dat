@extends('master')
@section('content')
@section('js')
   <script src="{{asset('public/fontend/assets/dest/js/addcart.js')}}"></script>
@endsection
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        <!-- THE FIRST SLIDE -->
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                            style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                    src="assets/dest/images/slide1.jpg" data-src="assets/dest/images/slide1.jpg"
                                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>
                        </li>
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                            style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                    src="assets/dest/images/slide2.jpg" data-src="assets/dest/images/slide2.jpg"
                                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide2.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                            style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                    src="assets/dest/images/slide3.jpg" data-src="assets/dest/images/slide3.jpg"
                                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide3.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>

                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible"
                            style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                    src="assets/dest/images/slide3.jpg" data-src="assets/dest/images/slide4.jpg"
                                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide4.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Sản Phẩm Mới</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm Thấy {{ count($new_product) }} Sản Phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <form>
                                                <input type="hidden" value="{{$new->id}}" class="cart_product_id_{{$new->id}}">
                                                <input type="hidden" value="{{$new->tensanpham}}" class="cart_product_name_{{$new->id}}">
                                                <input type="hidden" value="{{$new->anh}}" class="cart_product_img_{{$new->id}}">
                                                <input type="hidden" value="{{$new->giatien}}" class="cart_product_price_{{$new->id}}">
                                                <input type="hidden" value="1" class="cart_product_quantity_{{$new->id}}">
                                                <div class="single-item-header">
                                                    <a href="{{ asset('ProductDetail/' . $new->id) }}"><img
                                                            style="height:200px" src="image/product/{{ $new->anh }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $new->tensanpham }}</p>
                                                    <p class="single-item-price">
                                                        <span>{{ number_format($new->giatien) }}vnđ</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$new->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>
            
                                                    <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $new->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row">
                                    {{ $new_product->links() }}
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Sản Phẩm Hot</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Hiện Có {{ count($hot_product) }} Sản Phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($hot_product as $hot)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{ asset('ProductDetail/' . $hot->id) }}"><img style="height:200px"
                                                        src="image/product/{{ $hot->anh }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $hot->tensanpham }}</p>
                                                <p class="single-item-price">
                                                    <span>{{ number_format($hot->giatien) }}vnđ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart add_to_cart pull-left" data-url="{{asset('add-to-cart/'.$hot->id)}}" href="#"><i class="fa fa-shopping-cart"></i></a>
        
                                                <a class="beta-btn primary" href="{{ asset('ProductDetail/' . $hot->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="space40">&nbsp;</div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->

@endsection
