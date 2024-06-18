@extends('layouts.app')


@section('content')
    <div class="container w-100 table-responsive">
        <h2 class="mt-4">Comics List</h2>
        <div class="d-flex justify-content-end">
            <p class="mt-4"><a class="btn btn-success" href="{{route('comics.create')}}"><i class="fa-solid fa-plus"></i> NEW COMIC</a></p>
        </div>
        <table class="table my-5">
            <thead class="striped">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Info</th>
                    <th scope="col">Mod</th>
                    <th scope="col">Canc</th>
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
                            <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}"><i class="fa-solid fa-circle-info"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id])}}"><i class="fa-solid fa-marker"></i></a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="sweetAlert" class="btn btn-danger" data-confirm-delete="true"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
