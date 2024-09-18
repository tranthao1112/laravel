@extends('Master')
@section('main')
    <div style="border:1px solid none;margin-top:50px;width:60%;text-align:center;margin:0 auto;padding:50px">
        <h2>Đặt hàng thành công</h2>
        <p>Vui lòng kiểm tra email và lịch sử mua hàng của bạn.....</p>
        <a href="{{route('index')}}" class="btn btn-info">Tiếp tục mua hàng</a>
    </div>
@stop