<!-- load all css -->
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Devops Services | Azure, AWS, Google</title>
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

    <link rel="stylesheet" href="{{ asset('assets/css/styles-dev.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <!--Testimonial css-->
    <link href="{{ asset('assets/css/testimonial.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tab-section.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabs-sec-new.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/accordian.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/our-technology.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/pop-up-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/download-now.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Georgia&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4SHTSSZ');</script>
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
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="name" name="name"
                                                    placeholder="Name" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="email1" name="email"
                                                    placeholder="Corporate Email ID" type="email" required>
                                                <span class="error-message" id="emailError1"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control m-width" type="tel"
                                                    id="phone1" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
                                                <span class="error-message" id="phoneError1"></span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            

                                            <div class="form-group">
                                               <select class="form-control rounded border-white mb-3 form-input form-control @error('city') is-invalid @enderror" id="city" name="city"
                oninvalid="this.setCustomValidity('Please select an service in the list')" oninput="setCustomValidity('')" required>
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
                                                <textarea class="rounded border-white mb-3 form-text-area form-control" id="aboutProject"
                                                    name="aboutProject" placeholder="Message"></textarea>
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
                        <div class="container">
                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler align-items-center">
                                    <div class="site-ligo">
                                         <a href="javascript:;">
                                           <img src="{{ asset('assets/images/logo/logo.png') }}" alt="site-logo"></a>
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
                                                                            <a href="mailto:hello@dolptec.com" onclick="trackClick('email')">hello@dolptec.com</a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="icon-box">
                                                                            <i class="flaticon-call"></i>
                                                                        </div>
                                                                        <p>
                                                                            <a href="tel:+442081356162" onclick="trackClick('phone')">+44 020 8135 6162</a>
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
                                                         <a href="javascript:;"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="site-logo"></a>
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
                                                                <a href="#our-approach
                                                                ">Our Approach</a>
                                                            </li>
                                                            
                                                            <li class="menu-item">
                                                                <a href="#partnerships">Partnerships</a>

                                                            </li>

                                                            <li class="menu-item"><a href="#testimonials">Testimonials</a>
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
                                       <a href="javascript:;">
                                           <img src="{{ asset('assets/images/logo/logo.png') }}" alt="site-logo"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    
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
                           
                            <h1 class="hero-title text-white">DevOps Services
                            </h1>
                            <p class="text-white"><span class="highlight1">DolpTec</span> provides a team of on-demand DevOps engineers to handle your cloud migration, automation, and modernization needs. As a comprehensive cloud service provider, we excel in delivering seamless automation solutions.</p>
                            <div class="hero-team-info d-flex align-items-center">
                                <!-- <div class="team-members d-flex">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-images hero-style1">
                            <div class="hero-feature-img feature-one br-style1">
                                <form action="{{ route('enquires') }}" method="POST" class="contact-form" id="home-enquire-form">
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
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="name" name="name"
                                                    placeholder="Name" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="email1" name="email"
                                                    placeholder="Corporate Email ID" type="email" required>
                                                <span class="error-message" id="emailError1"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control m-width" type="tel"
                                                    id="phone1" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
                                                <span class="error-message" id="phoneError1"></span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            

                                            <div class="form-group">
                                               <select class="form-control rounded border-white mb-3 form-input form-control @error('city') is-invalid @enderror" id="city" name="city"
                oninvalid="this.setCustomValidity('Please select an service in the list')" oninput="setCustomValidity('')" required>
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
                                                <textarea class="rounded border-white mb-3 form-text-area form-control" id="aboutProject"
                                                    name="aboutProject" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" style="text-align:center;">
                                            <button type="submit" name="submit" id="submit1" class="thm-btn contact-form-button">
                                                <span class="txt">Submit</span>
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
            <div class="sec-content">

                <h2 class="sec-title text-center">The <span class="highlight1">DolpTec</span> DevOps Advantage </h2>

                <p class="text-center">Our expert DevOps consultants will analyze your current state and guide you towards building a robust and agile DevOps function.</p>
            </div>
            <div class="container-lg">
                <div class="row">	
                    <div class="col-md-3 text-center" style="opacity: 1;">
                    <div class="content-box">
                    <img alt="Real-time information" title="Real-time information" class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/Partnership_cherry.svg') }}">
                    <h3 class="content-box-title">DevOps Consultancy</h3>
                    <p class="content-box-sub">
                        Our engineers will craft and implement a personalised cloud and application delivery pipeline, identify areas of automation to boost efficiency, optimise security and performance for a smooth and highly productive delivery setup.
                    </p>
                    </div>
                    </div>
                    <div class="col-md-3" style="opacity: 1;">
                        <div class="content-box text-center">
                        <img alt="Higher Productivity" title="Higher Productivity" class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/Tech_teal.svg') }}">
                        <h3 class="content-box-title">DevOps For Azure</h3>
                        <p class="content-box-sub">As a Microsoft Partner, we have the deep expertise to guide you on best practices, ensure optimal configuration, and fortify your Azure security posture.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-3" style="opacity: 1;">
                        <div class="content-box text-center">
                        <img alt="Improved Collaboration" title="Improved Collaboration" class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/Portal_orange.svg') }}">
                        <h3 class="content-box-title"> DevOps For AWS</h3>
                        <p class="content-box-sub">
                            We help you optimize your AWS DevOps tools and develop custom functionalities that seamlessly integrate with your AWS environment, streamlining workflows and empowering your business to achieve its full potential

                        </p>
                        </div>
                    </div>
                    <div class="col-md-3" style="opacity: 1;">
                        <div class="content-box text-center">
                        <img alt="Improved Collaboration" title="Improved Collaboration" class="finbyz-icon img-responsive" src="{{ asset('assets/images/dev-icon/Secure_Purple.svg') }}">
                        <h3 class="content-box-title"> DevOps For Google</h3>
                        <p class="content-box-sub">Our team of Google Cloud certified DevOps engineers helps you unlock the full potential of your cloud journey and ensure best practices while building a robust and scalable DevOps pipeline for your Google Cloud.
                        </p>
                        </div>
                    </div>
                </div>
                </div>
        </section>
            


     

       

        

  
        <!-- services section end -->



       

  

        <!-- project section start -->
        <section class="project-sec desk-approch" id="our-approach">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="grid-container grid-container-gutter">
                            <div class="grid-row grid-row-gutter">
                              <div class="grid-item grid-item-2 media-column">
                                
                              <div class="grid-item grid-item-2 content-column">
                               
                            <h2 class="sec-title">How we collaborate with you.</h2>

                                <p>Through our four-step process, we ensure your business adapts to the changing cloud technological landscape and thrives within it. By providing tailored solutions, strategic planning, seamless implementation, and comprehensive support, with us you can achieve secured success. Partner with us to reform your business with new heights.
                                </p>
                                
                                <div class="accordion-item accordion-item-1" data-item="0">
                                  <h3 class="accordion-header">
                                    <h3>Consult</h3>
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9 8C9 8.28125 8.90625 8.53125 8.71875 8.71875L2.71875 14.7188C2.34375 15.125 1.6875 15.125 1.3125 14.7188C0.90625 14.3438 0.90625 13.6875 1.3125 13.3125L6.59375 8L1.3125 2.71875C0.90625 2.34375 0.90625 1.6875 1.3125 1.3125C1.6875 0.90625 2.34375 0.90625 2.71875 1.3125L8.71875 7.3125C8.90625 7.5 9 7.75 9 8Z" fill="#121E3F"></path>
                                    </svg>
                                    <div class="indicator"></div>
                                  </h3>
                                  <div class="accordion-content">
                                    <p>We begin by assessing your unique goals and crafting solutions that align with your vision.
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="accordion-item accordion-item-2" data-item="1">
                                  <h3 class="accordion-header">
                                    <h3>Discover</h3>
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9 8C9 8.28125 8.90625 8.53125 8.71875 8.71875L2.71875 14.7188C2.34375 15.125 1.6875 15.125 1.3125 14.7188C0.90625 14.3438 0.90625 13.6875 1.3125 13.3125L6.59375 8L1.3125 2.71875C0.90625 2.34375 0.90625 1.6875 1.3125 1.3125C1.6875 0.90625 2.34375 0.90625 2.71875 1.3125L8.71875 7.3125C8.90625 7.5 9 7.75 9 8Z" fill="#121E3F"></path>
                                    </svg>
                                    <div class="indicator"></div>
                                  </h3>
                                  <div class="accordion-content">
                                    <p>Next, we design a strategic plan and reimagine workflows to optimize processes and drive innovation.
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="accordion-item accordion-item-3" data-item="2">
                                  <h3 class="accordion-header">
                                    <h3>Impact</h3>
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9 8C9 8.28125 8.90625 8.53125 8.71875 8.71875L2.71875 14.7188C2.34375 15.125 1.6875 15.125 1.3125 14.7188C0.90625 14.3438 0.90625 13.6875 1.3125 13.3125L6.59375 8L1.3125 2.71875C0.90625 2.34375 0.90625 1.6875 1.3125 1.3125C1.6875 0.90625 2.34375 0.90625 2.71875 1.3125L8.71875 7.3125C8.90625 7.5 9 7.75 9 8Z" fill="#121E3F"></path>
                                    </svg>
                                    <div class="indicator"></div>
                                  </h3>
                                  <div class="accordion-content">
                                    <p>We then implement the strategy, ensuring a seamless launch and robust support to keep your business on track.
                                    </p>
                                  </div>
                                </div>

                                <div class="accordion-item accordion-item-4" data-item="3">
                                    <h3 class="accordion-header">
                                      <h3>Deliver</h3>
                                      <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 8C9 8.28125 8.90625 8.53125 8.71875 8.71875L2.71875 14.7188C2.34375 15.125 1.6875 15.125 1.3125 14.7188C0.90625 14.3438 0.90625 13.6875 1.3125 13.3125L6.59375 8L1.3125 2.71875C0.90625 2.34375 0.90625 1.6875 1.3125 1.3125C1.6875 0.90625 2.34375 0.90625 2.71875 1.3125L8.71875 7.3125C8.90625 7.5 9 7.75 9 8Z" fill="#121E3F"></path>
                                      </svg>
                                      <div class="indicator"></div>
                                    </h3>
                                    <div class="accordion-content">
                                      <p>
                                        Finally, we provide comprehensive, end-to-end support, guiding you through every step to ensure sustainable success.
                                    </p>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>




                        
                    </div>
                    <div class="col-lg-5" style="margin-top: 15px;">
                        <img src="{{ asset('assets/images/abt1.png') }}" alt="" />
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col">
                        <div class="project-slider owl-carousel owl-theme ptb-5">


                            <div class="item single-project">
                                <div class="aon-case-box-wrap shine-hover  wow fadeInDown" data-wow-duration="2000ms">
                                    <div class="aon-case-pic shine-box">
                                        <a class="elem" href="assets/images/project/project1.png') }}"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic1.jpg">
                                            <img src="{{ asset('assets/images/project/project1.png') }}" alt="#">
                                        </a>
                                    </div>
                                    <div class="aon-case-info">
                                        <h4 class="aon-case-title">
                                            <a href="images/case/pic1.jpg">Discover</a>
                                        </h4>
                                        <!-- <div class="aon-case-find">Find Your Solution</div> --
                                    </div>
                                </div>
                            </div>


                            <div class="item single-project">
                                <div class="aon-case-box-wrap shine-hover  wow fadeInDown" data-wow-duration="2000ms">
                                    <div class="aon-case-pic shine-box">
                                        <a class="elem" href="assets/images/project/project2.png') }}"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic2.jpg">
                                            <img src="{{ asset('assets/images/project/project2.png') }}" alt="#">
                                        </a>
                                    </div>
                                    <div class="aon-case-info">
                                        <h4 class="aon-case-title">
                                            <a href="images/case/pic2.jpg">Design</a>
                                        </h4>
                                        <!-- <div class="aon-case-find">Find Your Solution</div> --
                                    </div>
                                </div>
                            </div>

                            <div class="item single-project">
                                <div class="aon-case-box-wrap shine-hover  wow fadeInDown" data-wow-duration="2000ms">
                                    <div class="aon-case-pic shine-box">
                                        <a class="elem" href="assets/images/project/project3.png') }}"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic3.jpg">
                                            <img src="{{ asset('assets/images/project/project3.png') }}" alt="#">
                                        </a>
                                    </div>
                                    <div class="aon-case-info">
                                        <h4 class="aon-case-title">
                                            <a href="images/case/pic1.jpg">Deliver</a>
                                        </h4>
                                        <!-- <div class="aon-case-find">Find Your Solution</div> --
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="item single-project">
                                <div class="aon-case-box-wrap shine-hover  wow fadeInDown" data-wow-duration="2000ms">
                                    <div class="aon-case-pic shine-box">
                                        <a class="elem" href="assets/images/project/project4.png') }}"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic4.jpg">
                                            <img src="{{ asset('assets/images/project/project4.png') }}" alt="#">
                                        </a>
                                    </div>
                                    <div class="aon-case-info">
                                        <h4 class="aon-case-title">
                                            <a href="images/case/pic1.jpg">Migrate IT</a>
                                        </h4>
                                        <!-- <div class="aon-case-find">Find Your Solution</div> --
                                    </div>
                                </div>
                            </div> -->


                <!-- <div class="item single-project">
                                    <!-- slider-item-2 --
                                    <div class="project-img">
                                        <img src="{{ asset('assets/images/project/project2.png') }}" alt="project" />
                                    </div>
                                    <div class="project-title">
                                        <h5><a href='project_details.html'>Project Development</a></h5>
                                        <span class="project-cat">It Management</span>
                                        <a class='project-btn' href='project_details.html'><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="item single-project">
                                    <!-- slider-item-3 --
                                    <div class="project-img">
                                        <img src="{{ asset('assets/images/project/project3.png') }}" alt="project" />
                                    </div>
                                    <div class="project-title">
                                        <h5><a href='project_details.html'>Project Development</a></h5>
                                        <span class="project-cat">It Management</span>
                                        <a class='project-btn' href='project_details.html'><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="item single-project">
                                    <!-- slider-item-4 --
                                    <div class="project-img">
                                        <img src="{{ asset('assets/images/project/project2.png') }}" alt="project" />
                                    </div>
                                    <div class="project-title">
                                        <h5><a href='project_details.html'>Project Development</a></h5>
                                        <span class="project-cat">It Management</span>
                                        <a class='project-btn' href='project_details.html'><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div> --
                        </div>
                    </div>

                   
                </div> -->


            </div>
        </section>
 <section class="container">
          <br>  <img id="dolptec-gif" width="100%" src="{{ asset('assets/images/our-approch.gif') }}" />
            
     


        </section>
        <!-- <section class="sec-pb">

            <div class="txt-wrapers ptb-5">

                <h2 class="highlight">With <span class="highlight1">DolpTec</span></h2>

              </div>
              <div class="arrow-right">
                <img src="asset('assets/images/right.png"/>
              </div>
        </section> -->



       <section class="container mobile-approch">
             <div class="row">
                <div class="sec-content text-center">
                     
                <h2 class="sec-title">How we deliver our Cloud consulting services?</h2>
                </div>
               
                 <div class="col-md-3">
                     <h3 class="content-box-title">Consult</h3>
                     <img src="assets/images/1.gif"/>
                     <p class="content-box-sub">
                            We begin by assessing your unique goals and crafting solutions that align with your vision.
                    </p>
                 </div>
                 <div class="col-md-3">
                     <h3 class="content-box-title">Discover</h3>
                     <img src="assets/images/2.gif"/>
                     <p class="content-box-sub">
                           Next, we design a strategic plan and reimagine workflows to optimize processes and drive innovation.
                    </p>
                 </div>
                 <div class="col-md-3">
                     <h3 class="content-box-title">Impact</h3>
                     <img src="assets/images/3.gif"/>
                     <p class="content-box-sub">
                            We then implement the strategy, ensuring a seamless launch and robust support to keep your business on track.
                    </p>
                 </div>
                 <div class="col-md-3">
                     <h3 class="content-box-title">Deliver</h3>
                     <img src="assets/images/4.gif"/>
                     <p class="content-box-sub">
                            Finally, we provide comprehensive, end-to-end support, guiding you through every step to ensure sustainable success.
                    </p>
                 </div>
             </div>
         </section>
  

        <!-- company quick info end -->
        <!-- pricing section start -->
        <section class="pricing-sec sec-ptb" id="partnerships">
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
                                <img src="{{ asset('assets/images/client-logo/1.png') }}" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/2.png') }}" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/3.png') }}" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 4 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/4.png') }}" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/5.png') }}" alt="Image" style="width: 85%;">
                            </div>
                        </div>

                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="{{ asset('assets/images/client-logo/17.png') }}" alt="Image" style="width: 85%;">
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
                </div>
            </div>
        </section>

       


        <!-- Testimonial section -->
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
				<p>It was a pleasure working with you Azeem, on the DC to cloud migration project. Although it was a short engagement, the discovery and roadmap exercise supported by you, helped us lay a robust foundation to meet our cloud migration objective. Wish you all the best in your new venture, and happy to provide recommendations if needed.</p>
				<div class="client-info">
					<div class="client-video">
						<a href="#"><img src="https://dolptec.uk/assets/images/team/team1.png" alt=""></a>
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
				<p>Azeem (DolpTec), helped us to get better insights into our cloud cost and usage. The architecture inputs and the roadmap for the new transformation project, gave the team better understanding and clarity on the scale of transformation work. Thanks for the support.</p>
				<div class="client-info">
					<div class="client-video">
						<a href="#"><img src="https://dolptec.uk/assets/images/team/team2.png" alt=""></a>
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

      

       

        <footer class="footer-sec">
            <div class="section-overlay sec-pt-20">
                <div class="w-full px-4 md:px-5 lg:px-8 py-5 md:py-8">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-8">
                            <a href="javascript:;">
