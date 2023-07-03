@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Sinflar</h2>
                <ul>
                    <li><a href="classes.html#" title="">Bosh sahifa</a></li>
                    <li><span>Sinflar</span></li>
                </ul>
            </div>
            <!--pager-content end-->
            {{--            <h2 class="page-titlee">{{$a->name}}</h2> --}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">

            <!--classes-banner end-->
            @livewire('statistika-index')

    </section>
    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
