@extends('layouts.base-admin')

@section('title', 'Data Donatur')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
            <div class="mt-4">
                <div class="container overflow-hidden text-center mt-5">
                    @if (Session::get('successAdd'))
                    <div class="alert alert-success w-100">
                       {{ Session::get('successAdd') }}
                    </div>  
                  @endif
                  @if (Session::get('importSuccess'))
                    <div class="alert alert-success w-100">
                       {{ Session::get('importSuccess') }}
                    </div>  
                  @endif
                  <div class="justify-content-start pb-2">
                    <a href="/home" class="btn btn-info new"><i class="fas fa-backward"></i> Back to Home</a>
                    <a href="/data/excel" class="btn btn-success " target="_blank">Export Excel</a>
                  </div>
                  <div class="container">
                    <div class="card w-100" style="margin-top: 3rem; margin-bottom: 2rem">
                        <div class="p-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="text-primary mb-1">Beasiswa</h6>
                                    <h6 class="text-muted">Wikrama</h6>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/logo-wk.png') }}">
                                </div>
                            </div>
                            
                            
                        {{-- <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success">Import User Data</button>
                                </div>
                            </div>       
                        </form> --}}
                            <div class="card">
                                <div class="container table table-responsive ">
                                    <table class="table table-hover table-bordered table-stiped ">
                                        <thead>
                                            <tr>
                                                <th><h6>Nama</h6></th>
                                                <th><h6>Profesi</h6></th>
                                                <th><h6>Alamat</h6></th>
                                                <th><h6>Nomor Telepon</h6></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($donors as $donor )
                                                 <tr>
                                                    <td>{{ $donor['name'] }}</td>
                                                    <td>{{ $donor['profesi'] }}</td>
                                                    <td>{{ $donor['address']}}</td>
                                                    <td>{{ $donor['no_telp'] }}</td>
                                                </tr>
                                            @endforeach 
                                        </tbody>
                                    </table> 
                                   
                                </div>
                             </div>
                            </div>
                        </div>
                    </div>
                  </div>
                
            </div>
        </div>
    </div>
@endsection