<h2 class="sec-title text-3xl font-bold text-white">Amplifying Cloud Value & Potential <br><span class="text-acent italic">Connect with our Expert</span> Today!</h2>

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

                    <div id="footer-second-row" class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-8">
                            <div class="ftr-copyright text-white">© Copyright <span class="highlight1">DolpTec</span>
                                     All Rights Reserved</div>
                        </div>




                        <div class="col-lg-4 gap-4">

                            <span class="text-white">ICO Number : ZB623235</span>
                            <a href="#" class="p-2 sm:p-3 flex gap-2 items-center text-white">


                                    <img src="{{ asset('assets/images/footer/footer-logo-1.png') }}" class="w-6 md:w-8 h-auto" alt="">

                            </a>
                            <a href="#" class="p-2 sm:p-3 flex gap-2 items-center">
                                <img src="{{ asset('assets/images/footer/footer-logo-2.png') }}" class="w-6 md:w-8 h-auto" alt="">

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
        <form action="{{ route('enquires') }}" method="POST" class="contact-form" id="home-enquire-form">
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
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="name" name="name"
                                                    placeholder="Name" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control" id="email1" name="email"
                                                    placeholder="Corporate Email ID" type="email" required>
                                                <span class="error-message" id="emailError1"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control rounded border-white mb-3 form-input form-control m-width" type="tel"
                                                    id="phone1" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
                                                <span class="error-message" id="phoneError1"></span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            

                                            <div class="form-group">
                                               <select class="form-control rounded border-white mb-3 form-input form-control @error('city') is-invalid @enderror" id="city" name="city"
                oninvalid="this.setCustomValidity('Please select an service in the list')" oninput="setCustomValidity('')" required>
                                                   <option value="">Select a Service</option>
                                                    <option value="DevOps Consultancy">DevOps Consultancy</option>
                                                    <option value="DevOps For Azure">DevOps For Azure</option>
                                                    <option value="DevOps For AWS">DevOps For AWS</option>
                                                    <option value="DevOps For Google">DevOps For Google</option>
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
                                                <textarea class="rounded border-white mb-3 form-text-area form-control" id="aboutProject"
                                                    name="aboutProject" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" style="text-align:center;">
                                            <button type="submit" name="submit" id="submit1" class="thm-btn contact-form-button">
                                                <span class="txt">Submit</span>
                                            </button>
                                        </div>
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
            $('.tabs-nav li').click(function(event) {
                event.preventDefault(); // Prevent default behavior of anchor tag
    
                var tabId = $(this).find('a').attr('href');
    
                $('.tabs-nav li').removeClass('active');
                $(this).addClass('active');
    
                $('.tab-content .tab-pane').removeClass('active');
                $(tabId).addClass('active');
    
                // Calculate the offset of the div you want to scroll to
                var offsetTop = $(tabId).offset().top;
    
                // Scroll to the div
                $('html, body').animate({
                    scrollTop: offsetTop // Scroll to the offset of the div
                }, 'slow'); // Adjust scroll speed as needed ('slow', 'fast', or a numeric value in milliseconds)
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
                body: JSON.stringify({ type: type })
            });
        }
    </script>
    <script>
    document.getElementById('home-enquire-form').addEventListener('submit', function(event) {
        let phoneField = document.getElementById('phone1');
        let phoneError = document.getElementById('phoneError1');
        let phoneValue = phoneField.value;
        let phoneRegex = /^([0-9\s\-\+\(\)]*)$/;
    
        if (!phoneRegex.test(phoneValue) || phoneValue.length < 10) {
            phoneError.textContent = 'Please enter a valid phone number.';
            event.preventDefault();
        } else {
            phoneError.textContent = '';
        }
    });
    </script>
