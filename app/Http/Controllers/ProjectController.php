<?php

namespace App\Http\Controllers;

use App\User;
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
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|min:100',
            'code' => 'required|file|mimes:zip,rar|max:50000', #50000 = 50MB
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2000', #2MB
        ]);
        
        $inputs = array_prepend(
            $inputs, $request->file('code')->store('projects'), 'code'
        );
        $inputs = array_prepend(
            $inputs, $request->file('image')->store('images'), 'image'
        );

        $user = User::findOrFail(auth()->user()->id);
        $user->projects()->create($inputs);
        flash(__('Code Submitted Successfully!'));
        return back();
    }
    
}
