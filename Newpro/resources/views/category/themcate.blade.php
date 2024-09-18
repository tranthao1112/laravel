@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
  <h2>Thêm danh mục</h2>
  <form action="{{route('savecate')}}" method="post" style="border: 1px solid #ccc;border-top: 3px solid #00CCFF;width: 69%">
    <div class="mb-3">
      <label for="name" style="margin-top:10px;padding-left: 10px">Tên danh mục:</label>
      <input type="text" class="form-control" id="name" name="name" style="width:500px;margin-top:10px;margin-left: 10px">
    </div>
    <div class="mb-3">
      <label for="pwd" style="padding-left: 10px">Chọn trạng thái:</label>
      <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="status" value="Hiển thị" checked style="margin-left: 10px;width:10%">
      <label class="form-check-label" for="check1" style="padding-left: 10px">Hiển thị</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="status" value="Ẩn" style="margin-left: 10px;width:10%">
      <label class="form-check-label" for="check2" style="padding-left: 10px" >Ẩn</label>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin:10px">Thêm</button>
    <a href="{{route('danhmuc')}}" class="btn btn-primary">Trở lại</a>
    @csrf
  </form>
</div>
@stop