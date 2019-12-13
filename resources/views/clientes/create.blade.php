@extends('layouts.principal')
@section('titulo','Inserir Cliente')
@section('conteudo')

<h3>Inserir Cliente</h3>

    <form action="{{Route('clientes.store')}}" method="POST">
        @csrf
        <input type="text" width="80px" name="txtNome" placeholder="Digite um nome de cliente">
        <button type="submit">Inserir</button>
    </form>
    <a href="{{route('clientes.index')}}">Voltar</a>
@endsection