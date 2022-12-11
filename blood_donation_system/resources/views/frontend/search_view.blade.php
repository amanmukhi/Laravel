@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Home</title>
@endpush

@section('main-section')

<!-- lottieFiles CDN link -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    .container-search {
        position: relative;
        z-index: 1;
        bottom: 62px;
    }

    .search_btn {
        background-color: #fe3c47;
        border-color: #fe3c47;
        padding: 0px 0px;
        font-size: 20px;
        text-transform: uppercase;
    }

    .search_btn:hover {
        background-color: #f7000e;
        border-color: #f7000e;
        color: #fff;
        padding: 0px 0px;
        font-size: 20px;
        text-transform: uppercase;
    }

    .appointment-img {
        height: 650px;
        position: relative;

    }

    .add-style {
        border-top: 2px double #fe3c47;
        padding: 37px;
        box-shadow: 0px 5px 11px -1px #b9b9b9;
        width: 100%;
    }
</style>


<!--  HOME SLIDER BLOCK  -->
<div class="slider-wrap">
    <div id="slider_1" class="owl-carousel owl-theme">

        <div class="item">
            <img src="images/home_1_slider_1.jpg" alt="img">
            <div class="slider-content text-center">
                <div class="container">

                    <div class="slider-contents-info">
                        <h3>Donate blood,save life !</h3>
                        <h2>
                            Your Donation Can bring
                            <br>
                            smile at others face
                        </h2>
                        <a href="#" class="btn btn-slider">Donate Now <i class="fa fa-long-arrow-right"></i></a>
                    </div> <!-- end .slider-contents-info  -->
                </div><!-- /.slider-content -->
            </div>
        </div>

        <div class="item">
            <img src="images/home_1_slider_1.jpg" alt="img">
            <div class="slider-content text-center">
                <div class="container">
                    <div class="slider-contents-info">
                        <h3>Donate blood,save life !</h3>
                        <h2>
                            Donate your blood and
                            <br>
                            Inspires to others
                        </h2>
                        <a href="#" class="btn btn-slider">Join With Us <i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- /.slider-content -->
                </div> <!-- end .slider-contents-info  -->

            </div>

        </div>
    </div>
</div>


<!-- Add Search Bar -->
<section class="container" id='search_bar'>
    <div class="container-search mt-20">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <label class="from-control">Blood Group : </label>
                            <select name="group" id="inputState" class="form-control" required>
                                <option value="">Select</option>

                                <option value="O_p">O+</option>
                                <option value="A_p">A+</option>
                                <option value="B_p">B+</option>
                                <option value="AB_p">AB+</option>
                                <option value="O_n">O-</option>
                                <option value="A_n">A-</option>
                                <option value="B_n">B-</option>
                                <option value="AB_n">AB-</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label class="from-control">Date : </label>
                            <input type="date" min="{{  date('Y-m-d') }}" id="txtstartdate" name="date" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <label class="from-control">Unit : </label>
                            <input type="number" name="unit" class="form-control" required>
                        </div>

                        <div class='col-md-3'>
                            <label class="from-control">City : </label>
                            <div>
                                <select name="city" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                    <option value="" selected="selected">Choose..</option>

                                    <option value="OD">Odisha</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mt-30">
                            <button type="submit" name="search" class="btn btn-primary btn-sm search_btn">Search</button>
                        </div> <!--  end .col-md-4  -->

                    </div>
                </form>
            </div>

        </div>
    </div>


</section>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            closeOnSelect: false
        });
    });
</script>
<div class="mt-20"></div>


<!-- Search Result -->

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h2>Search Result</h2>
                <div class="card add-style">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <span>Sl No. :</span>
                            </div>
                            <div class="col-md-4">
                                <span>Name :</span>
                            </div>
                            <div class="col-md-2">
                                <span>Blood Group :</span>
                            </div>
                            <div class="col-md-2">
                                <span>Unit :</span>
                            </div>
                            <div class="col-md-2">
                                <span>Request</span>
                            </div>
                        </div>


                        <!-- <div style="margin-top: 20px;"></div> -->
                        @php
                        $i=1;
                        @endphp

                        @foreach($result as $row)
                        <div class="row">
                            <div style="margin-top: 20px;"></div>
                            <div class="col-md-2">
                                <h3 class="card-title">{{ $i++ }}</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>{{ $row->name }}</h3>
                            </div>
                            <div class="col-md-2">

                                <h3>O+</h3>
                            </div>
                            <div class="col-md-2">

                                <h3>{{ $row->unit }}</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('/add-donor') }}/{{ $row->id }}" class="btn btn-primary" style="background-color :#fe3c47; border:none;">Request</a>
                            </div>
                        </div>

                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-bottom: 30px;"></div>

<!-- end search result -->



<!-- HIGHLIGHT CTA  -->

