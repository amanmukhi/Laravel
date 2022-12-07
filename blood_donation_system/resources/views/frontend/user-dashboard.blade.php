@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>user - Dashboard</title>
@endpush

<style>
    .add-style {
        border-top: 2px double #fe3c47;
        padding: 37px;
        box-shadow: 0px 5px 11px -1px #b9b9b9;
        width: 100%;
    }
</style>

@section('main-section')


<div style="margin-top: 20px;"></div>
<div class="container">
    <h2>Dashboard</h2>

    <hr style="border: 1.5px solid #fe3c47 ; background-color: #fe3c47;">
    <div class="row">
        <div class="col-md-4">

            <div class="card add-style">
                <h5 class="card-title">User Details</h5>
                <hr>

                <p>Name : {{ $user->name}}</p>
                <p>Email : {{ $user->email }}</p>
                <p>Phone No. : {{ $user->phone }}</p>

            </div>



        </div>
        <div class="col-md-8">

            <div class="card add-style">

                <div class="card-body">
                    <h5 class="card-title">Request for Blood Group : O+</h5>
                    <!-- Red -->
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="background-color: #fe3c47; width: 20%;">20%</div>
                    </div>
                    <a href="#" class="btn btn-primary" style="background-color :#fe3c47; border:none;">Donate Now</a>
                </div>

            </div>
            <div style="margin-bottom: 20px;"></div>

        </div>
    </div>



</div>

<div style="margin-bottom: 40px;"></div>




@endsection