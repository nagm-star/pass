<!doctype html>
<html lang="ar">

<head>
    {!! SEO::generate(true) !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/carousel/css/style.css') }}">


</head>


<body>

     <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center " style="direction: ltr !important;">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:{{ $settings->email}}">{{ $settings->email}}</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $settings->contact_number }}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ $settings->twitter }}"  target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{ $settings->facebook }}"  target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $settings->youtube }}"  target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">????????????????</a></li>
                <li><a class="nav-link scrollto" href="{{  route('about') }}">???? ??????????????</a></li>
                <li><a class="nav-link scrollto active" href="#news">??????????</a></li>
                <li class="dropdown"><a href="#"><span>???????? ??????????????</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('service.details', 'sudanese')}}" > 
                                ?????????? ???????????????????? 
                            </a>
                        <li>
                        <li>
                            <a href="{{ route('service.details', 'foreigner')}}" > 
                                ?????????? ??????????????
                            </a>
                        <li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>??????????????</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="https://eservice.passport.gov.sd/passport" target="_blank">?????????????? ???????????????????? ????????????</a>
                        </li>
                        <li>
                            <a href="https://eservice.passport.gov.sd/passport/reg/order_status"  target="_blank"> ?????????????????? ???? ???????????? ????????????</a>
                        </li>
                        <li>
                            <a href="https://eservice.passport.gov.sd/aliens" target="_blank">  ???????? ??????????</a>
                        </li>
                        <li><a href="#">
                                ?????????????? ??????????????</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>??????????????</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">???????? ??????????????</a></li>
                        <li><a href="#">??????????????????</a></li>
                        <li class="dropdown"><a href="#"><span>????????????????</span> <i
                                    class="bi bi-chevron-left"></i></a>
                            <ul>
                                <li><a href="{{ route('khartoum') }}"> ???????? ?????????????? </a></li>
                                <li><a href="{{ route('bahri') }}"> ???????? ???????? </a></li>
                                <li><a href="{{ route('omdurman') }}"> ???????? ???? ?????????? </a></li>
                                <li><a href="#"> ?????????? ?????????????? </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{  route('contact') }}">???????? ??????</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->
   
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top" style="background-color: #F6F9FE !important;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <!-- <h3>BizLand<span>.</span></h3> -->
                        <a href="index.html" class="logo"><img src="{{ asset('frontend/img/logo-footer.png') }}" alt=""></a>
                        <p>
                            {{ $settings->address }} <br><br>
                            <strong>??????????:</strong>{{ $settings->contact_number }}<br>
                            <strong>???????? ????????????????:</strong> {{ $settings->email}}<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>?????????? ??????????</h4>
                        <ul>
                            <li><i class="bx bx-chevron-left"></i> <a href="#/">????????????????</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#">???????????? ???????????? </a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="{{ route('projects')}}">??????????????</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#">????????????</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a  href="mailto:{{ $settings->email}}">??????????????</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>??????????</h4>
                        <ul>
                            <li><i class="bx bx-chevron-left"></i> <a href="https://eservice.passport.gov.sd/passport" target="_blank">?????????????? ???????????????????? ???????????? </a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="https://eservice.passport.gov.sd/passport/reg/order_status"  target="_blank">?????????????????? ???? ???????????? ???????????? </a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="https://eservice.passport.gov.sd/aliens" target="_blank">???????? ??????????</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#">?????????????? ??????????????</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>????????????</h4>
                        <p>???????????? ?????? ?????????? ??????????????</p>
                        <div class="social-links mt-3">
                            <a href="{{ $settings->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{ $settings->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{ $settings->youtube }}" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright text-center">
                &copy; <strong><span></span></strong>  ???????????? ???????????? ?????????????? ???????????? ???????????????? ?? ????????????
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script src="{{ asset('frontend/carousel/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/carousel/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/carousel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/carousel/js/main.js') }}"></script>
    
    @yield('scripts')
</body>

</html>