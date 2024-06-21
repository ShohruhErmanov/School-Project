@extends('layouts.site')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Rahbariyat</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Rahbariyat<i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

  <div class="container">
    @foreach ($leaders as $leader)
    <div class="ledadership__content-info">
        <div class="leader__info-image">
            <img src="/images/leaders/{{ $leader->image }}" alt="" class="leadership__info-img">
        </div>
        <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">{{ $leader->title }}</h5>
            <h2 class="leadership__info-titleh2">{{ $leader->name }}</h2>
            <div class="leadership__info-box">
                <div class="box__info">
                    <ul class="leadership__info-list">
                        <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                    </ul>
                    <div class="leadership__info-titles">
                        <h5><b>Telefon :</b></h5>
                        <a href="tel:{{ $leader->contact }}" class="leadership__info-link">{{ $leader->contact }}</a>

                    </div>
                </div>
                <div class="box__info">
                    <ul class="leadership__info-list">
                        <i class="far fa-clock fa-2x leadership__info-icon"></i>
                    </ul>
                    <div class="leadership__info-titles">
                        <h5><b>Qabul :</b></h5>
                        <p>{{ $leader->acceptance }}</p>

                    </div>
                </div>

            </div>

            <div class="leadership__btns">
                <div class="leadership__btn">
                    <a href="" class="leadership__btn-link">Biografiya</a>
                </div>
                <div class="leadership__btn">
                    <a href="" class="leadership__btn-link">Majburiyatlar</a>
                </div>
                <div class="leadership__btn">
                    <a href="" class="leadership__btn-link">Faoliyati</a>
                </div>
            </div>
        </div>


        <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">{{  $leader->biografiya}}</p>

        </div>
        <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">{{  $leader->majburiyatlar}}</p>

        </div>
        <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">{{ $leader->faoliyat }}</p>

        </div>
    </div>
@endforeach
  </div>

@endsection

