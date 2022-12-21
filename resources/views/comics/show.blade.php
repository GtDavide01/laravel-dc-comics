@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <main>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 800px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="Immagine non disponibile">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comic->title }}</h4>
                            <p class="card-text"> {{ $comic->description }} </p>
                            <p class="card-text">
                            <h5>Artisti :</h5> {{ $comic->artists }} </p>
                            <p class="card-text">
                            <h5>Scrittori :</h5> {{ $comic->writers }}
                            </p>
                            <p class="card-text"><small class="text-muted"> Prezzo : {{ $comic->price }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
