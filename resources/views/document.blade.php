@extends('layouts.site')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Maktab hujjatlari</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Maktab hujjatlari <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($documents as $document)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">{{ $document->title }}</h3>

                        </div>

                        <div class="px-4">
                            <p>{{ $document->description }}</p>
                        </div>
                        <p class="button text-center"><a href="/file/{{ $document->document }}" class="btn btn-primary px-4 py-3" download="">Yuklash</a>
                        </p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection
