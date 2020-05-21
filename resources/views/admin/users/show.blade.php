@extends('adminlte::page')

@section('title', 'CMBRAIN')


@section('content_header')
<div class="title">
    <h3 class="title">Usuário:<b>{{ $user->name }}</b></h3>
</div>

    <div class="content">

    @if( isset($errors) && count($errors) > 0)
    <div class="alert alert-warning">
        @foreach($errors ->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <h4><strong>Nome:</strong>{{ $user->name }}</h4>
    <h4><strong>Email:</strong>{{ $user->email }}</h4>
    </div>

    {!! Form::open(['route'=>['users.destroy', $user->id], 'class' =>'form-group', 'method' => 'DELETE']) !!}
   <div class="form-group">
       {!! Form::submit("Apagar: $user->name", ['class' => 'btn btn-danger']) !!}
   </div>
    {!! Form::close() !!}
</div>

@stop
