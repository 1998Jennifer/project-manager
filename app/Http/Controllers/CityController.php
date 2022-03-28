<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;


class CityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('city.index', compact("cities"));
        
    }

    public function create()
    {
        
       return view('city.form');

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $city = City::create([
            'user_id' => auth()->user()->id
        ] + $request->all());
        return redirect('city')->with('status', 'Creado con éxito');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $City
     * @return \Illuminate\Http\Response
     */
    public function edit (City $city)
    {
        // dd($city->all());
        return view('city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $City
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        // dd($request->all());
        $city->update($request->all());
        return redirect('city')->with('status', 'Actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $City
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return back()->with('status', 'Eliminado con éxito');        
    }
}
