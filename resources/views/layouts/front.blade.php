<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Page Title -->
    <title>@yield('title', 'Codeup')</title>
    <!-- Meta Data -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ route('home') }}"><span>Code</span>Up</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="{{route('home')}}" class="logo me-auto me-lg-0"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a> --}}

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">À propos</a></li>
                
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                    
                    <li><a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                    
                    <li><a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'active' : '' }}">Tarifs</a></li>
                    
                    <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
                    
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
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
                        <h3>CodeUp</h3>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="javascript:;" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>CodeUp</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="javascript:;">CodeUp</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="javascript:;" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="javascript:;" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="javascript:;" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="javascript:;" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="javascript:;" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
