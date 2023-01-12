<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
// use App\Exports\DonorsExport;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\DonorsImport;

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

    public function dataDonor()
    {
        $donors = Donor::all();
        return view('admin.donor', compact('donors'));
    }

    public function edit(Donor $donor)
    {
        //
    }

    // public function export()
    // {
    //     return Excel::download(new DonorsExport, 'Data.xlsx');

    // }

    // public function import()
    // {
    //     Excel::import(new DonorsImport,request()->file('file'));
    //     return back()->with('importSuccess',"Selamat Anda berhasil menginport file!");

    // }

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
