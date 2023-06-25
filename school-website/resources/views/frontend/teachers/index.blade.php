@extends('layouts.frontend')

@section('content')
    @php
        $a=\App\Models\About::find(1);
    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Teachers</h2>
                <ul>
                    <li><a href="teachers.html#" title="">Home</a></li>
                    <li><span>Teachers</span></li>
                </ul>
            </div>
            <!--pager-content end-->
{{--            <h2 class="page-titlee">{{$a->name}}</h2>--}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="page-content">
        <div class="container">
            <div class="teachers-section p-0">
                <div class="teachers">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/img5.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Polina Kerston</a></h3><span>English
                                        Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/img6.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Faadi Al Rahman</a></h3>
                                    <span>Instructor</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/img7.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Chikelu Obasea</a></h3><span>Art
                                        Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/img8.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Katayama Fumiki</a></h3>
                                    <span>Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/teacher5.jpg" alt="" class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Dai Jiang</a></h3><span>English
                                        Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/teacher6.jpg" alt=""
                                        class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Hubert Franck</a></h3>
                                    <span>Instructor</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/teacher7.jpg" alt=""
                                        class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Vincent Luggers</a></h3><span>Art
                                        Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="assets/img/teacher8.jpg" alt=""
                                        class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="teacher-single.html" title="">Masood El Toure</a></h3>
                                    <span>Teacher</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                    </div>
                </div>
                <!--teachers end-->
            </div>
            <!--teachers-section end-->
            <div class="mdp-pagiation">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="teachers.html#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="teachers.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="teachers.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="teachers.html#">4</a></li>
                        <li class="page-item"><a class="page-link" href="teachers.html#">...</a></li>
                        <li class="page-item"><a class="page-link" href="teachers.html#">15</a></li>
                    </ul>
                </nav>
            </div>
            <!--pagination-end-->
        </div>
    </section>
    <!--page-content end-->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-sec">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsz-ltr-text">
                            <h2>Join us<br>and stay tuned!</h2><a href="contacts.html" title=""
                                class="btn-default">Join Us <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--newsz-ltr-text end-->
                    </div>
                    <div class="col-lg-8">
                        <form class="newsletter-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"><input type="text" name="name" placeholder="Name">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><input type="email" name="email" placeholder="Email">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group select-tg"><select>
                                            <option>Class</option>
                                            <option>Class</option>
                                            <option>Class</option>
                                            <option>Class</option>
                                            <option>Class</option>
                                            <option>Class</option>
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
