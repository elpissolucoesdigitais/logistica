@extends('templates.template')

@section('content')
    <h1 class="text-center">Tela de visualização de (cada fornecedor)</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('entrega/create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-auto m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Categoria</th>
                <th scope="col">Endereço entrega</th>
                <th scope="col">Endereço Coleta</th>
                <th scope="col">Data Pedido</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($entrega as $entregas) 
                    @php
                        //$fornecedores=$entregas->find($entregas->id)->relFornecedores;
                    @endphp 
                    <tr>
                      <th scope="row">{{$entregas->id}}</th>
                      <td>{{$entregas->produto}}</td>
                      <td>{{$entregas->quantidadeproduto}}</td>
                      <td>{{$entregas->categoria}}</td>  
                      <td>{{$entregas->enderecoentrga}}</td>
                      <td>{{$entregas->enderecocoleta}}</td>
                      <td>{{$entregas->datapedido}}</td>
                      <td>
                        <a href="{{url("cadastro/$entregas->id")}}">
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