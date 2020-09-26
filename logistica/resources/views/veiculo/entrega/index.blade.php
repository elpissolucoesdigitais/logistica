
@extends('templates.template')

@section('content')
    <h1 class="text-center">Tela de visualização de (cada fornecedor)</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('veiculo/create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-auto m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Placa</th>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Tipo</th>
                <th scope="col">Renavam</th>
                <th scope="col">Ano</th>
                <th scope="col">Cor</th>
                <th scope="col">Entregador</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($veiculo as $veiculos) 
                    @php
                        //$veiculo=$veiculos->find($veiculos->id)->relveiculo;
                    @endphp 
                    <tr>
                      <th scope="row">{{$veiculos->id}}</th>
                      <td>{{$veiculos->placa}}</td>
                      <td>{{$veiculos->modelo}}</td>
                      <td>{{$veiculos->marca}}</td>  
                      <td>{{$veiculos->tipo}}</td>
                      <td>{{$veiculos->renavam}}</td>
                      <td>{{$veiculos->ano}}</td>
                      <td>{{$veiculos->cor}}</td>
                      <td>{{$veiculos->entregador_id}}</td>
                      <td>
                        <a href="{{url("cadastro/$veiculos->id")}}">
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