@extends('layouts.base-admin')

@section('title', 'Data Pengajuan Beasiswa')

@section('content')

    <div>
        <a href="{{ route('adminDash') }}" class="btn btn-secondary">Back</a>
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
                    <a href="{{ route('export.excel')}}" class="btn btn-success " target="_blank">Export Excel</a>
                </div>
               
                <div class="wrapperTable table-responsive">
                    <table id="donorTable" class="tables" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 20%">Nama</th>
                                <th style="width: 10%">NIS</th>
                                <th style="width: 10%">Rayon</th>
                                <th style="width: 10%">Pembimbing</th>
                                <th style="width: 10%">Bukti Foto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissions as $key => $submis)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $submis['name'] }}</td>
                                    <td>{{ $submis['nis'] }}</td>
                                    <td>{{ $submis['region'] }}</td>
                                    <td>{{ $submis['ps'] }}</td>
                                    <td><a href="{{ route('image', $submis['id']) }}" class="btn btn-outline-primary">Lihat</a></td>
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
