@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar (cada fornecedor)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('entrega')}}">
            @csrf
            <input class="form-control" type="text" name="produto" id="produto" placeholder="Produto">
            <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Quantidade">
            <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria">
            <input class="form-control" type="text" name="enderecoentrega" id="enderecoentrega" placeholder="Endereço entrega">
            <input class="form-control" type="text" name="enderecocoleta" id="enderecocoleta" placeholder="Endereço Coleta">
            <input class="btn btn-success" type="button" value="Cadastrar">
        </form>
    </div>
@endsection