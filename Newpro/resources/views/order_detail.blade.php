@extends('Master')
@section('main')

<div class="p1" style="margin-top:40px">
    <h4>Thông tài khoản đặt hàng:</h4>
    <table border="1" cellspacing="0" cellpadding="5" style="width:30%" class="table table-bordered">

        <tr>
            <th>Họ tên</th>
            <td>{{$customer->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$customer->email}}</td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
            <td>{{$customer->phone}}</td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>{{$customer->address}}</td>
        </tr>
    </table>
    <div style="width:48%; float: left">
        <h4>Thông tin đơn hàng</h4>

        <table border="1" cellspacing="0" cellpadding="5" style="width:100%" class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã</th>
                    <td>#{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Ngày đặt</th>
                    <td>{{$order->created_at->format('d/m/yy')}}</td>
                </tr>
                <tr>
                    <th>Tổng tiền</th>
                    <td>{{number_format( $order->totalPrice() )}}</td>
                </tr>
                <tr>
                    <th>Trạng thái</th>
                    <td>Chờ duyệt</td>
                </tr>
            </thead>
        </table>
    </div>

    <div style="width:48%; float: right">
        <h4>Thông tin giao hàng</h4>
        <table border="1" cellspacing="0" cellpadding="5" style="width:100%" class="table table-bordered">
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <td>{{$order->name}}</td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td>{{$order->address}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$order->email}}</td>
                </tr>
                <tr>
                    <th>Điện thoại</th>
                    <td>{{$order->phone}}</td>
                </tr>
            </thead>
        </table>
    </div>
    <br>
</div>
<div class="p2">
    <h4 style="margin-top:190px">Chi tiết đơn hàng đã đặt</h4>
    <table border="1" cellspacing="0" cellpadding="5" style="width:60%" class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->details as $detail)
            <tr>
                <td style="text-align:center">{{$loop->index + 1}}</td>
                <td>{{$detail->tensp}}</td>
                <td>{{$detail->soluong}}</td>
                <td>{{ number_format( $detail->gia ) }} đ</td>
                <td>{{ number_format( $detail->gia * $detail->soluong ) }} đ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop