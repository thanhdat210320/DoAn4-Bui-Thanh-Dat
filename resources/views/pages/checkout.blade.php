@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thanh Toán</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{'/home'}}">Trang Chủ</a> / <span>Thanh Toán</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form class="form-horizontal" role="form" method="POST" action="{{URL::to('save_oder')}}" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Địa Chỉ Thanh Toán</h4>
                    <div class="space20">&nbsp;</div>
                    @csrf
                    <div class="form-block">
                        <label for="your_first_name" >Họ Tên</label>
                        <input type="text" id="your_first_name" name="tenkhachang" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa Chỉ</label>
                        <input type="text" id="adress" name="diachi" required>
                    </div>

                    <div class="form-block">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">Số Điện Thoại</label>
                        <input type="text" id="phone" name="sdt" required>
                    </div>
                    
                    <div class="form-block">
                        <label for="notes">Ghi Chú</label>
                        <textarea id="notes" name="ghichu"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5>Đơn Hàng Của Bạn</h5></div>
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                <!--  one item	 -->
                                    
                                <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php
						    $i = 1;
						?>						
                        <?php $total = 0;$stt=0; ?>
						@foreach ($carts as $id => $cart_item)
                        <?php 
                            $total+= $cart_item['price']*$cart_item['quantity'];    
                            $stt+=1;
                        ?>
                        <?php
						$i ++	
						?>                                                                                                                  
						
                            <div class="your-order-item">
                                <div class="media">
                                    <img width="35%" src="{{asset('storage/app/upload/'.$cart_item['image'])}}" alt="" class="pull-left">
                                    <div class="media-body">
                                        <p class="font-large">{{$cart_item['name']}}</p>
                                        <span class="color-gray your-order-info">{{number_format($cart_item['price'])}}vnđ"</span>
                                        <span class="color-gray your-order-info"></span>
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                            <div class="pull-left"><p class="your-order-f18">Tổng Tiền :</p></div>
                                <div class="pull-right"><h5 class="color-black"><?php echo number_format($total)?></h5></div>
                                <div class="clearfix"></div>
                        </div>
                        <div class="your-order-head"><h5>Phương thức thanh toán</h5></div>
                        
                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">Chuyển tiền trực tiếp qua ngân hàng </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã hết trong tài khoản của chúng tôi.
                                    </div>						
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
                                    <label for="payment_method_cheque"> Thanh toán Trực Tiếp</label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                        Thanh toán sau khi nhận được hàng.
                                    </div>						
                                </li>
                                
                                <li class="payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                                    <label for="payment_method_paypal">PayPal</label>
                                    <div class="payment_box payment_method_paypal" style="display: none;">
                                        Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng của mình nếu bạn không có tài khoản PayPal
                                    </div>						
                                </li>
                            </ul>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-info">Thanh Toán</button></div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection