@extends('adminlte::page')

@section('title', 'CMBRAIN')


@section('content_header')
<div class="title">
    <h3 class="title">Gestão de Informativos</h3>
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
        {!! Form::select('categorias_id', $categorias, null, ['class'=>'form-control form-control-lg']) !!}
        </div>

    <div class="form-group">
        <label>Agendar Data</label>
        {!! Form::date('date', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Data:']) !!}
    </div>

    <div class="form-group">
        <label>Agendar Hora</label>
        {!! Form::time('hour', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Hora:']) !!}
    </div>

    <div class="form-group">
        <label>Destacar?</label>
        {!! Form::checkbox('featured', null) !!}
    </div>


    <div class="form-group">
    {!! Form::text('url', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'URL:'])!!}
    </div>
    <div clas="form-group">
        {!! Form::textarea('description', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Descrição:'])!!}
    </div>

    <div class="form-group">
        <div class=text-right>
    {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
</div>

@stop


<script src="//cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>



