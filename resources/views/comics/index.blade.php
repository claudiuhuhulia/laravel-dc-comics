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
                @forelse ($comics as $comic)
                @empty
                    <h1 class="text-center">Non ci sono fumetti</h1>

                    <a href="{{ url("/serie/$loop->index") }}">
                        <div class="card">
                            <figure>
                                <img src="{{ $comic->thumb }}" alt="serie">
                            </figure>
                            <h3> {{ $comic->series }} </h3>
                        </div>
                    </a>
                @endforelse

            </div>

        </div>
        <div class="load-btn">LOAD MORE</div>
    </section>

@endsection
