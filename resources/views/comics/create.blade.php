@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Crea un nuovo fumetto</h2>
        <a class="btn btn-primary mt-3" href="{{ route('comics.index') }}"><i class="fa-solid fa-arrow-left"></i></a>
        <form class="mt-3" action="{{ route('comics.store') }}" method="POST">

            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mt-3 w-100">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                <div id="title-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description')
                    is-invalid
                @enderror" name="description" id="description" cols="10" rows="10">
                    {{old('description')}}
                </textarea>
                @error('description')
                <div id="description-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="thumb" class="form-label">Immagine (inserire percorso)</label>
                <input value="{{ old('thumb') }}"  type="url" class="form-control @error('thumb')
                    is-invalid
                @enderror" id="thumb" name="thumb">
                @error('thumb')
                <div id="thumb-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="price" class="form-label">Prezzo (indicare valuta)</label>
                <input value="{{ old('price') }}" type="text" class="form-control @error('price')
                    is-invalid
                @enderror " id="price" name="price">
                @error('price')
                <div id="price-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="series" class="form-label">Serie fumetto</label>
                <input value="{{ old('series') }}" type="text" class="form-control @error('series')
                    is-invalid
                @enderror" name="series" id="series">
                @error('series')
                <div id="series-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" value="{{ old('sale_date') }}" class="form-control @error('sale_date')
                    is-invalid
                @enderror" name="sale_date" id="sale_date">
                @error('sale_date')
                <div id="sale_date-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select @error('type')
                    is-invalid
                @enderror" name="type" id="type">
                    <option value="">Seleziona</option>
                    <option @selected(old('type')) value="comic book">Comic Book</option>
                    <option @selected(old('type')) value="graphic novel">Grahic Novel</option>
                </select>
                @error('type')
                <div id="type-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3"><i class="fa-solid fa-floppy-disk"></i></button>
        </form>
    </div>
@endsection
