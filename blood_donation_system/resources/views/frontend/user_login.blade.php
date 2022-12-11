@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>User - login</title>
@endpush

<style>
    /* Login Page */

    .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
    }

    form {
        padding-top: 10px;
        font-size: 14px;
        margin-top: 30px;
    }

    .card-title {
        font-weight: 300;
    }

    .btn {
        font-size: 14px;
        margin-top: 20px;
    }


    .login-form {
        width: 330px;
        margin: 20px;
    }

    .sign-up {
        text-align: center;
        padding: 20px 0 0;
    }

    .alert {
        margin-bottom: -30px;
        font-size: 13px;
        margin-top: 20px;
    }

    .error {
        color: #ff0404;
        font-size: 17px;
        font-family: math;
    }
</style>

@section('main-section')


<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">User - Login</h3>
            <div class="card-text">
                <form method="post" action="{{ url('/user-login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control form-control-sm">

                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>

                        <!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->

                        <input type="password" name="password" class="form-control form-control-sm">
                        @error('password')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>

                    <div class="sign-up">
                        Don't have an account? <a href="{{ url('/user-register') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection