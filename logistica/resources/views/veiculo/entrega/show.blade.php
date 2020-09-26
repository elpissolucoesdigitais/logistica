@extends('templates.template')

@section('content')
    <h1 class="text-center">veiculos Cadastradas</h1>
    <hr>
    
    <div class="col-auto m-auto">
        Placa: {{$veiculo->placa}}<br>
        Modelo: {{$veiculo->modelo}}<br>
        Marca: {{$veiculo->marca}}<br>
        Tipo: {{$veiculo->tipo}}<br>
        Renavam: {{$veiculo->renavam}}<br>
        Ano: {{$veiculo->ano}}<br>
        Cor: {{$veiculo->cor}}<br>
    </div>
@endsection