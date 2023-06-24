@extends('layouts.frontend')

@section('content')
@php
$a =\App\Models\About::find(1);
 @endphp
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2><span>{{$a->name}}</span> ga <br> hush kelibsiz</h2>
                            <p class="mw-100">{{$a->description}}


                                vestibulum leo sagittis et.</p><a href="{{ route('classes.index') }}" title=""
                                                                  class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img src="{{asset("images/$a->image")}}" alt=""></div>
                        <!--avt-img end-->
                    </div>
                </div>

            </div>
            <!--abt-page-row end-->
        </div>
    </section>
    <!--main-banner end-->
    <!--about-us-section end-->
    <section class="classes-section">
        <div class="container">
            <div class="sec-title">
                <h2>Bizning sinflarimiz</h2>
                <p>Bizning kichik sinflarimiz guruhlar ichida jonli muloqot qilish imkonini beradi va shu bilan
                    o'quvchilarimizning o'rganish natijalarini optimallashtiradigan</p>
            </div>
            <!--sec-title end-->
            <div class="classes-sec">
                <div class="row classes-carousel">
                    @foreach ($classes as $class)
                        <div class="col-lg-3">
                            <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                                <div class="class-thumb"><img src="assets/img/img1.jpg" alt="" class="w-100">
                                    <a href="contacts.html" title="" class="crt-btn"><img
                                            src="assets/img/icon10.png" alt=""></a>
                                </div>
                                <div class="class-info">
                                    <h3><a href="class-single.html" title="">{{ $class->name }}</a></h3>
                                    <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a
                                                href="assets/images/resources/bg4.jpg.html#"
                                                title="">{{ $class->teacher->name }}</a></div><strong
                                            class="price">$45</strong>
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
    <section class="teachers-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Bizning ajoyim<br>O'qtuvchilar</h2>
                <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga muhabbat uyg'otishi mumkin."
                </p>
            </div>
            <!--section-title end-->
            <div class="teachers">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/img5.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">{{ $teacher->firstname }}
                                            {{ $teacher->lastname }}</a></h3>
                                    <span>{{ $teacher->category }} Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                    @endforeach
                </div>
            </div>
            <!--teachers end-->
        </div>
    </section>
    <section class="course-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="find-course">
                        <div class="sec-title">
                            <h2>Kursingizni toping</h2>
                            <p>Qaysi fan, kurs turi yoki universitet yoki kollej sizga mos kelishini hal qilmayapsizmi?
                                Ushbu muhim qarorni hal qilish bo'yicha maslahatlarimiz va maslahatlarimizni o'qing</p>
                            <h3><img src="assets/img/icon11.png" alt="">Bog'lanish uchun: <strong>+998 99 982 59 20
                                    67</strong></h3>
                        </div>
                        <!--sec-title end-->
                        <div class="course-img"><img src="assets/img/course-img.png" alt=""></div>
                        <!--course-img end-->
                    </div>
                    <!--find-course end-->
                </div>
                @if (empty($classes[0]) && empty($classes[1]) && empty($classes[2]))
                    Ma'lumot yo'q
                @else
                    <div class="col-lg-6">
                        <div class="courses-list">
                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                                <div class="d-flex flex-wrap align-items-center">
                                    <ul class="course-meta">
                                        <li><img src="assets/img/icon12.png"
                                                alt="">{{ $classes[0]->created_at->format('d/m/Y') }}</li>
                                        <li>11AM to 15PM</li>
                                    </ul><span>FREE</span>
                                </div>
                                <h3><a href="event-single.html" title="">{{ $classes[0]->name }}</a>
                                </h3>
                                <div class="d-flex flex-wrap">
                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a
                                            href="assets/images/resources/bg4.jpg.html#"
                                            title="">{{ $classes[0]->teacher->name }}</a></div><span
                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517
                                        district</span>
                                </div>
                            </div>
                            <!--course-card end-->
                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <div class="d-flex flex-wrap align-items-center">
                                    <ul class="course-meta">
                                        <li><img src="assets/img/icon12.png" alt="">
                                            {{ $classes[1]->created_at->format('d/m/Y') }}</li>
                                        <li>11AM to 15PM</li>
                                    </ul><span>$16</span>
                                </div>
                                <h3><a href="event-single.html" title="">{{ $classes[1]->name }}</a></h3>
                                <div class="d-flex flex-wrap">
                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a
                                            href="assets/images/resources/bg4.jpg.html#"
                                            title="">{{ $classes[1]->teacher->name }}</a></div><span
                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517
                                        district</span>
                                </div>
                            </div>
                            <!--course-card end-->
                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="d-flex flex-wrap align-items-center">
                                    <ul class="course-meta">
                                        <li><img src="assets/img/icon12.png"
                                                alt="">{{ $classes[2]->created_at->format('d/m/Y') }}</li>
                                        <li>11AM to 15PM</li>
                                    </ul><span>$8</span>
                                </div>
                                <h3><a href="event-single.html" title="">{{ $classes[2]->name }}</a></h3>
                                <div class="d-flex flex-wrap">
                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a
                                            href="assets/images/resources/bg4.jpg.html#"
                                            title="">{{ $classes[2]->teacher->name }}</a></div><span
                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517
                                        district</span>
                                </div>
                            </div>
                            <!--course-card end-->
                        </div>
                        <!--courses-list end--> <a href="events.html" title="" class="all-btn">All Events <i
                                class="fa fa-long-arrow-alt-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!--course-section end-->
    <section class="blog-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>So'nggi yangiliklar</h2>
                <p>Biz haqimizdagi eng sara so'nggi yangiliklar haqida bilib oling</p>
            </div>
            <!--section-title end-->
            <div class="blog-posts">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumbnail"><img src="assets/img/blog1.jpg" alt=""
                                        class="w-100">
                                    <span class="category">{{ $blog->title }}</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li><a href="assets/images/resources/bg4.jpg.html#"
                                                title="">{{ $blog->created_at->format('d/m/Y') }} 17/09/2020</a>
                                        </li>
                                        <li><a href="assets/images/resources/bg4.jpg.html#" title="">by
                                                Admin</a></li>
                                        <li><img src="assets/img/icon13.png" alt=""><a
                                                href="assets/images/resources/bg4.jpg.html#"
                                                title="">Teachers,</a><a
                                                href="assets/images/resources/bg4.jpg.html#" title="">
                                                School</a></li>
                                    </ul>
                                    <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                                    <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat
                                        ornare sit amet
                                    </p><a href="post.html" title="" class="read-more">Read <i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <!--blog-post end-->
                        </div>
                    @endforeach
                </div>
            </div>
            <!--blog-posts end-->
        </div>
    </section>
    <!--blog-section end-->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-sec">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsz-ltr-text">
                            <h2>Bizga qo'shiling<br>va kuzatib boring!</h2><a href="{{ route('contact') }}"
                                title="" class="btn-default">Bizga qo'shiling <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--newsz-ltr-text end-->
                    </div>
                    <div class="col-lg-8">
                        <form class="newsletter-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"><input type="text" name="name" placeholder="To'liq ismingiz">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input value="+998 " type="text" name="phone_number"
                                            placeholder="Telefon raqam">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group select-tg">
                                        <select>
                                            <option>Kurs tanlang</option>
                                            @foreach ($allClasses as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Xabar"></textarea>
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
