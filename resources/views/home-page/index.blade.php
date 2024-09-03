<!-- load all css -->
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>DolpTec Cloud Consulting Services | cloud solutions &amp; services</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
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

    <!--Testimonial css-->

    <link href="{{ asset('assets/css/tab-section.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabs-sec-new.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/accordian.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/our-technology.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/pop-up-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/download-now.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Georgia&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P4SHTSSZ');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body class="body-dark-bg">
    <!-- POPUP Model -->
    <div id="popupOverlay" class="overlay-container">
        <div class="popup-box">

            <form action="{{ route('enquires') }}" method="POST" class="contact-form1" id="home-enquire-form">
                <p class="title">Book your free consultation today!!</p>
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

                <!-- Display validation errors for each form field -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control rounded border-white mb-3 form-input form-control" id="name"
                                name="name" placeholder="Name" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control rounded border-white mb-3 form-input form-control" id="email1"
                                name="email" placeholder="Corporate Email ID" type="email" required>
                            <span class="error-message" id="emailError1"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control rounded border-white mb-3 form-input form-control m-width"
                                type="tel" id="phone1" name="phone" placeholder="Phone Number"
                                pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
                            <span class="error-message" id="phoneError1"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">


                        <div class="form-group">
                            <select
                                class="form-control rounded border-white mb-3 form-input form-control @error('city') is-invalid @enderror"
                                id="city" name="city"
                                oninvalid="this.setCustomValidity('Please select an service in the list')"
                                oninput="setCustomValidity('')" required>
                                <option value="">Select a Service</option>
                                <option value="cloud-consulting">Cloud Consulting Services</option>
                                <option value="cloud-migration">Cloud Migration</option>
                                <option value="cloud-landing-zone">Cloud Landing Zone Service</option>
                                <option value="DevOps Services">DevOps Services</option>
                                <option value="architecture-services">Architecture Services</option>
                                <option value="finops-services">FinOps Services</option>
                                <option value="IT Support">Cloud/IT Support</option>
                            </select>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                    </div>
                    <div class="col-lg-12">
                        <div class="form-group comments">
                            <textarea class="rounded border-white mb-3 form-text-area form-control" id="aboutProject" name="aboutProject"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <button type="submit" name="submit" id="submit1" class="thm-btn contact-form-button">
                            <span class="txt">Submit</span>
                        </button>
                    </div>
                </div>
            </form>

            <button class="btn-close-popup" onclick="togglePopup()">
                x
            </button>
        </div>
    </div>

    <!-- POPUP Model End -->



    <!-- preloader -->
    <!-- <div id="preloader">
        <div id="loader"></div>
    </div> -->
    <!-- back to top start -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    <div class="fix">
        <!--Start Main Header One -->
        <header class="main-header main-header-one">
            <div id="sticky-header" class="menu-area">
                <div class="main-header-one__outer">
                    <div class="main-header-one__right">
                        <div class="container-fuild">
                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler align-items-center">
                                    <div class="site-ligo">
                                        <a href="javascript:;">
                                            <img src="{{ asset('assets/images/logo/logo.png') }}"
                                                alt="site-logo"></a>
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
                                                                        <i class="fa-regular fa-envelope"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="mailto:hello@dolptec.com"
                                                                            onclick="trackClick('email')">Hello@dolptec.com</a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <div class="icon-box">
                                                                        <i class="flaticon-call"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="tel:+442081356162"
                                                                            onclick="trackClick('phone')">+44 20 8135
                                                                            6162</a>
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
                                                        <a href="javascript:;"><img
                                                                src="{{ asset('assets/images/logo/logo.png') }}"
                                                                alt="site-logo"></a>
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
                                                                <a
                                                                    href="#our-approach
                                                                ">Our
                                                                    Approach</a>
                                                            </li>

                                                            <li class="menu-item"><a href="#resources">Resources</a>
                                                            </li>

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
                                                            <span class="txt">Get a Free Consultation</span>
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
                                        <a href="javascript:;">
                                            <img src="{{ asset('assets/images/logo/logo.png') }}"
                                                alt="site-logo"></a>
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

        <!-- hero section start -->
        <section class="hero-sec bg-green hero-ptb">
            <div class="container">
                <div id="banner-sec" class="row">
                    <div id="banner-txt" class="col-lg-6">
                        <div class="hero-content">
                            <!--<span class="sec-sub-title ">IT solutions for the new era</span>-->
                            <h1 class="hero-title text-white">Cloud Consulting Services</h1>
                            <p class="text-white sub-title">From initial cloud exploration to long-term optimization,
                                our expert consultants deliver tailored solutions that ensure your cloud transformation
                                is seamless and successful.
                            </p>
                            <div class="hero-btn-area d-flex align-items-center">
                                <div class="hero-logo">
                                    <img src="{{ asset('assets/images/client-logo/7.png') }}" />
                                </div>
                                <div class="hero-logo">
                                    <img src="{{ asset('assets/images/client-logo/10.png') }}" />
                                </div>
                                <div class="hero-logo">
                                    <img src="{{ asset('assets/images/client-logo/9.png') }}" />
                                </div>
                            </div>
                            <!-- <div class="hero-team-info d-flex align-items-center">
                                <div class="team-members d-flex">
                                    <div class="team-members-img">
                                        <img src="{{ asset('assets/images/team/team-info1.png') }}" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="{{ asset('assets/images/team/team-info2.png') }}" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="{{ asset('assets/images/team/team-info3.png') }}" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="{{ asset('assets/images/team/team-info4.png') }}" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="{{ asset('assets/images/team/team-info5.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="total-team-count">
                                    <span>36k+</span>
                                    <p>Team Members</p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-images hero-style1">
                            <div class="hero-feature-img feature-one br-style1">
                                <form action="{{ route('enquires') }}" method="POST" class="contact-form"
                                    id="home-enquire-form">
                                    <p class="title">Start Your Cloud Transformation Today!</p>
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

                                    <!-- Display validation errors for each form field -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control rounded border-white mb-3 form-input form-control"
                                                    id="name" name="name" placeholder="Name" type="text"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control rounded border-white mb-3 form-input form-control"
                                                    id="email1" name="email" placeholder="Corporate Email ID"
                                                    type="email" required>
                                                <span class="error-message" id="emailError1"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control rounded border-white mb-3 form-input form-control m-width"
                                                    type="tel" id="phone1" name="phone"
                                                    placeholder="Phone Number" pattern="[0-9]{10}"
                                                    title="Please enter a valid 10-digit phone number" required>
                                                <span class="error-message" id="phoneError1"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">


                                            <div class="form-group">
                                                <select
                                                    class="form-control rounded border-white mb-3 form-input form-control @error('city') is-invalid @enderror"
                                                    id="city" name="city"
                                                    oninvalid="this.setCustomValidity('Please select an service in the list')"
                                                    oninput="setCustomValidity('')" required>
                                                    <option value="">Select a Service</option>
                                                    <option value="cloud-consulting">Cloud Consulting Services</option>
                                                    <option value="cloud-migration">Cloud Migration</option>
                                                    <option value="cloud-landing-zone">Cloud Landing Zone Service
                                                    </option>
                                                    <option value="DevOps Services">DevOps Services</option>
                                                    <option value="architecture-services">Architecture Services
                                                    </option>
                                                    <option value="finops-services">FinOps Services</option>
                                                    <option value="IT Support">Cloud/IT Support</option>
                                                </select>
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                                <span class="txt">Get a Free Consultation</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="hero-info-img feature-two">
                                <!-- <img src="{{ asset('assets/images/hero/hero-info-img1.png') }}" alt="hero-img" /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->


        <!-- service section start -->
        <section class="sec-ptb" id="our-services">

            <div class="container">
                <div class="sec-content text-center">
                    <!--<h6 class="sec-sub-title">Discover Our Services</h6>-->
                    <h2 class="sec-title">Achieve Cloud Success with Our Expert Services</h2>
                    <p class="sec-text">
                        Tailored Cloud Solutions for Your Unique Business Needs.
                    </p>

                </div>
                <div class="row">
                    <div class="col-md-4 text-center" style="opacity: 1;">
                        <div class="content-box" style="border-bottom: 5px solid #f66;">
                            <img alt="Real-time information" title="Real-time information"
                                class="finbyz-icon img-responsive"
                                src="{{ asset('assets/images/dev-icon/Partnership_cherry.svg') }}">
                            <h3 class="content-box-title">Consulting Services</h3>
                            <p class="content-box-sub">
                                A cloud strategy that aligns with your business goals. We evaluate your current
                                infrastructure to find key opportunities for effective cloud adoption &
                                transformation, maximizing the benefits of cloud technology </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-peach btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="opacity: 1;">
                        <div class="content-box text-center" style="border-bottom: 5px solid #23abb4;">
                            <img alt="Higher Productivity" title="Higher Productivity"
                                class="finbyz-icon img-responsive"
                                src="{{ asset('assets/images/dev-icon/Tech_teal.svg') }}">
                            <h3 class="content-box-title">Cloud Arcitecture/Migration Services</h3>
                            <p class="content-box-sub">
                                Ensure a smooth transition to the cloud by thoroughly planning and migrating your
                                applications, data, or entire infrastructure while minimizing downtime.

                            </p><br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-cloud-blue btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="opacity: 1;">
                        <div class="content-box text-center" style="border-bottom: 5px solid #f69301;">
                            <img alt="Improved Collaboration" title="Improved Collaboration"
                                class="finbyz-icon img-responsive"
                                src="{{ asset('assets/images/dev-icon/Portal_orange.svg') }}">
                            <h3 class="content-box-title">DevOps Services
                            </h3>
                            <p class="content-box-sub">
                                Enhance your cloud operations' efficiency by integrating development and operations
                                practices to automate processes, streamline workflows, and expedite software delivery.

                            </p><br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-orange btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="opacity: 1;">
                        <div class="content-box text-center" style="border-bottom: 5px solid #10cbff;">
                            <img alt="Improved Collaboration" title="Improved Collaboration"
                                class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/5.svg') }}">
                            <h3 class="content-box-title">Finops Services
                            </h3>
                            <p class="content-box-sub">
                                Evaluate usage patterns, uncover cost-saving opportunities, and apply cost management
                                strategies to maximize the return on investment (ROI) of your cloud resources without
                                sacrificing performance.
                            </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-sky-blue btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="opacity: 1;">
                        <div class="content-box text-center" style="border-bottom: 5px solid #e039cc;">
                            <img alt="Improved Collaboration" title="Improved Collaboration"
                                class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/6.svg') }}">
                            <h3 class="content-box-title"> Cloud Landing Zone Enviornment
                            </h3>
                            <p class="content-box-sub">
                                A secure, scalable, and efficient cloud foundation to simplify cloud adoption and
                                maximize benefits. Build a robust, secure, and cost-efficient cloud environment to
                                support business needs.
                            </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-pink btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="opacity: 1;">
                        <div class="content-box text-center" style="border-bottom: 5px solid #9c2eed;">
                            <img alt="Improved Collaboration" title="Improved Collaboration"
                                class="finbyz-icon img-responsive"
                                src="{{ asset('assets/images/dev-icon/Secure_Purple.svg') }}">
                            <h3 class="content-box-title"> IT/Cloud Management
                            </h3>
                            <p class="content-box-sub">
                                Our Cloud Management Services provide the tools and expertise you need to effectively
                                manage your cloud resources, ensuring they deliver maximum value to your business.
                            </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-box">
                                        <a class="thm-btn-purple btn" onclick="togglePopup()">
                                            <span class="txt">Let's Connect</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </section>

        <!-- services section end -->


        <section class="service-sec sec-pb technology-desk">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="sec-content">

                            <h2 class="sec-title text-center">Technologies Used By Our Engineers </h2>


                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/ansible.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/docker.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/java.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/kubernetes.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/microsoft.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/powershell.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/pulumi.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/python.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo//snyk (2).png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/terraform.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/non-native-logo/vault.png') }}" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/1.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/2.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/3.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/4.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/5.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/6.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/7.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('assets/images/native-logo/8.png') }}" height="100" width="250"
                                alt="" />
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <!-- project section start -->
        <section class="project-sec desk-approch" id="our-approach">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-content text-center">

                            <h2 class="sec-title">Our Approach to Delivering Cloud Success</h2>
                            <p class="sec-text">We follow a structured, results-driven process, ensuring your cloud
                                journey is seamless, efficient, and tailored to meet your business goals.
                            </p>

                        </div>
                    </div>

                </div>



            </div>
        </section>



        <section class="sec-pb container">
            <img id="dolptec-gif" width="100%" src="{{ asset('assets/images/our-approch.gif') }}" />

            <div class="row" id="dolptec-gif">
                <div class="col-md-12 text-center">
                    <div class="btn-box cta-btn">
                        <a class="thm-btn btn" onclick="togglePopup()">
                            <span class="txt">Get a Free Consultation</span>
                        </a>
                    </div>
                </div>
            </div>


        </section>


        <section class="container mobile-approch">
            <div class="row">
                <div class="sec-content text-center">

                    <h2 class="sec-title">Our Approach to Delivering Cloud Success</h2>
                    <p class="sec-text">We follow a structured, results-driven process, ensuring your cloud journey is
                        seamless, efficient, and tailored to meet your business goals.
                    </p>
                </div>

                <div class="col-md-3">
                    <h3 class="content-box-title">Consult</h3>
                    <img src="assets/images/1.gif" />
                    <p class="content-box-sub">
                        We begin by assessing your unique goals and crafting solutions that align with your vision.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="content-box-title">Discover</h3>
                    <img src="assets/images/2.gif" />
                    <p class="content-box-sub">
                        Next, we design a strategic plan and reimagine workflows to optimize processes and drive
                        innovation.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="content-box-title">Impact</h3>
                    <img src="assets/images/3.gif" />
                    <p class="content-box-sub">
                        We then implement the strategy, ensuring a seamless launch and robust support to keep your
                        business on track.
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="content-box-title">Deliver</h3>
                    <img src="assets/images/4.gif" />
                    <p class="content-box-sub">
                        Finally, we provide comprehensive, end-to-end support, guiding you through every step to ensure
                        sustainable success.
                    </p>
                </div>
            </div>
            <div class="row" id="">
                <div class="col-md-12 text-center">
                    <div class="btn-box cta-btn">
                        <a class="thm-btn btn" onclick="togglePopup()">
                            <span class="txt">Get a Free Consultation</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="sec-pb">

            <div class="txt-wrapers ptb-5">

                <h2 class="highlight">With <span class="highlight1">DolpTec</span></h2>

              </div>
              <div class="arrow-right">
                <img src="asset('assets/images/right.png"/>
              </div>
        </section> -->



        <!-- project section start -->

        <!--Commitment  section-->
        <section class="service-details-content sec-pb">
            <div class="container">
                <div class="row">
                  

                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="sec-content">

                            <h2 class="sec-title text-center" style="margin-bottom: 20px;">Our Commitment to Your Cloud Success </h2>


                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img
                                        src="https://dolptec.credtify.com/assets/images/target.png">
                                    <h3 class="comm-title">Expert Cloud Strategies:</h3>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="comm-desc">
                                    <p>We develop and implement robust cloud strategies, ensuring seamless migrations to
                                        AWS, Azure, and Google Cloud with end-to-end support for lasting success.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img src="{{ asset('assets/images/innovation.png') }}" />
                                    <h3 class="comm-title">Innovative Digital Transformation:</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="comm-desc">
                                    <p>Leverage advanced technologies like AI, IoT, and blockchain to drive innovation
                                        and growth, transforming your business with cutting-edge solutions.</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img src="{{ asset('assets/images/collaboration.png') }}" />
                                    <h3 class="comm-title">Enhanced Collaboratio:</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="comm-desc">
                                    <p>Empower your workforce with secure, cloud-based tools that boost productivity and
                                        foster seamless collaboration.</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img src="{{ asset('assets/images/guarantee.png') }}" />
                                    <h3 class="comm-title">Our Satisfaction Guarantee:</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="comm-desc">
                                    <p>At Dolptec, we’re committed to exceeding your expectations with tangible results.
                                        Let’s work together to unlock your organization’s full potential.
                                    </p>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-lg-6">



                        <div class="sec-img-one">
                            <img class="comm-gif" src="{{ asset('assets/images/Commitment.gif') }}"
                                alt="about-img" />
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img src="{{ asset('assets/images/secure-document.png') }}" />
                                    <h3 class="comm-title">Comprehensive Security and Compliance:</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="comm-desc">
                                    <p>Protect your digital assets with our strong cybersecurity measures and compliance
                                        services, safeguarding your data and meeting regulatory standards.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="comm-icon"><img
                                        src="{{ asset('assets/images/big-data-analytics.png') }}" />
                                    <h3 class="comm-title">Data-Driven Insights:</h3>
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="comm-desc">
                                    <p>Harness the power of data through advanced analytics and machine learning,
                                        enabling strategic decision-making and valuable insights.</p>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>





                <div class="row" id="">
                    <div class="col-md-12 text-center">
                        <div class="btn-box cta-btn">
                            <a class="thm-btn btn" onclick="togglePopup()">
                                <span class="txt">Get a Free Consultation</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Commitment  section end-->


        <!-- business section start -->
        {{-- <section class="service-details-content sec-ptb bg-light-greem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-content h-100 d-flex justify-content-center flex-column">

                            <h2 class="sec-title">How can our cloud consulting team support you?</h2>
                            <p>Navigating the world of cloud computing can be overwhelming, especially if you're unsure
                                where to start. Our team of cloud consultants in the UK are ready to answer all your
                                questions.</p>
                            <!-- <p class="sec-text">
                                    Solve Business Problems And Automate Workflows With Artificial Intelligence-Based Solutions. Unlock The Hidden Power Of The Data You Already Have And Hand.
                                </p> -->
                            <!-- <div class="progressbar-tooltip">
                                    <div class="ab-progress" data-progress data-tooltip="true" data-value="80" data-title="Productivity"></div>
                                    <div class="ab-progress" data-progress data-tooltip="true" data-value="75" data-title="Digital Marketing"></div>
                                    <div class="ab-progress" data-progress data-tooltip="true" data-value="90" data-title="Technology"></div>
                                </div> -->
                            <div class="info-part mb-0">
                                <ul class="info-list">

                                    <li>How can I get buy-in from my stakeholder for Cloud ?</li>
                                    <li>What benefits can the cloud bring to my business ?</li>
                                    <li>Where should I start on my cloud journey &amp; which cloud to select ?</li>
                                    <li>Which applications should I migrate first and how much time will it take ?</li>
                                    <li>When will I see a return on this cloud investment ?</li>
                                    <li>What's the best way to deliver, manage and support my infrastructure ?</li>
                                    <li>Which technology would improve collaboration between my teams ?</li>
                                    <li>How can I optimise performance and reduce the cost of my cloud setup?</li>
                                </ul>
                                <div class="sec-btn">
                                    <a class="thm-btn" href="javascript:;" onclick="togglePopup()"><span
                                            class="txt">Speak with us</span></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 tab-col-gap">
                        <div class="sec-images wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="sec-img-one">
                                <img src="{{ asset('assets/images/about/about03.png') }}" alt="about-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- business section start -->
        <!-- company quick info start -->

        <!-- company quick info end -->
        <!-- pricing section start -->
        <section class="pricing-sec sec-pb">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="sec-content text-center">
                            <!-- <h6 class="sec-sub-title">Our Pricing</h6> -->
                            <h2 class="sec-title">Partnerships</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="single-pricing wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <!-- single-pricing 1 --
                                <div class="pricing-badge text-center">
                                    <span class="title">Basic Plan</span>
                                    <div class="pricing-price">
                                        <span class="currency">$</span>
                                        <h3 class="price">110<span>/Per Month</span></h3>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class='btn' href='pricing_plan.html'>Discover More</a>
                                    </div>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Weekly Reporting</li>
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Unlimited users</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single-pricing popular wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <!-- single-pricing 2 --
                                <div class="pricing-badge text-center">
                                    <span class="title">Popular</span>
                                    <div class="pricing-price">
                                        <span class="currency">$</span>
                                        <h3 class="price">210<span>/Per Month</span></h3>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class='btn' href='pricing_plan.html'>Discover More</a>
                                    </div>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Weekly Reporting</li>
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Unlimited users</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single-pricing wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <!-- single-pricing 2 --
                                <div class="pricing-badge text-center">
                                    <span class="title">Custom</span>
                                    <div class="pricing-price">
                                        <span class="currency">$</span>
                                        <h3 class="price">310<span>/Per Month</span></h3>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class='btn' href='pricing_plan.html'>Discover More</a>
                                    </div>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Weekly Reporting</li>
                                        <li>Key Words Optimized</li>
                                        <li>Top 10 Ranking Guarantee</li>
                                        <li>Unlimited users</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                <div class="section-content center">

                    <div class="row align-items-center justify-content-center  wow fadeInDown"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInDown;">
                        <!-- Column 1 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/1.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/2.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/3.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 4 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/4.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/5.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>

                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/17.png') }}" alt="Image"
                                    style="width: 85%;">
                            </div>
                        </div>



                    </div>


                    <div class="row align-items-center justify-content-center  wow fadeInDown"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInDown;">

                        <!-- Column 7 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/6.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 8 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/7.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 9 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/8.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 10 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/11.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 11 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/10.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 12 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/9.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 13 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/12.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 14 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/13.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 15 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/14.png') }}" alt="Image">
                            </div>
                        </div>

                        <!-- Column 16 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/15.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="row" id="">
                        <div class="col-md-12 text-center">
                            <div class="btn-box cta-btn">
                                <a class="thm-btn btn" onclick="togglePopup()">
                                    <span class="txt">Get a Free Consultation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial section end -->


        <!-- Testimonial section -->
        <!-- carousel -->
        <!-- <section class="testimonial_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about_content">
                            <div class="background_layer"></div>
                            <div class="layer_content">
                                <div class="sec-content mb-5">
                                    <h6 class="sec-sub-title"><span class="highlight1">DolpTec</span> Testimonials</h6>
                                    <h2 class="sec-title text-white">What our customers say about us</h2>
                                    <p class="text-white">Our mission is to empower organisations of all sizes to
                                        navigate the
                                        complexities of the digital cloud age with confidence and agility.<br>
                                        Let our expertise unlock your potential.
                                    </p>
                                </div>

                                <a href="#">Talk to us !<i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="testimonial_box">
                            <div class="testimonial_container">
                                <div class="background_layer"></div>
                                <div class="layer_content">
                                    <div class="testimonial_owlCarousel owl-carousel">
                                        <div class="testimonials">
                                            <div class="testimonial_content">
                                 <div class="testimonial_caption">
                                    <h6>Vineet Chugh </h6>
                                    <span>DC Migration, CTO - AKDN </span><br>
                                                    <!--<div class="aon-testmo-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>--
                                                    <a href="https://www.linkedin.com/in/vineet-chugh-b6a92846/">
                                                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="34" height="34" viewBox="0 0 48 48">
<path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
</svg>
                                               </a>
                                                </div>
                                                <p>It was a pleasure working with you Azeem, on the DC to cloud migration project. Although it was a short engagement, the discovery and roadmap exercise supported by you, helped us lay a robust foundation to meet our cloud migration objective. Wish you all the best in your new venture, and happy to provide recommendations if needed.</p>
                                                
                                               
                                                   
                                            </div>
                                            <div class="images_box">
                                                <div class="testimonial_img">
                                                    <img class="img-center" src="{{ asset('assets/images/team/team1.png') }}" alt="images not found">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->



        <section class="sec-pb testimonial-area text-center">
            <div class="container-lg">
                <div class="row1">
                    <div class="sec-content">
                        <p class="sec-sub-title">Testimonials</p>

                        <h2 class="sec-title">What our customers say about us</h2>
                        <p class="">Our mission is to empower organisations of all sizes to
                            navigate the
                            complexities of the digital cloud age with confidence and agility.<br>
                            Let our expertise unlock your potential.
                        </p>
                    </div>

                    <div class="testimonial-content owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <div class="round-1 round"></div>
                            <div class="round-2 round"></div>
                            <p>It was a pleasure working with you Azeem, on the DC to cloud migration project. Although
                                it was a short engagement, the discovery and roadmap exercise supported by you, helped
                                us lay a robust foundation to meet our cloud migration objective. Wish you all the best
                                in your new venture, and happy to provide recommendations if needed.</p>
                            <div class="client-info">
                                <div class="client-video">
                                    <a href="#"><img src="https://dolptec.uk/assets/images/team/team1.png"
                                            alt=""></a>
                                </div>
                                <div class="client-details">
                                    <p>Vineet Chugh </p>
                                    <span>DC Migration, CTO - AKDN </span>
                                </div>
                            </div>

                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <div class="round-1 round"></div>
                            <div class="round-2 round"></div>
                            <p>Azeem (DolpTec), helped us to get better insights into our cloud cost and usage. The
                                architecture inputs and the roadmap for the new transformation project, gave the team
                                better understanding and clarity on the scale of transformation work. Thanks for the
                                support.</p>
                            <div class="client-info">
                                <div class="client-video">
                                    <a href="#"><img src="https://dolptec.uk/assets/images/team/team2.png"
                                            alt=""></a>
                                </div>
                                <div class="client-details">
                                    <p>Chris H</p>
                                    <span>Product Owner, University admission service - UCAS</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </section>



        <!-- Testimonials End -->

        <!-- blog section start -->
        {{-- <section class="blog-sec sec-ptb" id="resources">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-content">
                            <p class="sec-sub-title">Our Resources</p>
                            <h2 class="sec-title">Checkout the Latest Information on Cloud Migration and Industry
                                Trends. </h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-sidebar-box">
                                <ul>
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="500ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <!-- blog sidebar box item 1 -->
                                        <div class="img-box">
                                            <img src="https://dolptec.credtify.com/assets/images/blog/blog-s1.png"
                                                alt="blog">
                                        </div>
                                        <div class="content-box">

                                            <div class="title-box">
                                                <h3><a href="javascript:;">AWS - Build &amp; run applications</a></h3>
                                                <p>The cloud provides a platform on which businesses can innovate
                                                    faster.
                                                    According to the 2022 Forrester State of the Cloud in North America
                                                    report,
                                                    94% of US enterprises are using cloud.<span
                                                        style="visibility: hidden;">cloud

                                                    </span></p>

                                            </div>
                                            <div class="btn-box">

                                                <button class="btn thm-btn"
                                                    onclick="openForm('aws-ebook-build-run-applications.pdf')"><span
                                                        class="txt">Download E-book</span></button>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="500ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <!-- blog sidebar box item 1 -->
                                        <div class="img-box">
                                            <img src="https://dolptec.credtify.com/assets/images/blog/blog-s3.png"
                                                alt="blog">
                                        </div>
                                        <div class="content-box">

                                            <div class="title-box">
                                                <h3><a href="javascript:;">Google Cloud - Make your journey to the
                                                        cloud successful and cost effective<p></p>
                                                    </a></h3>
                                                <p> with guidance from Google Cloud’s ebook. It includes:

                                                    - Critical considerations for a seamless migration
                                                    - Questions to help you understand your existing environment
                                                    - Tips for maximizing the ROI of your move
                                                    - Examples of successful migrations from companies like Twitter,
                                                    Evernote, and Etsy</p>
                                            </div>
                                            <div class="btn-box">

                                                <button class="btn thm-btn"
                                                    onclick="openForm('your_journey_to_the_cloud_google_cloud_smb.pdf')"><span
                                                        class="txt">Download E-book</span></button>

                                            </div>
                                        </div>
                                    </li>

                                </ul>


                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="blog-sidebar-box">
                                <ul>
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="700ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 700ms; animation-name: fadeInUp;">
                                        <!-- blog sidebar box item 2 -->
                                        <div class="img-box">
                                            <img src="https://dolptec.credtify.com/assets/images/blog/blog-s2.png"
                                                alt="blog">
                                        </div>
                                        <div class="content-box">

                                            <div class="title-box">
                                                <h3><a href="javascript:;">AWS - Unlock Your Growth Potential with
                                                        Migration to Cloud</a></h3>
                                                <p>This eBook is intended to help decision-makers in small and
                                                    medium-sized businesses understand the benefits of migrating data
                                                    and applications to the cloud.</p>

                                            </div>
                                            <div class="btn-box">

                                                <button class="btn thm-btn"
                                                    onclick="openForm('Migrate-to-cloud.pdf')"><span
                                                        class="txt">Download E-book</span></button>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="700ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 700ms; animation-name: fadeInUp;">
                                        <!-- blog sidebar box item 2 -->
                                        <div class="img-box">
                                            <img src="https://dolptec.credtify.com/assets/images/blog/blog-s4.png"
                                                alt="blog">
                                        </div>
                                        <div class="content-box">
                                            <!-- <div class="meta-box">
                                                <ul class="meta-info d-flex">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="flaticon-user"></i>
                                                        </div>
                                                        <span><a href="#">Admin</a></span>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="flaticon-calendar"></i>
                                                        </div>
                                                        <span><a href="#">November 30, 2023</a></span>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="title-box">
                                                <h3><a href="javascript:;">Microsoft Azure - Simplifying cloud
                                                        migration and modernization journey with Microsoft Azure


                                                    </a></h3>
                                                <p>This eBook is intended to help decision-makers in small and
                                                    medium-sized businesses understand the benefits of migrating data
                                                    and applications to the cloud.</p>

                                            </div>
                                            <div class="btn-box">

                                                <button class="btn thm-btn"
                                                    onclick="openForm('SMB - PMC - Ebook - Simplify Cloud Migration and Modernization_SEP.pdf')"><span
                                                        class="txt">Download E-book</span></button>
                                            </div>
                                        </div>
                                    </li>

                                </ul>


                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section> --}}
        <!-- blog section start -->

        <!-- <section>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"><button class="thm-btn btn" id="download-brochure">
                <span class="txt">download Brochure</span>
            </button></div>
            <div class="col-lg-4"></div>
        </div>
       </section> -->


        <!-- footer start
        <footer class="footer-sec">
            <div class="section-overlay sec-pt">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xl-8">
                            <div class="footer-widget">

                                <div class="sec-content mb-8">

                                    <h4 class="sec-title text-white">Get Cloud: Drive Loud! Connect with our<br>
                                        Cloud IT Consultation Experts Today!</h4>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-xl-4">
                            <div class="footer-widget">
                                <a class="thm-btn" href="about.html">
                                    <span class="txt">Book your free consultation today !!</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-1 text-center">
                            <img class="footer-two-img" src="assets/images/footer/footer-logo-1.png"
                                alt="UK Cyber Security - ethical-declaration-badge">

                        </div>
                        <div class="col-lg-3">
                            <p class="text-white text-center"> ICO Number : ZB623235</p>

                        </div>
                        <div class="col-lg-1 text-center">
                            <img class="footer-two-img" src="assets/images/footer/footer-logo-2.png"
                                alt="ico_registered">

                        </div>
                        <div class="col-lg-3"></div>



                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sx-12 p-0">
                            <hr class="footer-hr" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row footer-copyright">
                        <div class="col">
                            <div class="footer-copyright-text text-center">
                                <p class="mb-0">© <a
                                        href="https://themeforest.net/user/mirrortheme/portfolio">MirrorTheme</a> 2024.
                                    All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>-->

        <footer class="footer-sec">
            <div class="section-overlay sec-pt-20">
                <div class="w-full px-4 md:px-5 lg:px-8 py-5 md:py-8">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-9 sec-content text-white">
                            <a href="javascript:;">
                                <h2 class="sec-title text-3xl font-bold text-white ">Unlock the Full Potential of Your
                                    Cloud Strategy
                                </h2>
                                <p class="sec-text text-white">Join hands with us to experience a holistic approach to cloud
                                    that covers everything from adoption and provisioning to strategy, migration, and
                                    optimization.
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 text-center">
                            <a class="thm-btn btn" onclick="togglePopup()">
                                <span class="txt">Get a Free Consultation</span>
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

                    <div id="footer-second-row" class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-8">
                            <div class="ftr-copyright text-white">© Copyright <span class="highlight1">DolpTec</span>
                                All Rights Reserved</div>
                        </div>




                        <div class="col-lg-4 gap-4">

                            <span class=" text-white">ICO Number : ZB623235</span>
                            <a href="#" class="p-2 sm:p-3 flex gap-2 items-center text-white">


                                <img src="{{ asset('assets/images/footer/footer-logo-1.png') }}"
                                    class="w-6 md:w-8 h-auto" alt="">

                            </a>
                            <a href="#" class="p-2 sm:p-3 flex gap-2 items-center">
                                <img src="{{ asset('assets/images/footer/footer-logo-2.png') }}"
                                    class="w-6 md:w-8 h-auto" alt="">

                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </footer>
    </div>




    <!-- Trigger/Open The Popup -->


    <!-- The Popup -->
    <!-- The Popup -->


    {{-- <div class="container">
    <h1>Download PDFs</h1>
    <div class="submit-button-wrapper">
        <button class="btn thm-btn" onclick="openForm('aws-ebook-build-run-applications.pdf')">Download Brochure 1</button>
        <button class="btn thm-btn" onclick="openForm('Migrate-to-cloud.pdf')">Download Brochure 2</button>
        <button class="btn thm-btn" onclick="openForm('your_journey_to_the_cloud_google_cloud_smb.pdf')">Download Brochure3</button>
        <button class="btn thm-btn" onclick="openForm('SMB - PMC - Ebook - Simplify Cloud Migration and Modernization_SEP.pdf')">Download Brochure 4</button>

    </div>
</div> --}}


    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <form action="{{ route('downloadPdf') }}" method="POST" class="contact-form1"
                id="home-enquire-form1">
                {!! csrf_field() !!}
                <p class="title">Fill Your Information to Download E-book</p>
                <div>
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name"
                        name="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" class="form-control rounded border-white mb-3 form-input" name="email"
                        placeholder="Email" required>
                </div>
                <div>
                    <input type="tel" class="form-control rounded border-white mb-3 form-input" name="phone"
                        placeholder="Phone" required>
                </div>
                <input type="hidden" name="pdf_file" id="pdf_file">
                <div class="submit-button-wrapper">
                    <button type="submit" class="btn thm-btn"><span class="txt">Download</span></button>
                </div>
            </form>
        </div>
    </div>



    <script>
        function openForm(pdfFile) {
            document.getElementById('pdf_file').value = pdfFile;
            document.getElementById('popup').style.display = 'block';
        }

        document.getElementsByClassName('close')[0].onclick = function() {
            document.getElementById('popup').style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == document.getElementById('popup')) {
                document.getElementById('popup').style.display = 'none';
            }
        };

        document.getElementById('home-enquire-form1').onsubmit = function(event) {
            event.preventDefault(); // Prevent the default form submission

            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true; // Disable the submit button to prevent multiple clicks

            // Show a loading indicator or change button text to indicate submission is in progress
            // Example: submitButton.innerText = 'Submitting...';

            const formData = new FormData(this);

            fetch('{{ route('downloadPdf') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.pdf_url) {
                        // Start the file download
                        const link = document.createElement('a');
                        link.href = data.pdf_url;
                        link.download = data.pdf_url.split('/').pop();
                        document.body.appendChild(link);
                        link.click();
                        link.remove();

                        // Show confirmation message or visual indication of download success
                        // Example: toastr.success('PDF Downloaded Successfully');

                        // Delayed redirect to thank you page after download prompt appears
                        setTimeout(function() {
                            window.location.href = "{{ route('thankYou') }}";
                        }, 1000); // Adjust the timeout as needed (1000 milliseconds = 1 second)
                    } else if (data.error) {
                        // Handle errors appropriately
                        alert(data.error); // Example: Show error message in an alert
                    }

                    // Re-enable the submit button after form submission completes
                    submitButton.disabled = false;

                    // Optionally reset the form or provide further user feedback
                    // Example: submitButton.innerText = 'Submit'; // Reset button text if changed
                })
                .catch(error => {
                    console.error('Error:', error);

                    // Handle network or other errors
                    // Example: show an error message to the user
                    alert('An error occurred while submitting the form. Please try again.');

                    // Re-enable the submit button in case of errors
                    submitButton.disabled = false;

                    // Optionally reset the form or provide further user feedback
                    // Example: submitButton.innerText = 'Submit'; // Reset button text if changed
                });
        };
    </script>


    <!-- load all JS -->
    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-sidebar-content.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/countfect.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/noframework.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/progressBar.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/tab-section.js') }}"></script>
    <script src="{{ asset('assets/js/download-brouchure.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.tabs-nav li').hover(function() {
                var tabId = $(this).find('a').attr('href');

                $('.tabs-nav li').removeClass('active');
                $(this).addClass('active');

                $('.tab-content .tab-pane').removeClass('active');
                $(tabId).addClass('active');
            });
        });
    </script>

    <script>
        function trackClick(type) {
            fetch('/track-click', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    type: type
                })
            });
        }
    </script>

    <script>
        $(".testimonial-content").owlCarousel({
            loop: true,
            items: 1,
            margin: 50,
            dots: true,
            nav: false,
            mouseDrag: true,
            autoplay: false,
            autoplayTimeout: 4000,
            smartSpeed: 800
        });
    </script>

    <style>
        .testimonial-area {
            background: var(--blue);
            position: relative;
            z-index: 2;
        }

        .testimonial-area .owl-carousel {
            /* overflow: hidden; */
            padding: 0 5px;
            margin: 0px 0px;
            padding-right: 40px;
        }

        .testimonial-area .owl-stage-outer {
            padding: 0px 40px;
            margin-left: -44px;
            width: calc(100% + 100px);
        }

        .single-testimonial {
            border: 3px solid #000;
            text-align: center;
            border-radius: 45px;
            position: static;
            z-index: 2;
            background: #fff;
        }

        .single-testimonial p {
            color: #000;
            line-height: 24px;
            padding: 40px 20px 0px;
            padding-bottom: 0px;
            position: relative;
            z-index: 3;
        }

        .single-testimonial::before {
            content: "";
            position: absolute;
            left: -26px;
            top: -35px;
            background: url(https://i.ibb.co/nb8Hjms/quote.png) no-repeat #fff;
            background-size: 60%;
            width: 100px;
            height: 100px;
            transform: rotate(180deg);
            background-position: 34px 15px;
        }

        .single-testimonial::after {
            content: "";
            position: absolute;
            right: -16px;
            bottom: -24px;
            background: url(https://i.ibb.co/nb8Hjms/quote.png) no-repeat #fff;
            background-size: 60%;
            width: 100px;
            height: 100px;
            background-position: 34px 15px;
        }

        .round {
            height: 100%;
            position: absolute;
            z-index: 1;
        }

        .round-1::before {
            content: "";
            position: absolute;
            left: 50px;
            top: -3px;
            width: 50px;
            height: 3px;
            background: #000000;
            border-radius: 30px;
            z-index: 1;
        }

        .round-2::before {
            content: "";
            position: fixed;
            right: 60px;
            bottom: 0px;
            width: 51px;
            height: 3px;
            background: #000;
            border-radius: 30px;
            z-index: 1;
        }

        .round-1::after {
            content: "";
            position: absolute;
            left: -3px;
            top: 48px;
            width: 3px;
            height: 50px;
            background: #000;
            border-radius: 30px;
        }

        .round-2::after {
            content: "";
            position: fixed;
            right: 0px;
            bottom: 61px;
            width: 3px;
            height: 50px;
            background: #000;
            border-radius: 30px;
            z-index: 1;
        }

        .client-video {
            padding-right: 15px;
        }

        .client-info {
            position: relative;
            z-index: 3;
        }

        .client-info a img {
            width: 70px !important;
            height: 70px !important;
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.16);
            font-size: 22px;
        }

        .client-info {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            padding-bottom: 20px;
        }

        .client-info h6 {
            color: #000;
            font-weight: 700;
            font-size: 18px;

        }

        .client-info span {
            display: inline-block;
            color: #000;

        }

        .sec-title.white-title h2 {
            color: #000;
        }

        .owl-dot {
            display: inline-block;
            margin: 5px;
        }

        .owl-dot span {
            display: block;
            width: 12px;
            height: 12px;
            background: #ccc;
            border-radius: 50%;
            margin: 15px 0px;
        }

        .owl-dot.active span {
            background: #000;
        }

        .hero-logo {
            box-shadow: 1px 1px 3px rgb(255 255 255 / 39%);
            margin: 0px 15px 0px 0px;
            background: white;
            padding: 5px 10px;
            border-radius: 0px;
        }

        .cta-btn {
            margin-top: 30px;
        }


        .comm-icon {
            display: flex;
            height: 46px;
            margin-bottom: 10px;
            align-items: center;
            max-width: 100%;
        }

        .comm-icon img {
            width: 40px;
            margin: 0px 10px 0px 0px;
        }

        .comm-desc {
            padding: 0px 0px;
        }

        .comm-gif {
            height: 270px;
            width: 100%;
            margin-bottom: 23px;
        }
    </style>

</body>

</html>
