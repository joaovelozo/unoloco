@extends('site.templates.servicos')

@section('content')
<!-- site-chamada -->
<div class="site-section about-section">
    <div class="container">
        <div class="row align-items-center mb-5 pb-5">
            <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <span class="experience">
              <span class="years">{{ $page->firstletter($page->title) }}</span>
              <span class="caption">{{ $page->rest($page->title, true) }}</span>
            </span>
                <img src="{{url('assets/uploads/pages/' . $page->image)}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto">
                <span class="sub-title">{{ $page->rest($page->subtitle) }}</span>
                <h3 class="mb-4">{{ $page->last($page->subtitle) }}</h3>
                <p class="mb-5">{{$page->description}}</p>

            </div>
        </div>

    </div>
</div>

@endsection
