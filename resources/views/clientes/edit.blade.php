@extends('layouts.principal')
@section('titulo','Editar Cliente')
@section('conteudo')
    <h3>Editar Cliente</h3>
    <form action="{{Route('clientes.update', $cliente['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" width="50px" name="txtNome" value="{{$cliente['nome']}}">
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{route('clientes.index')}}">Voltar</a>
@endsection