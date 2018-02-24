<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pergunta;

class PerguntaController extends Controller
{
    /**
     * Exibe o formulário para enviar uma mensagem
     */
    public function index(){
    	return view('/perguntas/perguntas');
    }
 
	/**
     * Insere a mensagem no banco de dados
     */
    public function enviar(Request $request){
		$perguntas = new Pergunta();
    
    $perguntas->nome=$request->get('nome');
    $perguntas->email=$request->get('email');
    $perguntas->assunto=$request->get('assunto');
    $perguntas->descricao=$request->get('descricao');

    $perguntas->codigo_fonte=$request->get('codigo_fonte');

    $perguntas->save();
    
    echo "Sua pergunta foi registrada nos nossos bancos de dados com sucesso.";
    }
 
	/**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
    	 return view('lista', array('perguntas' => Pergunta::all()));
    }
	
	  public function show($codigo)
    {
        //
    }
  
    public function edit($codigo)
    {
        $pergunta = Pergunta::findOrFail($codigo);
        return view('perguntas.edit',compact('pergunta'));
    }
  
	public function update(PerguntaRequest $request, $codigo)
    {
        $pergunta = Pergunta::findOrFail($codigo);
        $perguntas->nome=$request->get('nome');
    $perguntas->email=$request->get('email');
    $perguntas->assunto=$request->get('assunto');
    $perguntas->descricao=$request->get('descricao');

    $perguntas->codigo_fonte=$request->get('codigo_fonte');
        $pergunta->save();
        return redirect()->route('perguntas.index')->with('message', 'Pergunta atualizada com sucesso!');
    }
  
    public function destroy($codigo)
    {
        $pergunta = Pergunta::findOrFail($codigo);
        $pergunta->delete();
        return redirect()->route('perguntas.index')->with('alert-success','Pergunta deletada com sucesso!');
    }
}
