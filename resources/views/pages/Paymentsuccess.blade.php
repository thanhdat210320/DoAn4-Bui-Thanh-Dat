@extends('master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/dest/js/deletecart.js"></script>
<script src="assets/dest/js/editcart.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
	.txtretroshadow {
  text-align: center;
  font-size: 50px;
  color: #2c2c2c;
  background-color: #d5d5d5;
  letter-spacing: .05em;
  text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
  height: 100px;
  padding-top: 40px;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<section class="jumbotron text-center">
    <div class="container">
        <h1 class='txtdeepshadow'>Quý Khách Đã Đặt Hàng Thành Công!</h1>
     </div>
</section>
@endsection