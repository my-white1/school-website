@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(1);
        $classes = \App\Models\Classes::all();
    @endphp
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2><span>{{ $a->name }}</span> ga <br> hush kelibsiz</h2>
                            <p class="mw-100">{{ $a->description }}


                                vestibulum leo sagittis et.</p><a href="{{ route('classes.index') }}" title=""
                                class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img width="500" height="500" src="{{ asset("images/$a->image") }}"
                                alt=""></div>
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
                                <div class="class-thumb"><img src="{{ asset('images/' . $class->image) }}" alt=""
                                        class="w-100">

                                </div>
                                <div class="class-info">
                                    <h3><a href="{{ route('class.detail', $class->id) }}" title="">{{ $class->number }}-{{ $class->name }}
                                            Sinf</a></h3>
                                    <span>Xar kuni</span> <span></span>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="posted-by"><img style="width: 30px; height: 30px"
                                                src="{{ asset('images/' . $class->teacher->image) }}" alt="">
                                            <a href="assets/images/resources/bg4.jpg.html#"
                                                title="">{{ $class->teacher->firstname }}
                                                {{ $class->teacher->lastname }}</a>
                                        </div>
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
                <h2>Bizning ajoyib<br>O'qtuvchilar</h2>
                <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga muhabbat uyg'otishi mumkin."
                </p>
            </div>
            <!--section-title end-->
            <div class="teachers">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img style="width: 235px; height: 425px;" src="{{asset("images/$teacher->image")}}" alt="" class="w-100">

                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">{{ $teacher->firstname }}
                                            {{ $teacher->lastname }}</a></h3>
                                    <span>{{ $teacher->category }} O`qituvchisi</span>
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
                            <h3><img src="assets/img/icon11.png" alt="">Bog'lanish uchun: <strong>+998
                                    {{ $a->phone_number }}
                                </strong></h3>
                        </div>
                        <!--sec-title end-->
                        <div class="course-img"><img src="assets/img/course-img.png" alt=""></div>
                        <!--course-img end-->
                    </div><a href="{{ route('course.index') }}" title=""
                        style="color: #044e7c
                                 " class="read-more text-bg-primary">Ko`proq
                        <i class="fa fa-long-arrow-alt-right"></i></a>
                    <!--find-course end-->
                </div>
{{--                                @if (empty($classes[0]) && empty($classes[1]) && empty($classes[2]))--}}
{{--                                    Ma'lumot yo'q--}}
{{--                                @else--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="courses-list">--}}
{{--                                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">--}}
{{--                                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                                    <ul class="course-meta">--}}
{{--                                                        <li><img src="assets/img/icon12.png"--}}
{{--                                                                alt="">{{ $classes[0]->created_at->format('d/m/Y') }}</li>--}}
{{--                                                        <li>11AM to 15PM</li>--}}
{{--                                                    </ul><span>FREE</span>--}}
{{--                                                </div>--}}
{{--                                                <h3><a href="event-single.html" title="">{{ $classes[0]->name }}</a>--}}
{{--                                                </h3>--}}
{{--                                                <div class="d-flex flex-wrap">--}}
{{--                                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a--}}
{{--                                                            href="assets/images/resources/bg4.jpg.html#"--}}
{{--                                                            title="">{{ $classes[0]->teacher->name }}</a></div><span--}}
{{--                                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517--}}
{{--                                                        district</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!--course-card end-->--}}
{{--                                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">--}}
{{--                                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                                    <ul class="course-meta">--}}
{{--                                                        <li><img src="assets/img/icon12.png" alt="">--}}
{{--                                                            {{ $classes[1]->created_at->format('d/m/Y') }}</li>--}}
{{--                                                        <li>11AM to 15PM</li>--}}
{{--                                                    </ul><span>$16</span>--}}
{{--                                                </div>--}}
{{--                                                <h3><a href="event-single.html" title="">{{ $classes[1]->name }}</a></h3>--}}
{{--                                                <div class="d-flex flex-wrap">--}}
{{--                                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a--}}
{{--                                                            href="assets/images/resources/bg4.jpg.html#"--}}
{{--                                                            title="">{{ $classes[1]->teacher->name }}</a></div><span--}}
{{--                                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517--}}
{{--                                                        district</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!--course-card end-->--}}
{{--                                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
{{--                                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                                    <ul class="course-meta">--}}
{{--                                                        <li><img src="assets/img/icon12.png"--}}
{{--                                                                alt="">{{ $classes[2]->created_at->format('d/m/Y') }}</li>--}}
{{--                                                        <li>11AM to 15PM</li>--}}
{{--                                                    </ul><span>$8</span>--}}
{{--                                                </div>--}}
{{--                                                <h3><a href="event-single.html" title="">{{ $classes[2]->name }}</a></h3>--}}
{{--                                                <div class="d-flex flex-wrap">--}}
{{--                                                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a--}}
{{--                                                            href="assets/images/resources/bg4.jpg.html#"--}}
{{--                                                            title="">{{ $classes[2]->teacher->name }}</a></div><span--}}
{{--                                                        class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517--}}
{{--                                                        district</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!--course-card end-->--}}
{{--                                        </div>--}}
{{--                                        <!--courses-list end--> <a href="events.html" title="" class="all-btn">All Events <i--}}
{{--                                                class="fa fa-long-arrow-alt-right"></i></a>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}

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
                                <div class="blog-thumbnail"><img style="width: 369px; height: 246px" src="{{asset('images/'.$blog->image)}}"  alt="" class="w-100">
                                    <span class="category">{{ $blog->title }}</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li><a href="assets/images/resources/bg4.jpg.html#" title=""></a>
                                        </li>
                                        <li><a href="assets/images/resources/bg4.jpg.html#" title="">by
                                                Admin</a></li>
                                        <li><img src="assets/img/icon13.png" alt=""><a
                                                href="assets/images/resources/bg4.jpg.html#"
                                                title="">{{ $blog->category->name }},</a><a
                                                href="assets/images/resources/bg4.jpg.html#" title="">
                                                School</a></li>
                                    </ul>
                                    <h3><a href="{{route('blog.show',$blog->id)}}" title="">{{ $blog->title }}</a></h3>
                                    <p>{{substr($blog->description, 0,25 )  }}...
                                    </p><a href="{{route('blog.show',$blog->id)}}" title="" class="read-more">Read <i
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
    <!--newsletter-sec end-->
@endsection
