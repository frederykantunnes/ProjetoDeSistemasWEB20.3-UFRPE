<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;

class CategoryNamesController extends Controller
{
    public function index()
    {
        return view("category.list");
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $polls = Poll::all()->where("category_id", $id)->values();
        $options_array = array();
        foreach($polls as $poll){
            $options = Option::all()->where("poll_id", $poll->id)->values();
            $options_array[$poll->id] = $options;
        }

        $array = [1=> "Política", 2=> "Entretenimento", 3=> "Ciência", 4=> "Tecnologia", 5=> "Esportes"];
        $title = "Categoria ".$array[$id];
        return view("category.index", compact("polls", "options_array", "title"));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
