<?php

namespace App\Http\Controllers;

use App\Models\feedbacks;
use App\Models\Requirements;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorefeedbacksRequest;
use App\Http\Requests\UpdatefeedbacksRequest;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
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
        $feedbacks = DB::table('feedbacks')
            ->where('feedbacks.project_id', $projectId)
            ->join('requirements', 'feedbacks.requirement_id', '=', 'requirements.id')
            ->join('users', 'feedbacks.user_id', '=', 'users.id')
            ->select('feedbacks.*', 'requirements.requirement_name', 'users.admin')
            ->get();

        $requirements = Requirements::where('project_id', $projectId)->get();

        $user = auth()->user()->name;
        $displayedRequirementIds = $feedbacks->pluck('requirement_id')->unique();


        return view('admin-feedbacks', [
            'project_id' => $projectId,
            'feedbacks' => $feedbacks,
            'username' => $user,
            'requirements' => $requirements,
            'displayedRequirementIds' => $displayedRequirementIds,

        ]);
    }


    public function reply(Request $request, $projectId)
    {
        $validatedData = $request->validate([
            'requirement_id' => 'required',
            'feedback' => 'required',
        ]);

        $userId = auth()->id();

        feedbacks::create([
            'requirement_id' => $validatedData['requirement_id'],
            'user_id' => $userId,
            'project_id' => $projectId, // Use $projectId from the route parameter
            'feedback' => $validatedData['feedback'],
        ]);

        return back()->with('success', 'Feedback added successfully');
    }


    public function addFeedback(Request $request, $projectId)
    {
        // Validate the request
        $validatedData = $request->validate([
            'requirement_id' => 'required',
            'feedback' => 'required',
        ]);

        $userId = auth()->id();

        // Create a new feedback
        feedbacks::create([
            'requirement_id' => $validatedData['requirement_id'],
            'user_id' => $userId,
            'project_id' => $projectId,
            'feedback' => $validatedData['feedback'],
        ]);

        return redirect()->back()->with('success', 'Feedback added successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefeedbacksRequest $request)
    {
    }


    /**
     * Display the specified resource.
     */
    public function show(feedbacks $feedbacks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedbacks $feedbacks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefeedbacksRequest $request, feedbacks $feedbacks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedbacks $feedbacks)
    {
        //
    }
}
