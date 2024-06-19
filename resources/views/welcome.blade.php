
    @extends('layouts.app')

    @section('content')

    <h1>Home</h1>
    <a href="{{ route('comics.index') }}">lista fumetti</a>
    {{-- <a href="{{route('comics.show')}}"></a> --}}
        
    @endsection
