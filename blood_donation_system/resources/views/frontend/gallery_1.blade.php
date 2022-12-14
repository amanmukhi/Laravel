@extends('frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title>Gallery 1</title>
@endpush

@section('main-section')

<!--  PAGE HEADING -->

<section class="page-header" data-stellar-background-ratio="1.2">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">


                <h3>
                    Gallery Layout 01
                </h3>

                <p class="page-breadcrumb">
                    <a href="#">Home</a> / Gallery Layout 01
                </p>


            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<!--  GALLERY CONTENT  -->

<section class="section-content-block section-secondary-bg">

    <div class="container">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                <p class="section-subheading">
                    Campaign photos of different parts of world and our prestigious voluntary work
                </p>
            </div> <!-- end .col-sm-10  -->

        </div> <!-- end .row  -->

    </div> <!--  end .container -->

    <div class="container wow fadeInUp">

        <div class="no-padding-gallery gallery-carousel">

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_1.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_1.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a> <!-- end .gallery-light-box  -->

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_2.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_2.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a>

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_3.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_3.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a> <!-- end .gallery-light-box  -->

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_4.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_4.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a>

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_5.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_5.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a> <!-- end .gallery-light-box  -->

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_6.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_6.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a>

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_7.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_8.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a> <!-- end .gallery-light-box  -->

            <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_8.jpg">

                <figure class="gallery-img">

                    <img src="images/gallery_7.jpg" alt="gallery image" />

                </figure> <!-- end .cause-img  -->

            </a>

        </div> <!-- end .row  -->

    </div><!-- end .container-fluid  -->

</section> <!-- end .section-content-block  -->


@endsection