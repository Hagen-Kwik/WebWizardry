<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use App\Http\Requests\StoreRequirementsRequest;
use App\Http\Requests\UpdateRequirementsRequest;
use Illuminate\Http\Request;
use App\Models\projects;


class RequirementsController extends Controller
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
    public function create($projectId)
    {
        // Retrieve requirements for the specified project
        $requirements = Requirements::where('project_id', $projectId)->get();
        $username = auth()->user()->name;
        $user = auth()->user();

        return view('admin-requirements', [
            'project_id' => $projectId,
            'username' => $username,
            'user' => $user,
            'requirements' => $requirements,
        ]);
    }

    public function updateStatus(Request $request, $id, $projectId)
{
    // Validate the request if needed
    $request->validate([
        'id' => 'required|exists:requirements,id',
        'status' => 'required|in:Active,Done',
    ]);

    // Find the requirement by ID
    $requirement = Requirements::findOrFail($id);

    // Toggle the status
    $requirement->status = ($request->status == 'Active') ? 'Done' : 'Active';
    $requirement->save();

    // Calculate progress_percentage
    $project = projects::findOrFail($projectId);

    // Get all requirements for the project
    $allRequirements = Requirements::where('project_id', $projectId)->get();

    // Count the number of 'Done' requirements
    $doneRequirementsCount = $allRequirements->where('status', 'Done')->count();

    // Calculate progress_percentage
    $project->progress_percentage = ($doneRequirementsCount / $allRequirements->count()) * 100;
    $project->save();

    return redirect()->back()->with('success', 'Status updated successfully.');
}



    public function addRequirement(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        // Create a new requirement
        Requirements::create([
            'requirement_name' => $request->input('title'),
            'requirement_description' => $request->input('description'),
            'status' => 'Active', // You can adjust the default status as needed
            'project_id' => $id,
        ]);

        return redirect()->back()->with('success', 'Requirement added successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequirementsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Requirements $requirements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requirements $requirements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequirementsRequest $request, Requirements $requirements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requirements $requirements)
    {
        //
    }
}
