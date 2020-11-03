<?php

namespace App\Http\Controllers;

use App\Models\Trabalho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TrabalhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Trabalho::all();
        if(count($dados)==0){
            flash('Nenhum trabalho cadastrado')->warning();
        }
        return view('trabalho.list', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabalho.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = $request['documento']->getClientOriginalName();
        $path = $request['documento']->storeAs('public', $filename );

        $trabalho = new Trabalho();
        $trabalho->titulo = $request['titulo'];
        $trabalho->autor = $request['autor'];
        $trabalho->tipoDocumento = $request['tipoDocumento'];
        $trabalho->area = $request['area'];
        $trabalho->descricao = $request['descricao'];
        $trabalho->ano = $request['ano'];
        $trabalho->documento = $filename  ;
        $trabalho->user_id = $request['user_id'];
        $trabalho->save();
        return redirect()->route("dashboard");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabalho = Trabalho::findOrFail($id);
        return view('trabalho.show', compact('trabalho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabalho = Trabalho::findOrFail($id);
        return view('trabalho.edit', compact('trabalho'));
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
        $trabalho = Trabalho::findOrFail($id);
        $trabalho->titulo = $request['titulo'];
        $trabalho->autor = $request['autor'];
        $trabalho->tipoDocumento = $request['tipoDocumento'];
        $trabalho->area = $request['area'];
        $trabalho->descricao = $request['descricao'];
        $trabalho->ano = $request['ano'];
        $trabalho->save();
        flash('Trabalho editado com Sucesso')->success();
        $dados = Trabalho::all()->where('user_id', Auth::user()->id)->values();
        return view('trabalho.listtrabalhos', compact('dados'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabalho = Trabalho::findOrFail($id);
        $trabalho->delete();
        flash('Trabalho excluido com Sucesso')->success();
        $dados = Trabalho::all()->where('user_id', Auth::user()->id)->values();
        return view('trabalho.listtrabalhos', compact('dados'));
    }
}
