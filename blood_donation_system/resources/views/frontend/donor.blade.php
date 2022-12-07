@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Doner</title>
@endpush

<!-- lottieFiles CDN link -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    .appointment-img {
        height: 500px !important;
        position: relative !important;
    }

    .error {
        font-size: 12px;
        margin-top: 0px;
        color: #fb2c2c;
        font-style: italic;
        font-family: sans-serif;
    }
</style>

@section('main-section')



<!--  SECTION APPOINTMENT   -->

<section class="section-appointment">

    <div class="container wow fadeInUp">

        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Donate Blood</h3>
                    <form class="appoinment-form" method="post" action="{{ url('/donor') }}">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input name="name" style=" margin-bottom: 0px ;" id="your_name" class="form-control" placeholder="Name" type="text" value="{{ old('name') }}">
                                @error('name')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" style=" margin-bottom: 0px ;" id="your_email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: 18px;">

                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="state" style=" margin-bottom: 0px ;">
                                        <option value="">State</option>
                                        <option value="OD">Odisha</option>
                                    </select>
                                </div>
                                @error('state')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="city" style=" margin-bottom: 0px ;">
                                        <option value="">City</option>
                                        <option value="Cuttack">Cuttack</option>
                                        <option value="Khurda">Khurda</option>
                                        <option value="Berhamapur">Berhamapur</option>
                                        <option value="Bhubaneswar">Bhubaneswar</option>
                                    </select>
                                </div>
                                @error('city')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row" style="margin-top: 18px;">
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="blood_group" style=" margin-bottom: 0px ;">
                                        <option value="">Blood Group</option>
                                        <option value="O_p">O+</option>
                                        <option value="O_n">O-</option>
                                        <option value="A_p">A+</option>
                                        <option value="A_n">A-</option>
                                        <option value="B_p">B+</option>
                                        <option value="B_n">B-</option>
                                        <option value="AB_p">AB+</option>
                                        <option value="AB_n">AB-</option>
                                    </select>
                                </div>
                                @error('blood_group')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input name="unit" id="your_phone" class="form-control" placeholder="unit(in ml)" type="number" value="{{ old('unit') }}">
                                @error('unit')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>


                        <!-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                        </div> -->

                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;">
                            <button class="btn-submit" type="submit">Donate Now</button>
                        </div>

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->

            </div> <!--  end .col-lg-6 -->

            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

                <figure class="appointment-img">
                    <lottie-player src="images/80261-register-nurse.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </figure>
            </div> <!--  end col-lg-6  -->

        </div> <!--  end .row  -->

    </div> <!--  end .container -->

</section> <!--  end .appointment-section  -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endsection