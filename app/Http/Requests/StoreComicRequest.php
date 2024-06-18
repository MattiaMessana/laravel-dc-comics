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
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:5', 'max:250'],
            'thumb' => ['required'],
            'price' => ['required'],
            'series' => ['required'],
            'sale_date' => ['required'],
            'type' => ['required'],
        ];
    }
     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
            'description.required' => 'La descrizione non può essere vuota',
            'description.min' => 'La descrizione deve contenere almeno 5 caratteri',
            'description.max'=> 'La descrizione è troppo lunga',
            'thumb.required' => 'Immagine non può essere vuoto',
            'price.required' => 'Il prezzo non può essere vuoto',
            'series.required' => 'Serie non può essere vuoto',
            'sale_date.required' => 'Data non puo essere vuoto',
            'type.required' => 'Tipo non può essere vuoto',
        ];
    }
}
