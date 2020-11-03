<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Usuario::all()->sortByDesc('id');
        return view('usuario.list',compact('dados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario = new Usuario();
        $r = DB::select('select cpf from usuarios where cpf = :cpf',['cpf'=>$request->post('cpf')]);
        if (sizeof($r) == 0){
            $usuario->create($request->all());
            flash('Usuário cadastrado com sucesso!')->success();
            return redirect()->route('usuario.index');
        }else{
            flash('Esse cpf já foi cadastrado!')->error();
            return redirect()->route('usuario.create');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dado = Usuario::findOrFail($id);

        return view('usuario.view',compact('dado'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dado = Usuario::findOrFail($id);

        return view('usuario.edit',compact('dado'));

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
        $usuario = Usuario::findOrFail($id);
        $usuario->nome = $request['nome'];
        $usuario->sobrenome = $request['sobrenome'];
        $usuario->cpf = $request['cpf'];
        $usuario->telefone = $request['telefone'];
        $usuario->cidade = $request['cidade'];
        $usuario->bairro = $request['bairro'];
        $usuario->rua = $request['rua'];
        $usuario->numero = $request['numero'];
        $usuario->status = $request['status'];
        $usuario->save();
        flash('Usuário atualizado com sucesso!')->success();
        return redirect()->route('usuario.index');
    }

    /**

     *

     * @param  string $cpf
     * @return \Illuminate\Http\Response
     */
    public function buscarcpf(Request $request)
    {
        $dado = Usuario::all()->where('cpf',$request['cpf'])->values();

       if (sizeof($dado)==0){
            flash("Usuário não encontrado!")->error();
            return redirect()->route('usuario.index');
        }else{
           $dado = $dado[0];
            return view('usuario.view',compact('dado'));
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
