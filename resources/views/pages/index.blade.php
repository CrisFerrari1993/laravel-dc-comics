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
            </li> 
        @endforeach
    </ul>    
@endsection
