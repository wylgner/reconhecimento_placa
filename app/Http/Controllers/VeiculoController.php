<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use \Illuminate\Support\Facades\Redirect;
use App\Cliente;

/**
 * Description of VeiculoController
 *
 * @author wylgn
 */
class VeiculoController {

    public function index() {
        $veiculo = Veiculo::get();
        $cliente = Cliente::get();
        return view('veiculo.lista', ['veiculos' => $veiculo, 'clientes' => $cliente]);
    }

    public function formCreate() {
        $cliente = Cliente::pluck('nome', 'id');
        return view('veiculo.formVeiculo', ['clientes' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $veiculo = new Veiculo();
        $validatedData = $request->validate($veiculo->rules, $veiculo->mensagens);
        $insert = $veiculo->create($request->all());
        if ($insert) {
            \Session::flash('mensagem_sucesso', 'Veiculo Cadastrado com Sucesso!');
            return Redirect::to('veiculo')->withErros($validatedData);
        } else {
            \Session::flash('mensagem_sucesso', 'Cadastro não Efetuado!');
            return Redirect::to('veiculo')->withErros($validatedData);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
       
        $veiculo = Veiculo::findOrFail($id);
        $cliente = Cliente::pluck('nome', 'id');
        return view('veiculo.formVeiculo', ['veiculo' => $veiculo, 'clientes' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $veiculo = Veiculo::findOrFail($id);
        $validatedData = $request->validate($veiculo->rules, $veiculo->mensagens);
        $insert = $veiculo->update($request->all());
        if ($insert) {
            \Session::flash('mensagem_sucesso', 'Veiculo Atualizado com Sucesso!');
            return Redirect::to('veiculo')->withErros($validatedData);
        } else {
            \Session::flash('mensagem_sucesso', 'Cadastro não Efetuado!');
            return Redirect::to('veiculo')->withErros($validatedData);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();
        \Session::flash('mensagem_sucesso', 'Veiculo Excluido com Sucesso!');
        return Redirect::to('veiculo');
    }

}
