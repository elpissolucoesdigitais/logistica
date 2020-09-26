@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar (Caixas)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('veiculo')}}">
            @csrf
            <input class="form-control" type="text" name="despesas" id="despesas" placeholder="Despesas">
            <input class="form-control" type="text" name="valorbruto" id="valorbruto" placeholder="Valor Bruto">
            <input class="form-control" type="text" name="comissaomotorista" id="comissaomotorista" placeholder="Comissão Motorista">
            <input class="form-control" type="text" name="valorliquido" id="valorliquido" placeholder="Valor Liquido">
            <input class="btn btn-success" type="button" value="Cadastrar">
        </form>
    </div>
@endsection