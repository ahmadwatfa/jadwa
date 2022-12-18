<?php

namespace App\Http\Controllers;

use App\Models\ProjectGoal;
use App\Http\Requests\StoreProjectGoalRequest;
use App\Http\Requests\UpdateProjectGoalRequest;

class ProjectGoalController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectGoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectGoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectGoal  $projectGoal
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectGoal $projectGoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectGoal  $projectGoal
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectGoal $projectGoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectGoalRequest  $request
     * @param  \App\Models\ProjectGoal  $projectGoal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectGoalRequest $request, ProjectGoal $projectGoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectGoal  $projectGoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectGoal $projectGoal)
    {
        //
    }
}
