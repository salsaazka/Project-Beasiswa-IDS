@extends('layouts.base-admin')

@section('title', 'Hai, Admin!')

@section('content')



        <div class="alert alert-dark w-100 d-flex align-items-center alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle text-danger " style="margin-right: 10px;"></i>
            <div>
                Silahkan melihat data pembayaran pada menu <b>Data Pembayaran</b>!
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    

 
 <p class="text-muted">Selamat Datang!</p>
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
@endsection