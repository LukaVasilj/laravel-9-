<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $actor = Actor::orderBy('actor_id','desc')->paginate(210);
        return view('actor.index', compact('actor'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('actor.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'

        ]);

        Actor::create($request->post());

        return redirect()->route('actor.index')->with('success','Actor has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\actor  $actor
    * @return \Illuminate\Http\Response
    */
    public function show(Actor $actor)
    {
        return view('actor.show',compact('actor'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Actor  $actor
    * @return \Illuminate\Http\Response
    */
    public function edit(Actor $actor)
    {
        return view('actor.edit',compact('actor'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Actor  $actor
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $actor->fill($request->post())->save();

        return redirect()->route('actor.index')->with('success','Actor Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Actor $actor
    * @return \Illuminate\Http\Response
    */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('actor.index')->with('success','Actor has been deleted successfully');
    }
}
