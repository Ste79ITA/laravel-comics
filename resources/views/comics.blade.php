@extends('layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="comic-row row d-flex">
                @foreach ($comics as $comic)
                <div class="col-2 p-3">
                    <a href="{{ route('details', $comic) }}">
                        <div class="img-container">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <p class="comic-title pt-2">{{ $comic['title'] }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection