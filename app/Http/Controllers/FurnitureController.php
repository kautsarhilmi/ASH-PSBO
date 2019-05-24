<?php

namespace App\Http\Controllers;

use App\Furniture;
use App\Room;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($room_id)
    {
        $furnitures = App\Room::find($room_id)->furnitures;
        return view('detail_room', compact('furnitures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $furniture = new Furniture;
        $furniture->name = $request->name;
        $furniture->width = $request->width;
        $furniture->height = $request->height;
        $furniture->length = $request->length;
        $furniture->colour = $request->colour;
        $furniture->type = $request->type;
        $furniture->price = $request->price;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function show(Furniture $furniture)
    {
        $room = App\Room::find($room_id);
        $furnitures = $room->furnitures;
        return view('detail_room', compact('furnitures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function edit(Furniture $furniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Furniture $furniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Furniture $furniture)
    {
        App\Furniture::destroy($furniture_id);
        return redirect(route('home'));
    }
}
