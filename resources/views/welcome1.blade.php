<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>



<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>SMA N 1 WITAPONDA</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{url('/')}}/user-them/asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="{{url('/')}}/user-them/css/settings.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{url('/')}}/user-them/css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/user-them/css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/user-them/css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/user-them/css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/user-them/css/animate.css" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/user-them/css/colors/red.css" media="screen" />



  <!-- Margo JS  -->
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.migrate.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/modernizrr.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.appear.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/count-to.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.textillate.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/smooth-scroll.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/skrollr.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="{{url('/')}}/user-them/js/jquery.slicknav.js"></script>    

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">
    <header class="clearfix">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <ul class="contact-details">
                <li><a href="{{url('/')}}/user-them/#"><i class="fa fa-map-marker"></i>  Jl. Pongtiku No. 20</a>
                </li>
                <li><a href="{{url('/')}}/user-them/#"><i class="fa fa-envelope-o"></i> smansawipon@gmail.com</a>
                </li>
                <li><a href="{{url('/')}}/user-them/#"><i class="fa fa-phone"></i> 0823-4815-5869</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="{{url('/')}}/user-them/#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="{{url('/')}}/user-them/#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="{{url('/')}}/user-them/#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="{{url('/')}}/user-them/#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="{{url('/')}}/user-them/#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="{{url('/')}}/user-them/#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="{{url('/')}}/user-them/#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="{{url('/')}}/user-them/#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="{{url('/')}}/user-them/#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="{{url('/')}}/user-them/#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
              <img alt="" src="{{url('/')}}/user-them/images/wipon.svg">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="{{url('/')}}">Home</a>
              </li>
              <li>
                <a href="#">Profile</a>
                <ul class="dropdown">
                  <li><a href="{{url('sejarah-sekolah')}}">Sejarah Singkat</a>
                  </li>
                  <li><a href="{{url('visi-misi')}}">Visi & Misi</a>
                  </li>
                  <li><a href="{{url('struktur-organisasi')}}">Struktur Organisasi</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Galery</a>
                <ul class="dropdown">
                  <li><a href="{{url('galery-foto')}}">Galery Foto</a>
                  </li>
                  <li><a href="{{url('galery-video')}}">Galery Video</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{url('berita-sekolah')}}">Berita</a>
              </li>
              <li>
                <a href="{{url('hubungi-kami')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="{{url('/')}}/user-them/index.html">Home</a>
            <ul class="dropdown">
              <li><a class="active" href="{{url('/')}}/user-them/index-01.html">Home Version 1</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-02.html">Home Version 2</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-03.html">Home Version 3</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-04.html">Home Version 4</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-05.html">Home Version 5</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-06.html">Home Version 6</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-07.html">Home Version 7</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-08.html">HSome Version 8</a>
              </li>
              <li><a href="{{url('/')}}/user-them/index-09.html">Home Version 9</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/')}}/user-them/about.html">Pages</a>
            <ul class="dropdown">
              <li><a href="{{url('/')}}/user-them/about.html">About</a>
              </li>
              <li><a href="{{url('/')}}/user-them/services.html">Services</a>
              </li>
              <li><a href="{{url('/')}}/user-them/right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="{{url('/')}}/user-them/left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="{{url('/')}}/user-them/404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/')}}/user-them/#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="{{url('/')}}/user-them/tabs.html">Tabs</a>
              </li>
              <li><a href="{{url('/')}}/user-them/buttons.html">Buttons</a>
              </li>
              <li><a href="{{url('/')}}/user-them/forms.html">Forms</a>
              </li>
              <li><a href="{{url('/')}}/user-them/action-box.html">Action Box</a>
              </li>
              <li><a href="{{url('/')}}/user-them/testimonials.html">Testimonials</a>
              </li>
              <li><a href="{{url('/')}}/user-them/latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="{{url('/')}}/user-them/latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="{{url('/')}}/user-them/pricing.html">Pricing Tables</a>
              </li>
              <li><a href="{{url('/')}}/user-them/animated-graphs.html">Animated Graphs</a>
              </li>
              <li><a href="{{url('/')}}/user-them/accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/')}}/user-them/portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="{{url('/')}}/user-them/portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="{{url('/')}}/user-them/portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="{{url('/')}}/user-them/portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="{{url('/')}}/user-them/single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/')}}/user-them/blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="{{url('/')}}/user-them/blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="{{url('/')}}/user-them/blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="{{url('/')}}/user-them/single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/')}}/user-them/contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
 
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/bg1x.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Selamat Datang Di <strong>Website</strong></span>
                </h2>
                <h3 class="animated7 white">
                  <span>Sma N 1  <strong>Witaponda</strong></span>
                </h3>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Sma N 1 <strong>Witaponda</strong></span>
                </h2>
                <h3 class="animated5">
                  <span>Terakreditasi A</span>
                </h3>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/bg3.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                  <span>Sma N 1  <strong>Witaponda</strong></span>
                </h2>
                <h3 class="animated8 white">
                  <span>Meraih Juara 1 Loba Baca Quran Tingkat Profinsi</span>
                </h3>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="{{url('/')}}/user-them/#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="{{url('/')}}/user-them/#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Services Section -->
    <div class="section service">
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <a href="{{url('berita-sekolah')}}">
              <div class="service-icon">
                <i class="fa fa-newspaper-o icon-large"></i>
              </div>
              <div class="service-content">
                <h4><a href="">Berita Sekolah</a></h4>
              </div>
            </a>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <a href="{{url('galery-foto')}}">
              <div class="service-icon">
                <i class="fa fa-image icon-large"></i>
              </div>
              <div class="service-content">
                <h4><a href="">Galeri Foto</a></h4>
              </div>
            </a>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <a href="{{url('galery-video')}}">
              <div class="service-icon">
                <i class="fa fa-video-camera icon-large"></i>
              </div>
              <div class="service-content">
                <h4><a href="">Galeri Video</a></h4>
              </div>
            </a>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
            <div class="service-icon">
              <i class="fa fa-code icon-large"></i>
            </div>
            <div class="service-content">
              <h4><a href="">Ekstrakurikuler</a></h4>
            </div>
          </div>
          <!-- End Service Icon 4 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->



    <!-- Start Testimonials Section -->
    <div>
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <!-- Start Clients Carousel -->
            <div class="our-clients">

              <!-- Classic Heading -->
              <h2 class="classic-title"><span class="dongker-color"> Berita Terbaru </span><i class="fa fa-paper-plane-o "></i>
              </h2>

              <div class="row pricing-tables">
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="pricing-table">
                    <img class="img-thumbnail" src="{{asset('images/indonesia.png')}}" alt="" />
                  </div>
                  <h5 style="margin-top: 10px;"> <a class="title pull-left" href="#">Read More...</a>
                  </h5>
                  <h6><p style="margin-top: 10px;">Kebakaran jeggot terjadi pada hari rabu 20 oktober 2021</p></h6>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="pricing-table">
                    <img class="img-thumbnail" src="{{asset('images/indonesia.png')}}" alt="" />
                  </div>
                  <h5 style="margin-top: 10px;"> <a class="title pull-left" href="#">Read More...</a>
                  </h5>
                  <h6><p style="margin-top: 10px;">Kebakaran jeggot terjadi pada hari rabu 20 oktober 2021</p></h6>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="pricing-table">
                    <img class="img-thumbnail" src="{{asset('images/indonesia.png')}}" alt="" />
                  </div>
                  <h5 style="margin-top: 10px;"> <a class="title pull-left" href="#">Read More...</a>
                  </h5>
                  <h6><p style="margin-top: 10px;">Kebakaran jeggot terjadi pada hari rabu 20 oktober 2021</p></h6>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="pricing-table">
                    <img class="img-thumbnail" src="{{asset('images/indonesia.png')}}" alt="" />
                  </div>
                  <h5 style="margin-top: 10px;"> <a class="title pull-left" href="#">Read More...</a>
                  </h5>
                  <h6><p style="margin-top: 10px;">Kebakaran jeggot terjadi pada hari rabu 20 oktober 2021</p></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <h2 class="classic-title">
              <span class="dongker-color">Pengumuman <b class="label label-info">#{{count($announcement)}}</b></span>
            </h2>
            <div class="row">
              <div class="col-md-12 service-box service-icon-left-more">
                @foreach ($announcement as $a)
                <div class="service-box service-icon-left-more">
                  <div class="service-icon">
                    <h4><b class="dongker-color">#{{$loop->iteration}}</b></h4>
                  </div>
                  <div class="service-content">
                    <h4><b class="black-color">{!!$a->title!!}</b></h4>
                    <p>{!!$a->description!!}</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="section" style="background:#fff;">
        <div class="container">
 <div class="our-clients">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Happy Clients</span></h4>

            <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

              <!-- Client 1 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 5 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 6 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 7 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

              <!-- Client 8 -->
              <div class="client-item item">
                <a class="zoom lightbox"  href="{{asset('images/indonesia.png')}}"><img src="{{asset('images/indonesia.png')}}" alt="" /></a>
              </div>

            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>


      <!-- Start Footer Section -->
      <footer>
        <div class="container">
          <div class="row footer-widgets">


            <!-- Start Subscribe & Social Links Widget -->
            <div class="col-md-3 col-xs-12">
              <div class="footer-widget mail-subscribe-widget">
                <h4>Get in touch<span class="head-line"></span></h4>
                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                <form class="subscribe">
                  <input type="text" placeholder="mail@example.com">
                  <input type="submit" class="btn-system" value="Send">
                </form>
              </div>
              <div class="footer-widget social-widget">
                <h4>Follow Us<span class="head-line"></span></h4>
                <ul class="social-icons">
                  <li>
                    <a class="facebook" href="{{url('/')}}/user-them/#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="{{url('/')}}/user-them/#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a class="google" href="{{url('/')}}/user-them/#"><i class="fa fa-google-plus"></i></a>
                  </li>
                  <li>
                    <a class="dribbble" href="{{url('/')}}/user-them/#"><i class="fa fa-dribbble"></i></a>
                  </li>
                  <li>
                    <a class="linkdin" href="{{url('/')}}/user-them/#"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a class="flickr" href="{{url('/')}}/user-them/#"><i class="fa fa-flickr"></i></a>
                  </li>
                  <li>
                    <a class="tumblr" href="{{url('/')}}/user-them/#"><i class="fa fa-tumblr"></i></a>
                  </li>
                  <li>
                    <a class="instgram" href="{{url('/')}}/user-them/#"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a class="vimeo" href="{{url('/')}}/user-them/#"><i class="fa fa-vimeo-square"></i></a>
                  </li>
                  <li>
                    <a class="skype" href="{{url('/')}}/user-them/#"><i class="fa fa-skype"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Subscribe & Social Links Widget -->

            <!-- Start Twitter Widget -->
            <div class="col-md-3 col-xs-12">
              <div class="footer-widget twitter-widget">
                <h4>Twitter Feed<span class="head-line"></span></h4>
                <ul>
                  <li>
                    <p><a href="{{url('/')}}/user-them/#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                    <span>28 February 2016</span>
                  </li>
                  <li>
                    <p><a href="{{url('/')}}/user-them/#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                    <span>26 February 2016</span>
                  </li>
                  <li>
                    <p><a href="{{url('/')}}/user-them/#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                    <span>28 February 2016</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Twitter Widget -->


            <!-- Start Flickr Widget -->
            <div class="col-md-3 col-xs-12">
              <div class="footer-widget flickr-widget">
                <h4>Flicker Feed<span class="head-line"></span></h4>
                <ul class="flickr-list">
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-01.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-01.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-02.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-02.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-03.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-03.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-04.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-04.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-05.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-05.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-06.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-06.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-07.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-07.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-08.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-08.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/')}}/user-them/images/flickr-09.jpg" class="lightbox">
                      <img alt="" src="{{url('/')}}/user-them/images/flickr-09.jpg">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer-widget flickr-widget">
                <h4>LOCATION SMA N 1 WITAPONDA<span class="head-line"></span></h4>
                <div class="google-maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.833603941288!2d121.63588991397539!3d-2.216356837971031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9aa819be2fb71d%3A0x70562c70800131da!2sSMAN%201%20wita%20ponda!5e0!3m2!1sen!2sid!4v1581335182004!5m2!1sen!2sid" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-section">
            <div class="row">
              <div class="col-md-6">
                <p>Copyright © 2016 Margo - Designed &amp; Developed by <a href="{{url('/')}}/user-them/http://graygrids.com">GrayGrids</a></p>
              </div>
              <!-- .col-md-6 -->
              <div class="col-md-6">
                <ul class="footer-nav">
                  <li><a href="{{url('/')}}/user-them/#">Sitemap</a>
                  </li>
                  <li><a href="{{url('/')}}/user-them/#">Privacy Policy</a>
                  </li>
                  <li><a href="{{url('/')}}/user-them/#">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- .col-md-6 -->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <a href="{{url('/')}}/user-them/#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <div id="loader">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <script type="text/javascript" src="{{url('/')}}/user-them/js/script.js"></script>
  </div>

</body>

</html>
