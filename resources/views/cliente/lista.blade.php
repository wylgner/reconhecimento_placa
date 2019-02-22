@extends('layouts.app')
 <script src="{{ asset('js/funcoes.js') }}" defer></script>
@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if(Session::has('mensagem_sucesso'))
    <div id="esconder" onclick="tiraDiv()" class="alert alert-success">{{ Session::get('mensagem_sucesso') }} 
    </div>
    @endif
    <a href="cliente/formCliente">Adicionar novo Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th colspan="">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <th scope="row"></th>
                 <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->categoria }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td>{{ $cliente->cidade }}</td>
                <td>
                    <a href="cliente/{{ $cliente->id }}/edit"class="btn btn-info">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'url' => 'cliente/'.$cliente->id, 'style' => 'display: inline;']) !!}
                    <button type="submit" class="btn btn-dark">Excluir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection
