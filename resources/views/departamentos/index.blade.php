@extends('layouts.principal')
@section('titulo','Departamentos')
@section('conteudo')
    <h3>Lista de Departamentos</h3>
    <ul>
        <li>Administração</li>
        <li>Suporte Técnico</li>
        <li>Almoxarifado</li>
    </ul>   
    
    @alerta()@endalerta
    
@endsection