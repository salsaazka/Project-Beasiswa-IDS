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
        <div class="col-6">
            <form action="" method="POST" class="">
                @method('POST')
                 @csrf
                 
                  <!-- Name input -->
                  <div class="form-outline mt-4 mb-4">
                   <label class="form-label" >Nama</label>
                   <input type="text" name="name" class="form-control form-control-lg" />
                 </div>
       
                 <!-- NIS input -->
                 <div class="form-outline mb-4">
                   <label class="form-label" >NIS</label>
                   <input type="text" name="nis" class="form-control form-control-lg" />
                 </div>

                 <div class="form-outline mb-4">
                    <label class="form-label" >Rayon</label>
                    <select class="form-select" aria-label="Default select example" name="region" >
                        <option selected>----</option>
                        <option value="Cis 1">Cis 1</option>
                        <option value="Cis 2">Cis 2</option>
                        <option value="Cis 3">Cis 3</option>
                        <option value="Cis 4">Cis 4</option>
                        <option value="Cis 5">Cis 5</option>
                        <option value="Cic 1">Cic 1</option>
                        <option value="Cic 2">Cic 2</option>
                        <option value="Cic 3">Cic 3</option>
                        <option value="Cic 4">Cic 4</option>
                        <option value="Cic 5">Cic 5</option>
                        <option value="Cic 6">Cic 6</option>
                        <option value="Cic 7">Cic 7</option>
                        <option value="Cia 1">Cia 1</option>
                        <option value="Cia 2">Cia 2</option>
                        <option value="Cia 3">Cia 3</option>
                        <option value="Cia 4">Cia 4</option>
                        <option value="Cib 1">Cib 1</option>
                        <option value="Cib 2">Cib 2</option>
                        <option value="Cib 3">Cib 3</option>
                        <option value="Taj 1">Taj 1</option>
                        <option value="Taj 2">Taj 2</option>
                        <option value="Taj 3">Taj 3</option>
                        <option value="Taj 4">Taj 4</option>
                        <option value="Wik 1">Wik 1</option>
                        <option value="Wik 2">Wik 2</option>
                        <option value="Wik 3">Wik 3</option>
                        </select>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" >Pembimbing Siswa</label>
                    <input type="text" name="ps" class="form-control form-control-lg" />
                  </div>
       
                  <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>

                  <button type="submit" class="btn btn-primary offset-9">Upload Bukti </button>
                </form>
        </div>
    </div>
</body>
</html>