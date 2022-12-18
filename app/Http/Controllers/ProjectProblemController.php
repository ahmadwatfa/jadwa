<?php

namespace App\Http\Controllers;

use App\Models\ProjectProblem;
use App\Http\Requests\StoreProjectProblemRequest;
use App\Http\Requests\UpdateProjectProblemRequest;

class ProjectProblemController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectProblemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectProblemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectProblem  $projectProblem
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectProblem $projectProblem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectProblem  $projectProblem
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectProblem $projectProblem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectProblemRequest  $request
     * @param  \App\Models\ProjectProblem  $projectProblem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectProblemRequest $request, ProjectProblem $projectProblem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectProblem  $projectProblem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectProblem $projectProblem)
    {
        //
    }
}
