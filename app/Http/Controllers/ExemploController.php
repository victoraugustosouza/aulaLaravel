<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	$nome=$request->input('firstname');
    	$sobrenome=$request->input('lastname');
    	dd($nome,$sobrenome);
        
    	//return view('postExample');
    }
   public function blog(){
   
   	return view('exemplos.blogPage');
   }

    public function section(){
   		
   		return view('exemplos.blogSection');
   }
}
