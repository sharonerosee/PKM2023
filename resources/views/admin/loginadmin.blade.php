<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- important assets
    linear-gradient(#141e30, #2a6c56)
     box-shadow: 0 0 5px #FE5D37, 0 0 25px #FE5D37, 0 0 50px #FE5D37, 0 0 100px #FE5D37;
     
    
    -->
</head>
<body>
    <div class="row justify-content-center align-item-center">
      <div class="col-md-4">
    
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    
      <main class="form-signin align-item-center login-box">
        <h1>Login admin</h1>
        <form action="/loginadmin" method="post">
          @csrf
          <div class="user-box form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
            id="email"autofocus required value="{{old ('email')}}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="user-box form-floating mb-3 ">
            <input type="password" name="password" class="form-control" id="password"required>
            <label for="password">Password</label>
          </div>
    
          <button type="submit">Login</button>
        </form>
      </main>
    </div>
    </div>
</body>

</html>