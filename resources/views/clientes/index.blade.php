@extends('layouts.principal')
@section('titulo','Clientes')
@section('conteudo')
    <a href="{{Route('clientes.create')}}">Inserir um novo cliente</a>
    <h3>Listagem de Clientes</h3>
    @if(count($clientes)>0)
        <ol>
            @foreach($clientes as $c)
                <li>{{ $c['nome'] }}  | 
                    <a href="{{ Route('clientes.edit', $c['id'] )}}"> Editar </a> |
                    <a href="{{ Route('clientes.show', $c['id'] )}}"> Detalhes </a> |
                    <form action="{{Route('clientes.destroy', $c['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </li>
            @endforeach
        </ol>
    @else
        <span>Não há registros de clientes</span>
    @endif
    <br>    
@endsection
