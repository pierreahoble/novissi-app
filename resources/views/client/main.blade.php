<!DOCTYPE html>
<html class="no-js" lang="fr">


<!-- Mirrored from demo.hasthemes.com/mitech-preview/index-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:41:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Noovissi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('client/assets/images/favicon.ico')}}">

    <!-- CSS
        ============================================ -->
    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

    <!-- Font Family CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css"> -->

    <!-- FontAwesome CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css"> -->

    <!-- Swiper slider CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper.min.css"> -->

    <!-- animate-text CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate-text.css"> -->

    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.min.css"> -->

    <!-- Light gallery CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css"> -->

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="{{asset('client/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/plugins/plugins.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('client/assets/css/style.css')}}">

</head>

<body>


    {{-- <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> --}}












@include('layout.headClient')






    <div id="main-wrapper">
        <div class="site-wrapper-reveal section-space--pt__120">




            

          @yield('contenu')





          





    


        </div>






        @include('layout.footerClient')






    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    <div class="demo-option-container">
        <!-- Start Toolbar -->
        {{-- <div class="aeroland__toolbar">
            <div class="inner">
                <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                    <i class="fal fa-project-diagram"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                    <i class="fal fa-life-ring"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib" aria-label="Purchase Mitech">
                    <i class="fal fa-shopping-cart"></i>
                </a>
            </div>
        </div> --}}
        <!-- End Toolbar -->
        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib"><i class="far fa-shopping-cart mr-2"></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-01.jpg')}}" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-02.jpg')}}" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-03.jpg')}}" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-04.jpg')}}" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-05.jpg')}}" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="{{asset('client/assets/images/demo-images/home-06.jpg')}}" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('client/assets/images/logo/logo-dark.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                <li><a href="index-processing.html"><span>Processing</span></a></li>
                                <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                <li><a href="index-services.html"><span>Services</span></a></li>
                                <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="about-us-01.html"><span>About us</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                        <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                        <li class="has-children">
                                            <a href="#"><span>Submenu Level Two</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="leadership.html"><span>Leadership</span></a></li>
                                <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                <li><a href="our-history.html"><span>Our history</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="careers.html"><span>Careers</span></a></li>
                                <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">IT solutions</a>
                            <ul class="sub-menu">
                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                <li><a href="industries.html"><span>Industries</span></a></li>
                                <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Element Group 01</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                        <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                        <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                        <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                        <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                        <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                        <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                        <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 02</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-counters.html"><span>Counters</span></a></li>
                                        <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                        <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                        <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                        <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                        <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                        <li><a href="element-lists.html"><span>Lists</span></a></li>
                                        <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 03</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                        <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                        <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                        <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                        <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                        <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                        <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                        <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 04</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                        <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                        <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                        <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Case Studies</a>
                            <ul class="sub-menu">
                                <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Blogs</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> --}}
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    {{-- <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of search overlay  ====================-->

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('client/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- jQuery JS -->
    <script src="{{asset('client/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('client/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('client/assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- wow JS -->
    <!-- <script src="assets/js/plugins/wow.min.js"></script> -->

    <!-- Swiper Slider JS -->
    <!-- <script src="assets/js/plugins/swiper.min.js"></script> -->

    <!-- Light gallery JS -->
    <!-- <script src="assets/js/plugins/lightgallery.min.js"></script> -->

    <!-- Waypoints JS -->
    <!-- <script src="assets/js/plugins/waypoints.min.js"></script> -->

    <!-- Counter down JS -->
    <!-- <script src="assets/js/plugins/countdown.min.js"></script> -->

    <!-- Isotope JS -->
    <!-- <script src="assets/js/plugins/isotope.min.js"></script> -->

    <!-- Masonry JS -->
    <!-- <script src="assets/js/plugins/masonry.min.js"></script> -->

    <!-- ImagesLoaded JS -->
    <!-- <script src="assets/js/plugins/images-loaded.min.js"></script> -->

    <!-- Wavify JS -->
    <!-- <script src="assets/js/plugins/wavify.js"></script> -->

    <!-- jQuery Wavify JS -->
    <!-- <script src="assets/js/plugins/jquery.wavify.js"></script> -->

    <!-- circle progress JS -->
    <!-- <script src="assets/js/plugins/circle-progress.min.js"></script> -->

    <!-- counterup JS -->
    <!-- <script src="assets/js/plugins/counterup.min.js"></script> -->


    <!-- animation text JS -->
    <!-- <script src="assets/js/plugins/animation-text.min.js"></script> -->

    <!-- Vivus JS -->
    <!-- <script src="assets/js/plugins/vivus.min.js"></script> -->

    <!-- Some plugins JS -->
    <!-- <script src="assets/js/plugins/some-plugins.js"></script> -->


    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->


    <script src="{{asset('client/assets/js/plugins/plugins.min.js')}}"></script>


    <!-- Main JS -->
    <script src="{{asset('client/assets/js/main.js')}}"></script>


</body>


<!-- Mirrored from demo.hasthemes.com/mitech-preview/index-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:41:27 GMT -->
</html>