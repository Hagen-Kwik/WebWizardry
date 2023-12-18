<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use App\Http\Requests\StoreRequirementsRequest;
use App\Http\Requests\UpdateRequirementsRequest;

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
    public function create()
    {
        return view('admin-requirements');
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
