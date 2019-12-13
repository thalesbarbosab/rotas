<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function Produtos(){
        echo "Produtos Teste";
    }
    public function Nomes($teste){
        echo "O nome do josen lairan é $teste";
    }
    public function Multiplicar($n1,$n2){
        $multi = $n1 * $n2;
        return "A multiplicação de $n1 e $n2 é igual $multi";
    }
}
