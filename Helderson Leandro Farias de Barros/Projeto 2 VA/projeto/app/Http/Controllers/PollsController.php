<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;
use App\Models\Preference;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\VotesController;

class PollsController extends Controller
{
    public function index()
    {
        $preferences_array = array();
        $options_array = array();
        $preferences = Preference::all()->where("user_id", Auth::user()->id)->values();
        foreach ($preferences as $preference) {
            array_push($preferences_array, $preference->category_name_id);
        }
            
        $polls = Poll::whereIn('category_id', $preferences_array)->get();

        foreach($polls as $poll){
            $options = Option::all()->where("poll_id", $poll->id)->values();
            $options_array[$poll->id] = $options;
        }
        
        $title = "Página inicial";

        return view("poll.index", compact("polls", "options_array", "title"));
    }

    public function new(){
        $polls = Poll::orderBy('created_at', 'desc')->get();
        $options_array = array();
        foreach($polls as $poll){
            $options = Option::all()->where("poll_id", $poll->id)->values();
            $options_array[$poll->id] = $options;
        }

        $title = "Recentes";
        return view("poll.index", compact("polls", "options_array", "title"));
    }

    public function trending(){
        $polls = Poll::orderBy('votes_count', 'desc')->get();
        $options_array = array();
        foreach($polls as $poll){
            $options = Option::all()->where("poll_id", $poll->id)->values();
            $options_array[$poll->id] = $options;
        }

        $title = "Em alta";
        return view("poll.index", compact("polls", "options_array", "title"));
    }

    public function create()
    {
        return view("poll.create");
    }

    public function store(Request $request)
    {
        $poll = new Poll();
        $poll->question = $request["question"];
        $poll->user_id = Auth::user()->id;
        $poll->category_id = $request["category"];
        $poll->save();
        
        for ($i=1; $i<= 5; $i++){
            $option = "option-".strval($i);
            if ($request[$option] != ""){
                $optionController = new OptionsController();
                $optionController->store($request, $poll->id, $i);
            }
        }
        flash('Enquete criada com sucesso.')->success();
        return redirect()->route("polls.index");

    }

    public function pollRedirect()
    {
        return redirect()->route("polls.index");;
    }

    public function show($id)
    {
        //
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
        $poll = Poll::findOrFail($id);
        $poll->delete();
        flash('Enquete deletada com sucesso.')->success();
        return back();
    }
}
