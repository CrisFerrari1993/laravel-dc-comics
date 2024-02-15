@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>Create new Comic</h1>
    <div class="container">
        <form action="{{ route('comics.store')}}"
              method="POST"">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col ">
                    <label for="title">Title</label>
                    <input type="title" name="title" placeholder="Insert title">
                </div>
                <div class="col">
                    <label for="editor">Editor</label>
                    <input type="text" name="editor" placeholder="Insert editor's name">
                </div>
                <div class="col">
                    <label for="author">Author</label>
                    <input type="text" name="author" placeholder="Insert author's name">
                </div>
                <div class="col">
                    <label for="designer">Designer</label>
                    <input type="text" name="designer" placeholder="Insert designer's name">
                </div>
                <div class="col">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" placeholder="Insert genre">
                </div>
                <div class="col">
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="price">
                </div>
                <div class="col">
                    <label for="pubblication_year">Pubblication Year</label>
                    <input type="text" name="pubblication_year" placeholder="pubblication year">
                </div>
                <div class="col">
                    <label for="quantity_in_store">Quantity in store</label>
                    <input type="text" name="quantity_in_store" placeholder="quantity in store">
                </div>
                <div class="col">
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="description">
                </div>
            </div>
            <input class="m-5" type="submit" value="Create">
        </form>
    </div>
    <button class="btn btn-primary"><a href="/">Back to Home</a></button>
@endsection