<!DOCTYPE html>
<html lang="en">

<head>
  <title>mBolangRek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/cssp/jquery-ui.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/ZZ/font/flaticon.css">
  <link rel="shortcut icon" href="/Foto Produk/orang.png">

  <link rel="stylesheet" href="/css/aos.css">
  <link rel="stylesheet" href="/css/rangeslider.css">

  <link rel="stylesheet" href="/css/style.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
      <div class="row align-items-center">

        <div class="col-6 col-xl-2">
          <a href="/"><img src="/logoapikpol.png" class="img-circle" alt="Cinque Terre" width="110px"
              height="75px"></a>
          <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">mBolang<span class="text-primary">Rek</span>  </a></h1>
 -->
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li class=""><a href="/daftar-produk">Product</a></li>
              <li class=""><a href="/edit">Pasang Iklan</a></li>
              @guest 
              <li class="ml-xl-3 login"><a href="{{url('/login')}}"><span class="border-left pl-xl-4"></span>Log In</a></li>
              <li><a href="{{url('/register')}}">Daftar</a></li>
              @else
              <li class="ml-xl-3 login"><a href="{{url('/login')}}"><span class="border-left pl-xl-4"></span> {{ Auth::user()->name }}</a></li>
              <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endguest
            </ul>
          </nav>
        </div>

        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
          <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>
      </div>
      <!-- </div> -->

    </header>
    
@yield('container')
    <footer class="site-footer">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top"></div>
            <h2 class="footer-heading mb-2">Copyright &copy; 2019 | <a style="color: white;" href="#">Tentang Kami</a> | <a style="color: white;" href="#">Kontak Kami</a></a> | <a style="color: white;" href="#">Site Map</a></h2>
          </div>
        </div>

      </div>
    </footer>
  </div>

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/rangeslider.min.js"></script>

  <script src="/js/main.js"></script>

</body>

</html>