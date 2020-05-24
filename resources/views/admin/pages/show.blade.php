@extends('adminlte::page')

@section('title', 'CMBrain')


@section('content_header')
<div class="title">
    <h3 class="title">Post:<b>{{ $data->name }}</b></h3>
</div>

    <div class="content">

    @if( isset($errors) && count($errors) > 0)
    <div class="alert alert-warning">
        @foreach($errors ->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <h4><strong>Titulo:</strong>{{ $data->name }}</h4>
    <h4><strong>URL:</strong>{{ $data->url }}</h4>
    <h4><strong>Descrição:</strong>{{ $data->description }}</h4>
    </div>

    {!! Form::open(['route'=>['posts.destroy', $data->id], 'class' =>'form-group', 'method' => 'DELETE']) !!}
   <div class="form-group">
       {!! Form::submit("Apagar: $data->name", ['class' => 'btn btn-danger']) !!}
   </div>
    {!! Form::close() !!}
</div>

@stop

