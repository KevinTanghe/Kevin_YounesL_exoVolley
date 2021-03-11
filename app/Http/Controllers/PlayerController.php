<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
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
        return view('pages/addPlayer');
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
            'lastname' => "required",
            'firstname' => "required",
            'age' => "required",
            'phone' => "required",
            'mail' => "required",
            'country' => "required"
        ]);

        $storePhoto = new Photo;
        Storage::put('public', $request->file('url'));
        $storePhoto->url = $request->file('url')->hashName();
        $storePhoto->save();

        $store = new Player;
        $store->lastname = $request->lastname;
        $store->firstname = $request->firstname;
        $store->age = $request->age;
        $store->phone = $request->phone;
        $store->mail = $request->mail;
        $store->country = $request->country;
        $store->photo_id = $storePhoto->id;
        $store->gender_id = $request->gender_id;
        
        $store->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