<section class="cta-section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2>We are helping people from 40 years</h2>
                <p>
                    You can give blood at any of our blood donation venues all over the world.
                    We have total sixty thousands donor centers and visit thousands of other venues on various occasions.
                </p>
            </div> <!--  end .col-md-8  -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a class="btn btn-cta-1" href="#">REQUEST APPOINTMENT</a>
            </div> <!--  end .col-md-4  -->
        </div> <!--  end .row  -->
    </div>
</section>

<!--  SECTION DONATION PROCESS -->

<section class="section-content-block section-process">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading"><span>Donation</span> Process</h2>
                <p class="section-subheading">The donation process from the time you arrive center until the time you leave</p>
            </div> <!-- end .col-sm-10  -->

        </div> <!--  end .row  -->

        <div class="row wow fadeInUp">

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="process-layout">

                    <figure class="process-img">

                        <img src="images/process_1.jpg" alt="process" />
                        <div class="step">
                            <h3>1</h3>
                        </div>
                    </figure> <!-- end .process-img  -->

                    <article class="process-info">
                        <h2>Registration</h2>
                        <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                    </article>

                </div> <!--  end .process-layout -->

            </div> <!--  end .col-lg-3 -->



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="process-layout">

                    <figure class="process-img">
                        <img src="images/process_2.jpg" alt="process" />
                        <div class="step">
                            <h3>2</h3>
                        </div>
                    </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                    <article class="process-info">
                        <h2>Screening</h2>
                        <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                    </article>

                </div> <!--  end .process-layout -->

            </div> <!--  end .col-lg-3 -->


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="process-layout">

                    <figure class="process-img">
                        <img src="images/process_3.jpg" alt="process" />
                        <div class="step">
                            <h3>3</h3>
                        </div>
                    </figure> <!-- end .process-img  -->

                    <article class="process-info">
                        <h2>Donation</h2>
                        <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                    </article>

                </div> <!--  end .process-layout -->

            </div> <!--  end .col-lg-3 -->



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="process-layout">

                    <figure class="process-img">
                        <img src="images/process_4.jpg" alt="process" />
                        <div class="step">
                            <h3>4</h3>
                        </div>
                    </figure> <!-- end .process-img  -->

                    <article class="process-info">
                        <h2>Refreshment</h2>
                        <p>You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone. </p>
                    </article>

                </div> <!--  end .process-layout -->

            </div> <!--  end .col-lg-3 -->

        </div> <!--  end .row -->

    </div> <!--  end .container  -->

</section> <!--  end .section-process -->

<!--  SECTION COUNTER   -->

<section class="section-counter" data-stellar-background-ratio="0.3">

    <div class="container wow fadeInUp">

        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-heartbeat icon"></i>
                    <span class="counter">2578</span>
                    <h4>Success Smile</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-stethoscope icon"></i>
                    <span class="counter">3235</span>
                    <h4>Happy Donors</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-users icon"></i>
                    <span class="counter">3568</span>
                    <h4>Happy Recipient</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-building icon"></i>
                    <span class="counter">1364</span>
                    <h4>Total Awards</h4>

                </div>

            </div> <!--  end .col-lg-3  -->


        </div> <!-- end row  -->

    </div> <!--  end .container  -->

</section> <!--  end .section-counter -->

<!--  SECTION APPOINTMENT   -->

<section class="section-appointment">

    <div class="container wow fadeInUp">

        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Request Appointment</h3>
                    <form class="appoinment-form">
                        <div class="form-group col-md-6">
                            <input id="your_name" class="form-control" placeholder="Name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="your_email" class="form-control" placeholder="Email" type="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="select-style">
                                <select class="form-control" name="your_center">
                                    <option>Donation Center</option>
                                    <option>Los Angles</option>
                                    <option>California</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <input id="your_date" class="form-control" placeholder="Date" type="text">
                        </div>


                        <div class="form-group col-md-6">
                            <input id="your_time" class="form-control" placeholder="Time" type="text">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn-submit" type="submit">Get Appointment</button>
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

<!-- SECTION TESTIMONIAL   -->

<section class="section-content-block section-client-testimonial">

    <div class="container">

        <div class="testimonial-container text-center">

            <div class="col-md-10 col-md-offset-1 col-sm-12">

                <div class="testimony-layout-1">
                    <h3 class="people-quote">Donor Opinion</h3>
                    <p class="testimony-text">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else’s life makes me feel great!
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>

                    <h6>Brandon Munson</h6>
                    <span>CTO, Fulcrum Design, USA</span>

                </div> <!-- end .testimony-layout-1  -->

            </div> <!--  end col-md-10  -->

            <div class="col-md-10 col-md-offset-1 col-sm-12">

                <div class="testimony-layout-1">
                    <h3 class="people-quote">Donor Opinion</h3>
                    <p class="testimony-text">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>

                    <h6>Brandon Munson</h6>
                    <span>CTO, Fulcrum Design, USA</span>

                </div> <!-- end .testimony-layout-1  -->

            </div> <!--  end col-md-10  -->

            <div class="col-md-10 col-md-offset-1 col-sm-12">

                <div class="testimony-layout-1">
                    <h3 class="people-quote">Recipient Opinion</h3>
                    <p class="testimony-text">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>

                    <h6>Brandon Munson</h6>
                    <span>CTO, Fulcrum Design, USA</span>

                </div> <!-- end .testimony-layout-1  -->

            </div> <!--  end col-md-10  -->

        </div> <!--  end .row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-client-testimonial -->


