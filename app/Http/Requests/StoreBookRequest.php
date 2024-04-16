<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable|max:5000',
            'type' => 'required|max:50',
            'series' => 'required|max:100'
        ];
    }

    public function messages(): array{
        return [
                'title.required' => 'Il titolo deve essere inserito',
                'title.max' => "Il titolo deve avere massimo :max caratteri",
                'type.max' => "La tipologia deve avere massimo :max caratteri",
                'type.required' => 'La tipologia deve essere inserita',
                'description.max' => "Inserisci una descrizione di massimo :max caratteri",
                'series.required' => "Il tipo di serie deve essere inserito",
                'series.max' => "Inserisci il tipo di serie di massimo :max caratteri",
        ];
    }

    public function attributes(): array{
        return [
            "title"=> "Titolo",
            "description"=> "Descrizione",
            "type"=> "Genere",
            "series"=> "Tipo di serie"
        ] ;
    }
}
