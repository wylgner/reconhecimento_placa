<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Veiculo
 *
 * @author wylgn
 */
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model {

    protected $fillable = [
        'modelo',
        'marca',
        'placa',
        'ano',
        'cliente_id'
    ];
      public $rules = [
        'modelo' => 'required|max:100|min:3',
        'marca' => 'required|max:255|min:3',
        'placa' => 'required',
        'ano' => 'required',
        'cliente_id' => 'required'
       
    ];
       public $mensagens = [
       
       
    ];

}
