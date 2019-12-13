<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--asset - função que cria diretorio apartir da pasta public -->
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a class='{{request()->routeIs('clientes.*') ? 'active' : ''}}' 
                        href="{{route('clientes.index')}}">Clientes</a>
                    </li>
                    <li><a class='{{request()->routeIs('produtos.*') ? 'active' : ''}}'
                        href="{{route('produtos.index')}}">Produtos</a>
                    </li>
                    <li><a class='{{request()->routeIs('departamentos.*') ? 'active' : ''}}' 
                        href="{{route('departamentos.index')}}">Departamentos</a>
                    </li>
                    <li><a class='{{request()->routeIs('opcoes') ? 'active' : ''}}' 
                        href="{{route('opcoes')}}">Opcoes</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('conteudo')
        </div>
    </div>

   
</body>
</html>
