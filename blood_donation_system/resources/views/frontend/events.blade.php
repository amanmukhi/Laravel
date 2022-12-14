@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Events</title>
@endpush

@section('main-section')


<!--  PAGE HEADING -->

<section class="page-header" data-stellar-background-ratio="1.2">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <h3>
                    Campaign Lists
                </h3>

                <p class="page-breadcrumb">
                    <a href="#">Home</a> / All Campaigns
                </p>


            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<!--  MAIN CONTENT  -->

<!--  SECTION CAMPAIGNS   -->

<section class="section-content-block">

    <div class="container">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Donation Campaigns</h2>
                <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
            </div> <!-- end .col-sm-12  -->

        </div> <!-- end .row  -->


        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="event-latest">
                    <div class="row">

                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                            <div class="event-latest-thumbnail">
                                <a href="#">
                                    <img src="images/event_1.jpg" alt="">
                                </a>
                            </div>
                        </div> <!--  col-sm-5  -->

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="event-details">
                                <a class="latest-date" href="#">14 June, 2017</a>
                                <h4 class="event-latest-title">
                                    <a href="{{ url('/event_single')}}">World Blood Donors Day</a>
                                </h4>
                                <p>Every year, on 14 June, countries around the world celebrate World Blood Donor Day. The event serves to thank voluntary.</p>
                                <div class="event-latest-details">
                                    <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                    <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                </div>
                            </div>
                        </div> <!--  col-sm-7  -->

                    </div>

                </div>
            </div> <!--  col-sm-6  -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="event-latest ">

                    <div class="row">

                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                            <div class="event-latest-thumbnail">
                                <a href="#">
                                    <img src="images/event_2.jpg" alt="">
                                </a>
                            </div>
                        </div> <!--  col-sm-5  -->

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="event-details">
                                <a class="latest-date" href="#">20 Sep, 2017</a>
                                <h4 class="event-latest-title">
                                    <a href="#">O- Blood donors needed</a>
                                </h4>
                                <p>O Negative blood cells are called ???universal??? meaning they can be transfused to almost any patient in need and blood cells are safest.</p>
                                <div class="event-latest-details">
                                    <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                    <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                </div>
                            </div>
                        </div> <!--  col-sm-7  -->

                    </div>

                </div>
            </div> <!--  col-sm-6  -->
        </div> <!--  end .row  -->

        <div class="row margin-bottom-30">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="event-latest">
                    <div class="row">

                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                            <div class="event-latest-thumbnail">
                                <a href="#">
                                    <img src="images/event_3.jpg" alt="">
                                </a>
                            </div>
                        </div> <!--  col-sm-5  -->

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="event-details">
                                <a class="latest-date" href="#">20 Sep, 2017</a>
                                <h4 class="event-latest-title">
                                    <a href="#">You are Somebody???s Type</a>
                                </h4>
                                <p>Many people has same blood group like you. so donate now and bring smiles in their face and encourage others for donate blood.</p>
                                <div class="event-latest-details">
                                    <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                    <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                </div>
                            </div>
                        </div> <!--  col-sm-7  -->

                    </div>
                </div>
            </div> <!--  col-sm-6  -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="event-latest">

                    <div class="row">
                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                            <div class="event-latest-thumbnail">
                                <a href="#">
                                    <img src="images/event_4.jpg" alt="">
                                </a>
                            </div>
                        </div> <!--  col-sm-5  -->

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="event-details">
                                <a class="latest-date" href="#">20 Sep, 2017</a>
                                <h4 class="event-latest-title">
                                    <a href="#">Donation - Feel Real Peace</a>
                                </h4>
                                <p>You're the real hero because you can gift a new life for patient.So donate your blood and enjoy a precious life. Don't fear, it's really easy.</p>
                                <div class="event-latest-details">
                                    <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                    <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                </div>
                            </div>
                        </div> <!--  col-sm-7  -->

                    </div>

                </div>
            </div> <!--  col-sm-6  -->

        </div> <!--  end .row  -->

        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                <a class="btn btn-load-more" href="#">Load All Campaigns</a>
            </div>
        </div>

    </div> <!--  end .container  -->

</section>

<!-- SECTION CTA  -->

<section class="cta-section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h2>We are helping people from 40 years</h2>
                <p>
                    You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.
                </p>
                <a class="btn btn-cta-2" href="#">BECOME VOLUNTEER</a>
            </div> <!--  end .col-md-8  -->
        </div> <!--  end .row  -->
    </div>
</section>

<!-- CLIENT LOGO SECTION  -->

<section class="section-client-logo section-secondary-bg">

    <div class="container wow fadeInUp">


        <div class="row">

            <div class="logo-items logo-layout-1 text-center">

                <div class="client-logo">

                    <img src="images/logo_1.jpg" alt="" />

                </div>

                <div class="client-logo">

                    <img src="images/logo_2.jpg" alt="" />

                </div>


                <div class="client-logo">

                    <img src="images/logo_3.jpg" alt="" />

                </div>



                <div class="client-logo">

                    <img src="images/logo_4.jpg" alt="" />

                </div>

                <div class="client-logo">

                    <img src="images/logo_5.jpg" alt="" />

                </div>



                <div class="client-logo">

                    <img src="images/logo_6.jpg" alt="" />

                </div>

                <div class="client-logo">

                    <img src="images/logo_7.jpg" alt="" />

                </div>

                <div class="client-logo">

                    <img src="images/logo_8.jpg" alt="" />

                </div>


            </div> <!-- end .testimonial-container  -->

        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-client-logo -->

@endsection