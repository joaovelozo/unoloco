@extends('site.templates.result')

@section('content')

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">

                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5 post-entry">

                        <a href="#" class="d-block figure">
                            <img src="{{url("assets/uploads/posts/{$post->image}")}}" alt="{{$post->title}}" class="img-fluid">
                        </a>
                        <span class="text-muted d-block mb-1">{{$post->title}}</span>
                        <h3><a href="#">{{str_limit($post->description, 100)}} </a></h3>
                        <p><a href="{{url("/informativo/{$post->url}")}}" class="btn btn-primary btn-lg rounded-0">Ver Completo</a></p>

                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
