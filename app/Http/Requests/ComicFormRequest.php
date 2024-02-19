<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:1|max:255',
            'editor' => 'required|string|min:1|max:255',
            'author' => 'required|string|min:1|max:255',
            'designer' => 'required|string|min:1|max:255',
            'genre' => 'required|string|min:1|max:255',
            'price' => 'required|numeric',
            'pubblication_year' => 'required|numeric',
            'quantity_in_store' => 'required|numeric',
            'description' => 'required|string|min:1|max:255',
        ];
    }
    public function messages() {
        
        return [
            //Errore per il titolo
            'title.min' => 'Il titolo deve essere di almento un carattere',
            'title.required' => 'Il titolo deve essere inserito',
            //Errore per l'editor
            'editor.min' => 'L\'editore deve essere di almento un carattere',
            'editor.required' => 'L\'editore deve essere inserito',
            //Errore per l'autore
            'author.min' => 'Il titolo deve essere di almento un carattere',
            'author.required' => 'L\'autore deve essere inserito',
            //Errore per il disegnatore
            'designer.min' => 'Il Disegnatore deve essere di almento un carattere',
            'designer.required' => 'Il Disegnatore deve essere inserito',
            //Errore per il genere
            'genre.min' => 'Il titolo deve essere di almento un carattere',
            'genre.required' => 'Il titolo deve essere inserito',
            //Errore per il prezzo
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.required' => 'Il prezzo deve essere inserito',
            //Errore per l'anno di pubblicazione
            'pubblication_year.numeric' => 'L\'anno di pubblicazione deve essere un numero',
            'pubblication_year.required' => 'L\'anno di pubblicazione deve essere inserita',
            //Errore per la quantita in magazzino
            'quantity_in_store.numeric' => 'La quantità deve essere un numero',
            'quantity_in_store.required' => 'La quantità deve essere inserita',
            //Errore per la descrizione
            'description.min' => 'La descrizione deve contenere del testo',
            'description.required' => 'La descrizione deve essere inserita',
        ];
    }
}
