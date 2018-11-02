<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome'=>['required', 'max:100','min:3'],
            'imgFrente'=>['required','mimes:jpeg,bmp,png'],
            'imgCosta'=>['required','mimes:jpeg,bmp,png'],
            'preco'=> 'required'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator)
        {
            if(strpos($this->nome,'-'))
            {
                $validator->errors()->add('nome','O campo nome não pode conter caracteres como (- * $ # % @) ');
            }
        });
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo nome do produto é obrigatório",
            'imgFrente.required' => "Imagem da Frente do produto é obrigatória",
            'imgCosta.required' => "Imagem da Costas do produto é obrigatória",
            'preco.required' => "O preço do produto é obrigatório"
        ];
    }
}
