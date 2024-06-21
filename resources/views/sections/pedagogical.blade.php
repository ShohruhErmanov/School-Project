<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/schoolstatic.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <h2 class="mb-4"><span  style="color: white;">MAKTAB PEDAGOGIK JAMOASI TARKIBI</h2>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="row d-md-flex align-items-center">
                    @foreach ($pedagogicals as $pedagogical)
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong style="color: white;" class="number" data-number="{{ $pedagogical->number }}">0</strong>
                                <span style="color: white;">{{ $pedagogical->title }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
