<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required'],
            'ingredientes' => ['required'],
            'categoria' => ['required'],
            'modo_de_preparo' => ['required'],
            'slug' => ['required'],
            'img_card' => ['required'],
            'img_receita' => ['required'],
        ];
    }
}
