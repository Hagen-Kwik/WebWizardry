<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Http\Requests\StoreprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = auth()->user();
        $username = auth()->user()->name;

        if ($user->admin === 'yes') {
            $allProjects = projects::all();
        } else {
            // If the user is not an admin, show only projects where user_id matches
            $allProjects = projects::where('user_id', $user->id)->get();
        }

        return view('admin-project_lists', [
            'all_Projects' => $allProjects,
            'username' => $username,
        ]);
    }

    public function showOne($projectId)
    {
        $project = projects::findOrFail($projectId); // Assuming your model is named Project and has an 'id' field
        $user = auth()->user()->name;

        return view('admin-progress', [
            'project' => $project,
            'project_id' => $projectId,
            'username' => $user,
        ]);
    }

    public function details($projectId)
    {
        $project = projects::findOrFail($projectId);

        $pricing = DB::table('pricings')
            ->where('id', $project->pricing_id)
            ->first();

        $user = auth()->user();
        $username = auth()->user()->name;

        return view('admin-project-details', [
            'project' => $project,
            'pricing' => $pricing,
            'project_id' => $projectId,
            'user' => $user,
            'username' => $username,
        ]);
    }

    public function uploadPaymentImage(Request $request, $projectId)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'payment_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/payment_images', $imageName); // Adjust the storage path as needed

            // Update the project record with the image path
            projects::where('id', $projectId)->update(['payment_picture' => $imageName]);

            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }


    public function approve_payment(Request $request, $id)
    {
        // Validate the request if needed
        // $request->validate([
        //     'id' => 'required|exists:projects,id',
        // ]);

        // Get the project by ID
        $project = projects::findOrFail($id);
        // Toggle the payment status
        $newPaymentStatus = ($project->payment_status === 'Waiting Payment') ? 'Payment Done' : 'Waiting Payment';

        // Update the payment status in the database
        DB::table('projects')
            ->where('id', $id)
            ->update(['payment_status' => $newPaymentStatus]);

        return redirect()->back()->with('success', 'Payment status updated successfully.');
    }
}
