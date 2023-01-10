<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Beasiswa SMK Wikrama Bogor | LOGIN</title>
    <link rel="stylesheet" href="assets/template/plugins/bootstrap/bootstrap.min.css">
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    {{-- End Bootstrap --}}
</head>
<body > 
    <div class="content-sign" style="min-height: 100vh">
        <div class="d-flex flex row ">
            <div class="d-flex justify-content-center col-lg-6 mt-5 pt-5" >
                
                    <img src="{{ asset('assets/img/animasi1.png') }}" alt="" class="">
               
            </div>
            <div class="col-md-12 col-lg-5 col-xl-6 px-5 ">
                @if ($errors->any())
                          <div class="alert alert-danger">
                           <ul>
                             @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                             @endforeach
                           </ul>
                          </div>
                 @endif
                 @if (Session::get('notAllowed'))
                    <div class="alert alert-danger w-100">
                        {{ Session::get('notAllowed') }}
                    </div>  
                 @endif
                 <div class="mt-5 pt-5 ">
                    <h3 class="text-primary"><strong>Login</strong></h3>
                    <h5 class="text-muted">Hai, admin!</h5>
                 </div>
                
               <form action="/auth/login" method="POST" class="">
                    @method('POST')
                     @csrf
                     
                      <!-- Email input -->
                      <div class="form-outline mt-4 mb-4">
                       <label class="form-label" >Email</label>
                       <input type="text" name="email" class="form-control form-control-lg" />
                     </div>
           
                     <!-- Password input -->
                     <div class="form-outline mb-4">
                       <label class="form-label" >Password</label>
                       <input type="password" name="password" class="form-control form-control-lg" />
                     </div>
           
                     
                     <!-- Submit button -->
                     <center>
                       <button type="submit" class="btn btn-primary btn-lg btn-block ">Sign in</button>
                     </center>
                   
                    </form>
            </div>
           
        </div>

    </div>
   
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- End Jquery --}}

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    {{-- End Bootstrap JS --}}

    <script type="text/javascript">
    
        function toggle(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction(show) {
            show.classList.toggle("fa-eye-slash");
        }
    </script>
</body>
</html>