@extends('adminlte::page')

@section('title', 'Unoloco')

@section('content_header')

    <h3>Páginas/Serviços</h3>

@stop

@section('content')


<form action="#">

    <div class="class-btn-insert">
    <a href="{{route('pages.create')}}" class="btn btn-success">
        Novo Página </a>
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
    @foreach($data as $page)
    <tr>

        <td>{{$page->title}}</td>
        <td>{{$page->url}}</td>
        <td>{{$page->created_at}}</td>
        <td>
            <div class="btn-group">
                <a href="{{route('pages.edit', $page->id)}}" class="btn btn-sm btn-primary">EDITAR</a>
                <a href="{{route('pages.show', $page->id)}}" class="btn btn-sm btn-danger">VISUALIZAR</a>

                </div>
            </td>

        </tr>

                @endforeach
    </tbody>
</table>

@if( isset($dataForm) )
{!! $data->appends($dataForm)->links() !!}
@else
{!! $data->links() !!}
@endif
</div>

@endsection



