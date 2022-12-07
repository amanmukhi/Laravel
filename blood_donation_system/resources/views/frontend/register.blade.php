@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Doner - Register</title>
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

    .button_hide {
        display: none;
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
                            <h4>Registration form</h4>
                        </div>
                    </div>


                    <form method="post" action="{{ url('/register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ $donor->name }}">
                                    <!-- @error('name')
                                    <div class="error">{{ $message }}</div>
                                    @enderror -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $donor->email }}">
                                    <!-- @error('email')
                                    <div class="error">{{ $message }}</div>
                                    @enderror -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="Password" name="password" class="form-control" placeholder="Password">
                                    <!-- @error('password')
                                    <div class="error">{{ $message }}</div>
                                    @enderror -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="Password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                    <!-- @error('confirm_password')
                                    <div class="error">{{ $message }}</div>
                                    @enderror -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="number" name="phone" class="form-control" placeholder="Phone number">
                                            <!-- @error('phone')
                                            <div class="error">{{ $message }}</div>
                                            @enderror -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input style="margin-left: 10px ;" type="radio" name="visible" id="inlineRadio1" value="v">
                                            <label for="inlineRadio1">Visible</label>
                                            <input style="margin-left: 10px ;" type="radio" name="visible" id="inlineRadio2" value="i">
                                            <label for="inlineRadio1">Invisible </label>
                                            <!-- @error('visible')
                                            <div class="error">{{ $message }}</div>
                                            @enderror -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="number" name="age" class="form-control" placeholder="Age">
                                            <!-- @error('age')
                                            <div class="error">{{ $message }}</div>
                                            @enderror -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                Gender :
                                                <input class="form-check-input" style="margin-left: 10px ;" type="radio" name="gender" id="inlineRadio1" value="M">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                                <input class="form-check-input" style="margin-left: 10px ;" type="radio" name="gender" id="inlineRadio2" value="F">
                                                <label class="form-check-label" for="inlineRadio1">Female</label>
                                                <!-- @error('gender')
                                                <div class="error">{{ $message }}</div>
                                                @enderror -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Address -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Address :
                                            <textarea type="text" name="address" class="form-control" placeholder="Address" rows="3"></textarea>
                                            <!-- @error('address')
                                            <div class="error">{{ $message }}</div>
                                            @enderror -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <div class="select-style">
                                                    <select class="form-control" name="blood_group" style=" margin-bottom: 0px ;">

                                                        @if($donor->blood_group == 'O_p')
                                                        <option value="O_p" selected>O+</option>
                                                        @elseif($donor->blood_group == 'O_n')
                                                        <option value="O_n" selected>O-</option>
                                                        @elseif($donor->blood_group == 'A_p')
                                                        <option value="A_p" selected>A+</option>
                                                        @elseif($donor->blood_group == 'A_n')
                                                        <option value="A_n" selected>A-</option>
                                                        @elseif($donor->blood_group == 'B_p')
                                                        <option value="B_p" selected>B+</option>
                                                        @elseif($donor->blood_group == 'B_n')
                                                        <option value="B_n" selected>B-</option>
                                                        @elseif($donor->blood_group == 'AB_p')
                                                        <option value="AB_p" selected>AB+</option>
                                                        @elseif($donor->blood_group == 'AB_n')
                                                        <option value="AB_n" selected>AB-</option>
                                                        @else
                                                        <option value="" selected>No one Selected</option>
                                                        @endif

                                                    </select>
                                                    <!-- @error('blood_group')
                                                    <div class="error">{{ $message }}</div>
                                                    @enderror -->
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input type="text" name="unit" class="form-control" placeholder="Unit(in ml)" value="{{ $donor->unit }}">
                                                <!-- @error('unit')
                                                <div class="error">{{ $message }}</div>
                                                @enderror -->
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                State :
                                                <select name="state" class="custom-select form-control" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="OD" selected>Odisha</option>
                                                    <!-- @error('state')
                                                    <div class="error">{{ $message }}</div>
                                                    @enderror -->
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                City :
                                                <select name="city" class="custom-select form-control" style="width: 100%;">
                                                    @if($donor->city == 'Cuttack')
                                                    <option value="Cuttack" selected>Cuttack</option>
                                                    @elseif($donor->city == 'Khurda')
                                                    <option value="Khurda" selected>Khurda</option>
                                                    @elseif($donor->city == 'Berhamapur')
                                                    <option value="Berhamapur" selected>Berhamapur</option>
                                                    @elseif($donor->city == 'Bhubaneswar')
                                                    <option value="Bhubaneswar" selected>Bhubaneswar</option>
                                                    @else
                                                    <option value="" selected>No one Selected</option>
                                                    @endif

                                                </select>
                                                <!-- @error('city')
                                                <div class="error">{{ $message }}</div>
                                                @enderror -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group col-md-12">
                                <div style="margin-top: 20px;"></div>
                                <input type="checkbox" id="teamcondition" style="margin-bottom: 7px; margin-right: 6px;" name="teamcondition" value="1"><span style="font-size: 15px;">Our Team and condition</span>
                            </div>
                        </div>
                        <fieldset class="button_hide text-right">
                            <button type="submit" class="button_hide button-style">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    $(function() {
        $("#teamcondition").on("click", function() {
            $(".button_hide").toggle(this.checked);
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endsection