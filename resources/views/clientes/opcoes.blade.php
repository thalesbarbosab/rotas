@extends('layouts.principal')
@section('titulo', 'Opcoes')
@section('conteudo')
    <div class="options">
        <ul>
        <li><a href="{{route('opcoes', 1) }}" class="warning">warning</a></li>
            <li><a href="{{route('opcoes', 2) }}" class="info">info</a></li>
            <li><a href="{{route('opcoes', 3) }}" class="success">success</a></li>
            <li><a href="{{route('opcoes', 4) }}" class="error">error</a></li>
        </ul>
    </div>
@endsection