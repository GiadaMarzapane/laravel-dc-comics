@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="my-4">
                        <img src="https://static.dc.com/2023-03/BATGIRLS_v2%20%28COVER%29.jpg?w=640" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body mt-2">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                        <p class="mt-3 fw-bold">Series: {{ $comic->series }}</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary mt-5" href="{{ route('comics.index') }}">Vai all'elenco dei Comics</a>
        </div>
    </main>
@endsection