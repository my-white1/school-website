<section class="page-content">
    <div class="container">
        <div class="teachers-section p-0">
            <div class="teachers">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                            <div class="teacher">
                                <div class="teacher-img"><img src="{{ asset("images/$teacher->image") }}" alt=""
                                        class="w-100">
                                    <div class="sc-div">
                                        <ul>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="teachers.html#" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        </ul><span><img src="assets/img/plus.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <h3><a href="#" title="">{{ $teacher->firstname }}
                                            {{ $teacher->lastname }}</a></h3>
                                    <span>{{ $teacher->category }}
                                        O'qituvchisi</span>
                                </div>
                            </div>
                            <!--teacher end-->
                        </div>
                    @endforeach
                </div>
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->
        <div class="mdp-pagiation">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a wire:click="viewMore" role="button" type="button"
                            class="page-link">Yana</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--pagination-end-->
    </div>
</section>
