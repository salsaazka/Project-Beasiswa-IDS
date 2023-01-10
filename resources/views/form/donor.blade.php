<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Form Submission</title>
    <link rel="stylesheet" href="assets/template/plugins/bootstrap/bootstrap.min.css">
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    {{-- End Bootstrap --}}
</head>
<body > 
    <div class="container">
        <div class="col-6 mt-5">
          @if (Session::get('success'))
            <div class="alert alert-success w-100">
                {{ Session::get('success') }}
            </div>  
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
         </div>
        @endif
            <form action="{{ route('store.donor') }}" method="POST" class="">
                @method('POST')
                 @csrf
                 
                  <!-- Name input -->
                  <div class="form-outline mt-4 mb-4">
                   <label class="form-label" >Nama</label>
                   <input type="text" name="name" class="form-control form-control-lg" />
                 </div>
       
                 <!-- NIS input -->
                 <div class="form-outline mb-4">
                   <label class="form-label" >Alamat</label>
                   <textarea type="text" name="address" class="form-control" placeholder="Input your address" rows="3"></textarea>
                 </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" >Profesi</label>
                    <input type="text" name="profesi" class="form-control form-control-lg" />
                  </div>
       
                  <div class="form-outline mb-4">
                    <label class="form-label" >Nomor Telepon</label>
                    <input type="number" name="no_telp" class="form-control form-control-lg" />
                  </div>

                  <button type="submit" class="btn btn-warning">Kirim</button>

                </form>
        </div>
    </div>
</body>
</html>