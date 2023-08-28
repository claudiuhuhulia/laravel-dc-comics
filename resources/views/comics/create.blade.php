@extends('layouts.main')

@section('title', 'Create')

@section('section-id', 'comics')

@section('main')
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
                        <input type="text" name="title" class="form-control" id="title"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="serie" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="serie"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" aria-label="textarea"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail</label>
                        <input type="url" class="form-control" name="thumb" id="thumb"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" id="price"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="date" name="sale_date" class="form-control" id="sale_date"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select" id="type" name="type" aria-label="Default select example">
                            <option>comic book</option>
                            <option>graphic novel</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" name="artists" class="form-control" id="artists"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" class="form-control" name="writers" id="writers"
                            aria-describedby="emailHelp">
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
