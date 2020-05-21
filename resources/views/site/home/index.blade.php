@include('site.templates.template')


@section('content')


<div class="row mb-5">
    @foreach( $postsFeatured as $featured )
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
    <a href="{{url("/posts/{$featured->url}")}}" class="d-block figure">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
      </a>
      <span class="text-muted d-block mb-2">23, January 2019</span>
      <h3><a href="#">Architecture is ready to take the world to the next level </a></h3>
    </div>


@endforeach()
   
    



@endsection