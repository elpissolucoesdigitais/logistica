@extends('templates.template')

@section('content')
    <h1 class="text-center">Entregas Cadastradas(cada fornecedor)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        Produto: {{$entrega->produto}}<br>
        Quantidade Produto: {{$entrega->quantidadeproduto}}<br>
        Categoria: {{$entrega->categoria}}<br>
        Endereço entrega: {{$entrega->enderecoentrga}}<br>
        Endereço Coleta: {{$entrega->enderecocoleta}}<br>
        Data Pedido: {{$entrega->datapedido}}<br>
    </div>
@endsection