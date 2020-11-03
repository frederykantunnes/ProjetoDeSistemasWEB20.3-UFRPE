<?php

namespace App\Http\Controllers;

use App\Utils\Utils;
use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisciplinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Discipline::all();
        return view('disciplines.list', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $subjects = Utils::$subjects;
        $weekdays = Utils::$weekdays;
        return view('disciplines.create', compact('subjects', 'weekdays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discipline = new Discipline();
        $request['user_id'] = Auth::user()->id;
        $request['time_from'] = Utils::convertTime($request['time_from']);
        $request['time_to'] = Utils::convertTime($request['time_to']);
        $discipline->create($request->all());
        return redirect()->route('disciplines.show', Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {   
        if ($user_id == Auth::user()->id){
            $dados = Discipline::where('user_id', '=', Auth::user()->id)->get();
            return view('disciplines.me', compact('dados'));
        }
        return redirect()->route('disciplines.show', Auth::user()->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discipline = Discipline::where("id", "=", $id)->where("user_id", "=", Auth::user()->id)->first();
        $subjects = Utils::$subjects;
        $weekdays = Utils::$weekdays;
        
        if ($discipline!=null){
            return view('disciplines.edit', compact('discipline', 'subjects', 'weekdays'));
        }
        return redirect()->route('disciplines.show', Auth::user()->id);
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
        $discipline = Discipline::where("id", "=", $id)->where("user_id", "=", Auth::user()->id)->first();
        
        if ($discipline!=null){ 
            $discipline->subject = $request['subject'];
            $discipline->cost = $request['cost'];
            $discipline->weekday = $request['weekday'];
            $discipline->time_from = Utils::convertTime($request['time_from']);
            $discipline->time_to = Utils::convertTime($request['time_to']);
            $discipline->save();
        }
        return redirect()->route('disciplines.show', Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discipline = Discipline::where("id", "=",$id)->where("user_id", "=", Auth::user()->id);
        if($discipline!=null){ 
            $discipline->delete();
        }
        return redirect()->route('disciplines.show', Auth::user()->id);
    }
}
