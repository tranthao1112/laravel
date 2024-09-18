@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <h2>Danh sách tài khoản</h2>
  <a class="btn btn-success" href="{{route('user.add')}}" >+ Thêm tài khoản</a>
  <table class="table">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên tài khoản</th>
        <th>Email</th>
        <th>Phân quyền</th>
        <th>TUỳ chọn</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $u )
        
        <tr>
        <td>{{$loop->index +1}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td></td>
          <td>
            <form action="{{route('user.delete',$u->id)}}" method="POST">
              <a class="btn btn-info" href="{{route('user.update',$u->id)}}">Sửa</a>
              @METHOD('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger">Xoá</button>
          </form>
          </td>
        </tr>
        @endforeach
      @csrf
    </tbody>
  </table>
</div>
@stop