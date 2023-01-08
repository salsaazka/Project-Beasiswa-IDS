<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    
    public function index()
    {
        //
    }

    public function donor()
    {
        return view('form.donor');
    }

    public function create()
    {
        //
    }

    
    public function storeDonor(Request $request)
    {
        $request->validate=([
            'name' => 'required',
            'address' => 'required',
            'profesi' => 'required',
            'no_telp' => 'required'
        ]);

        Donor::create([
            'name' => $request->name,
            'address' => $request->address,
            'profesi' => $request->name,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/form/donor')->with('success', 'Selamat, anda berhasil mengisi form!');
    }

    
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
