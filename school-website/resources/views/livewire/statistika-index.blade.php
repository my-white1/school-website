@php
    function GreatTeachers($a)
       {
           $c=0;

           foreach ($a->teachers as $t){
            if (count($t->degrees)!==0){
           if($t->degrees[0]->type_id ==1){
                if($c++ == 1)continue;
           }
            }

           }

           return $c;
       }
       function GreatStudents($a)
       {
           $c=0;

           foreach ($a->students as $s){
            if ($s->certificate){
               if ()
            }

           }

           return $c;
       }

 @endphp

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
                        <td>
                            <span>{{GreatTeachers($a)}}</span>
                        </td>
                        <td>
                            <span>{{GreatStudents($a)}}</span>
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
