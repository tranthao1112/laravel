@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <div style="display:ruby-text">
    <div class="head">
      <h2>Chỉnh sửa sản phẩm</h2>
    </div>
    <div class="head">
      <a href="{{route('index')}}" class="btn btn-dark">Trở lại</a>
    </div>
  </div>
  <form action="{{route('update',$sp->id)}}" method="post" >
    @method('PUT')
    @csrf
    <div class="sp" style="display:grid;grid-template-columns: 1fr 1fr;width:80%;margin:50px;margin-bottom:0">
      <div class="mb-3">
        <label for="pwd">Tên sản phẩm:</label>
        <input type="text" class="form-control" value="{{$sp->tensp}}" id="pwd" name="tensp">
      </div>
      <div class="mb-3">
        <div class="item">
          <label for="pwd">Chọn danh mục:</label>
        </div>
        <div class="item">
          <select name="cate_id" style="width:80%;padding: 0.375rem 0.75rem" >
            <option value="0" >Chọn</option>
            @foreach ($cate as $row)
            <option value="{{$row->Id}}">{{$row->name}}</option>            
            @endforeach
          </select>

        </div>
      </div>
      <div class="mb-3">
        <label for="pwd">Ảnh sản phẩm:</label>
        <input type="text" class="form-control" value="{{$sp->hinhanh}}" id="pwd" name="hinhanh">
      </div>
      <div class="mb-3">
        <label for="pwd">Giá sản phẩm:</label>
        <input type="number" class="form-control" value="{{$sp->giasp}}" id="pwd" name="giasp">
      </div>
    </div>
    <div class="mb-3" style="margin-left:50px;">
      <label for="pwd">Mô tả:</label>
      <input type="text" class="form-control" value="{{$sp->mota}}" id="pwd" name="mota" style="height:200px">
    </div>
    <button type="submit" class="btn btn-primary" style="border-radius:4px;margin-left:50px">Ghi lại</button>
    @csrf
  </form>
</div>
@stop