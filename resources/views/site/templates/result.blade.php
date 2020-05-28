<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unoloco &mdash; Serviços Integrados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{asset('assets/site/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('assets/site/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('assets/site/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('assets/site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/site/css/bootstrap-datepicker.css')}}">


    <link rel="stylesheet" href="{{url('assets/site/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{url('assets/site/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('assets/site/css/style.css')}}">

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

@include('site.templates._menu')
@include('site.templates.image9')

@yield('content')

<!--End Contact-->
</div>

    @include('site.templates.footer')



<!--End_Footer-->

<script src="{{url('assets/site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('assets/site/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{url('assets/site/js/jquery-ui.js')}}"></script>
<script src="{{url('assets/site/js/popper.min.js')}}"></script>
<script src="{{url('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/site/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/site/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('assets/site/js/jquery.countdown.min.js')}}"></script>
<script src="{{url('assets/site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets/site/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('assets/site/js/aos.js')}}"></script>

<script src="{{url('assets/site/js/main.js')}}"></script>

</body>
</html>
