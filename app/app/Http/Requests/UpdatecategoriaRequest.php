<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'descricao' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.max' => 'O Nome não pode exceder 255 caracteres.',
            'descricao.required' => 'O campo Descrição é obrigatório.',
            'descricao.max' => 'A Descrição não pode exceder 255 caracteres.',
        ];
    }
}
