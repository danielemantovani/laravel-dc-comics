@extends('layouts.app')

{{-- @section('content')
    <div class="container mt-5">
        <div class="row g-3">
            @foreach ($comicArray as $comic)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $comic->title }}</h5>
                            <p>{{$comic->description}}</p>
                            <p class="text-center"><a class="btn btn-primary" href="{{ route('dc-comics.show', ['dc_comic' => $comic->id]) }}">Dettagli</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Dettagli</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($comicArray as $comic)
                <tr class="text-center align-middle">
                    <th><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->price}}</td>
                    <td><button class="btn btn-primary"><a class="text-white" href="{{route('dc-comics.show', ['dc_comic' => $comic->id]) }}}}">Dettagli</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
