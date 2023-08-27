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
        <form action="">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="serie" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="serie"
                            aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
