<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cadastros= Cadastro::all();
       return view("exemplos.exibicaoDeCadastros")->with('cadastros',$cadastros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastro=Cadastro::findOrfail($id);
        return view('exemplos.UmCadastro')->with('cadastro',$cadastro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Cadastro::destroy($id);
       return "Cadastro destruido";
    }
}
