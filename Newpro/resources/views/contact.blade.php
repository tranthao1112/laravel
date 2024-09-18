@extends('Master')
@section('main')
<h2 style="text-align: center;margin-top:50px;margin-bottom:30px">Form liên hệ</h2>
<div class="frmlh">
    @if (Session::has('ok'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Successfully!</strong> gửi email thành công
    </div>
    @endif
    <form action="" method="post" role="form">
        @csrf
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" name="name" placeholder="Tên liên hệ">
            @error('name') {{$message}} @enderror
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="email" class="form-control" name="email" placeholder="Email liên hệ">
            @error('email') {{$message}} @enderror
        </div>
        <div class="form-group">
            <label for="">Nội dung liên hệ</label>
            <textarea name="message" style="margin-left:10px; width:80%;margin-top:10px;margin-bottom:40px" class="form-control" placeholder="Nội dung..."></textarea>
            @error('message') {{$message}} @enderror
        </div>
        <button type="submit" class="btn btn-primary" style="display:block;margin: 0 auto">Gửi liên hệ</button>
    </form>
</div>
@stop()