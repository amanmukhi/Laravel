<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <title>Admin - Login</title>

    <!-- Custom CSS -->
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <style>
        .error {
            color: red;
            font-size: 12px;
            font-style: oblique;
            font-family: inherit;
        }
    </style>

</head>

<body>
    <div class="main-wrapper">

        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- Preloader - style you can find in spinners.css -->


        <!-- Login box.scss -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(/admin/assets/images/big/3.png);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="/admin/assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Login</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>
                        <form class="mt-4" method="post" action="{{ url('/admin/login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Username</label>
                                        <input class="form-control" id="uname" name="username" type="email" placeholder="enter your username">
                                        @error('username')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" name="password" type="password" placeholder="enter your password">
                                        @error('password')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="login" class="btn btn-block btn-dark">Login</button>
                                </div>
                                <!-- <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="{{ url('/admin/register') }}" class="text-danger">Register</a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login box.scss -->

    </div>

    <!-- All Required js -->
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- This page plugin js -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>