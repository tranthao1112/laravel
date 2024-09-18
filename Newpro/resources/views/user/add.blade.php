@extends('admin/AdminMaster')
@section('main')
<div class="container mt-3">
    <div style="display:ruby-text">
        <div class="head">
            <h2>Thêm mới tài khoản</h2>
        </div>
        <div class="head">
            <a href="{{route('user.index')}}" class="btn btn-dark">Trở lại</a>
        </div>
    </div>
    <form action="{{route('saveadd')}}" method="post">
        <div class="sp" style="width:80%;display:block;margin: 0 auto;margin-top:50px">
            <div class="mb-3">
                <label for="pwd">Tên tài khoản:</label>
                <input type="text" class="form-control" id="pwd" name="name">
            </div>
            <div class="mb-3">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="pwd" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password</label>
                <input type="text" class="form-control" id="pwd" name="password">
            </div>
            <div class="mb-3">
                <label for="pwd">Confirm Password</label>
                <input type="text" class="form-control" id="pwd" name="password">
            </div>
        <button type="submit" class="btn btn-primary" style="border-radius:4px;display:block;margin:0 auto">Thêm tài khoản</button>
        </div>
        @csrf
    </form>
</div>
@stop