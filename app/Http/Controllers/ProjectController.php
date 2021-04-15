<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// project model and request
use App\Models\Project;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index')->with('projects' , Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project();

        $project ->title            = $request->title;
        $project ->description      = $request->description;
        $project ->category         = $request->category;
        $project ->Link             = $request->Link;
        $project ->image_project    = $request->image_project->store('images','public');
        $project ->save();

        return redirect()->route('project.index')->with('message','project added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.create')->with('project' , $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request,Project $project)
    {
        $data = $request->only(['title','description','category']);
        if($request->hasFile('image_project'))
        {
            $image = $request->image_project->store('images','public');
            Storage::disk('public')->delete($project->image_project);
            $data['image_project'] = $image;
        }
        $project->update($data);

        return redirect()->route('project.index')->with('message','project updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('message','project deleted Successfully'); 
    }
}
