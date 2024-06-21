<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
              <h2 class="mb-4" style="color: #007bff;">GALLEREYA</h2>
              <p style="color: #007bff;">Maktab hayotidan lavhalar</p>
            </div>
          </div>
        <div class="row no-gutters">
            @foreach ($galleries as $gallery)
            <div class="col-md-3 ftco-animate">
                <a href="images/galleries/{{ $gallery->image }}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/galleries/{{ $gallery->image }});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
    </div>
</section>
