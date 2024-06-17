@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-5">Dettagli <span class="text-primary">{{$dcComic->title}}</span></h3>
        <dl>
            <dt>
                <dd><h5>Anno di uscita:</h5>{{($dcComic->sale_date)}}</dd>
                <dd><h5>Descrizione:</h5>{{($dcComic->description)}}</dd>
            </dt>
        </dl>
    </div>
@endsection
