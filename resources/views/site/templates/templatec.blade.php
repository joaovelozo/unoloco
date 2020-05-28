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

        <!-- Chat Inicio -->
    
        <script src="//code.jivosite.com/widget/PPmSlBNCRb" async></script>


        <!-- Final Chat -->
        
    
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
    @include('site.templates.image3')

   


  
  
 

<!--Contact-->

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-lg-12">

   
      
        <h2 class="site-heading text-black mb-5">Fale<strong>Conosco</strong></h2>

        <h3>Endereço</h3>
        <p>QND 14 - Lt 16 - Sala 104</p>
        <p>Taguatinga Norte - Brasília - DF</p>
        <p></p>
      
        <hr>
        <form action="{{route('contact')}}" method="POST" class="p-5 bg-white">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              {!! Form::open(['route' => 'contact', 'class' => 'form form-contact']) !!}
              <label class="font-weight-bold" for="fullname">Nome Completo</label>
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Assunto</label>
              {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          

          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">Mensagem</label> 
              {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Enviar" class="btn btn-primary rounded-0 btn-lg">
            </div>
            {!! Form::close() !!}
          </div>


        </form>

       
      </div>
    </div>
  </div>
</div>

<div class="endereço">
   
</div>

<!--End Contact-->

@yield('content')
     

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