<?php

namespace App\Http\Controllers;

use App\Models\ProjectSolution;
use App\Http\Requests\StoreProjectSolutionRequest;
use App\Http\Requests\UpdateProjectSolutionRequest;

class ProjectSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProjectSolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectSolutionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectSolution  $projectSolution
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectSolution $projectSolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectSolution  $projectSolution
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectSolution $projectSolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectSolutionRequest  $request
     * @param  \App\Models\ProjectSolution  $projectSolution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectSolutionRequest $request, ProjectSolution $projectSolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectSolution  $projectSolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSolution $projectSolution)
    {
        //
    }
}
