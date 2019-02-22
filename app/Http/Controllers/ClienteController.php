<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Veiculo;
use \Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::get();
        return view('cliente.lista', ['clientes' => $cliente]);

    }

      public function formCreate() {
        return view('cliente.formCliente');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $cliente = new Cliente();
        $validatedData = $request->validate($cliente->rules, $cliente->mensagens);
        $insert = $cliente->create($request->all());
        if ($insert) {
            \Session::flash('mensagem_sucesso', 'Cliente Cadastrado com Sucesso!');
            return Redirect::to('cliente')->withErros($validatedData);
        } else {
            \Session::flash('mensagem_sucesso', 'Cadastro não Efetuado!');
            return Redirect::to('cliente')->withErros($validatedData);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $cliente = Cliente::findOrFail($id);
          return view('cliente.formCLiente', ['cliente' => $cliente]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $validatedData = $request->validate($cliente->rules, $cliente->mensagens);
        $insert = $cliente->update($request->all());
        if ($insert) {
            \Session::flash('mensagem_sucesso', 'Cliente Atualizado com Sucesso!');
            return Redirect::to('cliente')->withErros($validatedData);
        } else {
            \Session::flash('mensagem_sucesso', 'Cadastro não Efetuado!');
           return Redirect::to('cliente')->withErros($validatedData);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cliente = Cliente::findOrFail($id);
         
        $cliente->delete();
        \Session::flash('mensagem_sucesso', 'Cliente Excluido com Sucesso!');
        return Redirect::to('cliente');

    }
}