<script>
$(document).ready(function() {
    const accordions = $('.accordion-item');
    let currentIndex = 0;
    let intervalId;

    function closeAllAccordions() {
        accordions.each(function() {
            $(this).removeClass('open');
            $(this).find('.indicator').css('width', '0%').hide(); // Hide indicator and set width to 0%
            $(this).find('.accordion-content').slideUp(); // Slide up content
        });
    }
    
    function showAccordion(index) {
        closeAllAccordions(); // Close all accordion items

        // Show current accordion
        const currentAccordion = $(accordions[index]);
        currentAccordion.addClass('open');
        currentAccordion.find('.indicator').show().css('width', '100%'); // Show and animate the indicator
        currentAccordion.find('.accordion-content').slideDown(); // Slide down content

        currentIndex = index; // Update the current index
    }
    
    function showNextAccordion() {
        currentIndex = (currentIndex + 1) % accordions.length;
        showAccordion(currentIndex);
    }
    
    function resetInterval() {
        clearInterval(intervalId);
        intervalId = setInterval(showNextAccordion, 5000); // 5000 milliseconds = 5 seconds
    }

    // Show the first accordion initially
    showAccordion(currentIndex);
    
    // Set interval to show the next accordion
    intervalId = setInterval(showNextAccordion, 5000); // 5000 milliseconds = 5 seconds
    
    // Manual accordion opening/closing
    $('.accordion-header').on('click', function() {
        const parentAccordion = $(this).closest('.accordion-item');
        const index = parentAccordion.data('item');

        if (!parentAccordion.hasClass('open')) {
            showAccordion(index);
            resetInterval(); // Restart the interval timer
        }
    });
});



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
	padding: 0px 0 0px;
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
.client-info a img{
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

.accordion-item {
    border: 0px solid #ddd; /* Add border around the accordion item */
    position: relative; /* Required for positioning the indicator */
    margin-bottom: 0.5rem; /* Add space between accordion items */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

.accordion-item .accordion-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem; /* Adjust padding as needed */
    cursor: pointer;
    position: relative; /* Positioning context for the indicator */
    background: #ffffff; /* Background color of the header */
    border-bottom: 1px solid #ccc;
}

.accordion-item .accordion-header span {
    flex: 1;
}

.accordion-item .accordion-header svg {
    margin-left: 1rem;
    transition: transform 0.5s ease;
}

.accordion-item .accordion-content {
    display: none; /* Hide content by default */
    padding: 1rem 2rem; /* Adjust padding as needed */
    background: #f5f5f5;
}

.accordion-item.open .accordion-content {
    display: block; /* Show content when item is open */
}

.accordion-item.open .accordion-header svg {
    transform: rotate(270deg); /* Rotate arrow when open */
}

.accordion-item.open {
    background: #e0f7fa; /* Background color when open */
}

.indicator {
    height: 4px;
    background-color: rgb(109, 109, 109); /* Color of the active indicator */
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width 5s ease-in-out, background-color 1s ease-in-out; /* Adjust width transition duration */
    width: 0%; /* Start with width 0 */
    border-top: 1px solid #000; /* Add border on top of indicator */
}

.accordion-item.open .indicator {
    width: 100%; /* Full width when active */
    border-top: 4px solid #000; /* Change border color and width as needed */
}

.accordion-content {
    border: 1px solid #f5f5f5;
}


 
   </style>
</body>

</html>
