<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApp;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Exports\ScholarshipAppsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ScholarshipAppsImport;

class ScholarshipAppController extends Controller
{

    public function index()
    {
        return view('landing.home');
    }

    public function login()
    {
       return view('auth.login');

    }

    public function auth(Request $request)
    {
        $request->validate([
            //required data harus diisi
            'email' => 'required|exists:users,email',
            'password' => 'required',

        ],
        [
            'email.exists' => "email ini tidak tersedia"
            //email akan di cek ada atau tidak di database kalau tidak ada akan diberi pesan
        ]);

        $user = $request->only('email', 'password');
        //auth fitur untuk menyimpan data dari login user
        if (Auth::attempt($user)) {
           if(Auth::user()->role == 'user'){
               return redirect('/');
           }else{
               return redirect()->route('adminDash');
           }
        } else {
            return redirect('/login')->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
        }

    }

    public function submission()
    {
        return view('form.submission');
    }

    public function dataSub()
    {
        $submissions = ScholarshipApp::all();
        return view('admin.submission', compact('submissions'));
    }

    public function image($id)
    {
        $submissions = ScholarshipApp::find($id);
        return view('admin.image', compact('submissions'));
    }

    public function create()
    {

    }

    public function store(Request $request, ScholarshipApp $scholarshipApp)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'region' => 'required',
            'ps' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);

        $image = $request->file('image');
        $imgName = time().rand().'.'.$image->extension();

        if(!file_exists(public_path('/assets/img/bukti/'.$image->getClientOriginalName()))){
            //set untuk menyimpan file nya
            $dPath = public_path('/assets/img/bukti/');
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
            'image' => $uploaded,

        ]);

        return redirect('/form/submission')->with('success', 'Selamat, anda berhasil mengisi form!')->with('image', $imgName);;


    }

    public function adminDash()
    {
        return view('admin.dashboard');
    }

    public function adminAd()
    {
        return view('admin.admin');
    }

    public function logout()
    {
         Auth::logout();
         return redirect('/login');
    }

    public function error(){
        return view('error');
     }

     //excel
    public function export()
    {
        return Excel::download(new ScholarshipAppsExport, 'Data.xlsx');
    }

    public function import()
    {
        Excel::import(new ScholarshipAppsImport,request()->file('file'));
        return back()->with('importSuccess',"Selamat Anda berhasil menginport file!");

    }

    public function show(ScholarshipApp $scholarshipApp)
    {
        //
    }


    public function edit(ScholarshipApp $scholarshipApp)
    {
        //
    }


    public function update(Request $request, ScholarshipApp $scholarshipApp)
    {
        //
    }

    public function destroy(ScholarshipApp $scholarshipApp)
    {
        //
    }
}
