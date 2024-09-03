<!-- load all css -->
<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Dolptec</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.html') }}" />
    <!-- Place favicon.ico in the root directory -->
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_itco.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/progressBar.min.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    
    <!-- Testimonial CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tab-section.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/pop-up-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/download-now.css') }}">
    

</head>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header class="main-header main-header-one">
        <div id="sticky-header" class="menu-area">
            <div class="main-header-one__outer">
                <div class="main-header-one__right">
                    <div class="container">
                        <div class="menu-area__inner">
                            <div class="mobile-nav-toggler align-items-center">
                                <div class="site-ligo">
                                    <a href="{{ route('main') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="site-logo" />
                                    </a>
                                </div>
                                <i class="fas fa-bars"></i>
                            </div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="main-header-one__inner">
                                         <div class="main-header-one__top">
                                                <div class="main-header-one__top-pattern"></div>
                                                <div class="main-header-one__top-inner">
                                                    <div class="main-header-one__top-left">
                                                        <div class="header-contact-info">
                                                            <ul>

                                                                <li>
                                                                    <div class="icon-box">
                                                                        <i class="flaticon-gmail-logo"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="mailto:hello@dolptec.com">hello@dolptec.com</a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <div class="icon-box">
                                                                        <i class="flaticon-call"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="tel:+44 020 8135 6162">+44 020 8135 6162</a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        <div class="main-header-one__bottom">
                                            <div class="main-header-one__bottom-left d-flex">
                                                <div class="site-ligo d-flex align-items-center">
                                                    <a href="{{ route('main') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                                            alt="site-logo" /></a>
                                                </div>
                                                <div class="navbar-wrap main-menu">
                                                    <ul class="navigation">
                                                        <li class="menu-item">
                                                            <a href="#">Home</a>

                                                        </li>
                                                        <li>
                                                            <a href="#our-services">Services</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="#about-us">About Us</a>

                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="#our-approach
                                                            ">Our Approach</a>
                                                        </li>

                                                        <li class="menu-item"><a href="#resources">Resources</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="main-header-one__bottom-right">
                                                <div class="search-box">
                                                    <a href="#"
                                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>

                                                <div class="btn-box">
                                                    <a class="thm-btn btn" onclick="togglePopup()">
                                                        <span class="txt">Get a Consultation</span>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn">
                                    <i class="fas fa-times"></i>
                                </div>
                                <div class="nav-logo">
                                    <a href='index.html'><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" /></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <!-- <div class="contact-info">
                                        <div class="icon-box">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <p>
                                            <a href="tel:123456789">(629) 555-0129</a>
                                        </p>
                                    </div> -->
                                <!-- <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div> -->
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


<!-- POPUP Model -->
<div id="popupOverlay"
		class="overlay-container">
		<div class="popup-box">

            <form action="{{ route('enquires') }}" method="POST" class="contact-form1"
                                        id="home-enquire-form">
                                        <h5 class="title">Book your free consultation today!!</h5>
                                        {!! csrf_field() !!}

                                        @if (Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                        @endif

                                        @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                        @endif

                                        <!-- Add this section to display validation errors for each form field -->
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control rounded border-white mb-3 form-input form-control" id="name" name="name"
                                                        placeholder="Name" type="text" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control rounded border-white mb-3 form-input form-control" id="email1" name="email"
                                                        placeholder="Corporate Email ID" type="text" required>
                                                    <span class="error-message" id="emailError1"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control rounded border-white mb-3 form-input form-control m-width" type="tel" id="phone1"
                                                        name="phone" placeholder="Phone Number">
                                                    <span class="error-message" id="phoneError1"></span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                            <select class="form-control rounded border-white mb-3 form-input form-control" id="city" name="city"  required="" style="display: block">
                                            <option value="" selected="" value="">Select a Service</option>
                                            <option value="cloud-consulting">Cloud Consulting Services</option>
                                            <option value="cloud-migration">Cloud Migration</option>
                                            <option value="cloud-landing-zone">Cloud Landing Zone Service</option>
                                            <option value="DevOps Services">DevOps Services</option>
                                            <option value="architecture-services">Architecture Services</option>
                                            <option value="finops-services">FinOps Services</option>
                                            <option value="IT Support">Cloud/IT Support</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group comments">
                                                    <textarea class="rounded border-white mb-3 form-text-area form-control" id="aboutProject" name="aboutProject"
                                                        placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="text-align:center;">
                                                <button type="submit" name="submit" id="submit1"
                                                    class="thm-btn contact-form-button">
                                                    <span class="txt">Submit</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

			<button class="btn-close-popup"
					onclick="togglePopup()">
			x
			</button>
		</div>
	</div>

<!-- POPUP Model End -->

    <!-- Start 404 
    ============================================= -->
    <div class="thank-page-area bg-gray text-center" style="padding:150px 0 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>404</h1>
                    <h2>Sorry Page Was Not Found!</h2>
                    <p>The page you are looking for doesn't exist or another error occurred.<br>Go back, or head over to
                        domain.com to choose a new direction.</p>
                    <a class="btn btn-theme effect btn-md" href="/">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->


     <!-- Start Footer 
    ============================================= -->
    <footer class="footer-sec">
        <div class="section-overlay sec-pt-20">
            <div class="w-full px-4 md:px-5 lg:px-8 py-5 md:py-8">
                <div class="flex flex-row items-center justify-center gap-3">
                    <div class="col-lg-8">
                        <a href="javascript:;">
                            <h2 class="sec-title text-3xl font-bold text-white">Get Cloud: Drive Loud! Connect with
                                our <br><span class="text-acent italic">Cloud IT Consultation Experts</span> Today!</h2>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a class="thm-btn btn" onclick="togglePopup()">
                            <span class="txt">Book your free consultation today !!</span>
                        </a>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sx-12 p-0">
                            <hr class="footer-hr">
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center gap-3">
                    <div class="col-lg-8">
                        <div class="ftr-copyright text-white">© Copyright 2024 <span class="highlight1">Dolptec
                                -</span> All Rights Reserved</div>
                    </div>




                    <div class="col-lg-4 gap-4">

                        <span class=" text-white">ICO Number : ZB623235</span>
                        <a href="#" class="p-2 sm:p-3 flex gap-2 items-center text-white">
                            <img class="w-6 md:w-8 h-auto"
                                src="https://dolptec.credtify.com/images/footer-logo-1.png" alt="">

                        </a>
                        <a href="#" class="p-2 sm:p-3 flex gap-2 items-center">
                            <img class="w-6 md:w-8 h-auto"
                                src="https://dolptec.credtify.com/images/footer-logo-2.png" alt="">

                        </a>
                    </div>
                </div>



            </div>
        </div>
    </footer>

 <!-- load all JS -->
    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sidebar-content.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/countfect.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/noframework.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/progressBar.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/tab-section.js') }}"></script>
    <script src="{{ asset('assets/js/download-brouchure.js') }}"></script>
    
</body>

</html>