<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/template/soften/ltr/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 00:34:59 GMT -->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software, startup, technology" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Soften - Software & Saas Landing Page</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('landing-and-user/images/favicon.ico') }}" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ asset('landing-and-user/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== bootstrap-icons -->
    <link href="{{ asset('landing-and-user/css/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="{{ asset('landing-and-user/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('landing-and-user/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{ asset('landing-and-user/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== odometer -->
    <link href="{{ asset('landing-and-user/css/odometer.css') }}" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="{{ asset('landing-and-user/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('landing-and-user/css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('landing-and-user/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{ asset('landing-and-user/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{ asset('landing-and-user/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->
    <link href="{{ asset('landing-and-user/css/theme-color/color-2.css') }}" data-style="styles" rel="stylesheet">
    <link href="{{ asset('landing-and-user/css/color-customize/color-customizer.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('loader/style.css')}}">
    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <div class="loader-text">Loading</div>
            </div>
        </div>

        <!-- preloader end -->


        <!--header start-->
        @include('Layout.header')
        <!--header end-->
        <!--body content start-->

        <div class="page-content">
            @yield('content')
            <!--feature start-->
        </div>

        <!--body content end-->





    </div>

    <!-- page wrapper end -->


    <!--color-customizer start-->

    <div class="color-customizer closed">
        <a class="opener" href="#"> <i class="bi bi-palette"></i></a>
        <div class="clearfix color-chooser text-center">
            <h4 class="mb-4">Soften With Awesome Colors</h4>
            <ul class="colorChange clearfix">
                <li class="theme-default" title="theme-default" data-style="color-1"></li>
                <li class="theme-2 selected" title="theme-2" data-style="color-2"></li>
                <li class="theme-3" title="theme-3" data-style="color-3"></li>
                <li class="theme-4" title="theme-4" data-style="color-4"></li>
                <li class="theme-5" title="theme-5" data-style="color-5"></li>
                <li class="theme-6" title="theme-6" data-style="color-6"></li>
                <li class="theme-7" title="theme-7" data-style="color-7"></li>
                <li class="theme-8" title="theme-8" data-style="color-8"></li>
                <li class="theme-9" title="theme-9" data-style="color-9"></li>
                <li class="theme-10" title="theme-10" data-style="color-10"></li>
                <li class="theme-11" title="theme-11" data-style="color-11"></li>
                <li class="theme-12" title="theme-12" data-style="color-12"></li>
            </ul>
            <div class="text-center mt-4">
                <a class="themeht-btn" href="#">Purchase Now</a>
            </div>
        </div>
    </div>

    <!--color-customizer end-->


    <!--back-to-top start-->

    <div class="scroll-top">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!--back-to-top end-->


    <!-- inject js start -->

    <!--== jquery -->
    <script src="{{asset('landing-and-user/js/jquery.min.js')}}"></script>

    <!--== bootstrap -->
    <script src="{{asset('landing-and-user/js/bootstrap.bundle.min.js')}}"></script>

    <!--== jquery-appear -->
    <script src="{{asset('landing-and-user/js/jquery-appear.js')}}"></script>

    <!--== owl-carousel -->
    <script src="{{asset('landing-and-user/js/owl.carousel.min.js')}}"></script>

    <!--== magnific-popup -->
    <script src="{{asset('landing-and-user/js/jquery.magnific-popup.min.js')}}"></script>

    <!--== counter -->
    <script src="{{asset('landing-and-user/js/odometer.min.js')}}"></script>

    <!--== countdown -->
    <script src="{{asset('landing-and-user/js/jquery.countdown.min.js')}}"></script>

    <!--== wow -->
    <script src="{{asset('landing-and-user/js/wow.min.js')}}"></script>

    <!--== color-customize -->
    <script src="{{asset('landing-and-user/js/color-customize/color-customizer.js')}}"></script>

    <!--== theme-script -->
    <script src="{{asset('landing-and-user/js/theme-script.js')}}"></script>

    <!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/template/soften/ltr/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 00:37:51 GMT -->

</html>
