@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end p-4">
        <button class="btn btn-success ">
            <a class="text-white" href="{{ route('dc-comics.create') }}">Aggiungi</a>
        </button>
    </div>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comicArray as $comic)
                <tr class="text-center align-middle">
                    <th><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-info">
                                <a class="text-white"
                                    href="{{ route('dc-comics.show', ['dc_comic' => $comic->id]) }}">Dettagli</a>
                            </button>
                            <button class="btn btn-warning">
                                <a class="text-white"
                                    href="{{ route('dc-comics.edit', ['dc_comic' => $comic->id]) }}">Modifica</a>
                            </button>
                            <form action="{{ route('dc-comics.destroy', ['dc_comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
