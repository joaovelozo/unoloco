@extends('adminlte::page')

@section('title', 'Unoloco')

@section('content_header')
    <h3>Dashboard</h3>
@stop

@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">   
          <div class="inner">
          <h3>{{$totalPost}}</h3>

            <p>Informativos</p>
          </div>
          <div class="icon">
            <i class="fas fa-blog"></i>
          </div>
        <a href="{{url('admin/anunciantes')}}" class="small-box-footer">Mais Informações <i class=" fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
          <h3>{{$totalPagina}}</h3>

            <p>Páginas</p>
          </div>
          <div class="icon">
            <i class=" fas fa-sitemap"></i>
          </div>
        <a href="{{url('admin/categorias')}}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
     
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
          <h3>{{$totalUser}}</h3>

            <p>Usuários</p>
          </div>
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
        <a href="{{url('admin/users')}}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
     
@stop