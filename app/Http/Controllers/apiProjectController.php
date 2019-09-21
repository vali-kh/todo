<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class apiProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Auth::guard('api')->user()->projects()->paginate(5);
        return ProjectResource::collection($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

        $project = Project::create($request->validate([
                'name' => 'required',
                'description' => 'required'
            ])+['owner_id' => Auth::guard('api')->id()]
        );

        return new ProjectResource($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if (!(auth::guard('api')->user()->owns($project))) {
            return response()->json(['error','project not fond!'],403);
        }
        
        return new ProjectResource($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        if (!(auth::guard('api')->user()->owns($project))) {
            return response()->json(['error','project not fond!'],403);
        }

        $project->update($request->validate([
            'name' =>'required',
            'description' => 'required'
        ]));

        return (new ProjectResource($project))
                    ->additional(['message'=>'project updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (!(auth::guard('api')->user()->owns($project))) {
            return response()->json(['error','project not fond!'],403);
        }

        $project->delete();

        return (new ProjectResource($project))
                ->additional(['message' => 'project deleted']);
    }
}
