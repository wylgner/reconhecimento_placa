<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{	 
     protected $fillable = [
        'nome',
        'categoria',
        'cpf',
        'telefone',
        'endereco',
        'cidade'
    ];
    public $rules = [
        'nome' => 'required|max:100|min:3',
        'categoria' => 'required|max:255|min:3',
        'cpf' => 'required',
        'telefone' => 'required',
        'endereco' => 'required',
        'cidade' => 'required'
    ];
    public $mensagens = [
        'nome.required' => 'O Campo Nome é Obrigatório!',
        'nome.max' => 'Nome Muito Grande!',
        'nome.min' => 'Nome Muito Curto!',
        'categoria.required' => 'O Campo Categoria é Obrigatório!',
        'categoria.max' => 'Categoria Muito Grande!',
        'categoria.min' => 'Categoria Muito Curto!',
        'cpf.required' => 'O Campo CPF é Obrigatório!',
        'telefone.required' => 'O Campo Telefone é Obrigatório!',
        'endereco.required' => 'O Campo Endereco é Obrigatório!',
        'cidade.required' => 'O Campo Cidade é Obrigatório!'
       
    ];

}
