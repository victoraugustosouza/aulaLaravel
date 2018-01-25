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
}
