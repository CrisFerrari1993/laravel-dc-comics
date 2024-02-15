@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>Comic: {{$comics -> title}}</h1>
    <ul>
        <li>Editor: {{$comics -> editor }}</li>
        <li>Author: {{$comics -> author}}</li>
        <li>Designer: {{$comics -> designer}}</li>
        <li>Genre: {{$comics -> genre}}</li>
        <li>Price: €{{$comics -> price}}</li>
        <li>Pubblication Year: {{$comics -> pubblication_year}}</li>
        <li>Quantity in store: {{$comics -> quantity_in_store}}</li>
        <li>Description: {{$comics -> description}}</li>
    </ul>
@endsection