<!-- SECTION CTA -->

<section class="section-content-block cta-section-3">
    <div class="container wow fadeIn animated">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-content text-center">
                    <h2>Join with us and save life</h2>
                    <a class="btn-cta-3" href="#">Become Volunteer</a>
                </div>
            </div> <!-- end .col-md-12 -->
        </div> <!-- end .row  -->
    </div> <!-- end .container  -->
</section> <!-- end cta-section  -->

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
                                    <a href="#">World Blood Donors Day</a>
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
                                <p>O Negative blood cells are called universal meaning they can be transfused to almost any patient in need and blood cells are safest.</p>
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
                                    <a href="#">You are Somebody Type</a>
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

<!--  SECTION GALLERY  -->

<section class="section-content-block no-bottom-padding section-secondary-bg">

    <div class="container">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Photo Gallery</h2>
                <p class="section-subheading">Campaign photos of different parts of world and our prestigious voluntary work</p>
            </div> <!-- end .col-sm-10  -->


        </div> <!-- end .row  -->

    </div> <!--  end .container -->

    <div class="container-fluid wow fadeInUp">

        <div class="row no-padding-gallery">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_1.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a>

            </div><!-- end .col-sm-3  -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_2.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a> <!-- end .gallery-light-box  -->

            </div><!-- end .col-sm-3  -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_3.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_3.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a>

            </div><!-- end .col-sm-3  -->

        </div> <!-- end .row  -->

        <div class="row no-padding-gallery">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_4.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a> <!-- end .gallery-light-box  -->

            </div><!-- end .col-sm-3  -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_5.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_5.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a>

            </div><!-- end .col-sm-3  -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                    <figure class="gallery-img">

                        <img src="images/gallery_6.jpg" alt="gallery image" />

                    </figure> <!-- end .gallery-img  -->

                </a> <!-- end .gallery-light-box  -->

            </div><!-- end .col-sm-3  -->

        </div> <!-- end .row  -->

    </div><!-- end .container-fluid  -->

</section> <!-- end .section-content-block  -->

<!-- SECTION LOGO   -->

<section class="section-client-logo">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Our Sponsors</h2>
                <p class="section-subheading">The sponsors who give their valuable amount to fulfill our mission.</p>
            </div> <!-- end .col-sm-10  -->

        </div> <!-- end .row  -->


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

            </div> <!-- end .logo-items  -->

        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-client-logo -->

<!-- SECTION BLOG   -->

<section class="section-content-block section-home-blog">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Recent Blog</h2>
                <p class="section-subheading">
                    Latest news and statements regarding giving blood, blood processing and supply.
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="latest-news-container">

                    <a href="#">
                        <figure>
                            <img src="images/blog_thumb_1.jpg" alt="latest news">
                        </figure>
                    </a>

                    <div class="news-content">

                        <h3>
                            <a href="#">Blood Connects Us All in a Soul</a>
                        </h3>

                        <div class="news-meta-info">
                            <i class="fa fa-clock-o"></i> April 4, 2017
                            &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                        </div>

                        <div class="update-details">
                            In many countries, demand exceeds supply, and blood services face the challenge of making blood available for patient.
                        </div>

                    </div>

                </div><!--  end .latest-news-container  -->

            </div> <!--  end col-lg-4  -->

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="latest-news-container">

                    <a href="#">
                        <figure>
                            <img src="images/blog_thumb_2.jpg" alt="latest news">
                        </figure>
                    </a>

                    <div class="news-content">

                        <h3>
                            <a href="#">Give Blood and Save three Lives</a>
                        </h3>

                        <div class="news-meta-info">
                            <i class="fa fa-clock-o"></i> April 4, 2017
                            &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                        </div>

                        <div class="update-details">
                            To save a life, you don’t need to use muscle. By donating just one unit of blood, you can save three lives or even several lives.
                        </div>

                    </div>

                </div><!--  end .latest-news-container  -->

            </div> <!--  end col-lg-4  -->

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="latest-news-container">

                    <a href="#">
                        <figure>
                            <img src="images/blog_thumb_3.jpg" alt="latest news">
                        </figure>
                    </a>

                    <div class="news-content">

                        <h3>
                            <a href="#">Why Should I donate Blood ?</a>
                        </h3>

                        <div class="news-meta-info">
                            <i class="fa fa-clock-o"></i> April 4, 2017
                            &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                        </div>

                        <div class="update-details">
                            Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.
                        </div>

                    </div>

                </div><!--  end .latest-news-container  -->

            </div> <!--  end col-lg-4  -->

        </div> <!-- end row  -->

        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                <a href="#" class="btn btn-load-more">- Load More Blog -</a>
            </div>
        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->


@endsection