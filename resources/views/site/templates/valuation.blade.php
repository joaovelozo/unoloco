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
    @include('site.templates.image4')

   


     <!-- site-chamada -->
    <div class="site-section about-section">
      <div class="container">
        <div class="row align-items-center mb-5 pb-5">
          <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <span class="experience">
              <span class="years">Valuation</span>
              <span class="caption">Bussines</span>
            </span>
            <img src="{{url('assets/site/images/value.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <span class="sub-title">Valuation</span>
            <h3 class="mb-4">O Valor real.</h3>
            <p class="mb-5">Valuation é o termo em inglês para "Avaliação de Empresas", "Valoração de Empresas" e "Arbitragem de Valor". Esta área de finanças estuda o processo de se avaliar o valor de determinado ativo, financeiro ou real. Avaliações podem ser feitas sobre os ativos ou sobre passivos. </p>
      
          </div>
        </div>

        
      </div>
    </div>
    </div>
  
     <!-- end-site-chamada -->



      @yield('content')
     
  
 

<!--Contact-->

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-lg-12">
      
        <h2 class="site-heading text-black mb-5">Fale  <strong>Conosco</strong></h2>
      
        <form action="#" class="p-5 bg-white">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Nome Completo</label>
              <input type="text" id="fullname" class="form-control" placeholder="Nome Completo">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Email">
            </div>
          </div>

          

          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">Mensagem</label> 
              <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Digite sua solicitação aqui"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Enviar" class="btn btn-primary rounded-0 btn-lg">
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
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