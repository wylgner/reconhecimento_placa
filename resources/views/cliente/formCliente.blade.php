@extends('layouts.app')

@section('content')

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if ($errors->any())
    <div id="esconder" onclick="tiraDiv()" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @if(Session::has('mensagem_sucesso'))
    <div id="esconder" onclick="tiraDiv()"class="alert alert-success">{{ Session::get('mensagem_sucesso') }}  </div>
    @endif

       
    @if(Request::is('*/edit'))
    {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'cliente/'.$cliente->id] ) !!}
 
  
    @else
    <div class="col-sm-10" style="margin: 0 auto;">
    {!! Form::open(array('url' => 'cliente/store', 'class' => 'form-horizontal')) !!}
    @endif
       
         <div class="control-label col-sm-5" >
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!} 
        </div>
        <div class="control-label col-sm-5">
            {!! Form::label('categoria', 'Categoria') !!}
            {!! Form::input('text', 'categoria', null, ['class' => 'form-control', 'placeholder' => 'Categoria']) !!}
        </div>
        <div class="control-label col-sm-5">    
            {!! Form::label('cpf', 'CPF') !!}
            {!! Form::input('text', 'cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']) !!}
        </div>
        <div class="control-label col-sm-5">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
        </div>
        <div class="control-label col-sm-5">    
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::input('text', 'endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
        </div>
        <div class="control-label col-sm-5">    
        {!! Form::label('cidade', 'Cidade') !!}
        {!! Form::input('text', 'cidade', null, ['class' => 'form-control', 'placeholder' => 'Cidade']) !!}
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 5px;">
        {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
         </div>
        </div>
        {!! Form::close() !!}
        </div>
@endsection

