<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/Respostas', 'RespostaController@index');
Route::post('/enviarResposta', 'RespostaController@enviar');
//Route::get('/', 'RespostaController@lista');
Route::get('/Perguntas', 'PerguntaController@index');
Route::post('/enviar', 'PerguntaController@enviar');
Route::get('/', 'PerguntaController@lista');
/*
Route::get('/', function () {
   // return view('welcome');
  return view('/perguntas/perguntas');
});

Route::post('/enviar', function(Illuminate\Http\Request $request){
  
	$perguntas = new App\Pergunta();
  $perguntas->nome=$request->get('nome');
  $perguntas->email=$request->get('email');
  $perguntas->assunto=$request->get('assunto');
  $perguntas->descricao=$request->get('descricao');
  
  $perguntas->codigo_fonte=$request->get('codigo_fonte');
  
  $perguntas->save();
  
  
  echo "Sua pergunta foi registrada nos nossos bancos de dados com sucesso.";
});

Route::get('/lista', function () {
    return view('/lista', array('perguntas' => App\Pergunta::all()));
});
Route::get('/Perguntas', 'PerguntaController@index');
Route::post('/enviar', 'PerguntaController@enviar');
Route::get('/', 'PerguntaController@lista');

*/
/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@getIndex');
    Route::get('/Perguntas', 'PerguntaController@index');
	Route::get('/', 'PerguntaController@lista')
    Route::get('/Perguntas/inserir', 'PerguntaController@getInserir');
    Route::post('/Perguntas/inserir', 'PerguntaController@postInserir');
    Route::get('/Perguntaseditar/{codigo}', 'PerguntaController@getEditar');
    Route::post('/Perguntas/editar/{codigo}', 'PerguntaController@postEditar');
    Route::post('/Perguntas/deletar/{codigo}', 'PerguntaControllerr@postDeletar');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
