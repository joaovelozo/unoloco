@extends('adminlte::page')

@section('title', 'UNOLOCO')


@section('content_header')
<div class="title">
    <h3 class="title">Gestão de Menus</h3>
</div>
<div class="content">

    @if( isset($errors) && count($errors) > 0)
    <div class="alert danger-warning">
        @foreach($errors ->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @if( isset ($menu) )
    {!! Form::model ($menu, ['route'=> ['menu.update', $menu->id], 'class' =>'form-group', 'files'=>true, 'method' => 'PUT']) !!}
    @else
    {!! Form::open(['route'=>'menu.store', 'class' =>'form-group', 'files'=>true]) !!}
    @endif

    <div class="form-group">
    {!! Form::text('name', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Nome:']) !!}
    </div>

    <div class="form-group">
    {!! Form::text('url', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'URL:'])!!}
    </div>

    <div class="form-group">
        <div class=text-right>
    {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
</div>

@stop

