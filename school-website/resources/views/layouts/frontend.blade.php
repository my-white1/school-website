<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shelly School HTML Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Shelly - Website">
    <meta name="author" content="merkulove">
    <meta name="keywords" content="">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button.min.css') }}">
</head>

<body>
    <div class="wrapper">


        <div class="main-section">
            <header>
                <div class="container">
                    <div class="header-content d-flex flex-wrap align-items-center">
                        <div class="logo"><a href="index.html" title=""><img src="assets/img/logo.png"
                                    alt="" srcset="assets/img/01_Logo_2x.png 2x"></a></div>
                        <!--logo end-->
                        <ul class="contact-add d-flex flex-wrap">
                            <li>
                                <div class="contact-info"><img src="assets/img/icon1.png" alt="">
                                    <div class="contact-tt">
                                        <h4>Call</h4><span>+2 342 5446 67</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info"><img src="assets/img/icon2.png" alt="">
                                    <div class="contact-tt">
                                        <h4>Work Time</h4><span>Mon - Fri 8 AM - 5 PM</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info"><img src="{{ asset('assets/img/icon3.png') }}" alt="">
                                    <div class="contact-tt">
                                        <h4>Address</h4><span>Franklin St, Greenpoint Ave</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                        </ul>
                        <!--contact-information end-->
                        <div class="menu-btn"><a href="assets/images/resources/bg4.jpg.html#"><span
                                    class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></a>
                        </div>
                        <!--menu-btn end-->
                    </div>
                    <!--header-content end-->
                    <div class="navigation-bar d-flex flex-wrap align-items-center">
                        <nav>
                            <ul>
                                <li><a class="active" href="index.html" title="">Home</a></li>
                                <li><a href="{{ route('about') }}" title="">About</a>
                                    <ul>
                                        <li><a href="events.html" title="">Events</a></li>
                                        <li><a href="event-single.html" title="">Event Single</a></li>
                                        <li><a href="schedule.html" title="">Schedule</a></li>
                                        <li><a href="{{ route('404') }}" title="">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('classes.index') }}" title="">Classes</a>
                                    <ul>
                                        <li><a href="class-single.html" title="">Class Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('teachers.index') }}" title="">Teachers</a>
                                    <ul>
                                        <li><a href="teacher-single.html" title="">Teacher Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html" title="">Blog</a>
                                    <ul>
                                        <li><a href="post.html" title="">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="href="{{ route('contact') }}"" title="">Contacts</a></li>
                            </ul>
                        </nav>
                        <!--nav end-->
                        <ul class="social-links ml-auto">
                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!--navigation-bar end-->
                </div>
            </header>
            <!--header end-->
            <div class="responsive-menu">
                <ul>
                    <li><a href="index.html" title="">Home</a></li>
                    <li><a href="{{ route('about') }}" title="">About</a></li>
                    <li><a href="events.html" title="">Events</a></li>
                    <li><a href="event-single.html" title="">Event Single</a></li>
                    <li><a href="schedule.html" title="">Schedule</a></li>
                    <li><a href="{{ route('classes.index') }}" title="">Classes</a></li>
                    <li><a href="class-single.html" title="">Classe Single</a></li>
                    <li><a href="{{ route('teachers.index') }}" title="">Teachers</a></li>
                    <li><a href="teacher-single.html" title="">Teacher Single</a></li>
                    <li><a href="blog.html" title="">Blog</a></li>
                    <li><a href="post.html" title="">Blog Single</a></li>
                    <li><a href="{{ route('contact') }}" title="">Contacts</a></li>
                    <li><a href="{{ route('404') }}" title="">404</a></li>
                </ul>
            </div>
            <!--responsive-menu end-->
            
            <h2 class="main-title">Shelly</h2>
        </div>
        <!--main-section end-->

        @yield('content')


        <footer>
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-about"><img src="assets/img/logo.png" alt="">
                                <p>Vivamus porta efficitur nibh nec convallis. Vestibulum egestas eleifend justo. Ut
                                    tellus ipsum,
                                    accumsan</p>
                            </div>
                            <!--widget-about end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-contact">
                                <ul class="contact-add">
                                    <li>
                                        <div class="contact-info"><img src="assets/img/icon1.png" alt="">
                                            <div class="contact-tt">
                                                <h4>Call</h4><span>+2 342 5446 67</span>
                                            </div>
                                        </div>
                                        <!--contact-info end-->
                                    </li>
                                    <li>
                                        <div class="contact-info"><img src="assets/img/icon2.png" alt="">
                                            <div class="contact-tt">
                                                <h4>Work Time</h4><span>Mon - Fri 8 AM - 5 PM</span>
                                            </div>
                                        </div>
                                        <!--contact-info end-->
                                    </li>
                                    <li>
                                        <div class="contact-info"><img src="assets/img/icon3.png" alt="">
                                            <div class="contact-tt">
                                                <h4>Address</h4><span>Franklin St, Greenpoint Ave</span>
                                            </div>
                                        </div>
                                        <!--contact-info end-->
                                    </li>
                                </ul>
                            </div>
                            <!--widget-contact end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-links">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="about.html" title="">About Us</a></li>
                                    <li><a href="classes.html" title="">Our Classes</a></li>
                                    <li><a href="teachers.html" title="">School Teachers</a></li>
                                    <li><a href="events.html" title="">Recent Events</a></li>
                                    <li><a href="blog.html" title="">Our News</a></li>
                                    <li><a href="schedule.html" title="">Schedule</a></li>
                                </ul>
                            </div>
                            <!--widget-links end-->
                        </div>
                    </div>
                </div>
                <!--top-footer end-->
                <div class="bottom-footer">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>© Copyrights 2020 Shelly All rights reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="social-links">
                                <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="assets/images/resources/bg4.jpg.html#" title=""><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--bottom-footer end-->
            </div>
        </footer>
        <!--footer end-->
    </div>


    <script src="{{ asset('assets/js/bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/button.min.js') }}"></script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180910402-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-180910402-1');
    </script>
</body>

</html>
