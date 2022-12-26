<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USS | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" title="Favicon" sizes="16x16"/>

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2e7d7272e8.js" crossorigin="anonymous"></script>
    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/lib/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/lib/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/lib/lity.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/lib/swiper.min.css')}}"/>
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    @stack('onPageCss')
</head>
<body>
<!-- ====== start loading page ====== -->
<div id="preloader"></div>
<!-- ====== end loading page ====== -->
@include('root.frontend.components.header')
@yield('content')
@include('root.frontend.components.footer')
<!-- ====== start to top button ====== -->
<a href="#" class="to_top">
    <i class="bi bi-chevron-up"></i>
    <small>top</small>
</a>
<!-- ====== end to top button ====== -->
<!-- ====== javascript ====== -->
<script src="{{asset('assets/js/lib/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('assets/js/lib/jquery-migrate-3.0.0.min.js')}}"></script>
{{--<script src="{{asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/lib/wow.min.js')}}"></script>
<script src="{{asset('assets/js/lib/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/lib/lity.js')}}"></script>
{{--<script src="{{asset('assets/js/lib/swiper.min.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('assets/js/lib/jquery.counterup.js')}}"></script>
<script src="{{asset('assets/js/lib/pace.js')}}"></script>
<script src="{{asset('assets/js/lib/scrollIt.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@stack('onPageJs')
</body>
</html>
