<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use App\Http\Requests\StoreRequirementsRequest;
use App\Http\Requests\UpdateRequirementsRequest;
use Illuminate\Http\Request;


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
        $user = auth()->user()->name;

        return view('admin-requirements', [
            'project_id' => $projectId,
            'username' => $user,
            'requirements' => $requirements,
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        // Validate the request if needed
        $request->validate([
            'id' => 'required|exists:requirements,id',
            'status' => 'required|in:Active,Done',
        ]);

        // Find the requirement by ID
        $requirement = Requirements::findOrFail($id);

        $requirement->status = ($request->status == 'Active') ? 'Done' : 'Active';
        $requirement->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
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
