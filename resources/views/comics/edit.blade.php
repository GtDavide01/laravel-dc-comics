@extends('layouts.app')

@section('title', 'modifica')

@section('content')
    <main>
        <section>
            <div class="container">
                <h2 class="text-center">Modifica : {{ $comic->title }}</h2>
                <div class="row justify-content-center">
                    <div class="col-7 mb-5">
                        <form action="{{ route('Comic.update', $comic->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-2">
                                <label for="title">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $comic->title }}">

                            </div>

                            <div class="mb-2">
                                <label for="thumb">Immagine</label>
                                <input type="text" class="form-control" id="thumb"
                                    name="thumb"value="{{ $comic->thumb }}">
                            </div>

                            <div class="mb-2">
                                <label for="series">Serie</label>
                                <input type="text" class="form-control" id="series"
                                    name="series"value="{{ $comic->series }}">
                            </div>

                            <div class="mb-2">
                                <label for="price">Prezzo</label>
                                <input type="text" class="form-control" id="price"
                                    name="price"value="{{ $comic->price }}">
                            </div>

                            <div class="mb-2">
                                <label for="type">Tipo</label>
                                <input type="text" class="form-control" id="type"
                                    name="type"value="{{ $comic->type }}">
                            </div>

                            <div class="mb-2">
                                <label for="sale_date">Giorno di uscita </label>
                                <input type="date " class="form-control" id="sale_date"
                                    name="sale_date"value="{{ $comic->sale_date }}">
                            </div>

                            <div class="mb-2">
                                <label for="artists">Artisti</label>
                                <input type="text" class="form-control" id="artists"
                                    name="artists"value="{{ $comic->artists }}">
                            </div>

                            <div class="mb-2">
                                <label for="writers">Autori</label>
                                <input type="text" class="form-control" id="writers"
                                    name="writers"value="{{ $comic->writers }}">
                            </div>

                            <div class="mb-2">
                                <label for="description">Descrizione</label>
                                <textarea class="form-control" name="description" id="description" rows="10"">{{ $comic->description }}</textarea>
                            </div>

                            <button class="btn btn-outline-primary " type="submit">Salva</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
