<?php

// app/Http/Requests/UpdateComicRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url|max:255',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => 'L\'URL dell\'immagine è obbligatorio.',
            'thumb.url' => 'L\'URL dell\'immagine non è valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita non è valida.',
            'type.required' => 'Il tipo è obbligatorio.',
        ];
    }
}
