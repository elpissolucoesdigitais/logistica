@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar (Veiculo)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('veiculo')}}">
            @csrf
            <input class="form-control" type="text" name="placa" id="placa" placeholder="Placa">
            <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo">
            <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca">
            <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo">
            <input class="form-control" type="text" name="renavam" id="renavam" placeholder="Renavan">
            <input class="form-control" type="text" name="ano" id="ano" placeholder="Ano">
            <input class="form-control" type="text" name="cor" id="cor" placeholder="Cor">
            <input class="form-control" type="text" name="entregador_id" id="entregador_id" placeholder="Entregador">
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection