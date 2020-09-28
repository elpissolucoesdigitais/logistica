@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($veiculo)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($veiculo))
            <form name="formEdit" id="formEdit" method="post" action="{{url("veiculo/$veiculos->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('veiculo')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="placa" id="placa" placeholder="Placa"  value="{{$veiculo->placa ?? ''}}" required>>
            <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo"  value="{{$veiculo->modelo ?? ''}}" required>>
            <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca"  value="{{$veiculo->marca ?? ''}}" required>>
            <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo"  value="{{$veiculo->tipo ?? ''}}" required>>
            <input class="form-control" type="text" name="renavam" id="renavam" placeholder="Renavan"  value="{{$veiculo->renavam ?? ''}}" required>>
            <input class="form-control" type="text" name="ano" id="ano" placeholder="Ano"  value="{{$veiculo->ano ?? ''}}" required>>
            <input class="form-control" type="text" name="cor" id="cor" placeholder="Cor"  value="{{$veiculo->cor ?? ''}}" required>>
            <select class="form-control" name="entregador_id" id="entregador_id" required>
                    <option value="{{$veiculo->relEntragador->id ?? ''}}">{{$veiculo->relEntragador->nome ?? 'entregador'}}</option>
                    @foreach($entregador as $entregadores)
                    <option value="{{$entregadores->id}}">{{$entregadores->nome}}</option>
                @endforeach
                </select>
                <input class="btn btn-primary" type="submit" value="@if(isset($veiculo)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection