@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics')

@section('main')

    <section class="series">
        <div class="series-title">
            CURRENT SERIES
        </div>
        <div class="container">
            <div class="card-container">
                @foreach ($comics as $comic)
                    {{--    @empty
                    <h1 class="text-center">Non ci sono fumetti</h1> --}}

                    <div class="my-card">
                        <a href="{{ url("/comics/$comic->id") }}">

                            <figure>
                                <img src="{{ $comic->thumb }}" alt="serie">
                            </figure>
                            <h3> {{ $comic->series }} </h3>
                        </a>

                    </div>
                @endforeach

            </div>

        </div>
        <div class="d-flex mb-4">
            <div class="load-btn">LOAD MORE</div>
            <a href="{{ route('comics.create') }}">
                <div class="load-btn mx-3">CREA NUOVO COMIC</div>
            </a>

        </div>
    </section>

@endsection
