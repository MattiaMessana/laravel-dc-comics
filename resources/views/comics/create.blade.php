@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Crea un nuovo fumetto</h2>
        <form class="mt-3" action="{{ route('comics.store') }}" method="POST">

            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mt-3 w-100">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mt-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="mt-3">
                <label for="thumb" class="form-label">Immagine (inserire percorso)</label>
                <input type="url" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mt-3">
                <label for="price" class="form-label">Prezzo (indicare valuta)</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mt-3">
                <label for="series" class="form-label">Serie fumetto</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>

            <div class="mt-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date">
            </div>

            <div class="mt-3">
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Seleziona</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Grahic Novel</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-success mt-3">Salva</button>
        </form>
    </div>
@endsection
