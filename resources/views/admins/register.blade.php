<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <title>SK Prenza Dos</title>
</head>
<body>
    
    <form action="{{route('admins/register')}}" method="POST">
        @csrf
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border p-3 rounded-5 shadow bg-white box-area">
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"  style="background-color: #103cbe";>
                    <div class="feature-img p-3">
                        <img src="{{ asset('assets/images/SkLogo.png') }}" class="img-fluid" style="width: 230px;">
                    </div>
                    <p class="text-white fs-3" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Barangay Prenza Dos</p>
                    <small class="text-white text-center text-wrap">Halina't Maglingkod para sa Prenza Dos</small>
                </div>
                <div class="col-md-6 right-box">
                    <div class="row">
                        <div class="header text-center">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="input-group mb-3 mt-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="conpassword" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="formCheck">
                                <label for="formCheck"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="signup.html">Forgot Password</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="submit">Sign Up</button>
                        </div>
                        <div class="input-group" style="font-family: 'Poppins', sans-serif;">
                            <small>Already have an account? <a href="{{route('admins/index')}}">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>
</html>