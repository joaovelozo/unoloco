@extends('adminlte::page')

@section('title', 'Unoloco')

@section('content_header')

    <h3>Usuários</h3>
    
@stop

@section('content')


<form action="#">

    <div class="class-btn-insert">
    <a href="{{route('users.create')}}" class="btn btn-success">
        Novo Usuário </a>
    </div>

   
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
    <thead>
        <tr>
            
            <th>Nome</th>
            <th>Email</th>
            <th>Criado  </th>
            <th>Ações</th>
            
        </tr>
    </thead>
    
<tbody>
    @foreach($users as $user)
    <tr>
   
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>
            <div class="btn-group">
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-primary">EDITAR</a>
                <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-danger">VISUALIZAR</a>
               
                </div>
            </td>
        
        </tr>
           
                @endforeach
    </tbody>
</table>

{!! $users->links() !!}

@endsection


     
