@extends('Master')
@section('main')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h2>Thông tin đặt hàng</h2>
            @if(count($cart->items)>0)
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Họ tên:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email" value="{{$customer->email}}">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone" value="{{$customer->phone}}">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ giao hàng</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address" value="{{$customer->address}}">
                </div>
                <button type="submit" class="btn btn-primary" style="display:block;margin: 0 auto;margin-top:30px">Đặt hàng</button>
                <a href="{{route('view.cart')}}" class="btn btn-dark">Trở lại</a>
            </form>
            @endif
        </div>
        <div class="col-md-8">
            <h2>Giỏ hàng</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
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
                        @endforeach
                        <tr>
                            <th colspan="2">Tổng hoá đơn: </th>
                            <th>{{number_format($cart->Tongsl)}}</th>
                            <th>{{number_format($cart->Tongtien)}}</th>
                        </tr>
                        
                        @METHOD('PUT')
                        @csrf
                    </form>
                </tbody>
            </table>
        </div>
    </div>

    @endsection