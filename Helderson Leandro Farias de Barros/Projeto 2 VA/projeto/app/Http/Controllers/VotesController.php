<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Option;
use App\Models\Poll;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    public function store(Request $request){
        $vote = new Vote();
        $vote->poll_id = $request->poll_id;
        $vote->option_id = $request->option_id;
        $vote->user_id = Auth::user()->id;
        $vote->save();

        $vote_count = Vote::all()->where("poll_id", $request->poll_id)->count();

        $options = Option::all()->where("poll_id", $request->poll_id)->values();

        $percentList = array();
        foreach($options as $option){
            $percentList[$option->id] = (Vote::all()->where("option_id", $option->id)->count() * 100) / $vote_count;
        }

        $poll = Poll::findOrFail($request->poll_id);
        $poll->votes_count = $poll->votes_count + 1;
        $poll->save();

        $data = array("Status"=>"OK", "Count"=>$vote_count, "Options"=> $percentList);
        echo json_encode($data);
    }

}
