<?php



Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/', function () {
    return view('exemplos.pagina');
});
*/

/*

Route::get('/','ExemploController@pagInicial');

/*
Route::get('/{nomeDoParametro}','ExemploController@recebeParametro');



Route::get('servicos', function () {
    return "O serviço do Fulano é muito bom.<br><br>
			Gostou?<a href='https://laravel.com/'> Esse é o contato dele.</a>";
});



*/

/*

Route::get('servicos1/{id}', function ($id) {
    return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='https://laravel.com/'> Esse é o contato dele.</a>";
});




Route::get('servicos2/{id}/{telefone}', function ($id,$telefone) {

    return "O serviço do ".$id." é muito bom.<br><br>
Gostou?<a href='".url('contato')."'> Esse é o telefone dele: ".$telefone.".</a>";
});






Route::get('/nome', function () {
    return view('exemplos.passarNome')->with('name','Claudio');
});




Route::get('/array', function () {
	$tarefas=[
		'Estudar',
		'Assistir Netflix',
		'Ir na academia',
	];
    return view('exemplos.passarArray')->with('tarefas',$tarefas);
});

/*

Route::get('/postRequest','ExemploController@exibir')->name('exemplo_exibir');

Route::post('postRequest','ExemploController@add')->name('exemplo');

Route::get('/blog','ExemploController@blog')->name('exemplo_blog');

Route::get('/blogsection','ExemploController@section')->name('exemplo_blogsection');

*/


Route::get('/exercicio', function () {
    return view('exemplos.retro');
});
