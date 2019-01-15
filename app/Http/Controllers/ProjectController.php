<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $random = Project::where('id', '!=', $project->id)->orderByRaw('RAND()')->take(10)->get();

        return view('project', compact('project', 'random'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $random = Project::orderByRaw('RAND()')->take(10)->get();
        
        return view('project.create', compact('random'));
    }
    
}
