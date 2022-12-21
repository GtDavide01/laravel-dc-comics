@extends('layouts.app')

@section('title', 'Crea')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Crea nuovo Comic</h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('Comic.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Immagine</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <div class="mb-2">
                            <label for="series">Serie</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="price">Prezzo</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-2">
                            <label for="type">Tipo</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Giorno di uscita </label>
                            <input type="date " class="form-control" id="sale_date" name="sale_date">
                        </div>

                        <div class="mb-2">
                            <label for="artists">Artisti</label>
                            <input type="text" class="form-control" id="artists" name="artists">
                        </div>

                        <div class="mb-2">
                            <label for="writers">Autori</label>
                            <input type="text" class="form-control" id="writers" name="writers">
                        </div>

                        <div class="mb-2">
                            <label for="description">Descrizione</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>

                        <button class="btn btn-outline-primary " type="submit">Salva</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
