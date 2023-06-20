@extends('layouts.frontend')

@section('content')
    <section class="pager-section blog-version">
        <div class="container">
            <div class="pager-content text-center">
                <ul>
                    <li><a href="{{route('home')}}" title="">Home</a></li>
                    <li><a href="{{route('blog.index')}}" title="">Blog</a></li>
                    <li><span>Natural Sciences & Mathematics Courses</span></li>
                </ul>
                <h2>Natural Sciences & Mathematics</h2><span class="categry">English, Teachers, Shelly</span>
                <ul class="meta">
                    <li><a href="post.html#" title="">17/09/2020</a></li>
                    <li><a href="post.html#" title="">by Admin</a></li>
                    <li><img src="assets/img/icon13.png" alt=""><a href="post.html#" title="">Teachers,</a><a href="post.html#"
                                                                                                              title=""> School</a></li>
                </ul>
            </div><!--pager-content end-->
        </div>
    </section><!--pager-section end-->
<section class="page-content p80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-post single">
                    <p>Donec hendrerit mauris sed tellus consequat, vitae eleifend risus posuere. Fusce vulputate dui
                        ultrices
                        mauris iaculis ultrices. Praesent hendrerit augue non massa efficitur, varius placerat nibh
                        consectetur.
                        Cras maximus semper magna, ut laoreet eros bibendum sit amet. Proin ut posuere neque. Curabitur
                        eget
                        mauris sit amet lorem faucibus lacinia. Duis sapien tellus, aliquam sit amet augue in, feugiat
                        tempus
                        orci.</p>
                    <p>Suspendisse feugiat, est sed dapibus eleifend, lectus nisl ullamcorper enim, et ullamcorper
                        mauris
                        ligula ac neque. Ut aliquam justo vitae nisi fermentum malesuada. Duis sem eros, varius vitae
                        velit eu,
                        mollis convallis turpis. Etiam ante nisl, maximus vitae sem non, dignissim tristique tellus.
                        Phasellus
                        at risus nec arcu malesuada aliquet. Pellentesque lacus ipsum, rutrum sit amet rutrum nec,
                        imperdiet eu
                        velit. Integer posuere maximus pulvinar. Integer feugiat mollis neque rhoncus cursus.</p>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Suspendisse feugiat, est sed dapibus eleifend, lectus nisl ullamcorper enim, et
                                ullamcorper mauris
                                ligula ac neque.</p>
                        </div>
                        <div class="col-md-4">
                            <p>Quisque nunc tellus, sodales aliquam mauris in, placerat blandit quam. In ornare et nisi
                                eget
                                tempus.</p>
                        </div>
                        <div class="col-md-4">
                            <p>Nullam dui nulla, consequat gravida tellus a, euismod cursus eros. Quisque ut lacus
                                ligula. In
                                sollicitudin dui</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="oderd">
                                <h3>Unordered List</h3>
                                <ul>
                                    <li>Etiam ante nisl, maximus vitae sem non, dignissim</li>
                                    <li>Donec blandit, sapien eu porttitor blandit</li>
                                    <li>Sed at urna at massa viverra feugiat non</li>
                                </ul>
                            </div>
                            <!--ordrd end-->
                        </div>
                        <div class="col-md-6">
                            <div class="oderd">
                                <h3>Ordered List</h3>
                                <ol>
                                    <li>1. Etiam ante nisl, maximus vitae sem non, dignissim</li>
                                    <li>2. Donec blandit, sapien eu porttitor blandit</li>
                                    <li>3. Sed at urna at massa viverra feugiat non</li>
                                </ol>
                            </div>
                            <!--ordrd end-->
                        </div>
                    </div>
                    <p>In ornare et nisi eget tempus. Integer imperdiet sit amet nisi vel elementum. Pellentesque
                        commodo,
                        tellus vel ultricies sodales, eros metus dapibus dolor, in elementum ex turpis ornare nisl.
                        Quisque
                        dictum lorem eros, nec porta tellus aliquet in. Ut id consectetur felis. Praesent tincidunt
                        metus nec
                        tortor fringilla porttitor. Quisque pretium sapien ut mattis commodo.</p>
                    <blockquote>
                        <p>Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros tortor,
                            a
                            ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis ultrices sapien
                        </p>
                        <h4>Polina Podolski</h4><span>Mother</span>
                    </blockquote>
                    <p>Suspendisse feugiat, est sed dapibus eleifend, lectus nisl ullamcorper enim, et ullamcorper
                        mauris
                        ligula ac neque. Ut aliquam justo vitae nisi fermentum malesuada. Duis sem eros, varius vitae
                        velit eu,
                        mollis convallis turpis. Etiam ante nisl, maximus vitae sem non, dignissim tristique tellus.
                        Phasellus
                        at risus nec arcu malesuada aliquet.</p>
                    <p>Duis a nibh id metus laoreet hendrerit ut non orci. Nam lacinia urna ex, et vestibulum nibh
                        pretium ut.
                        Sed venenatis euismod sapien, vel porta metus consectetur non. Sed suscipit auctor urna quis
                        imperdiet.
                        Mauris libero ex, cursus at semper sit amet, gravida id libero.</p>
                </div>
                <!--blog-post single end-->
                <div class="mdp-post-comments">
                    <h3 class="mdp-sub-title">Comments</h3>
                    <ul>
                        <li>
                            <div class="mdp-comment d-flex flex-wrap">
                                <div class="mdp-img"><img src="assets/img/comm1.png" alt=""></div>
                                <div class="mdp-com">
                                    <h3>Polina Podolski</h3><span>25/09/2020</span>
                                    <p>Nullam iaculis elit tempor tellus eleifend, lobortis porta velit hendrerit.
                                        Curabitur eu felis
                                        maximus, tempus enim a, venenatis tortor. Phasellus elementum massa vel diam
                                        rhoncus vulputate.
                                    </p><a href="post.html#" title="" class="reply-btn"><i
                                            class="fa fa-reply"></i>Reply</a>
                                </div>
                            </div>
                            <!--mdp-comment end-->
                        </li>
                    </ul>
                </div>
                <!--post-comments end-->
                <div class="mdp-contact">
                    <div class="comment-area">
                        <h3 class="mdp-sub-title">Add Comment</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group"><input type="text" name="name" placeholder="Name">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group"><input type="email" name="email" placeholder="Email">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group"><input type="text" name="website" placeholder="Website">
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit"><a href="post.html#" title=""
                                                                class="btn-default">Send Now <i
                                                class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <!--form-submit end-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--comment-area end-->
                </div>
                <!--mdp-contact end-->
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <form><input type="text" name="search" placeholder="Search">
                            <button type="submit"><img
                                    src="assets/img/icon4.png" alt=""></button>
                        </form>
                    </div>
                    <!--widget-search end-->
                    <div class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="post.html#" title="">Teachers</a> <span>45</span></li>
                            <li><a href="post.html#" title="">School News</a> <span>13</span></li>
                            <li><a href="post.html#" title="">Lessons</a> <span>6</span></li>
                            <li><a href="post.html#" title="">Shelly</a> <span>89</span></li>
                        </ul>
                    </div>
                    <!--widget-categories end-->
                    <div class="widget widget-posts">
                        <h3 class="widget-title">Latest Posts</h3>
                        <div class="wd-posts">
                            <div class="wd-post d-flex flex-wrap">
                                <div class="wd-thumb"><img src="assets/img/post1.png" alt=""></div>
                                <div class="wd-info">
                                    <h3><a href="post.html#" title="">Duis tempor eros tortor, a ornare</a></h3>
                                    <span>17/09/2020</span>
                                </div>
                            </div>
                            <!--wd-post end-->
                            <div class="wd-post d-flex flex-wrap">
                                <div class="wd-thumb"><img src="assets/img/post2.png" alt=""></div>
                                <div class="wd-info">
                                    <h3><a href="post.html#" title="">Duis tempor eros tortor, a ornare</a></h3>
                                    <span>17/09/2020</span>
                                </div>
                            </div>
                            <!--wd-post end-->
                            <div class="wd-post d-flex flex-wrap">
                                <div class="wd-thumb"><img src="assets/img/post3.png" alt=""></div>
                                <div class="wd-info">
                                    <h3><a href="post.html#" title="">Duis tempor eros tortor, a ornare</a></h3>
                                    <span>17/09/2020</span>
                                </div>
                            </div>
                            <!--wd-post end-->
                        </div>
                        <!--wd-posts end-->
                    </div>
                    <!--widget-posts end-->
                    <div class="widget widget-comments">
                        <h3 class="widget-title">Recent Comments</h3>
                        <ul>
                            <li><a href="post.html#" title="">Admin</a> in tempor eros tortor, a ornare</li>
                            <li><a href="post.html#" title="">Admin</a> in tempor eros tortor, a ornare</li>
                            <li><a href="post.html#" title="">Admin</a> in tempor eros tortor, a ornare</li>
                        </ul>
                    </div>
                    <!--widget-comments end-->
                    <div class="widget widget-archives">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li><a href="post.html#" title="">December</a></li>
                            <li><a href="post.html#" title="">January</a></li>
                            <li><a href="post.html#" title="">February</a></li>
                            <li><a href="post.html#" title="">March</a></li>
                        </ul>
                    </div>
                    <!--widget-archives end-->
                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            <li><a href="post.html#" title="">Teachers</a></li>
                            <li><a href="post.html#" title="">Lessons</a></li>
                            <li><a href="post.html#" title="">Shelly</a></li>
                            <li><a href="post.html#" title="">School</a></li>
                            <li><a href="post.html#" title="">Theme</a></li>
                            <li><a href="post.html#" title="">Class</a></li>
                        </ul>
                    </div>
                    <!--widget-tags end-->
                    <div class="widget widget-calendar">
                        <h3 class="widget-title">Calendar</h3>
                        <div class="mdp-calendar">
                            <h3 class="month">July 2020</h3>
                            <table>
                                <thead>
                                <tr>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>T</th>
                                    <th>W</th>
                                    <th>T</th>
                                    <th>F</th>
                                    <th>S</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="active">6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                                </tbody>
                            </table>
                            <ul class="controls">
                                <li><a href="post.html#" title=""><i class="fa fa-angle-left"></i> Prev</a>
                                </li>
                                <li><a href="post.html#" title="">Next <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--mdp-calendar end-->
                    </div>
                    <!--widget-calendar end-->
                </div>
                <!--sidebar end-->
            </div>
        </div>
    </div>
</section>
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2>Join us<br>and stay tuned!</h2><a href="contacts.html" title=""
                                                              class="btn-default">Join Us <i
                                class="fa fa-long-arrow-alt-right"></i></a>
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
