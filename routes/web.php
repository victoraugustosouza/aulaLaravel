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


/*

Route::get('servicos', function () {
    return "O serviço do Fulano é muito bom.<br><br>
			Gostou?<a href='".url('contato')."'> Esse é o contato dele.</a>";
});


Route::get('servicos1/{id}', function ($id) {
    return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='".url('contato')."'> Esse é o contato dele.</a>";
});


Route::get('servicos2/{id}/{telefone}', function ($id,$telefone) {
    return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='".url('contato')."'> Esse é o telefone dele: ".$telefone.".</a>";
});

*/