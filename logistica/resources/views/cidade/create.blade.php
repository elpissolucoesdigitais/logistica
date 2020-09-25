@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar Cidade (Administrador)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('cidade')}}">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da cidade">
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection