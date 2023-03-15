@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://static.dc.com/2023-03/BATGIRLS_v2%20%28COVER%29.jpg?w=640" class="card-img-top" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection