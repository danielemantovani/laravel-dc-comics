@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-5">Inserisci un nuovo fumetto</h2>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{route('dc-comics.store')}}" method="POST" class="delete-form">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control 
                @error('title')
                    is-invalid
                @enderror"
                id="title" name="title" value="{{old('title')}}">
                @error('title')
                <div id="title-error" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="mb-3" for="type">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option>Seleziona</option>
                    <option @selected(old('type') === 'comic book') value="comic book">Comic book</option>
                    <option @selected(old('type') === 'graphic novel') value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control
                @error('series')
                    is-invalid
                @enderror"
                id="series" name="series" value="{{old('series')}}">
                @error('series')
                <div id="series-error" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="date" name="sale_date" value="{{old('sale_date')}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control
                @error('price')
                    is-invalid
                @enderror" 
                id="price" name="price" value="{{old('price')}}">
                @error('price')
                <div id="price-error" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{old('description')}}</textarea>
            </div>
            <div>
                <button class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
@endsection
