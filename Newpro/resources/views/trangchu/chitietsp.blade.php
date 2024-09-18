@extends('Master')
@section('main')
<div class="container">
    <div>
        <a href="{{route('index')}}" class="btn btn-dark">Trở lại</a>
        <h2 style="margin-top:30px">Chi tiết sản phẩm</h2>
    </div>
    <div class="row">
        
        <div class=" col-sm-4 col-md-4 col-lg-4">
            <img src="{{$sp->hinhanh}}" style="width:100%">
        </div>
        <div class=" col-sm-1 col-md-1 col-lg-1">

        </div>
        <div class=" col-sm-7 col-md-7 col-lg-7">
            <h2 style="margin-top:30px">{{$sp->tensp}}</h2>
            <h4 style="margin-top:30px">Giá: <span>{{number_format($sp->giasp)}} VND</span></h4>
            <p style="margin-top:30px">{{$sp->mota}}</p>
            <a class="btn btn-primary" href="{{route('add.cart',$sp->id)}}" style="margin-top:30px">Thêm giỏ hàng</a>
        </div>
        
        
    </div>

</div>
@stop