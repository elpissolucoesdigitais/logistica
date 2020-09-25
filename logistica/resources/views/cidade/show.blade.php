@extends('templates.template')

@section('content')
    <h1 class="text-center">visualizar Cidade (Administrador)</h1>
    <hr>
    
    <div class="col-auto m-auto">
        Nome: {{$cidade->nome}}<br>
        Criado: {{$cidade->created_at}}<br>
        Atualizado: {{$cidade->updated_at}}<br>
    </div>
@endsection