<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/addTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nom' => 'required',
            'city' => 'required',
            'country' => 'required',
            'numberMax' => 'required'
        ]);

        $store = new Team;
        $store->nom = $request->nom;
        $store->city = $request->city;
        $store->country = $request->country;
        $store->numberMax = $request->numberMax;
        $store->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Team::find($id);
        $player = Player::all();
        $role = Role::all();
        
        return view('pages/show/showTeam', compact('show', 'player', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Team::find($id);
        
        return view('pages/edit/editTeam', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nom' => 'required',
            'city' => 'required',
            'country' => 'required',
            'numberMax' => 'required'
        ]);

        $update = Team::find($id);
        $update->nom = $request->nom;
        $update->city = $request->city;
        $update->country = $request->country;
        $update->numberMax = $request->numberMax;
        $update->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Team::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
