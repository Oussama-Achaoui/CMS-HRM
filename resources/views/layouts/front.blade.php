<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @php $setting = App\Models\Setting::find($currentLang->id); @endphp
    <!-- Page Title -->
    <title>@yield('title', 'Codeup')</title>
    <!-- Meta Data -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords" content="{{ $setting->keywords }}" />
    <meta name="publisher" content="{{ url()->current() }}">
    <meta name="copyright" content="Copyright (c) {{ $setting->title }}" />
    <meta name="author" content="{{ $setting->author }}" />
    <meta name="contact" content="{{ $setting->contact }}" />

    <meta name="revisit-after" content="7 Days" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="subjects" content="{{ $setting->title }}" />
    <meta name="classification" content="{{ $setting->title }}" />

    <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">



    {{-- @if ($setting->OGgraph_switch == 1)
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image"
            content="{{ route('home') }}{{ $setting->photo ? '/images/media/' . $setting->photo->file : '/public/img/200x200.png' }}" />
        <meta property="og:site_name" content="{{ $setting->author }}" />
        <meta property="og:description" content="@yield('meta')" />
    @endif --}}

    {{-- @if ($setting->analytics_switch == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $setting->analytics }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '{{ $setting->analytics }}');
        </script>
    @endif --}}

    {{-- @if ($setting->facebook_pixel_switch == 1)
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $setting->facebook_pixel }}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id={{ $setting->facebook_pixel }}&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    @endif --}}

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}


    {{-- @if ($currentLang->rtl == 1)
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap"
            rel="stylesheet">
    @else
        <link href="{{ $setting->font }}" rel="stylesheet">
    @endif --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/front/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/libs/fontawesome.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/front/owl.carousel.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/front/niva.css') }}" type="text/css" rel="stylesheet"> --}}
    {{-- @yield('styles') --}}

    {{-- @if ($currentLang->rtl == 1)
        <link href="{{ asset('css/front/rtl.css') }}" type="text/css" rel="stylesheet">
    @endif --}}


    <!-- Inline Styles -->
    {{-- <style>
        body {
            @if ($currentLang->rtl == 1)
                font-family: 'Cairo', sans-serif;
            @else
                font-family: 'Nunito', sans-serif;
            @endif
        }
    </style> --}}

    {{-- @if ($setting->custom_css)
        <style>
            {!! $setting->custom_css !!}
        </style>
    @endif --}}

</head>

<body>
  <!-- ======= Header ======= -->

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="index.html" class="active">Home</a></li>
    
              <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
    
              <li><a href="services.html">Services</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
    
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
          </div>
    
        </div>
      </header>
      <!-- End Header -->
    

    {{-- <header class="header-niva">

        <div id="ct-topbar" class="ct-topbar-layout1">
            <div class="container">
                <div class="row">
                    <div class="ct-topbar-meta">
                        <div class="ct-topbar-item"> <i class="fas fa-phone-square-alt"></i>
                            <label>{{ clean(trans('niva-backend.call_help'), ['Attr.EnableID' => true]) }}</label>
                            <a href="tel:@php echo $setting->phone; @endphp">@php echo $setting->phone; @endphp</a></div>
                        <div class="ct-topbar-item"> <i class="fas fa-envelope-open"></i>
                            <label>{{ clean(trans('niva-backend.mail_us'), ['Attr.EnableID' => true]) }}</label>
                            <a href="mailto:@php echo $setting->contact; @endphp">@php echo $setting->contact; @endphp</a></div>
                        <div class="ct-topbar-item"> <i class="fas fa-map-marker-alt"></i>
                            <label>{{ clean(trans('niva-backend.our_address'), ['Attr.EnableID' => true]) }}</label>
                            <span>@php echo $setting->address; @endphp</span></div>
                    </div>
                    <div class="ct-topbar-social">
                        @if (!empty($currentLang) && count($langs) > 1)
                            <a class="nav-link dropdown-toggle" title="{{ $currentLang->code }}" href="#0"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="flag-lang" width="16" height="16"
                                    src="{{ $currentLang->photo ? '/images/media/' . $currentLang->photo->file : '/public/img/200x200.png' }}">
                                <span>{{ $currentLang->code }}</span>
                            </a>
                            <div class="dropdown-menu">
                                @foreach ($langs as $key => $lang)
                                    <a title="{{ $lang->name }}" class="dropdown-item"
                                        href='{{ route('changeLanguage', $lang->code) }}'> <img class="flag-lang"
                                            width="16" height="16"
                                            src="{{ $lang->photo ? '/images/media/' . $lang->photo->file : '/public/img/200x200.png' }}">
                                        <span>{{ $lang->name }}</span></a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="row w-100">

                    <div class="navbar-header col-6 col-md-2">
                        <a class="navbar-brand" href="{{ url('/') }}" title="{{ $setting->title }}">
                            <img width="123" height="37" class="img-fluid logo-front"
                                src="{{ $setting->photo ? '/images/media/' . $setting->photo->file : '/img/200x200.png' }}"
                                alt="">
                        </a>
                    </div>

                    <div class="navbar-menu  col-md-8">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNiva" aria-controls="navbarNiva" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNiva">
                            <ul class="navbar-nav mr-auto ml-auto">

                                @foreach ($menus->sortBy('order') as $prod)
                                    <li class="nav-item"> <a title="{{ $prod->name }}" class="nav-link"
                                            href="{{ $prod->link }}">{{ $prod->name }}</a> </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>


                    <div class="navbar-buttons  col-6  col-md-2">

                        <div class="navbar-buttons-inner">
                            <div class="link_user_section">
                                <div class="link_user_section_inner">
                                    @if (Auth::guest())
                                        <a href="{{ route('login') }}"><i class="far fa-user"></i></a>
                                    @else
                                        <a href="{{ route('dashboard.index') }}"><i class="far fa-user"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="side_panel_sidebar_parent">
                                <div class="side_panel_sidebar">
                                    <span
                                        class="side_panel_toggle"><span></span><span></span><span></span><span></span></span>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </nav>
    </header> --}}



  <!-- ======= Hero Section ======= -->


    
    

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Company</h3>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container d-md-flex py-4">
    
          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
