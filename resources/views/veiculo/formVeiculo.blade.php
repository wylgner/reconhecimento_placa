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
{!! Form::model($veiculo, ['method' => 'PATCH', 'url' => 'veiculo/'.$veiculo->id] ) !!}


@else
<div class="col-sm-10" style="margin: 0 auto;">
    {!! Form::open(array('url' => 'veiculo/store', 'class' => 'form-horizontal')) !!}
    @endif

    <div class="control-label col-sm-5" >
        {!! Form::label('modelo', 'Modelo') !!}
        {!! Form::input('text', 'modelo', null, ['class' => 'form-control', 'placeholder' => 'Modelo']) !!} 
    </div>
    <div class="control-label col-sm-5">
        {!! Form::label('marca', 'Marca') !!}
        {!! Form::input('text', 'marca', null, ['class' => 'form-control', 'placeholder' => 'Marca']) !!}
    </div>
    <div class="control-label col-sm-5">    
        {!! Form::label('placa', 'Placa') !!}
        {!! Form::input('text', 'placa', null, ['class' => 'form-control', 'placeholder' => 'placa']) !!}
    </div>
    <div class="control-label col-sm-5">
        {!! Form::label('ano', 'Ano') !!}
        {!! Form::input('date', 'ano', null, ['class' => 'form-control', 'placeholder' => 'Ano']) !!}
    </div>
    <div class="control-label col-sm-5">
        {!! Form::label('cliente', 'Cliente') !!}
        {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10" style="margin-top: 5px;">
            {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection



