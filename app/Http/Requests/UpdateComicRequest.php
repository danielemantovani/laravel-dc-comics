<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
                'type' => ['required'],
                'series' => ['required'],
                'sale_date' => ['required'],
                'price' => ['required'],
                'description' => ['required'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'title.required' => 'Il campo titolo non può essere vuoto',
            'type' => 'Selezionare il tipo di fumetto',
            'series.required' => 'Il campo serie non può essere vuoto',
            'price.required' => 'Il campo prezzo non può essere vuoto',
        ];
    }
}