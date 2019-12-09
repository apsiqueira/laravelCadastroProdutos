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
    return view('welcome');
});

//envia a requisição pata p controller 
//criar o controle com php artisan make:ProdutoController() sendo o controler oque vc precisar
Route::resource('/contato', 'ContatoController');
Route::resource('/produtos', 'ProdutoController');
// [ 'as'=>'produtos.create',
//   'uses'=>'ProdutoController@create'
// ]);