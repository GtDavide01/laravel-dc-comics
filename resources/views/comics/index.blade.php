@extends('layouts.app')
@section('title', 'indexComics')

@section('content')
    <main>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo </th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dettagli </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('Comic.show', $comic->id) }}" class=" btn btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('Comic.edit', $comic->id) }}" class=" btn btn-outline-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('Comic.destroy', $comic->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class=" btn btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
