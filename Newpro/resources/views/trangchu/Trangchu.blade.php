@extends('Master')
@section('main')
<div class="trangchu">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="note">
                        <h3>Nội thất nâng tầm không gian sống</h3>
                        <p style="font-size:large;margin-top:20px">Khám phá nội thất thiết kế đương đại mang đến cảm giác thoải mái, sang trọng.
                            Cá nhân hoá trong từng sản phẩm phù hợp với mọi không gian sống.</p>
                        <button style="border-radius:30px;padding:10px;background:#fdcc7f;border:1px solid #fdcc7f;margin-top:30px">Mua sắm ngay</button>
                        <div class="phuluc" style="display:flex; margin-top:40px;font-size:small;justify-content:space-between;">
                            <div class="blog">
                                <h4 style="color:#fdcc7f;">15.000+</h4>
                                <p>Sản phẩm đa dạng</p>
                            </div>
                            <div class="blog">
                                <h4 style="color:#fdcc7f;">10+</h4>
                                <p>Hệ thống cửa hàng</p>
                            </div>
                            <div class="blog">
                                <h4 style="color:#fdcc7f;">40.000+</h4>
                                <p>Khách hàng tin tưởng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="anh">
                        <img style="margin-bottom:30px;margin-left:50px" src="https://bizweb.dktcdn.net/100/501/740/themes/929449/assets/slider_text_image.png?1721265461459">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content">
        <h2 style="text-align: center;margin-top:30px">Top sản phẩm bán chạy</h2>
        <div class="container">
            <div class="row">
                @foreach ($sp as $p)
                <div class="col-sm-4 col-md-4 col-lg-4" style="margin-top:30px">
                    <div class="card" style="width:350px;height:100%;">
                        <a href="{{route('chitiet',$p->id)}}"><img class="card-img-top" src="{{$p->hinhanh}}" alt="Card image"></a>
                        <div class="card-body">
                            <h4 class="card-title">{{\Str::limit($p->tensp,20)}}</h4>
                            <p>{{number_format($p->giasp)}}VND</p>
                            <div>
                                <a href="{{route('chitiet',$p->id)}}" class="btn btn-secondary">Xem chi tiết</a>
                                <a href="{{route('add.cart',$p->id)}}" class="btn btn-primary">Thêm giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{route('index')}}" class="btn btn-light" style="display:block;margin:0 auto;width:10%;margin-top: 40px">Xem tất cả</a>

        </div>

        <div class="container-fluid">
            <h2 style="text-align: center;margin-top:30px">NGUỒN CẢM HỨNG VÔ TẬN</h2>
            <img src="https://bizweb.dktcdn.net/100/501/740/themes/929449/assets/m_banner.jpg?1722482843826" style="width:100%;border-radius:40px;margin-top:30px" title="Nguồn Cảm Hứng Vô Tận">

        </div>
    </div>
    <div class="icon">

        <div class="container-fluid" style="margin-top:50px">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="{{route('index')}}" title="Ant Home">
                        <img style="border-radius:30px" class="lazy mx-auto d-block loaded" src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_1.jpg?1721979591244" data-src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_1.jpg?1721979591244" alt="Ant Home" data-was-processed="true">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="{{route('index')}}" title="Ant Home">
                        <img style="border-radius:30px" class="lazy mx-auto d-block loaded" src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_2.jpg?1721979591244" data-src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_2.jpg?1721979591244" alt="Ant Home" data-was-processed="true">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="{{route('index')}}" title="Ant Home">
                        <img style="border-radius:30px" class="lazy mx-auto d-block loaded" src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_3.jpg?1721979591244" data-src="//bizweb.dktcdn.net/100/396/362/themes/777022/assets/feature_banner_3.jpg?1721979591244" alt="Ant Home" data-was-processed="true">
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection