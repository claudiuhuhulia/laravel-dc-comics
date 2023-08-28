@extends('layouts.main')

@section('main')
    <div class="section-header">

        <section class="container">

            @if ($comic->thumb)
                <figure>
                    <img src="{{ $comic->thumb }}" alt="serie">
                </figure>
            @endif
        </section>
    </div>

    <div class="container serie-detail">
        <div class="text">
            <h1>{{ $comic->title }}</h1>
            <div class="price-btn">
                <div class="price">
                    <h4>U.S. Price: <p>{{ $comic->price }}</p>
                    </h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="availability">
                    <p>Check availability </p>
                </div>
            </div>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="adv">
            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
        </div>

    </div>
    <div class="bgc">
        <div class="container info">
            <div class="talent">
                <h2>Talent</h2>
                <div class="single-info blue">
                    <h5>Art By:</h5>
                    <p>{{ $comic->artists }}</p>
                </div>
                <div class="single-info last blue">
                    <h5>Written by:</h5>
                    <p>{{ $comic->writers }}</p>

                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="single-info blue">
                    <h5>Series:</h5>
                    <p>{{ $comic->series }}</p>
                </div>
                <div class="single-info">
                    <h5>U.S. Price:</h5>
                    <p>{{ $comic->price }}</p>
                </div>
                <div class="single-info last">
                    <h5>On Sale Date</h5>
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end mb-3 mx-3">
            <a class="btn btn-secondary mx-3" href="{{ route('comics.index') }}">Torna alla pagina dei fumetti</a>
            <a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}">Modifica</a>

        </div>
    </div>
@endsection
