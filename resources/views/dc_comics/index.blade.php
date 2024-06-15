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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
