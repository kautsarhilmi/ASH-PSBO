<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Furniture;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = Tag::all();
        $furnitures = Furniture::all();
        return view('main',compact('furnitures','tags'));
    }

    public function add($furniture_id, $room_id)
    {
       $room = Room::find($room_id);
       $furniture = Furniture::find($furniture_id);
       $room->furnitures()->attach($furniture, ['quantity'=>$quantity]);
    }
}
