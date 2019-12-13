<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello');
});

Route::get('produtos', 'MeuControlador@Produtos');
Route::get('nomes/{nome}','MeuControlador@Nomes');
Route::get('multiplicar/{n1}/{n2}','MeuControlador@Multiplicar');
Route::resource('clientes','ClienteControlador');
Route::resource('produtos','ProdutoController');
Route::resource('departamentos','DepartamentoController');

Route::get('opcoes/{opcao?}', function($opcao=null){
	return view('clientes.opcoes', compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function(){
	return view('clientes.exemplo');
})->name('bootstrap');

/*

Route::view('/hello','hello');

Route::get('/ola', function() {
	return view('teste');
})->name('teste');

Route::get('/nome/{nome}/{idade}', function($nome,$idade){
		if(is_numeric($idade)){
			echo "Idade é Inteiro";
		}
		else{
			echo "Idade não é inteiro";
		}
});
Route::get('/nomecomregra/{nome}/{n?}', function($nome,$n=null){
		if(isset(($n))){
			echo "Olá $nome, sua idade é $n";
		}
		else{
			echo "Olá $nome";
		}
		
});

Route::prefix('aplicacoes')->group(function(){
	Route::get('/', function(){
		return view('app');
	})->name('app');
	Route::get('/profile', function(){
		return view('profile');
	})->name('app.profile');
	Route::get('/user', function(){
		return view('user');
	})->name('app.user');
});

Route::prefix("app1")->group(function(){
	Route::get("/", function(){
		return "Pagina principal";
	});
	Route::get("profile/{id?}", function($id=null){
		if($id == 1){
			echo "Pagina de Perfil de Jose";
		}
		else{
			echo "Pagina de Perfil";
		}
		
	});
	Route::get("about",function(){
		return "Nada";
	
	});
});
//redirecionar da rota teste para /
Route::redirect("/teste","/", 301); //301 - codigo de retorno parao navegador que saiba que deve buscar dados na rota escolhida

Route::view('/hell','hellonome',['nome'=>'Thales','sobrenome'=>'Bento']);

Route::get('/hello2/{nome}/{sobrenome}', function($nome,$sobrenome){
	return view('hellonome',['nome' => $nome, 'sobrenome' => $sobrenome]);
});

Route::get('produtos', function(){
	return redirect()->route('app.user');
});
*/