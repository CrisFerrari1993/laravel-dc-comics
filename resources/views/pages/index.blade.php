@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>
    <button class="btn btn-primary"><a href="{{ route('comics.create') }}">Aggiungi Comic</a></button>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic -> id) }}">Title: {{$comic -> title}} <br>
                Author: {{$comic -> author}} <br>
                Genre: {{$comic -> genre}} <br>
                Price: €{{$comic -> price}}
                </a>
                <a class="mx-5" href="{{route('comics.edit', $comic -> id)}}">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                </a>
                <form 
                    class="d-inline-block"
                    action="{{route('comics.destroy', $comic -> id)}}"
                    method="POST">

                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" onclick="return confirm('Confermare?')" type="submit" value="Delete">
                </form>
            </li> 
        @endforeach
    </ul>    
@endsection
