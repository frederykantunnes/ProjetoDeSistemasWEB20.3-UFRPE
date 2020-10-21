<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use Illuminate\Support\Facades\Auth;

class PreferencesController extends Controller
{
    public function edit()
    {
        $data = array();
        for ($i=1; $i<=5; $i++){
            $result = Preference::all()->where("user_id", Auth::user()->id)->where("category_name_id", $i)->values();
            if ($result->isEmpty()){
                $data[$i] = "unchecked";
            } else{
                $data[$i] = "checked";
            }
        }

        $title = "Editar preferências";
        return view("preference.edit", compact("data", "title"));
    }

    public function store(Request $request){
        for ($i=1; $i<=5; $i++){
            $result = Preference::all()->where("user_id", Auth::user()->id)->where("category_name_id", $i)->values();
            if ($result->isEmpty()){
                if (isset($request[strval($i)])){
                    $preference = new Preference();
                    $preference->category_name_id = $i;
                    $preference->user_id = Auth::user()->id;
                    $preference->save();
                }
            } else{
                if (!isset($request[strval($i)])){
                    $preference = Preference::findOrFail($result[0]->id);
                    $preference->delete();
                }
            }
        }

        flash('Preferências editadas com sucesso.')->success();
        
        return redirect()->route("edit_preference");
    }

    public function destroy($id)
    {
        //
    }
}
