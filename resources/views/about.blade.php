@extends('layouts.site')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/scholl5.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Maktab haqida</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Maktab hayoti <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftco-no-pt ftc-no-pb">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                      <div class="text px-4 ftco-animate">
                <h2 class="mb-4">Maktab tarixi</h2>
                          <p>Muhammad al-Xorazmiy nomidagi axborot-kommunikatsiya texnologiyalari yo‘nalishiga oid fanlarni chuqurlashtirib o‘qitishga ixtisoslashtirilgan maktab O‘zbekiston Respublikasi Prezidentining 2017 yil 14 sentabrdagi PQ-3274-sonli “Muhammad al-Xorazmiy nomidagi axborot kommunikatsiya texnologiyalari yo‘nalishiga oid fanlarni chuqurlashtirib o‘qitishga ixtisoslashtirilgan maktabni tashkil etish to‘g‘risida”gi qaroriga muvofiq Toshkent Davlat Iqtisodiyot Universiteti qoshidagi Aniq fanlarga ixtisoslashtirilgan davlat umumta’lim maktabi negizida tashkil etildi.

                            Ixtisoslashtirilgan maktabning asosiy vazifasi etib — axborot-kommunikatsiya texnologiyalarini keng jalb qilgan holda matematika, fizika, informatika va chet tili fanlarini chuqur o‘zlashtirilishiga qaratilgan, o‘quvchilarni dasturlash asoslari, ma’lumotlar bazasini shakllantirish, axborot xavfsizligini ta’minlash bo‘yicha ko‘nikmalarga ega bo’lish, axborot va media hamda intellektual madaniyatni maktab davridan boshlab shakllantirishdan iboratdir.

                            Shuningdek, mazkur sohada yuqori mahoratga ega pedagoglarni hamda mutaxassislarni jalb qilgan holda axborot-kommunikatsiya texnologiyalari sohasining maxsus maktabini yaratish, yosh matematiklar,  fiziklar,  dasturchilar,  ixtirochilar va chet tili bilimdonlaridan iborat o’quvchilar jamoasini tuzish, ularning respublika va xalqaro fan olimpiadalarida muntazam va samarali ishtirokini ta’minlashni tashkil etish maktabning asosiy vazifalaridandir.</p>

                      </div>
                  </div>
                  <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Maktab haqida</h2>
                      <p>Maktabni tashkil etishdan asosiy maqsad — ulug‘ ajdodimiz Muhammad al-Xorazmiyning buyuk va bebaho merosini qadrlash, o‘rganish va tadqiq etish, uni yosh avlod ongiga chuqur singdirish, o‘quvchilarga aniq fanlarning yuksak cho‘qqilarini zabt etish, boshlang‘ich sinflardan boshlab o‘quvchilarning axborot-kommunikatsiya texnologiyalari sohasidagi iqtidorini aniqlash va ulardagi qobiliyatlarini ro‘yobga chiqarish uchun zarur shart-sharoitlar bazasini yaratishdan iboratdir.</p>
                      <div class="row mt-5">
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><i class="fa fa-spoon fa-2x" style="color: white;"></i></div>
                                  <div class="text">
                                      <h3>Maktab oshxonasi</h3>
                                      <p>Maktabda o’quvchilar va xodimlar uchun mo’ljallangan oshxona mavjud</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><i class="fa fa-plus-square fa-2x" style="color: white;"></i></div>
                                  <div class="text">
                                      <h3>Tibbiyot xonasi</h3>
                                      <p>Maktabda favqulodda holatlar va doimiy foydalanish uchun moʻljallangan tibbiyot xonasi mavjud</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><i class="fas fa-laptop fa-2x" style="color: white;"></i></div>
                                <div class="text">
                                    <h3>Kampyuter xonasi</h3>
                                    <p>Maktabda o’quvchilar va xodimlar uchun mo’ljallangan Kampyuter xonasi mavjud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><i class="fas fa-wifi fa-2x" style="color: white;"></i></div>
                                <div class="text">
                                    <h3>Internet</h3>
                                    <p>Maktabda o’quvchilar va xodimlar uchun mo’ljallangan Internet tarmog'i mavjud</p>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

       @include('sections.pedagogical')



@endsection
