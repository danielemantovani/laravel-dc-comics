@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-5">Inserisci un nuovo fumetto</h2>
        <form action="{{route('dc-comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label class="mb-3" for="type">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option selected>Seleziona</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="title" name="serie">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="date" name="sale_date">
            </div>
            <div class="mb-5">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div>
                <button class="btn btn-primary">
                    <a class="text-white" href="">Invia</a>
                </button>
            </div>
        </form>
    </div>
@endsection
