@extends('layouts.app')

@section('content')
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
@endsection
