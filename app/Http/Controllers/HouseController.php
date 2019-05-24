<?php

namespace App\Http\Controllers;

use App\House;
use App\User;
use Illuminate\Http\Request;
use Auth;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $houses = Auth::user()->houses;
        return view('dashboard', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        $house = new House([
            'name' => $data['house-name'],
        ]);
        $user = Auth::user();
        $user->houses()->save($house);

        return redirect(route('dashboard.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = Auth::user();
        $house = new House;
        $house->name = $request->name;
        $user->houses()->save($house);
        return redirect(route('dashboard.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect(route('house.detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit($house_id)
    {
        
        $house = App\House::find($house_id);
        return view('edit_house', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy($house_id)
    {
        App\House::destroy($house_id);
        return redirect(route('dashboard.index'));
    }
}
