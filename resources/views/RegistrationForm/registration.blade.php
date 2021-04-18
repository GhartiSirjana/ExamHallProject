<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-4 fw-bold" href="#">Automatic Exam Hall Arrangement</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-center text-info fs-3">Admin Registration</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-4">
                    @if(Session::has('register'))
                    <div class="alert-success" role="alert">
                        {{Session::get('register')}}
                    </div>
                    @endif
                    <!-- <div class="card-header">Register</div> -->
                    <div class="card-body">
                        <form method="post" action="{{route('register.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm" id="username" aria-describedby="emailHelp">
                                @error('username')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control form-control-sm" id="address">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control form-control-sm" id="email">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-inline mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm" id="password">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-inline mb-3">
                                <label for="password" class="form-label">Comfirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-sm" id="cpassword">
                                @error('cpassword')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role">
                                    <option selected>Admin</option>
                                    <option value="1">Student</option>
                                </select>
                                @error('role')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
                            <a href="{{route('form.loginhome')}}">If You Already have an Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="bg-info text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3 text-white">
                © 2020 Copyright:
                <a class="text-white" href="">Automatic Exam Hall Arrangement</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>