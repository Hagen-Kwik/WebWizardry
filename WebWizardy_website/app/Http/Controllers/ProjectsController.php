<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Http\Requests\StoreprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Requirements;
use App\Models\feedbacks;
use App\Models\pricing;

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
        $requirements = Requirements::where('project_id', $projectId)->get();
        $feedbacks = DB::table('feedbacks')
            ->where('feedbacks.project_id', $projectId)
            ->join('requirements', 'feedbacks.requirement_id', '=', 'requirements.id')
            ->join('users', 'feedbacks.user_id', '=', 'users.id')
            ->select('feedbacks.*', 'requirements.requirement_name', 'users.admin')
            ->get();
        $username = auth()->user()->name;
        $user = auth()->user();

        return view('admin-progress', [
            'project' => $project,
            'project_id' => $projectId,
            'user' => $user,
            'username' => $username,
            'requirements' => $requirements,
            'feedbacks' => $feedbacks,
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

    public function finish_project(Request $request, $id)
    {
           // Update the payment status in the database
        DB::table('projects')
            ->where('id', $id)
            ->update(['status' => 'Finished']);

        return redirect()->back()->with('success', 'Payment status updated successfully.');
    }


    public function save(Request $request, $projectId)
    {

        // Validate the input if needed

        // Update the project with the new values


        return redirect()->back()->with('success', 'Project details saved successfully.');
    }

    public function order_page_show()
    {


        $pricing = pricing::all();

        $user = auth()->user();
        $username = auth()->user()->name;

        return view('order_now', [
            'pricing' => $pricing,
            'user' => $user,
            'username' => $username,
        ]);
    }

    public function order(Request $request)
    {

        $request->validate([
            'project_name' => 'required|string',
            'pricing_id' => 'required|exists:pricings,id',
            'requirements' => 'required|array',
        ]);

        // Create a new project
        $project = projects::create([
            'project_name' => $request->input('project_name'),
            'pricing_id' => $request->input('pricing_id'),
            'progress_percentage' => 0,
            'status' => "In Progress",
            'payment_status' => 'Waiting Payment',
            'user_id' => auth()->user()->id,
        ]);

        // print_r($request->input('requirements'));

        // Create requirements for the project
        foreach ($request->input('requirements') as $requirementData) {
            Requirements::create([
                'requirement_name' => $requirementData['title'],
                'requirement_description' => $requirementData['details'],
                'status' => 'Active',
                'project_id' => $project->id,
            ]);
        }

        // Redirect or return a response as needed
        return redirect()->route('project.details',  $project->id)->with('success', 'Project ordered successfully.');
    }
}
