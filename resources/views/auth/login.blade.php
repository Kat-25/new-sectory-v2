<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('sectoryheader')

    <!-- Custom fonts for this template-->
    {{-- <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('import/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb_admin_2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb_admin_2.css') }}">

</head>

<body class="" style="background-color: #2C3E50;">

    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image img-fluid" style="background-image:url(../img/building1.jpeg);"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="../img/SecTorylogo.png" class="img-fluid logo"/>
                                        <h1 class="h3 text-gray-900 mb-4">Sign-In</h1>
                                    </div>
                                    <form class="user" action="{{route('login-user')}}" method="POST">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{Session::get('success')}}</div>
                                        @endif
                                        @if(Session::has('failed'))
                                            <div class="alert alert-danger">{{Session::get('failed')}}</div>
                                        @endif
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Username:" >
                                            @error('username')
                                                <div class="invalid-feedback">{{ "The Username field is required." }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="password" placeholder="Password:">
                                                @error('password')
                                                    <div class="invalid-feedback">{{ "The Password field is required." }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="registration">Create an Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    {{-- <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Core plugin JavaScript-->
    {{-- <script src="../vendor/jquery-easing/jquery.easing.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom scripts for all pages-->
    {{-- <script src="../js/sb-admin-2.min.js"></script> --}}
    <script src="{{ asset('css/script_style.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>