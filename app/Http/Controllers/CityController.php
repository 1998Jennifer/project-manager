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
        

        // $project = new Project;
        // $project->city_id = $request->city;
        // $project->company_id = $request->company;
        // $project->user_id = auth()->user()->id;
        // $project->name = $request->name;
        // $project->execution_date = $request->execution_date;
        // $project->is_active = $project->is_active == 'on' ? 1 : 0;

        // $project->save();
        // return redirect('new')->with('status', 'Creado con Éxito');
    }
}
