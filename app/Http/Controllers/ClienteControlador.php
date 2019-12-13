<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    private $clientes = [];

    public function __construct(){
        $clientes = session('clientes');
        if((!isset($clientes))){
            session(['clientes'=> $this->clientes]);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index', compact(['clientes']));
        /*
        echo "<ol>";
        foreach($this->clientes as $c){
            echo "<li>".$c['nome']."</li>";
        }
        echo "</ol>";
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = count($clientes) + 1;
        $nome = $request->txtNome;
        $dados = ['id'=>$id,'nome'=>$nome];
        $clientes[] = $dados;
        session(['clientes'=> $clientes]);
        return redirect()->route('clientes.index');
/*
metodo antigo

        //defindo um contador para cada informação que for recebida +1
        $id = count($this->clientes) + 1;
        //recebendo o que foi enviado no campo txtNome
        $nome = $request->txtNome;
        //atribuindo os valores recebidos no array dados
        $dados = ['id'=>$id,'nome'=>$nome];
        //atribuindo os valores do array dados no array this->clientes[];
        $this->clientes[] = $dados;
        //dd($this->clientes);
        //
        //return redirect()->route('clientes.index');
        //Se for necessario 
        $clientes = $this->clientes;
        return view('clientes.index', compact(['clientes']));
    
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // metodo que retorna informações de um id
        $clientes = session('clientes');
        $cliente = $clientes[$id -1];
        //retornando a view usando compact
        //return view('clientes.info', compact(['cliente']));
        //retornando a view usando o with
        return view('clientes.info')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id -1];
        return view('clientes.edit')->with('cliente',$cliente);
        //return view('clientes.edit', compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id -1]['nome'] = $request->txtNome;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id -1];

        return redirect()->route('clientes.index');
    }
}
