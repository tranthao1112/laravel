@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <h2>Cập nhật danh mục</h2>
  <form action="{{route('cate.up')}}" method="post" style="border: 1px solid #ccc;border-top: 3px solid #00CCFF;width: 69%">
    <div class="mb-3">
    <input type="text" class="form-control" id="name" name="id" style="width:500px;margin-top:10px;margin-left: 10px;display:none" value="{{$sp->id}}">
      <label for="name" style="margin-top:10px;padding-left: 10px">Tên danh mục:</label>
      <input type="text" class="form-control" id="name" name="name" style="width:500px;margin-top:10px;margin-left: 10px" value="{{$sp->name}}">
    </div>
    <div class="mb-3">
      <label for="pwd" style="padding-left: 10px">Chọn trạng thái:</label>
      <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="status" checked style="margin-left: 10px;;width:10%" value="{{$sp->status}}">
      <label class="form-check-label" for="check1" style="padding-left: 10px">Hiển thị</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="status" style="margin-left: 10px;width:10%" value="{{$sp->status}}">
      <label class="form-check-label" for="check2" style="padding-left: 10px ">Ẩn</label>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin:10px">Cập nhật</button>
    <a href="{{route('danhmuc')}}" class="btn btn-primary">Trở lại</a>
    @csrf
    @METHOD('PUT')
  </form>
</div>
@stop