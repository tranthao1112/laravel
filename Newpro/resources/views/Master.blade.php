<html lang="en">

<head>
  <title>My`Decor!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/user.css')}}">
</head>

<body>
  <div class="header">
    <div class="menu">
      <div class="container">

        <div class="row">
          <div class=" col-sm-3 col-md-3 col-lg-3">
            <div class="logo">
              <a class="navbar-brand" href="#" span>MY`</span>Decor<span>!</span></a>
            </div>
          </div>

          <div class=" col-sm-6 col-md-6 col-lg-6">
            <div class="mn">
              <li class="nav-item">
                <a class="nav-link" href="{{route('trangchu.Trangchu')}}">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Thông tin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Sản phẩm</a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
              </li>

            </div>
          </div>
          <div class=" col-sm-3 col-md-3 col-lg-3">
            <div class="search">
              <div id="tnb-google-search-inner-container">
                <input type="text" id="tnb-google-search-input" style="width:150px">
              </div>
              <div id="tnb-google-search-submit-btn">
                <i class="fa fa-search"></i>
              </div>
              <div id="tnb-google-search-submit-btn">
                <a href="{{route('view.cart')}}"><i class="fa fa-shopping-cart "></i></a>
              </div>
              <div id="tnb-google-search-submit-btn">
                <ul>

                  <li class="nav-item dropdown" style="list-style:none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::guard('cus')->user() == null ? '' : Auth::guard('cus')->user()->name}}
                    </a>


                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('order.history')}}">Đơn hàng</a>
                      <a class="dropdown-item" href="{{ route('customer.logout') }}">
                        Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div>
      @yield('main')
    </div>

  </div>

  <div class="footer" style="background: #344943; color:white;margin-top:10px; padding-top:30px;margin-top:230px">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4>HAVE A QUESTION ?</h4>
          <p>Address: 203 Fake St.Moutain View, San Francisco, California, USA</p>
          <p>Hotline: + 0123 456 789</p>
          <p>Email: petsetting@gmail.com</p>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4>EXPLORE</h4>
          <p>Shop All</p>
          <p>Deals</p>
          <p>Most popular</p>
          <p>Deals</p>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4>LINK</h4>
          <p>Contact Us</p>
          <p>Payment Methods</p>
          <p>Shipping & Return</p>
          <p>Privacy Policy</p>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">

          <form action="" method="POST" role="form">
            <h4>NEWSLETTER</h4>
            <p>Sign up to our newsletter for the latest news & discounts</p>
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Your email" />
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>
  </div>


</body>

</html>