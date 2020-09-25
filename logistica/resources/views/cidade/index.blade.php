@extends('templates.template')

@section('content')
    <h1 class="text-center">Tela de visualização de cidades (Admin)</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('cidade/create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Cidade</th>
                <th scope="col">Criado</th>
                <th scope="col">Atualizado</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cidade as $cidades) 
                    @php
                        //$fornecedores=$entregas->find($entregas->id)->relFornecedores;
                    @endphp 
                    <tr>
                      <th scope="row">{{$cidades->id}}</th>
                      <td>{{$cidades->nome}}</td>
                      <td>{{$cidades->created_at}}</td>
                      <td>{{$cidades->updated_at}}</td>  
                      <td>
                        <a href="{{url("cidade/$cidades->id")}}">
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