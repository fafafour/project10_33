<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Reset Password</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Reset Password</h3>
            </div>
            <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group first mb-4">
                  <input class="form-control" id="email" type="email" name="email" value="{{ $request->email }}" required autocomplete="username" />
                  <label for="username">Email</label>
                
                </div>
                <div class="form-group last mb-4">
                    <input class="form-control" id="password" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                    <label for="password">Password</label>
                
                
              </div>

              <div class="form-group last mb-4">
                  <input class="form-control" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                  <label for="Confirm password">Confirm Password</label>
                
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                
              </div>
              <input type="submit" value="register" class="btn btn-block btn-primary">
              <!-- <a href="{{ route('register') }}"></a> -->
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>