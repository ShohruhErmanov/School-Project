<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4" style="color: #007bff;">ENG SO'NGGI YANGILIKLAR</h2>
                <p style="color: #007bff;">Maktab hayotidagi eng so'nggi va qiziqarli yangiliklar</p>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url('images/posts/{{ $post->image }}');">
                        <div class="meta-date text-center p-2" style="background: #007bff;">
                            <span class="day">{{ $post->created_at->format('d') }}</span>
                            <span class="mos">{{ $post->created_at->format('F') }}</span>
                            <span class="yr">{{ $post->created_at->format('Y') }}</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                        <p>{{\Str::limit($post->description,100)}}</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">To'liq o'qish<span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
