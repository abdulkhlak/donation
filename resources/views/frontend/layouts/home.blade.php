
@extends('frontend.layouts.master')

@section('main-content')
    @section('styles')
        <!-- The styles -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css" />
        <link href="{{asset('frontend')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="{{asset('frontend')}}/css/animate.css" rel="stylesheet" type="text/css" >
        <link href="{{asset('frontend')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="{{asset('frontend')}}/css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="{{asset('frontend')}}/css/styles.css" />
        @endsection
    <div id="preloader">
        <span class="margin-bottom"><img src="{{asset('frontend')}}/images/loader.gif" alt="" /></span>
    </div>

@include('frontend.layouts.includs.slider')


<!--  FEATURED ABOUT US SECTION-->

<section class="section-content-block">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <div class="about-us-container theme-custom-box-shadow">

                    <div class="row section-heading-wrapper margin-bottom-11">

                        <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                            <h2><strong>Who We Are?</strong></h2>
                            <span class="heading-separator heading-separator-horizontal"></span>
                        </div> <!-- end .col-sm-10  -->

                    </div>

                    <div class="about-details">

                        <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>


                        <ul class="custom-bullet-list">
                            <li>Specialist blood donors and clinical supervision.</li>
                            <li>Increasing communication with our members.</li>
                            <li>High quality assessment, diagnosis and treatment.</li>
                            <li>Examine critically to ensure alignment.</li>
                            <li>The extra care of a multi-disciplinary team.</li>
                        </ul>

                    </div> <!--  end .about-details -->

                </div>

            </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <figure class="about-img theme-custom-box-shadow">
                    <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
                    <img src="{{asset('frontend')}}/images/about_feat_bg.jpg" alt="about" />
                </figure> <!-- end .cause-img  -->

            </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

        </div> <!--  end .row  -->
    </div>

</section> <!--  end .section-about-us -->

@include('frontend.layouts.includs.testemonial')
@include('frontend.layouts.includs.campaign')
@include('frontend.layouts.includs.appointment')
@include('frontend.layouts.includs.team')
@include('frontend.layouts.includs.gallery')

<!-- HIGHLIGHT CTA  -->

<section class="padding-bottom-100 padding-top-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                    <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                    <p>
                        You can give blood at any of our blood donation venues all over the world.
                        <br />
                        We have total sixty thousands donor centers and visit thousands of other venues on various occasions.
                    </p>
                    <a class="btn btn-theme margin-top-24 wow bounceIn" href="#">JOIN WITH US</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- JAVASCRIPT SECTION  -->
    @section('scripts')
        <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
        <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/js/wow.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.backTop.min.js"></script>
        <script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/js/waypoints-sticky.min.js"></script>
        <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.stellar.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/js/venobox.min.js"></script>
        <script src="{{asset('frontend')}}/js/custom-scripts.js"></script>
        @endsection
    @endsection

