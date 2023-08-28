@extends('layouts.main')

@section('title', 'Create')

@section('section-id', 'comics')

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="card-title d-flex align-items-center justify-content-between my-2 px-2">
            <h1>Crea Comic</h1>
            <a class="btn btn-secondary" href="{{ route('comics.index') }}">Torna alla pagina dei fumetti</a>
        </div>
        <hr>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input value="{{ old('series') }}" type="text" name="series" class="form-control" id="series"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" aria-label="textarea">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail</label>
                        <input value="{{ old('thumb') }}" type="url" class="form-control" name="thumb"
                            id="thumb">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input value="{{ old('price') }}" type="text" class="form-control" name="price" id="price"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="date" value="{{ old('sale_date') }}" name="sale_date" class="form-control"
                            id="sale_date" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select" id="type" name="type" aria-label="Default select example">
                            <option @if (old('type') === 'comic book') selected @endif>comic book</option>
                            <option @if (old('type') === 'graphic novel') selected @endif>graphic novel</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input value="{{ old('artists') }}" type="text" name="artists" class="form-control"
                            id="artists" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input value="{{ old('writers') }}" type="text" class="form-control" name="writers"
                            id="writers" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="d-flex justify-content-end my-4">
                    <button class="btn btn-success me-2">Salva</button>
                    <button type="reset" class="btn btn-secondary">Svuota</button>

                </div>
            </div>

        </form>
    </div>
@endsection
