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
    <a href="veiculo/formveiculo">Adicionar novo veiculo</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Placa</th>
                <th>Ano</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <th scope="row">1</th>
                <td>{{ $veiculo->modelo }}</td>
                <td>{{ $veiculo->marca }}</td>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->ano }}</td>
                <td>{{ $veiculo->cliente_id }}</td>
                
                <td>
                    <a href="veiculo/{{ $veiculo->id }}/edit"class="btn btn-info">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'url' => 'veiculo/'.$veiculo->id, 'style' => 'display: inline;']) !!}
                    <button type="submit" class="btn btn-dark">Excluir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection


