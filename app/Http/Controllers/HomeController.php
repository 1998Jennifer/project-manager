<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
        $projects = Project::latest()->get();
        // dd($projects->all());
        return view('home', compact('projects'));
        // return view('home', [
        //     'projects' => $projects
        // ]);
        // return view('home', compact('projects'));
        // return view('home');
    }
}
