@extends('layouts.site')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Aloqa</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Aloqa <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Manzil</h3>
                        <p>Sirdaryo Viloyati Sayxunobod Tumani O'rikzor Mahallasi</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Telefon</h3>
                        <p><a href="tel://998994795982">+998994795982</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Email Adres</h3>
                        <p><a href="mailto:29-maktab@gmail.com">29-maktab@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Veb-sayt</h3>
                        <p><a href="{{ route('index') }}">29-maktab.uz</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="#!">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ism" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6058.586242922537!2d68.954081!3d40.601356!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDM2JzA0LjkiTiA2OMKwNTcnMTQuNyJF!5e0!3m2!1sru!2s!4v1680101894038!5m2!1sru!2s"
                        width="700" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
