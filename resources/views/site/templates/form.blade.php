<!--Contact-->

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-lg-12">
      
        <h2 class="site-heading text-black mb-5">Fale  <strong>Conosco</strong></h2>
      
        <form action="#" class="p-5 bg-white">

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

<!--End Contact-->