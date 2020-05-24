'@extends('adminlte::page')

@section('title', 'Unoloco')

@section('content_header')

    <h3>Menu</h3>
    
@stop

@section('content')


<form action="#">

    <div class="class-btn-insert">
    <a href="{{route('menu.create')}}" class="btn btn-success">
        Novo Menu  </a>
    </div>

   
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
    <thead>
        <tr>
            
            <th>Nome</th>
            <th>URL</th>
            <th>Criado  </th>
            <th>Ações</th>
            
        </tr>
    </thead>
    
<tbody>
    @foreach($menus as $menu)
    <tr>
  
        <td>{{$menu->name}}</td>
        <td>{{$menu->url}}</td>
        <td>{{$menu->created_at}}</td>
        <td>
            <div class="btn-group">
                <a href="{{route('menu.edit', $menu->id)}}" class="btn btn-sm btn-primary">EDITAR</a>
                <a href="{{route('menu.show', $menu->id)}}" class="btn btn-sm btn-danger">VISUALIZAR</a>
               
                </div>
            </td>
        
        </tr>
           
                @endforeach
    </tbody>
</table>


{!! $menus->links() !!}

</div>

@endsection
