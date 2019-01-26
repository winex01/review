<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        $request->validated();

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->file('image')->store('images'),
            'code' => $request->file('code')->store('projects'),
            'user_id' => auth()->user()->id
        ]);

        flash(__('Code Submitted Successfully!'));
        return back();
    }
    
}
