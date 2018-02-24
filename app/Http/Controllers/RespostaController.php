<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Resposta;

class RespostaController extends Controller
{
  public function index(){
    	return view('/respostas');
    }
 
	/**
     * Insere a mensagem no banco de dados
     */
    public function enviarResposta(Request $request){
		$respostas = new Resposta();
    
    $respostas->nome=$request->get('nome');
    $respostas->email=$request->get('email');
    $respostas->assunto=$request->get('assunto');
    $respostas->descricao=$request->get('descricao');

    $respostas->codigo_fonte=$request->get('codigo_fonte');
      $respostas->codigo_pergunta=2;

    $respostas->save();
    
    echo "Sua resposta foi registrada nos nossos bancos de dados com sucesso.";
    }
 
	/**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
    	 return view('lista', array('respostas' => Resposta::all()));
    }
	
	  public function show($codigo)
    {
        //
    }
  
    public function edit($codigo)
    {
        $resposta = Resposta::findOrFail($codigo);
        return view('respostas.edit',compact('resposta'));
    }
  
	public function update(RespostaRequest $request, $codigo)
    {
        $resposta = Resposta::findOrFail($codigo);
        $respostas->nome=$request->get('nome');
    $respostas->email=$request->get('email');
    $respostas->assunto=$request->get('assunto');
    $respostas->descricao=$request->get('descricao');

    $respostas->codigo_fonte=$request->get('codigo_fonte');
        $resposta->save();
        return redirect()->route('respostas.index')->with('message', 'Resposta atualizada com sucesso!');
    }
  
    public function destroy($codigo)
    {
        $resposta = Resposta::findOrFail($codigo);
        $resposta->delete();
        return redirect()->route('respostas.index')->with('alert-success','Resposta deletada com sucesso!');
    }
}
