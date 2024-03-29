<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\ComicFormRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comic :: all();
        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicFormRequest $request)
    {
        $data = $request -> all();

        $newComic = new Comic();

        $newComic -> title = $data['title'];
        $newComic -> editor = $data['editor'];
        $newComic -> author = $data['author'];
        $newComic -> designer = $data['designer'];
        $newComic -> genre = $data['genre'];
        $newComic -> price = $data['price'];
        $newComic -> pubblication_year = $data['pubblication_year'];
        $newComic -> quantity_in_store = $data['quantity_in_store'];
        $newComic -> description = $data['description'];

        $newComic -> save();

        return redirect() -> route('comics.show', $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic :: find($id);

        return view('pages.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $comics = Comic :: find($id);
        return view('pages.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicFormRequest $request, $id)
    {
        $comics = Comic :: find($id);
        $data = $request -> all();


        $comics -> title = $data['title'];
        $comics -> editor = $data['editor'];
        $comics -> author = $data['author'];
        $comics -> designer = $data['designer'];
        $comics -> genre = $data['genre'];
        $comics -> price = $data['price'];
        $comics -> pubblication_year = $data['pubblication_year'];
        $comics -> quantity_in_store = $data['quantity_in_store'];
        $comics -> description = $data['description'];

        $comics -> save();

        return redirect() ->route('comics.show', $comics -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic :: find($id);
        $comics -> delete();
        return redirect() -> route('comics.index');
    }
}
