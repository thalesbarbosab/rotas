@extends('layouts.principal')
@section('titulo','Detalhes do Cliente')
@section('conteudo')
    <h3>Detalhes do Cliente</h3>
    <p>ID: {{$cliente['id']}}</p>
    <p>Nome: {{$cliente['nome']}}</p>
    <br>
    <a href="{{route('clientes.index')}}">Voltar</a>
@endsection