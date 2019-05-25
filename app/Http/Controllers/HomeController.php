<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\House;
use App\Room;
use App\Furniture;
use App\Tag;
use Illuminate\Support\Facades\DB;

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
        $houses = Auth::user()->houses;
        return view('main',compact('furnitures','tags', 'houses'));
    }

    public function add(Request $request)
    {
       $room = Room::find($request->room_id);
       $furniture = Furniture::find($request->furniture_id);
       $room->furnitures()->attach($furniture, ['quantity'=>$request->quantity]);

       return redirect(route('home'));
    }

    public function getRooms($houseId=0){

        // Fetch Room by house_id to populate the dropdown
        $userData['data'] = DB::table('rooms')->where('house_id', $houseId)->get();;

        echo json_encode($userData);
        exit;
   }
}
