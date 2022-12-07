@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>User - Register</title>
@endpush

<style>
    h4 {
        font-weight: bold;
        margin-bottom: 2.5rem;
    }

    .form-wrapper {
        background: #fff;
        border-radius: 5px;
        padding: 50px;
    }

    .form-control,
    .custom-select {
        border-radius: 0px;
        color: #495057;
        background-color: #f1f1f1;
        border-color: none;


    }

    .form-control:focus {
        color: #495057;
        background-color: #ffffff;
        border: 1px solid #b5b6b3;
        outline: 0;
        box-shadow: none;

    }

    .button-style {
        background: #f26068;
        color: #fff;
        border: #f26068;
        padding: 2px 14px;
        font-size: 20px;
    }

    .button-style:hover {
        background: #fe3c47;
        color: #fff;
        padding: 2px 14px;
        font-size: 20px;

    }

    .chk_box {
        margin-bottom: 7px;
        margin-right: 6px;
    }
</style>

@section('main-section')


<section class="contact-from pt-4">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto">
                <div class="form-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>User - Registration</h2>

                            <div style="margin-bottom: 50px;"></div>
                            <div class="card ">
                                <div class="col-md-6">
                                    <form method="post" action="{{ url('/user-register') }}">
                                        @csrf


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Full Name" value="">
                                                @error('name')
                                                <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="">
                                                @error('email')
                                                <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="Password" name="password" class="form-control" placeholder="Password">
                                                @error('password')
                                                <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="phone" class="form-control" placeholder="Phone number">
                                                @error('phone')
                                                <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-center"></div>
                                        <button type="submit" class="button-style">Register</button>
                                </div>

                            </div>
                        </div>

                    </div>




                    </form>
                </div>

            </div>
        </div>
    </div>

    </div>
</section>


@endsection