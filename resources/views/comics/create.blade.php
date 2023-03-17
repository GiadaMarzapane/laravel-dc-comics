@extends('layout.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('comics.store') }}"
                        method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo*:</label>
                            <input required type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie*:</label>
                            <input required type="text" name="series" class="form-control" id="series" placeholder="Inserisci la serie">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo*:</label>
                            <input required type="number" min="1" step="0.01" name="price" class="form-control" id="price" placeholder="Inserisci il prezzo">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Inserisci descrizione comic"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Inserisci Comic</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection