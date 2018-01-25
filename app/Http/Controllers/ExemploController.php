<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cadastro;


class ExemploController extends Controller
{
   public function pagInicial(){

   	return view('welcome');
   }

   public function recebeParametro($nomeDoParametro){
   		dd($nomeDoParametro);
   }

   public function exibir(){
   
   	return view('exemplos.postExample');
   }


    public function add(Request $request)
    {
    	$firstname=$request->input('firstname');
    	$lastname=$request->input('lastname');

    	$cadastro=new  Cadastro;
      $cadastro->nome=$firstname;
      $cadastro->sobrenome=$lastname;
      $cadastro->save();

    /*  Cadastro::create(['nome' => $firstname,
                        'sobrenome'=>$lastname,
    ]);

    */
    
    	return view('exemplos.postExample');
    }









   public function blog(){
   
   	return view('exemplos.blogPage');
   }

    public function section(){
   		
   		return view('exemplos.blogSection');
   }
}
