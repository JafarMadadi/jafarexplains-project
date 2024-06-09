<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="image/png">
    <title>Jafar Explains</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>

<!--================ Start Header Area =================-->
@include('frontend.layouts.header')
<!--================ End Header Area =================-->

<!-- Main Content Start -->

@yield('content')

<!--  Main Content End  -->

<!--================Footer Area =================-->
@include('frontend.layouts.footer')
<!--================End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/stellar.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mail-script.js')}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('frontend/assets/js/gmaps.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/theme.js')}}"></script>
</body>

</html>
