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
    @include('site.templates.image1')

   


    <div class="site-block-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-window font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Certificação Digital</h3>
                <p>Rápido e Seguro, conheça nossos serviços de certificação digital .</p>
              </div>
            </a>   
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-measuring font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Valuation</h3>
                <p>Avaliamos sua empresa com total transparência e responsabilidade.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-interior-design font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Consultoria Integrada</h3>
                <p>Um time de profisionais prontos para te atender não importa o segmento.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

     <!-- site-chamada -->
    <div class="site-section about-section">
      <div class="container">
        <div class="row align-items-center mb-5 pb-5">
          <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <span class="experience">
              <span class="years">Experts.</span>
              <span class="caption">profissionais</span>
            </span>
            <img src="{{url('assets/site/images/idea.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <span class="sub-title">Seu negócio</span>
            <h3 class="mb-4">Sempre evoluindo</h3>
            <p class="mb-5">Conte com a equipe de profissionais mais completa do mercado, seu negócio não para e a gente também não</p>
            <p><a href="{{url('about')}}" class="btn btn-primary btn-lg rounded-0">Sobre Nós</a></p>
          </div>
        </div>

        
      </div>
    </div>
    </div>
  
     <!-- end-site-chamada -->

     <!--Bloco Tarja  -->
     <section class="promo-details section">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center">
                  <img src="{{url('assets/site/images/watch.png')}}" alt="">
              </div>
              <div class="col-md-6">
                  <div class="content mt-100">
                      <h2 class="subheading">Aqui respiramos inovação todo dia </h2>
                      <p>A evolução constante com base no aprimoramento de novas tedências e tecnologias, o que aprimora o atendimento, </p>
                      <p>e mantém a Unoloco como a número 01 em prestação de serviços integrados.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

        <!--End Bloco Tarja  -->

     <!--Title-->
   <!-- 
        Feature start
        ==================== -->
        <section class="feature section">
          <div class="container">
              <div class="row">
                  <div class="heading">
                      <h2>|Valores</h2>
                  </div>
                  <div class="col-md-4">
                      <div class="feature-box">
                          <i class="tf-ion-ios-alarm-outline"></i>
                          <h4>|Experiência</h4>
                          <p>Que tal deixar sua empresa com quem entende de cases de sucesso!</p>
                      </div>
                      <div class="feature-box">
                          <i class="tf-ion-ios-bell-outline"></i>
                          <h4>|Compromisso</h4>
                          <p>Um dos valores que mais buscamos é o compromisso com o seu sucesso.</p>
                      </div>
                      <div class="feature-box">
                          <i class="tf-ion-ios-cart-outline"></i>
                          <h4>|Dedicação</h4>
                          <p>Equipe dedicada com exclusividade em seus devidos seguimentos de atedimento</p>
                      </div>
                  </div>
                  
                  <div class="col-md-4">
                      <div class="feature-box">
                          <i class="tf-ion-ios-alarm-outline"></i>
                          <h4>|Soluções</h4>
                          <p>Não importa o tamanho da sua empresa apresentamos as melhores soluções.</p>
                      </div>
                      <div class="feature-box">
                          <i class="tf-ion-ios-bell-outline"></i>
                          <h4>|Competência</h4>
                          <p>O que nos move rumo a eficiência e a qualidade</p>
                      </div>
                      <div class="feature-box">
                          <i class="tf-ion-ios-cart-outline"></i>
                          <h4>|Estrutura</h4>
                          <p>Venha conhecer nossos serviços e supreenda-se</p>
                      </div>
                  </div>
              </div>
          </div>>
      </section>

     <!--end-title-->


      @yield('content')
     
  <!--Blog-->

<div class="site-section">
 
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <span class="sub-title">Notícias &amp; Novidades</span>
        <h2 class="font-weight-bold text-black mb-5">Informativos</h2>
      </div>
    </div>
      @yield('content')
    <div class="row mt-5 text-center">
      <div class="col-12">
        <p><a href="{{url('blog')}}" class="btn btn-primary btn-lg rounded-0">Todas as Postagens</a></p>
      </div>
    </div>
  </div>
  
</div>


<!--End Blog-->

      <!--Testemunho-->
      <div class="container site-section block-13 testimonial-wrap">

        <div class="row">
          <div class="col-12 text-center">
            <span class="sub-title">O que dizem</span>
            <h2 class="font-weight-bold text-black mb-5">nossos clientes</h2>
          </div>
        </div>
        
        <div class="nonloop-block-13 owl-carousel">
          
          <div class="testimony">
            <img src="{{url('assets/site/images/person_1.jpg')}}" alt="Image" class="img-fluid">
            <h3>Mariana Gusmão</h3>
            <span class="sub-title">Fast Fantasias.</span>
            <p>&ldquo;<em>Atendimento de qualidade com pessoas educadas e dedicadas.</em>&rdquo;</p>
          </div>
        
          <div class="testimony">
            <img src="{{url('assets/site/images/person_2.jpg')}}" alt="Image" class="img-fluid">
            <h3>Heloisa Helena</h3>
            <span class="sub-title">Empreendedora.</span>
            <p>&ldquo;<em>Super recomendo resolveram bastante coisas pra gente em um tempo muito bom.</em>&rdquo;</p>
          </div>
  
          <div class="testimony">
            <img src="{{url('assets/site/images/person_3.jpg')}}" alt="Image" class="img-fluid">
            <h3>Afonso Braz</h3>
            <span class="sub-title">Gerente de Negócios</span>
            <p>&ldquo;<em>Quero parabenizar pelo esforço em resolver problemas que pra gente pareciam impossíveis.</em>&rdquo;</p>
          </div>
  
          <div class="testimony">
            <img src="{{url('assets/site/images/person_4.jpg')}}" alt="Image" class="img-fluid">
            <h3>João Roberto</h3>
            <span class="sub-title">Fundador do PeçasOnline</span>
            <p>&ldquo;<em>Os resultados foram impressionantes, agilidade e competência recomendo.</em>&rdquo;</p>
          </div>
        </div>
      </div>
<!--End-Testemunho-->  

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