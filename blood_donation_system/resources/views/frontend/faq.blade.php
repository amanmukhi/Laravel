@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>FAQ</title>
@endpush

@section('main-section')


<!--  PAGE HEADING -->

<section class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <h3>
                    FAQ
                </h3>

                <p class="page-breadcrumb">
                    <a href="#">Home</a> / FAQ
                </p>


            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<!--  SECTION FAQ -->

<section class="section-content-block section-faq">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">F.A.Q</h2>
                <p class="section-subheading">
                    know more about blood donation and know how you can help people.
                </p>
            </div> <!-- end .col-sm-10  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion">

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What are preliminary psychological disorder ?</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How many sessions can I have with my counselor?</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> How can I be sure effective form of counseling?</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How is my privacy protected?</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

            </div> <!-- end .col-md-6  -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion2">

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">What are preliminary psychological disorder ?</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">How many sessions can I have with my counselor?</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven"> How can I be sure effective form of counseling?</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">How is my privacy protected?</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </div>
                    </div>
                </div>

            </div> <!-- end .col-md-12  -->

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-faq -->


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