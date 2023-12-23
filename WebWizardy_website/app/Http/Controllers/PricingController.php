<?php

namespace App\Http\Controllers;

use App\Models\pricing;
use App\Http\Requests\StorepricingRequest;
use App\Http\Requests\UpdatepricingRequest;

class PricingController extends Controller
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
    public function store(StorepricingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepricingRequest $request, pricing $pricing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pricing $pricing)
    {
        //
    }
}
