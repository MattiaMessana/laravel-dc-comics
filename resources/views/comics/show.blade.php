@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Dettagli Fumetto</h2>
        <ul>
            <li>
                <h4 class="mt-3 py-4">{{ $comic->title }}</h4>
            </li>
            <li><img class="w-25" src="{{ $comic->thumb }}" alt=""></li>
            <li class="mt-3">Descrizione:</li>
            <li class="p-3">{{ $comic->description }}</li>
            <li class="mt-3">Prezzo: {{ $comic->price }}</li>
            <li class="mt-3">Serie: {{ $comic->series }}</li>
            <li class="mt-3">Venduto il: {{ $comic->sale_date }}</li>
            <li class="mt-3">Tipologia: {{ $comic->type }}</li>
            <ul class="d-flex gap-3">
                <li class="mt-4"><a class="btn btn-primary" href="{{route('comics.index')}}"><i class="fa-solid fa-arrow-left"></i></a></li>
                <li class="mt-4"><a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id])}}"><i class="fa-solid fa-marker"></i></a></li>
                <li class="mt-4">
                    @include('partials.delete-form')
                </li>
            </ul>
        </ul>
    </div>
    @include('partials.delete-comic-modal')
@endsection