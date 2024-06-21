<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4" style="color: #007bff;">Tajribali O'qituvchilar</h2>

            </div>
        </div>
        <div class="row">
            @foreach ($teachers as $teacher)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/teachers/{{ $teacher->image }});"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>{{ $teacher->name }}</h3>
                        <span class="position mb-2">{{ $teacher->job }}</span>
                        <div class="faded">
                            <p>{{ $teacher->description }}</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="{{ $teacher->telegram }}"><span class="icon-telegram"></span></a></li>
                                <li class="ftco-animate"><a href="{{ $teacher->facebook }}"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="{{ $teacher->instgram }}"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
