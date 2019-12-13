@extends('layouts.principal')
@section('titulo','Produtos')
@section('conteudo')
    <h3>Lista de Produtos</h3>
    <ul>
        <li>PC</li>
        <li>Notebook</li>
        <li>Tablet</li>
    </ul>    
    @component('components.alerta')@endcomponent
@endsection