<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionsController extends Controller
{
    public function store(Request $request, $id, $i)
    {
        $option = new Option();
        $option_name = "option-".strval($i);
        $option->text = $request[$option_name];
        $option->poll_id = $id;

        $option->save();

    }
}
