@extends('layouts.site')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Maktab tadbirlari</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>tadbirlar<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach ($holidays as $holiday)
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(images/holidays/{{ $holiday->image }});"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">{{ $holiday->title }}</a></h3>
                    <p class="subheading"><span>Vaqti:</span> {{ $holiday->created_at->format('d F Y') }}</p>
                    <p>{{ $holiday->description }}</p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<div class="card-footer text-center" style="background: none;">
    <nav class="d-inline-block" >
        {{ $holidays->links() }}

    </nav>
</div>

@endsection


