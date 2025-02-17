@extends('layouts.site')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Yangiliklar</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Yangiliklar<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  @include('sections.blog')

  <div class="card-footer text-center" style="background: none;">
    <nav class="d-inline-block" >
        {{ $posts->links() }}

    </nav>
</div>


@endsection
