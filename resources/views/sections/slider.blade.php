<section class="home-slider owl-carousel">
    @foreach ($sliders as $slider)
    <div class="slider-item" style="background-image:url(images/sliders/{{ $slider->image }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">{{ $slider->title }}</span></h1>
          <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">{{ $slider->btnName }}</a></p>
        </div>
      </div>
      </div>
    </div>
    @endforeach
  </section>
