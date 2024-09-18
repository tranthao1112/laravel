@extends('Master')
@section('main')
<div class="container mt-3">
  <h2>Giỏ hàng</h2>
  <a href="{{route('index')}}" class="btn btn-dark">Trở lại</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th style="width: 250px">Số lượng</th>
        <th>Thành tiền</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cart->items as $p )
        <form action="{{route('update.cart')}}" method="post">
        <tr>
          <td>{{$p->tensp}}</td>
          <td><img src="{{$p->hinhanh}}" width="100px"></td>
          <td>
            {{number_format($p->giasp)}}VND
          </td>
          <td>
            <input type="number" value="{{$p->Soluong}}" name="sl" style="width:90px">
            <input type="hidden" value="{{$p->Ma}}" name="ma">
            <button type="submit" class="btn btn-success" style="margin-left:30px">Cập nhật</button>
          </td>
          <td>{{number_format($p->Soluong * $p->giasp)}}VND</td>
          <td>
            <a href="{{route('delete.cart',$p->Ma)}}" class="btn btn-danger">Xoá</a>
          </td>
        </tr>
        @METHOD('PUT')
        @csrf
      </form>
        @endforeach
        <tr>
        <th colspan="3">Tổng số lượng: </th>
        <th>{{number_format($cart->Tongsl)}}</th>
      </tr>
        <tr>
        <th colspan="4">Tổng tiền: </th>
        <th>{{number_format($cart->Tongtien)}}VND</th>
      </tr>
      </tbody>
    </table>
    <form action="{{route('clear.cart')}}" method="post">
    @METHOD('PUT')
    @csrf
      <button type="submit" class="btn btn-danger">Xoá giỏ hàng</button>
      <a href="{{route('index')}}" class="btn btn-info">Tiếp tục mua</a>
      <a href="{{route('order.checkout')}}" class="btn btn-primary">đặt hàng</a>
    </form>
</div>
@stop