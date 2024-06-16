@extends('layouts.app')

@section('content')
    <div class="container w-100">
        <h2 class="mt-4">Comics List</h2>
        <p class="mt-4"><a href="{{route('comics.create')}}">Inserisci nuovo fumetto</a></p>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comicsArray as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td><img class="w-50" src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->price}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
