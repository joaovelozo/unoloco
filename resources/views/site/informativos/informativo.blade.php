@extends('site.templates.informativo')


@section('content')

<div class="site-section">
        <div class="container">
            <div class="row mb-8">
                <div class="blog-post">
                    <img src="{{url("assets/uploads/posts/{$post->image}")}}"/>
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    <p class="blog-post-meta">{{$post->created_at}} <a href="#"></a></p>

                    {!! $post->description !!}
                </div><!-- /.blog-post -->

            </div>
        </div>
    </div>

@endsection
