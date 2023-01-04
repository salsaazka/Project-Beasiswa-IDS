<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApp;
use Illuminate\Http\Request;

class ScholarshipAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }

    public function submission()
    {
        return view('form.submission');
    }
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipApp  $scholarshipApp
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipApp $scholarshipApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipApp  $scholarshipApp
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipApp $scholarshipApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipApp  $scholarshipApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipApp $scholarshipApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipApp  $scholarshipApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshipApp $scholarshipApp)
    {
        //
    }
}
