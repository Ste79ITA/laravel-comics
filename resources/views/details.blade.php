@extends('layouts.app')

@section('content')

    <section class="py-5 details">
        <div class="container d-flex pt-5">
            <div class="">
                <div class="comic-thumb">
                    <img src="{{ $_GET['thumb'] }}" alt="">
                </div>
                <h1>
                    {{$_GET['title']}}
                </h1>
                <div class="store d-flex ">
                    <div class="d-flex">
                        <p>U.S. Price: {{$_GET['price']}}</p>
                        <div>
                            Available
                        </div>
                    </div>
                    <div>
                        Check Availability
                    </div>
                </div>
                <p>
                    {{$_GET['description']}}
                </p>
            </div>
            <div class="adv-img">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
         </div>
    </section>
@endsection