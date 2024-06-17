@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-5">Modifica i dati del fumetto</h2>
        <form action="{{route('dc-comics.update', $dcComic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$dcComic->title}}">
            </div>
            <div class="mb-3">
                <label class="mb-3" for="type">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option>Seleziona</option>
                    <option @selected($dcComic->type === 'comic book') value="comic book">Comic book</option>
                    <option @selected($dcComic->type === 'graphic novel') value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$dcComic->series}}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="date" name="sale_date" value="{{$dcComic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$dcComic->price}}">
            </div>
            <div class="mb-5">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">
                    {{$dcComic->description}}"
                </textarea>
            </div>
            <div>
                <button class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
@endsection
