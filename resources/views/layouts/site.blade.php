<!DOCTYPE html>
<html lang="en">

<head>
    <title>29-maktab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='shortcut icon' type='image/x-icon' href='{{ @asset('./images/29-maktab.png') }}' />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ @asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ @asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ @asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ @asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ @asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-map"></span></div>
                            <span class="text">Sirdaryo viloyati Sayxunobod tumani 29-maktab</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane  "></span></div>
                            <span class="text">29-maktab@gmail.com</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-user"></span></div>
                            <a href="" class="text">Ro'yxatdan o'tish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <div class="navbar-items d-flex align-items-center">
                <img src="{{ @asset('./images/29-maktab.png') }}" alt="" width="50">
                <a class="navbar-brand mx-3" href="{{ route('index') }}">29-maktab</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link pl-0">Bosh sahifa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Maktab haqida
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('about') }}">Maktab hayoti</a></li>
                            <li><a class="dropdown-item" href="{{ route('achievement') }}">Maktab yutuqlari</a></li>
                            <li><a class="dropdown-item" href="{{ route('documents') }}">Maktab hujjatlari</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tuzilma
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('leadership') }}">Rahbariyat</a></li>
                            <li><a class="dropdown-item" href="{{ route('teacher') }}">O'qtuvchilar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">Yangiliklar</a></li>
                    <li class="nav-item"><a href="{{ route('holiday') }}" class="nav-link">Tadbirlar</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Aloqa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">BIZ BILAN BOG’LANING</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Sirdaryo Viloyati
                                        Sayxunobod Tumani O'rikzor Mahallasi
                                    </span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+998
                                            99 479 59 82</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">29-maktab@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">MAKTAB HAQIDA</h2>
                        <p>Sirdaryo viloyati Sayxunobod tumani Xalq ta'lim bo'limiga qarashli 29-umumiy o'rta ta'lim
                            maktabi</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">NAVIGATSIYA</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Bosh
                                    sahifa</a></li>
                            <li><a href="#"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Yangiliklar</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>E'lonlar</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Tadbirlar</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Aloqa</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">XARITADAN KO’RINISHI</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6058.586242922537!2d68.954081!3d40.601356!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDM2JzA0LjkiTiA2OMKwNTcnMTQuNyJF!5e0!3m2!1sru!2s!4v1680101894038!5m2!1sru!2s"
                            width="250" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Bog'lanish</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-telegram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>© <a href="{{ route('index') }}">29-maktab</a>. Barcha huquqlar himoyalangan. © Sayt <a href="https://t.me/Ermonov_dev" target="_blenck">Shohruh Ermonov</a> tomonidan yaratilgan</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ @asset('js/jquery.min.js') }}"></script>
    <script src="{{ @asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ @asset('js/popper.min.js') }}"></script>
    <script src="{{ @asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ @asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ @asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ @asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ @asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ @asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ @asset('js/aos.js') }}"></script>
    <script src="{{ @asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ @asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ @asset('js/google-map.js') }}"></script>
    <script src="{{ @asset('js/main.js') }}"></script>
    @yield('js')

</body>

</html>
