@extends('layouts.frontend')
@section('content')
    @php
  $a=\App\Models\About::find(env('SCHOOL_ID'));

  $s=explode(':',$course->start_time)[0];
  $e=explode(':',$course->end_time)[0];
  $d=( (int) $e )-( (int) $s);
 @endphp
    <section class="page-content style2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="class-single-content"><h2>{{$course->name}}</h2>
                        <ul class="meta-box">
                            <li><a href="class-single.html#" title="">Home</a></li>
                            <li><span>Course</span></li>
                        </ul>
                        <p>{{$course->description}}</p>

                        <div class="class-gallery">
                            <div class="class-gallery-img"><a href="assets/img/class-gallery1.jpg" title=""
                                                              class="html5lightbox" data-group="set1"><img
                                        src="assets/img/class-gallery1.jpg" alt=""></a></div><!--class-gallery-img end-->
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal2.jpg" title=""
                                                                      class="html5lightbox" data-group="set1"><img
                                                src="assets/img/class-gallery2.jpg" alt=""></a></div>
                                    <!--class-gallery-img end--></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal3.jpg" title=""
                                                                      class="html5lightbox" data-group="set1"><img
                                                src="assets/img/class-gallery3.jpg" alt=""></a></div>
                                    <!--class-gallery-img end--></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal4.jpg" title=""
                                                                      class="html5lightbox" data-group="set1"><img
                                                src="assets/img/class-gallery4.jpg" alt=""></a></div>
                                    <!--class-gallery-img end--></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal5.jpg" title=""
                                                                      class="html5lightbox" data-group="set1"><img
                                                src="assets/img/class-gallery5.jpg" alt=""></a></div>
                                    <!--class-gallery-img end--></div>
                            </div>
                        </div><!--class-gallery end-->

                        <h3>O`rganish tizimi Programs</h3>
                        <p>{{$a->description}}</p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="ordrd">
                                    <li>Qiziqarli vaqtlar</li>
                                    <li>Bo`sh vaqt uchun texnalogiya burchagi</li>

                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="ordrd">
                                    <li>Yaxshi vaqt</li>
                                    <li>Malakali o`qituvchi</li>
                                </ul>
                            </div>
                        </div>
                        </div><!--class-single-content end--></div>
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar class-sidebar"><br><br><br><br><br><br>
                        <div class="widget widget-information"><h3 class="widget-title">Class Information</h3>
                            <ul>
                                <li>
                                    <h4>
                                        @php $weeks='' ;
                                foreach($course->weeks as $k=>$w){
                                    if($k==0){
                                        $weeks=substr($w->name,0, 4);

                                    }else{
                                       $weeks=$weeks.'-'.substr($w->name,0, 4);
                                    }
                                }
                                        @endphp
                                        {{$weeks}}
                                    </h4>
                                    <span>{{$course->start_time}} - {{$course->end_time}}</span>
                                </li>
                                <li><h4>Yosh</h4><span>12-18 Years</span></li>
                                <li><h4>bolalar soni</h4><span>15-20 Kids</span></li>
                                <li><h4>kurs davomiyligi</h4><span>{{$d}} soat</span></li>
                            </ul>
                            <div class="tech-info">
                                <div class="tech-tble"><img src="assets/img/thumb1.png" alt="">
                                    <div class="tch-info"><h3>{{$course->teacher->firstname}} {{$course->teacher->lastname}} </h3><span>{{$course->name }} </span></div>
                                </div>
                            </div>
                        </div><!--widget-information end-->
                        <div class="widget widget-contact-dp mdp-contact">
                            <div class="mdp-our-contacts"><h3>Our Contacts</h3>
                                <ul>
                                    <li>
                                        <div class="d-flex flex-wrap">
                                            <div class="icon-v"><img src="assets/img/icon15.png" alt=""></div>
                                            <div class="dd-cont"><h4>Call</h4><span>+998 {{$a->phone_number}}</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap">
                                            <div class="icon-v"><img src="assets/img/icon16.png" alt=""></div>
                                            <div class="dd-cont"><h4>Work Time</h4><span>Dush - Shan {{$a->start_time}} - {{$a->end_time}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap">
                                            <div class="icon-v"><img src="assets/img/icon17.png" alt=""></div>
                                            <div class="dd-cont"><h4>Manzil</h4>
                                                <span>{{$a->viloyat}}, {{$a->tuman}} tumani</span></div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div><!--widget-contact-dp end--></div><!--sidebar end--></div>
            </div>
        </div>
    </section><!--page-content end-->
@endsection
