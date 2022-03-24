<?php

namespace App\Http\Controllers;

use App\Project;
use App\City;
use App\Company;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('projects', compact("projects"));
        // return view('projects', [
        //     'projects' => $projects
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('name', 'id');
        $companies = Company::pluck('name', 'id');
        // dd($companies);
       return view('form', compact('cities','companies'));

        // return view('form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $project = new Project;
        $project->city_id = $request->city;
        $project->company_id = $request->company;
        $project->user_id = auth()->user()->id;
        $project->name = $request->name;
        $project->execution_date = $request->execution_date;
        $project->is_active = $project->is_active == 'on' ? 1 : 0;

        $project->save();
        return redirect('new')->with('status', 'Creado con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit ($project)
    {

        $project = Project::find($project);   
        // dd($project);
        $cities = City::pluck('name', 'id'); 
        $companies = Company::pluck('name', 'id');
        return view('edit', compact('project', 'cities','companies' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, $id)
    {

        
        $project  = Project::find($id);
        $project->city_id = $request->city;
        $project->company_id = $request->company;
        $project->user_id = auth()->user()->id;
        $project->name = $request->name;
        $project->execution_date = $request->execution_date;
        $is_Active_c = $request->is_active;
        $project->is_active = $project->is_active == 'on' ? 1 : 0;
        $project->save();
        return redirect("new")->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {
        // dd($id);
        $project = Project::find($id);
        $project->delete();
        return back()->with('status', 'Eliminado con éxito');
        
    }
}
