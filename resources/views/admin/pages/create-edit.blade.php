@extends('adminlte::page')

@section('title', 'CMBRAIN')


@section('content_header')
<div class="title">
    <h3 class="title">Gestão de Páginas</h3>
</div>
<div class="content">

    @if( isset($errors) && count($errors) > 0)
    <div class="alert danger-warning">
        @foreach($errors ->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @if( isset ($data) )
    {!! Form::model ($data, ['route'=> ['posts.update', $data->id], 'class' =>'form-group', 'files'=>true, 'method' => 'PUT']) !!}
    @else
    {!! Form::open(['route'=>'posts.store', 'class' =>'form-group', 'files'=>true]) !!}
    @endif

    <div class="form-group">
    {!! Form::text('title', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Título:']) !!}
    </div>


    <div class="form-group">
        <label>Selecione a Categoria</label>
        {!! Form::select('pcategoria_id', $pcategorias, null, ['class'=>'form-control form-control-lg']) !!}
    </div>

    <div class="form-group">
    {!! Form::text('url', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'URL:'])!!}
    </div>
    
    <div clas="form-group">
        {!! Form::textarea('description', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Descrição:'])!!}
    </div>

    <div class="form-group">
        <label>Banner Destaque</label>
        {!! Form::file('image', ['class'=>'form-control form-control-lg']) !!}
        </div>

    <div class="form-group">
        <div class=text-right>
    {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
</div>

@section('js')

<script>
  var quill = new Quill('textarea', {
    theme: 'snow'
  });
</script>
@endsection
@stop


