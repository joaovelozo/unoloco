@extends('adminlte::page')

@section('title', 'CMBRAIN')


@section('content_header')
<div class="title">
    <h3 class="title">Gestão de Usuários</h3>
</div>
<div class="content">

    @if( isset($errors) && count($errors) > 0)
    <div class="alert alert-warning">
        @foreach($errors ->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif


     @if( isset ($user) )
    {!! Form::model ($user, ['route'=> ['users.update', $user->id], 'class' =>'form-group', 'method' => 'PUT']) !!}
    
    @else

    {!! Form::open(['route'=>'users.store', 'class' =>'form-group', 'files'=>true]) !!}
    @endif

    <div class="form-group">
    {!! Form::text('name', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Nome:']) !!}
    </div>

    <div class="form-group">
    {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Email:'])!!}
    </div>

    <div class="form-group">
    {!! Form::password('password', ['placeholder'=> 'Senha', 'class'=>'form-control form-control-lg']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password_confirmation', ['placeholder'=>'Repita a Senha', 'class'=>'form-control form-control-lg'])!!}
    </div>

    <div class="form-group">
        <div class=text-right>
    {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
</div>

@stop

