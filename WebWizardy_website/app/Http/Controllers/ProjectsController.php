<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Http\Requests\StoreprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprojectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprojectsRequest $request, projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projects $projects)
    {
        //
    }

    public function showAll()
    {
        $allProjects = projects::all(); // Retrieve all projects from the database

        return view('admin-project_lists', [
            'all_Projects' => $allProjects,
        ]);
    }

    public function showOne($projectId)
    {
        $project = projects::findOrFail($projectId); // Assuming your model is named Project and has an 'id' field
        return view('admin-progress', [
            'project' => $project,
            'project_id' => $projectId
        ]);
    }
}
