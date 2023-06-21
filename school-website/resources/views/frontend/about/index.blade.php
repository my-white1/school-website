@extends('layouts.frontend')

@section('content')
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Biz haqimizda</h2>
                <ul>
                    <li><a href="{{ route('about') }}" title="">Bosh sahifa</a></li>
                    <li><span>Biz haqimizda</span></li>
                </ul>
            </div>
            <!--pager-content end-->
            <h2 class="page-titlee">Shelly</h2>
        </div>
    </section>
    <!--pager-section end-->
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2>Welcome to<br><span>Shelly</span> Maktabi</h2>
                            <p class="mw-100">Qanday qilib o'rganish bo'yicha eng samarali strategiyalarni bilish yangi
                                g'oyalar, tushunchalar va ko'nikmalarga ega bo'lishga harakat qilayotganingizda
                                sa'y-harakatlaringizni maksimal darajada oshirishga yordam beradi. Agar siz ko'p odamlar
                                kabi bo'lsangiz, sizning vaqtingiz cheklangan, shuning uchun sizda mavjud bo'lgan vaqtdan
                                maksimal darajada ta'lim olish muhimdir.


                                vestibulum leo sagittis et.</p><a href="{{ route('classes.index') }}" title=""
                                class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img src="assets/img/abt1.png" alt=""></div>
                        <!--avt-img end-->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img src="assets/img/abt2.png" alt=""></div>
                        <!--avt-img end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="act-inffo"><span>BIZ HAQIMIZDA</span>
                            <h2>Bizning maqsadimiz</h2>
                            <p>Biznig maqsadimiz yosh avlodni yetuk inson qilib tarbiyalash va kelajakda davlatimiz
                                ravnaqiga hissa qo'shib uni jahon
                                miqiyosiga olib chiqadigan insonlar sonini ko'paytirish. </p>
                            <ul>
                                <li>O'zinggizga mos kurs tanlang</li>
                                <li>Kursni yetarlicha bilib bilan tamomlang</li>
                                <li>Kutilgan natija ega bo'ling</li>
                            </ul>
                        </div>
                        <!--act-inffo end-->
                    </div>
                </div>
            </div>
            <!--abt-page-row end-->
        </div>
    </section>
    <!--about-page-content end-->
    <section class="benifit-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Bizning Afzalliklarimiz</h2>
                        <p>Jismoniy kampusga borish va shaxsan o'rganishga o'xshab, virtual sinfda qatnashish va onlayn
                            o'rganishning afzalliklari va kamchiliklari mavjud. Onlayn ta'limning ko'plab afzalliklari
                            orasida virtual ta'lim sizga yanada moslashuvchan jadvaldan bahramand bo'lish imkonini beradi,
                            darajangiz narxini pasaytiradi va ta'limingizni davom ettirish bilan birga martabangizni yanada
                            oson rivojlantirishga imkon beradi.</p><a href="{{ route('contact') }}" title=""
                            class="btn-default">Contacts <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                    <!--section-title end-->
                </div>
                <div class="col-lg-6">
                    <div class="about-us-section p-0">
                        <div class="about-sec">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon5.png" alt="">
                                        <h3>Ajoyib O'qituvchilar</h3>
                                        <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga
                                            muhabbat uyg'otishi mumkin."

                                        </p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon7.png" alt="">
                                        <h3>Global Sertifikat</h3>
                                        <p>
                                            Global sertifikatlashning Compass Assurance Services bilan birlashganini e'lon
                                            qilishdan juda mamnunmiz.</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon9.png" alt="">
                                        <h3> Talabalarni Qo'llab-Quvvatlash Xizmati</h3>
                                        <p>
                                            Grant tanlovi orqali oliy ta'lim muassasalariga ilmiy rivojlanish
                                            imkoniyatlarini
                                            ta'minlash



                                        </p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon8.png" alt="">
                                        <h3>Eng Yaxshi Dastur
                                        </h3>
                                        <p>Eng yaxshi dastur ijtimoiy, hissiy va xulq-atvor ehtiyojlari faqat umumiy ta'lim
                                            muhitida o'quv dasturlariga kirish.</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                            </div>
                        </div>
                        <!--about-rw end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--benifit-section end-->
    <section class="classes-section">
        <div class="container">
            <div class="sec-title">
                <h2 class="no-bg">Bizning Sinflarimiz</h2>
                <p>Bizning kichik sinflarimiz guruhlar ichida jonli muloqot qilish imkonini beradi va shu bilan
                    o'quvchilarimizning o'rganish natijalarini optimallashtiradigan
                </p>
            </div>
            <!--sec-title end-->
            <div class="classes-sec">
                <div class="row classes-carousel">
                    @foreach ($classes as $class)
                        <div class="col-lg-3">
                            <div class="classes-col">
                                <div class="class-thumb"><img src="assets/img/img1.jpg" alt="" class="w-100"> <a
                                        href="about.html#" title="" class="crt-btn"><img src="assets/img/icon10.png"
                                            alt=""></a></div>
                                <div class="class-info">
                                    <h3><a href="about.html#" title="">{{ $class->name }}</a></h3>
                                    <span>Mon-Fri</span>
                                    <span>10 AM - 12 AM</span>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a
                                                href="about.html#" title="">{{ $class->teacher->firstname }}
                                                {{ $class->teacher->second }}</a></div><strong class="price">$45</strong>
                                    </div>
                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>
                    @endforeach
                </div>
                <div class="lnk-dv text-center"><a href="{{ route('classes.index') }}" title=""
                        class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a></div>
            </div>
            <!--classes-sec end-->
        </div>
    </section>
    <!--classes-section end-->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-sec">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsz-ltr-text">
                            <h2>Bizga qo'shiling<br>va kuzatib boring!</h2><a href="{{ route('contact') }}" title=""
                                class="btn-default">Bizga Qo'shiling <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--newsz-ltr-text end-->
                    </div>
                    <div class="col-lg-8">
                        <form class="newsletter-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"><input type="text" name="name"
                                            placeholder="Ism familiya">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><input value="+998 " type="text" name="phone_number"
                                            placeholder="Telefon raqam">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group select-tg"><select>
                                            <option>Kurs tanlang</option>
                                            @foreach ($allClasses as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select></div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <!--form-group end-->
                                </div>
                            </div>
                        </form>
                        <!--newsletter-form end-->
                    </div>
                </div>
            </div>
            <!--newsletter-sec end-->
        </div>
    </section>
    <!--newsletter-sec end-->
@endsection
