@extends('Master')
@section('main')
<div class="container">
    <div class="row" style="margin-top:50px">
        <div class="col-md-2 col-lg-2">
            <table class="table table-bordered">
                <h2 style="margin-bottom: 40px">Danh mục</h2>
                <thead>
                    <tr>
                        <td><a>Đèn điện</a></td>
                    </tr>
                    <tr>
                        <td><a>Giường ngủ</a></td>
                    </tr>
                    <tr>
                        <td><a>Tủ quần áo</a></td>
                    </tr>
                    <tr>
                        <td><a>Ghế sô pha</a></td>
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
                       <a href="{{route('chitiet',$p->id)}}"><img class="card-img-top" src="{{$p->hinhanh}}"  alt="Card image" ></a> 
                        <div class="card-body">
                            <h4 class="card-title">{{\Str::limit($p->tensp,20)}}</h4>
                            <p>{{number_format($p->giasp)}}VND</p>
                            <div>
                                <a href="{{route('chitiet',$p->id)}}" class="btn btn-primary">Xem chi tiết</a>
                                <a href="{{route('add.cart',$p->id)}}" style="border: 1px solid none;text-decoration:none;border-radius: 5px;background: #fdcc7f;color:black;padding:10px">Thêm giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@stop