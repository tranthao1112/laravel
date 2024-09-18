@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <h2>Danh mục sản phẩm</h2>
  <a class="btn btn-success" href="{{route('themcate')}}">+ Thêm danh mục</a>
  <table class="table">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Loại sản phẩm</th>
        <th>Trạng thái</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sp as $p )
        
        <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->name}}</td>
          <td style="color: #33CCFF;">{{$p->status}}</td>
          <td>
            <form action="{{route('delete',$p->id)}}" method="POST">
              <a href="{{route('category.update',$p->id)}}" class="btn btn-info">Sửa</a>
              <button type="submit" class="btn btn-danger">Xoá</button>
              @method('DELETE')
              @csrf
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@stop