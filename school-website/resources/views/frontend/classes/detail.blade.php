@extends('layouts.frontend')
@section('content')
    <section class="page-content style2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="class-single-content">
                        <h2>{{ $class->number }}-{{ $class->name }}</h2>
                        <ul class="meta-box">
                            <li><a href="{{ route('home') }}" title="">Bosh sahifa</a></li>
                            <li><span>Sinf</span></li>
                        </ul>
                        <p>{{ $class->description }} .</p>

                        <div class="class-gallery">
                            <div class="class-gallery-img"><a href="assets/img/class-gallery1.jpg" title=""
                                    class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery1.jpg"
                                        alt=""></a></div>
                            <!--class-gallery-img end-->
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal2.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery2.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal3.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery3.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal4.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery4.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal5.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery5.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                            </div>
                        </div>
                        <!--class-gallery end-->
                        <a href="classes.html" title="" class="btn-default">Enroll Now <i
                                class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                    <!--class-single-content end-->
                    <div class="class-single-content">
                        <div class="image-box">
                            <img src="{{ asset("images/$class->image") }}" alt="Sinf rasmi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-content end-->
    <!--newsletter-sec end-->
@endsection
