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
        $request->validate=([
            'name' => 'required',
            'nis' => 'required',
            'region' => 'required',
            'ps' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);

        $image = $request->file('image');
        $imgName = time().rand().'.'.$image->extension();

        if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
            //set untuk menyimpan file nya
            $dPath = public_path('/assets/img/');
            //memindahkan file yang diupload ke directory yang telah ditentukan
            $image->move($dPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }
        ScholarshipApp::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'region' => $request->region,
            'ps' => $request->ps,
            'image' => $request->image,
           
        ]);

        return redirect('/form/submission')->with('success', 'Selamat, anda berhasil mengisi form!');
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
