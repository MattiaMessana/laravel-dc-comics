@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Crea un nuovo fumetto</h2>

        <a class="btn btn-primary mt-3" href="{{route('comics.index')}}">Torna alla lista</a>

        <form class="mt-3" action="{{ route('comics.update',['comic' => $comic->id]) }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf
            @method('PUT')

            <div class="mt-3 w-100">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mt-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                    {{ $comic->description }}
                </textarea>
            </div>

            <div class="mt-3">
                <label for="thumb" class="form-label">Immagine (inserire percorso)</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mt-3">
                <label for="price" class="form-label">Prezzo (indicare valuta)</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price}}">
            </div>

            <div class="mt-3">
                <label for="series" class="form-label">Serie fumetto</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="mt-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}">
            </div>

            <div class="mt-3">
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select" name="type" id="type">
                    <option>Seleziona</option>
                    <option @selected($comic->type === "comic book") value="comic book">Comic Book</option>
                    <option @selected($comic->type === "graphic novel") value="graphic novel">Grahic Novel</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-success mt-3">Salva</button>
        </form>
    </div>
@endsection
