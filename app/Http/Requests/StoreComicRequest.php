<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'       => 'required|min:5|max:150',
            'description' => 'nullable',
            'thumb'       => 'required',
            'price'       => 'required',
            'series'      => 'required',
            'sale_date'   => 'required',
            'type'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'          => "Il titolo e' obbligatorio",
            'title.min'               => 'Il titolo deve contenere almeno :min caratteri',
            'title.max'               => "Il titolo non puo' contenere piu' di :max caratteri",
            'thumb.required'          => "L'immagine e' obbligatoria",
            'price.required'          => "Il prezzo e' obbligatorio",
            'series.required'         => "La serie e' obbligatoria",
            'sale_date.required'      => "La data di uscita e' obbligatoria",
            'type.required'           => "La tipologia e' obbligatoria"
        ];
    }
}
