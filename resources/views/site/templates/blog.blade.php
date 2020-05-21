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

   
    <div class="site-blocks-cover overlay inner-page" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Informativos</span>
            <h1>Notícias &amp; Novidades</h1>
          </div>
        </div>
      </div>
    </div>  
    
  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 post-entry">
          <a href="#" class="d-block figure">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          </a>
          <span class="text-muted d-block mb-1">23, January 2019</span>
          <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


      @yield('content')

  </div>
     
  
 
<!--End Contact-->

@include('site.templates.footer')

</div>
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