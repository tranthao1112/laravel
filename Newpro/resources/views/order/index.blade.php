@extends('admin/AdminMaster')
@section('main')

<div class="p1" style="margin-top:40px">
    <h2>Danh sách đơn hàng đã giao dịch</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Ngày mua</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $or)
            <tr>
                <td class="text-center">{{$loop->index + 1}}</td>
                <td>{{date_format($or->created_at,'d/m/20y')}}</td>
                <td>{{number_format($or->totalPrice())}}đ</td>
                <td>
                    @if ($or->status == 0)
                    <span class="label label-warning">Chờ duyệt</span>
                    @elseif ($or->status == 1)
                    <span class="label label-primary">Đã duyệt</span>
                    @elseif ($or->status == 2)
                    <span class="label label-success">Đã hoàn thành</span>
                    @else
                    <span class="label label-danger">Đã hủy</span>
                    @endif
                </td>
                <form action="{{route('addelete', $or->id)}}" method="post">
                    <td>
                        <a href="{{ route('detail', $or->id) }}" class="btn btn-primary">Sửa</i></a>
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc không ?')">Xoá</i></button>
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop