@extends('templates.template')

@section('content')
    <h1 class="text-center">Resultados finaceiros(caixas)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        Despesas: {{$caixa->despesas}}<br>
        Valorbruto: {{$caixa->valorbruto}}<br>
        Comissão Motorista: {{$caixa->comissaomotorista}}<br>
        Valor Liquido: {{$caixa->valorliquido}}<br>
        </div>
@endsection