<style>
    .leadership__content {
        margin: 70px 0;

    }

    .leadership__img {
        max-height: 300px;
        border-radius: 10px;
    }

    .ledadership__content-info {
        display: flex;
        column-gap: 70px;
        flex-wrap: wrap;
        margin-top: 50px;
        border: 1px solid rgb(190, 186, 186);

        padding: 15px;
        border-radius: 10px;
    }

    .leadership__info-img {
        max-height: 400px;
        width: 100%;
        border-radius: 10px;
    }

    .leadership__info-titleh2 {
        color: var(--blue);
    }

    .leadership__infos-info {
        display: flex;
        flex-direction: column;
        row-gap: 25px;
    }

    .leadership__info-box {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .box__info {
        display: flex;
        align-items: center;
        column-gap: 20px;
    }

    .leadership__info-link {
        color: unset;
    }

    .leadership__info-link:hover {
        color: unset;
    }

    .leadership__info-icon {
        color: var(--blue);
    }

    .leadership__btns {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .leadership__btn-link {
        font-size: 20px;
        font-weight: 700;
        background: rgb(231, 236, 245);
        padding: 15px;
        color: var(--blue);
        border-radius: 6px;
    }

    .leadership__btn-link:hover {
        color: var(--blue);
    }

    .leadership__btn {
        margin-top: 40px;
    }

    .leadership__item {
        margin-top: 40px;
        background: #d9d3d3;
        border-radius: 10px;
        padding: 40px;
        display: none;
    }

    .leadership__item.active {
        display: block;
    }

    .leadership__item-title {
        text-align: center;
        padding: 0 0 20px 0;
    }
</style>

@section('js')
    <script>
        let leadershipBtn = [...document.querySelectorAll('.leadership__btn-link')]
        let leadershipItem = [...document.querySelectorAll('.leadership__item')]

        console.log(leadershipItem);

        leadershipBtn[0].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[1].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[1].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[2].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[2].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[0].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[0].style.color = '#fff'
            leadershipItem[1].classList.remove('active')
            leadershipItem[2].classList.remove('active')
            leadershipItem[0].classList.add('active')
        })
        leadershipBtn[1].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[0].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[0].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[2].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[2].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[1].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[1].style.color = '#fff'
            leadershipItem[0].classList.remove('active')
            leadershipItem[2].classList.remove('active')
            leadershipItem[1].classList.add('active')
        })
        leadershipBtn[2].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[0].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[0].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[1].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[1].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[2].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[2].style.color = '#fff'
            leadershipItem[0].classList.remove('active')
            leadershipItem[1].classList.remove('active')
            leadershipItem[2].classList.add('active')
        })


        leadershipBtn[3].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[4].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[4].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[5].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[5].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[3].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[3].style.color = '#fff'
            leadershipItem[4].classList.remove('active')
            leadershipItem[5].classList.remove('active')
            leadershipItem[3].classList.add('active')
        })
        leadershipBtn[4].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[3].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[3].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[5].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[5].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[4].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[4].style.color = '#fff'
            leadershipItem[3].classList.remove('active')
            leadershipItem[5].classList.remove('active')
            leadershipItem[4].classList.add('active')
        })
        leadershipBtn[5].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[3].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[3].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[4].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[4].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[5].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[5].style.color = '#fff'
            leadershipItem[3].classList.remove('active')
            leadershipItem[4].classList.remove('active')
            leadershipItem[5].classList.add('active')
        })

        leadershipBtn[6].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[7].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[7].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[8].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[8].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[6].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[6].style.color = '#fff'
            leadershipItem[7].classList.remove('active')
            leadershipItem[8].classList.remove('active')
            leadershipItem[6].classList.add('active')
        })
        leadershipBtn[7].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[6].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[6].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[8].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[8].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[7].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[7].style.color = '#fff'
            leadershipItem[6].classList.remove('active')
            leadershipItem[8].classList.remove('active')
            leadershipItem[7].classList.add('active')
        })
        leadershipBtn[8].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[6].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[6].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[7].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[7].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[8].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[8].style.color = '#fff'
            leadershipItem[6].classList.remove('active')
            leadershipItem[7].classList.remove('active')
            leadershipItem[8].classList.add('active')
        })


        leadershipBtn[9].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[10].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[10].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[11].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[11].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[9].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[9].style.color = '#fff'
            leadershipItem[10].classList.remove('active')
            leadershipItem[11].classList.remove('active')
            leadershipItem[9].classList.add('active')
        })
        leadershipBtn[10].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[9].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[9].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[11].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[11].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[10].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[10].style.color = '#fff'
            leadershipItem[9].classList.remove('active')
            leadershipItem[11].classList.remove('active')
            leadershipItem[10].classList.add('active')
        })
        leadershipBtn[11].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[9].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[9].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[10].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[10].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[11].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[11].style.color = '#fff'
            leadershipItem[9].classList.remove('active')
            leadershipItem[10].classList.remove('active')
            leadershipItem[11].classList.add('active')
        })


        leadershipBtn[12].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[13].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[13].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[14].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[14].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[12].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[12].style.color = '#fff'
            leadershipItem[13].classList.remove('active')
            leadershipItem[14].classList.remove('active')
            leadershipItem[12].classList.add('active')
        })
        leadershipBtn[13].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[12].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[12].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[14].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[14].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[13].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[13].style.color = '#fff'
            leadershipItem[12].classList.remove('active')
            leadershipItem[14].classList.remove('active')
            leadershipItem[13].classList.add('active')
        })
        leadershipBtn[14].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[12].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[12].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[13].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[13].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[14].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[14].style.color = '#fff'
            leadershipItem[12].classList.remove('active')
            leadershipItem[13].classList.remove('active')
            leadershipItem[14].classList.add('active')
        })


        leadershipBtn[15].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[16].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[16].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[17].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[17].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[15].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[15].style.color = '#fff'
            leadershipItem[16].classList.remove('active')
            leadershipItem[17].classList.remove('active')
            leadershipItem[15].classList.add('active')
        })
        leadershipBtn[16].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[15].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[15].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[17].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[17].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[16].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[16].style.color = '#fff'
            leadershipItem[15].classList.remove('active')
            leadershipItem[15].classList.remove('active')
            leadershipItem[16].classList.add('active')
        })
        leadershipBtn[17].addEventListener('click', function(e) {
            e.preventDefault()
            leadershipBtn[15].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[15].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[16].style.background = 'rgb(231, 236, 245)'
            leadershipBtn[16].style.color = 'rgb(40, 136, 201)'
            leadershipBtn[17].style.background = 'rgb(40, 136, 201)'
            leadershipBtn[17].style.color = '#fff'
            leadershipItem[15].classList.remove('active')
            leadershipItem[16].classList.remove('active')
            leadershipItem[17].classList.add('active')
        });
    </script>
@endsection
