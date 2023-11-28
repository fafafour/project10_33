<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>register</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Member register</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
        @csrf
             <div class="form-group first  mb-4">
                  <input class="form-control" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />   
                  <label for="username">Name</label>
                

              </div>

              <div class="form-group first  mb-4">
                  <input class="form-control" id="username"  type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />   
                  <label for="username">Username</label>
                

              </div>

              <div class="form-group first  mb-4">
                  <input class="form-control" id="phone"  type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />   
                  <label for="username">Phone</label>
                

              </div>

              <div class="form-group first mb-4">
                  <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
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

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>