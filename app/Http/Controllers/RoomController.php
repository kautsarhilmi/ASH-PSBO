<?php

namespace App\Http\Controllers;

use App\Room;
use App\House;
use App\Furniture;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($house_id)
    {
        $rooms = App\House::find($house_id)->rooms;
        return view('detail_house', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_room');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $house_id)
    {
        $house = App\House::find($house_id);
        $room = new Room;
        $room->name = $request->name;
        $room->width = $request->width;
        $room->length = $request->length;
        $room->height = $request->height;
        $room->colour = $request->colour;
        return redirect(route('room.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect(route('room.detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $room_id)
    {
        $room = App\Room::find($room_id);
        $room->name = $request->name;
        $room->width = $request->width;
        $room->length = $request->length;
        $room->height = $request->height;
        $room->colour = $request->colour;
        return redirect(route('room.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($room_id)
    {
        App\Room::destroy($room_id);
        return redirect(route('house.detail'));
    }

    public function add ($furniture_id)
    {
        App\Room::find($room_id);
        App\Room::add($furniture_id)->furnitures;
    }
}
