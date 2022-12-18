<?php

namespace App\Http\Controllers;

use App\Models\ProjectInvestment;
use App\Http\Requests\StoreProjectInvestmentRequest;
use App\Http\Requests\UpdateProjectInvestmentRequest;

class ProjectInvestmentController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectInvestmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectInvestmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectInvestment  $projectInvestment
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectInvestment $projectInvestment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectInvestment  $projectInvestment
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectInvestment $projectInvestment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectInvestmentRequest  $request
     * @param  \App\Models\ProjectInvestment  $projectInvestment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectInvestmentRequest $request, ProjectInvestment $projectInvestment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectInvestment  $projectInvestment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectInvestment $projectInvestment)
    {
        //
    }
}
