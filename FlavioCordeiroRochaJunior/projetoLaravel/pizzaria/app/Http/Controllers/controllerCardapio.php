<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class controllerCardapio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Cardapio::all();
        return view('cardapio.list',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardapio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cardapio = new Cardapio();
        $cardapio->create($request->all());
        flash(''.$request['nome'].' cadastrado com sucesso!')->success();
        return redirect()->route('cardapio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dado = Cardapio::findOrFail($id);
        return view('cardapio.view',compact('dado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dado = Cardapio::findOrFail($id);
        return view('cardapio.edit',compact('dado'));
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
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->nome = $request['nome'];
        $cardapio->preco = $request['preco'];
        $cardapio->ingredientes = $request['ingredientes'];
        $cardapio->tipo = $request['tipo'];
        $cardapio->status = $request['status'];
        $cardapio->save();
        flash('Cardápio atualizado com sucesso!')->success();
        return redirect()->route('cardapio.index');
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
