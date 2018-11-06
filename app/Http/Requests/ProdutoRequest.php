<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class produtoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required','max:100','min:10'],
            'imgFrente'=>['required'],
            'imgCosta'=>['required'],
            'preco'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo nome do produto é obrigatório.",
            'imgFrente.required' => "O produto deve conter imagem de frente.",
            'imgCosta.required' => "O produto deve conter imagem de costas.",
            'preco.required' => "Preço é obrigatório."
        ];
    }
}
