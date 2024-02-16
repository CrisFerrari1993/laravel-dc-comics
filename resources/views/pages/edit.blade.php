@extends('layouts.main-layout')
@section('head')
    <title>Update</title>
@endsection
@section('content')
    <h1>Edit {{$comics -> title}} [{{$comics -> id}}] </h1>
    <div class="container">
        <form action="{{ route('comics.update', $comics -> id)}}"
              method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col ">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$comics -> title}}">
                </div>
                <div class="col">
                    <label for="editor">Editor</label>
                    <input type="text" name="editor" value="{{$comics -> editor}}">
                </div>
                <div class="col">
                    <label for="author">Author</label>
                    <input type="text" name="author" value="{{$comics -> author}}">
                </div>
                <div class="col">
                    <label for="designer">Designer</label>
                    <input type="text" name="designer" value="{{$comics -> designer}}">
                </div>
                <div class="col">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" value="{{$comics -> genre}}">
                </div>
                <div class="col">
                    <label for="price">Price</label>
                    <input type="text" name="price" value="{{$comics -> price}}">
                </div>
                <div class="col">
                    <label for="pubblication_year">Pubblication Year</label>
                    <input type="text" name="pubblication_year" value="{{$comics -> pubblication_year}}">
                </div>
                <div class="col">
                    <label for="quantity_in_store">Quantity in store</label>
                    <input type="text" name="quantity_in_store" value="{{$comics -> quantity_in_store}}">
                </div>
                <div class="col">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$comics -> description}}">
                </div>
            </div>
            <input class="m-5" type="submit" value="Update">
        </form>
    </div>
    <button class="btn btn-primary"><a href="/">Back to Home</a></button>
@endsection
