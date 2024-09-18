@extends('Master')
@section('main')
<div class="container">
    <div class="row" style="margin-top:50px">
        <div class="col-md-2 col-lg-2">
            <table class="table table-bordered">
                <h2 style="margin-bottom: 40px">Danh mục</h2>
                <thead>
                    <tr>
                        <td>Đèn điện</td>
                    </tr>
                    <tr>
                        <td>Giường ngủ</td>
                    </tr>
                    <tr>
                        <td>Tủ quần áo</td>
                    </tr>
                    <tr>
                        <td>Ghế sô pha</td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-10 col-lg-10">
            <h2>Sản phẩm</h2>
            <div class="row">
                @foreach ($sp as $p)
                <div class="col-sm-4 col-md-4 col-lg-4" style="margin-top:30px">
                    <div class="card" style="width:350px;height:100%;">
                        <img class="card-img-top" src="{{$p->hinhanh}}" alt="Card image" >
                        <div class="card-body">
                            <h4 class="card-title">{{\Str::limit($p->tensp,20)}}</h4>
                            <p>{{number_format($p->giasp)}}VND</p>
                            <a href="{{route('add.cart',$p->id)}}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@stop