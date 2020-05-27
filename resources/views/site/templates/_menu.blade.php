 <!-- .site-mobile-menu -->
    
    
 <div class="site-navbar-wrap">
  <div class="site-navbar-top">
    <div class="container py-3">
      <div class="row align-items-center">
        <div class="col-6">
         
          <a href="https://www.instagram.com/unolocoservicos/" target="blank" class="p-2 pl-0"><span class="icon-instagram"></span></a>
        </div>
        <div class="col-6">
          <div class="d-flex ml-auto">
            <a href="https://api.whatsapp.com/send?phone=5561983780177&text=Seja%20bem%20vindo%20a%20Unoloco%2C%20como%20podemos%20te%20ajudar%3F" target="_blank" class="d-flex align-items-center ml-auto mr-4">
              <span class="icon-whatsapp mr-2"></span>
              <span class="d-none d-md-inline-block">+55 61 983780177</span>
            </a>
            <a href="#" class="d-flex align-items-center">
              <span class="icon-envelope mr-2"></span>
              <span class="d-none d-md-inline-block">contato@unoloco.com.br</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-navbar">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-2">
          <h1 class="mb-0 site-logo">
              <img src="{{url('assets/site/images/logow.png')}}" />
              <a href="index.html"></a></h1>
        </div>
        <div class="col-10">
          <nav class="site-navigation text-right" role="navigation">
            <div class="container">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                  <a href="{{url('/')}}">Home</a>
                <li><a href="{{url('about')}}">Unoloco</a></li>
                <li class="has-children">
                  <a href="{{url('/')}}">Serviços</a>
                  <ul class="dropdown arrow-top">
                      <li><a href="{{url('suport')}}">Assesoria Contábil</a></li>
                  <li><a href="{{url('juridic')}}">Assesoria Jurídica</a></li>
                  <li><a href="{{url('consult')}}">Consultoria</a></li>
                    <li><a href="{{url('certified')}}">Certificação Digital</a></li>
                  <li><a href="{{url('valuation')}}">Valuation</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="{{url('blog')}}">Informativos</a>
                  <ul class="dropdown arrow-top">
                   @foreach ($errors as $categoria)
                  <li><a href="{{url("/categoria/{$categoria->url}")}}">{{$categoria->name}}</a></li>
                  @endforeach
                  
                  </ul>
                </li>
                <li><a href="{{url('contact')}}">Fale Conosco</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>