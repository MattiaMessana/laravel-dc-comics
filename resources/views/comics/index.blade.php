@extends('layouts.app')

@section('content')
    <div class="container w-100">
        <h2 class="mt-4">Comics List</h2>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Venduto il</th>
                    <th scope="col">Tipologia</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comicsArray as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td><img class="w-100" src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
