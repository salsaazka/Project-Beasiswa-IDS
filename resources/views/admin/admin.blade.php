@extends('layouts.base-admin')

@section('title', 'Data Beasiswa')

@section('content')
    <div>
        <div class="wrapperTable table-responsive">
            <table id="userTable" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%">No. Registrasi</th>
                        <th style="width: 20%">Nama</th>
                        <th style="width: 10%">Bukti Pembayaran</th>
                        <th style="width: 10%">Detail Pembayaran</th>
                        <th style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>

    <script>
        $('#modalImage').on('shown.bs.modal', function(e) {
            var html = `
                <img src="{{ url('assets/img/global/${$(e.relatedTarget).data("image")}') }}" class="w-100">
            `;
            $('#imgContent').html(html);
        });
    </script>

    
@endsection
