@extends('layouts.base-admin')

@section('title', 'Data Donatur')

@section('content')

    <div>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
            <div class="container overflow-hidden text-center mt-3">
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
                <div class="d-flex justify-content-end pb-2">
                    <a href="/data/excel" class="btn btn-success " target="_blank">Export Excel</a>
                </div>
                <div class="wrapperTable table-responsive">
                    <table id="donorTable" class="tables" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 10%">Nama</th>
                                <th style="width: 20%">Profesi</th>
                                <th style="width: 10%">Alamat</th>
                                <th style="width: 10%">Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donors as $key => $donor)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $donor['name'] }}</td>
                                    <td>{{ $donor['profesi'] }}</td>
                                    <td>{{ $donor['address'] }}</td>
                                    <td>{{ $donor['no_telp'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#donorTable').DataTable({
            "info": false,
            "bSort": false,
        });
    });
</script>
@endsection
