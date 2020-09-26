
@extends('templates.template')

@section('content')
    <h1 class="text-center">Tela de visualização de (cada fornecedor)</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('caixa/create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-auto m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Despesas</th>
                <th scope="col">Valor Bruto</th>
                <th scope="col">Comissão Motorista</th>
                <th scope="col">Valor Liquido</th>
                 <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($caixa as $caixas) 
                    @php
                        //$caixa=$caixas->find($caixas->id)->relcaixa;
                    @endphp 
                    <tr>
                      <th scope="row">{{$caixas->id}}</th>
                      <td>{{$caixas->despesas}}</td>
                      <td>{{$caixas->valorbruto}}</td>
                      <td>{{$caixas->comissaomotorista}}</td>  
                      <td>{{$caixas->valorliquido}}</td>
                      <td>{{$caixas->valorliquido}}</td>
                      <td>
                        <a href="{{url("cadastro/$caixas->id")}}">
                          <button class="btn btn-dark">Visualizar</button>
                        </a>
                      <a href="">
                          <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                          <button class="btn btn-danger">Deletar</button>
                        </a>
                      </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection