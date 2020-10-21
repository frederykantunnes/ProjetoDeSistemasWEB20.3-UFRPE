<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class AdmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dados = Cursos::all();
        return view('cursos.listcursos',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("cursos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $meucurso = new Cursos();
        $meucurso->create($request->all());
        flash('Curso Cadastrado com Sucesso')->success();
        return redirect()->route("admcurso.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $curso = Cursos::findOrFail($id);
        return view("cursos.show",compact('curso'));
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
        $curso = Cursos::findOrFail($id);
        return view("cursos.edit",compact('curso'));
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
        $curso = Cursos::findOrFail($id);
        $curso->name = $request['name'];
        $curso->curso = $request['curso'];
        $curso->detalhes = $request['detalhes'];
        $curso->tp1nome = $request['tp1nome'];
        $curso->tp1conteudo = $request['tp1conteudo'];
        $curso->tp1link = $request['tp1link'];
        $curso->tp2nome = $request['tp2nome'];
        $curso->tp2conteudo = $request['tp2conteudo'];
        $curso->tp2link = $request['tp2link'];
        $curso->tp3nome = $request['tp3nome'];
        $curso->tp3conteudo = $request['tp3conteudo'];
        $curso->tp3link = $request['tp3link'];
        $curso->tp4nome = $request['tp4nome'];
        $curso->tp4conteudo = $request['tp4conteudo'];
        $curso->tp4link = $request['tp4link'];
        $curso->save();
        flash('Curso Editado com Sucesso!')->success();
        return redirect()->route("admcurso.index");
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
        $curso = Cursos::findOrFail($id);
        $curso->delete();
        flash('Curso Deletado com Sucesso!')->success();
        return redirect()->route("admcurso.index");
    }
}
