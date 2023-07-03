<div class="container">

    <div class="row">
        <div class="col-9">
            <table>
                <thead>
                <tr>
                    <th>
                        N
                    </th>
                    <th>
                        Maktab
                    </th>
                    <th>
                        <span>oliy malumotli o`qituvchilar</span>
                    </th>
                    <th>
                        <span>Sertifikatga ega o`quvchilar</span>
                    </th>
                    <th>
                        <span>IT o`quvchilar</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\About::all() as $c=>$a)
                    <tr class="text-dark">
                        <td>{{$c+1}}</td>
                        <td>
                            {{$a->name}}
                        </td>
                        <td>@dd(\App\Models\Teacher::find(3)->degrees[0])
                            <span>{{$a->GreatTeachers}}</span>
                        </td>
                        <td>
                            <span>20</span>
                        </td>
                        <td>
                            <span>20</span>
                        </td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="sidebar">

                <div class="widget widget-categories">
                    <h3 class="widget-title">Eng yacshi maktab</h3>
                    <ul>

                            <li><a href="blog.html#" title=""> 1-maktab</a> <span>N 1</span></li>
                            <li><a href="blog.html#" title=""> 12-dimi</a> <span>N 2</span></li>
                            <li><a href="blog.html#" title=""> 6-dimi </a> <span>N 3</span></li>




                    </ul>
                </div>

             </div>
        </div>


</div>
