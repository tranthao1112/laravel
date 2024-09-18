@extends('Master')
@section('main')

<h2 style="margin-top:50px;text-align:center">Danh sách đơn hàng đã đặt mua</h2>
<table class="table table-bordered" style="width:80%;margin:0 auto">
    <thead>
        <tr>
            <th>STT</th>
            <th>Ngày mua</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order )
        
        <tr>
            <td>{{$loop->index +1}}</td>
            <td>{{date_format($order->created_at,'d/m/20y')}}</td>
            <td>{{number_format($order->totalPrice())}}</td>
            <td>
                @if ($order->status == 0)
                <span class="label label-warning">Chờ duyệt</span>
                @elseif ($order->status == 1)
                <span class="label label-primary">Đã duyệt</span>
                @elseif ($order->status == 2)
                <span class="label label-success">Đã hoàn thành</span>
                @else
                <span class="label label-danger">Đã hủy</span>
                @endif
            </td>
            <td>
                <a href="{{ route('order.detail', $order->id) }}" class="btn btn-sm btn-primary">Chi tiết</a>
                <a href="/order/delete_order/{{ $order->id }}" class="btn btn-danger">Huỷ</a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>
@stop