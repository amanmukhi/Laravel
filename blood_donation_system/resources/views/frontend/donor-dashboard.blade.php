@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Donor - Dashboard</title>
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
                <h5 class="card-title">Donor Details</h5>
                <hr>
                <p>Donor Name : {{ $donor->name }}</p>
                @if($donor->blood_gr == 'O_p')
                <p>Blood Group : O+ </p>
                @elseif($donor->blood_gr == 'O_n')
                <p>Blood Group : O- </p>
                @elseif($donor->blood_gr == 'A_p')
                <p>Blood Group : A+ </p>
                @elseif($donor->blood_gr == 'A_n')
                <p>Blood Group : A- </p>
                @elseif($donor->blood_gr == 'B_p')
                <p>Blood Group : B+ </p>
                @elseif($donor->blood_gr == 'B_n')
                <p>Blood Group : B- </p>
                @elseif($donor->blood_gr == 'AB_p')
                <p>Blood Group : AB+ </p>
                @elseif($donor->blood_gr == 'AB_n')
                <p>Blood Group : AB- </p>
                @else
                <p>null</p>
                @endif
                <p>Unit : {{ $donor->unit }}</p>
                <p>Status : Null | Pending | Accept</p>
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