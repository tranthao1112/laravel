@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <h2>Danh sách sản phẩm</h2>
  <a class="btn btn-success" href="{{route('them')}}" >+ Thêm sản phẩm</a>
  <table class="table">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Mô tả</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sp as $p )
        
        <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->tensp}}</td>
          <td><img src="{{$p->hinhanh}}" width="100px"></td>
          <td>{{$p->giasp}} VNĐ</td>
          <td>{{$p->mota}}</td>
          <td>
            <form action="{{route('deletesp',$p->id)}}" method="POST">
              <a class="btn btn-info" href="{{route('sua',$p->id)}}">Sửa</a>
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