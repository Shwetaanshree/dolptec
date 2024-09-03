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

    <!--animation css-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
                        <div class="container-fuild">
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
                                                                            <a href="mailto:hello@dolptec.com" onclick="trackClick('email')">Hello@dolptec.com</a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="icon-box">
                                                                            <i class="flaticon-call"></i>
                                                                        </div>
                                                                        <p>
                                                                            <a href="tel:+442081356162" onclick="trackClick('phone')">+44 20 8135 6162</a>
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
                                                            <li class="menu-item">
                                                                <a href="#about-us">Know More</a>

                                                            </li>
                                                            <li>
                                                                <a href="#our-services">Services</a>
                                                            </li>
                                                            
                                                            <li class="menu-item">
                                                                <a href="#our-approach
                                                                ">Our Approach</a>
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
                           
                            <h1 class="hero-title text-white">Cloud FinOps Services
                            </h1>
                            <p class="text-white">Ensure top-notch financial governance for your cloud investment. Achieve the highest return with low risk
                            </p>
                            
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
        <section class="sec-ptb" id="about-us">
            <div class="sec-content">
            </div>
            <div class="container-lg">

                <div class="row">
                    <div class="col-left col-lg-6">
                    <h2 class="sec-title"><span class="txt-blue">Cloud Cost* -</span> Save up to <br>30% on your monthly <br>cloud cost 
                    <a class="" style="cursor: pointer;" onclick="togglePopup1()"><span class="high">(*Contact us to find out your eligibility)
                    </span></a></h2>
                    <p>Transitioning to the cloud—whether private, public, hybrid, or multi-cloud—without a well-planned strategy can lead to unexpected expenses and higher costs. To maximize benefits and avoid unpleasant budget surprises, CFOs and CIOs need to evaluate cloud solutions through the lens of cost versus long-term value.
                    </p>
                    <p>While selecting an appropriate pricing model and achieving cost transparency are common cloud cost management strategies, robust financial governance is essential. It aligns cloud expenses with business value, enhances ROI, and ensures optimal performance. This need is driving the emergence of a new service model: FinOps as a Service.
                    </p>
                    </div>
                    <div class="col-right col-lg-6" id="c-points">
                    <div class="left-blue-border card-white__wrapper equal-height old">
                    <div class="fullheight">
                    <p>Half of business leaders identify challenges in measuring cloud value as a major obstacle to realizing ROI.
                    </p>
                    </div>
                    </div>
                    <div class="left-blue-border card-white__wrapper equal-height">
                    <div class="fullheight">
                    <p>Optimizing workloads can reduce cloud costs by up to <span class="percentage txt-blue">70%</span></p>
                    </div>
                    </div>
                    <div class="left-blue-border card-white__wrapper equal-height old">
                    <div class="fullheight">
                    <p>By 2026, advanced financial operations (FinOps) are expected to significantly improve cloud cost optimization and reduce budget planning efforts by up to 
                        <span class="percentage txt-blue">40%.</span></p>
                    </div>
                    </div>
                    </div>
                    </div>  
             
                </div>
        </section>



        <section class="sec-pb">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">We work across all major cloud providers - <br>AWS, Google Cloud and Azure</h2>
                    </div>
                </div>
            <div class="row align-content-center align-items-center">
                <div class="col-md-12">
                    <ul class="agc">
                        <li data-aos="fade-right" data-aos-delay="280" class="aos-init aos-animate" style="
                        border-left: 7px solid #16a571;">Paying Google or AWS directly on a Credit Card for your usage? Move billing over and save on your monthly bill.
                        </li>
                        <li data-aos="fade-left" data-aos-delay="330" class="aos-init aos-animate" style="
    border-left: 7px solid #16a571; margin-left: 8%;">
                        Just transfer your billing to us from Google and get a guaranteed minimum 5% discount (off) on your Google cloud bill  as well as benefit from a 30-day payment term, without any change to your existing Google cloud account usage.
                        </li>
                    </ul>
                   
                </div>

                <div class="col-md-12">
                   

                   <ul class="agc">
                    <li data-aos="fade-right" data-aos-delay="360" class="aos-init aos-animate" style="
                    border-left: 7px solid #16a571;">Transfer your AWS billing to us and receive a guaranteed minimum 2% discount (off) on your AWS cloud bill with a 30-day payment term, with no change towards your existing AWS cloud usage.</li>                    
                    <li data-aos="fade-left" data-aos-delay="390" class="aos-init aos-animate" style="
                    border-left: 7px solid #16a571; margin-left: 8%;">Also get free access to the Cloudcheckr (Cloud Financial Management) platform, trusted by many organisations for their Financial Operations.</li>                  
                    </ul>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a class="" style="color: #000; cursor: pointer;" onclick="togglePopup1()"><span class="high"><strong>Contact us today to find out if you’re eligible for a higher percentage discount on your AWS cloud bill.</strong>
                    </span></a>
                </div>
            </div>
            </div>
        </section>
            


     <section class="sec-pb" id="our-services">
        <div class="container">
            <div class="row">
                <h2 class="sec-title text-center">What do you get in Dolptec FinOps Services? </h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                           
                            <p>Multi-cloud Cost Visibility</p>
                        </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">                            
                        <p>Cost Reports</p>
                        </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Cost Optimization</p>
                        </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Cost Saving Recommendations</p>
                        </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-heightt">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Forecasts & Budget Tracking </p>
                        </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Tagging Compliance</p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Proactive Cost Control
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Resource Visibility and insights
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Utilization Monitoring
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>FinOps Maturity Assessment
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p> Right-Sizing
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-3">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Security Parameter Assessment
                        </p>
                        </div>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="box-border1 card-white__wrapper equal-height">
                      
                        <div class="fullheight">
                        
                        </div>
                        </div>
                </div>

                <div class="col-md-4">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Show-back, Charge-back capabilities
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-4">
                    <div class="box-border card-white__wrapper equal-height">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                                <path d="M 13 1 C 6.382813 1 1 6.382813 1 13 C 1 19.617188 6.382813 25 13 25 C 19.617188 25 25 19.617188 25 13 C 25 6.382813 19.617188 1 13 1 Z M 13 3 C 18.535156 3 23 7.464844 23 13 C 23 18.535156 18.535156 23 13 23 C 7.464844 23 3 18.535156 3 13 C 3 7.464844 7.464844 3 13 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"></path>
                                </svg>
                        </div>
                        <div class="fullheight">
                        <p>Security compliance control recommendation
                        </p>
                        </div>
                        </div>
                </div>

                <div class="col-md-2">
                    <div class="box-border1 card-white__wrapper equal-height">
                      
                        <div class="fullheight">
                       
                        </div>
                        </div>
                </div>

            </div>
        </div>
     </section>

       

        

  
        <!-- services section end -->



       
<section class="sec-pb" id="our-approach"> 
            <div class="container-lg">
            <div class="row">
                <h2 class="sec-title text-center">Our Step-by-Step Approach to Achieve Greater <br>Cloud Cost Optimisation</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        Every business has distinct needs, and so do their cloud financial objectives. DolpTec financial consulting experts conduct a comprehensive assessment of your workloads, usage, and billing to identify your specific FinOps requirements. After this initial evaluation, we create robust performance tracking and benchmarking plans to facilitate informed, real-time decision-making. To ensure sustainable financial governance, our experts assist clients in planning and implementing strategies for cloud rate and usage optimization, while also fostering a cost-aware culture.

                    </p>
                </div>

                <div class="col-md-12" id="desk-step-approach">
                    <div class="box-row">
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                              <img src="{{ asset('assets/images/cloud-usage.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Cloud Usage & Cost Understanding</span>
                        </div>
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                                <img src="{{ asset('assets/images/performance.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Performance Tracking & Benchmarking
                      </span>
                        </div>
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                                <img src="{{ asset('assets/images/realtime.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Real-Time Decision-Making</span>
                        </div>
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                                <img src="{{ asset('assets/images/rating.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Cloud Rate Optimization
                      </span>
                        </div>
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                                <img src="{{ asset('assets/images/optimization.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Cloud Usage Optimization
                      </span>
                        </div>
                        <div class="box">
                          <div class="box-button">
                            <div class="box-tag box-tag-left"></div>
                            <div class="box-icon">
                                <img src="{{ asset('assets/images/alignment.png') }}"/>
                            </div>
                            <div class="box-tag box-tag-right"></div>
                          </div>
                          <span class="box-label">Organizational Alignment
                      </span>
                        </div>
                      </div>
                </div>



                {{-- Mobile section  --}}
                <div id="mobile-step-approach">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                    <img src="{{ asset('assets/images/cloud-usage.png') }}"/>
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Cloud Usage & Cost Understanding</span>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                      <img src="{{ asset('assets/images/performance.png') }}"/>
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Performance Tracking & Benchmarking
                            </span>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                      <img src="{{ asset('assets/images/realtime.png') }}"/>
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Real-Time Decision-Making</span>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                      <img src="{{ asset('assets/images/rating.png') }}"/>
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Cloud Rate Optimization
                            </span>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                      <img src="{{ asset('assets/images/optimization.png') }}"/>
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Cloud Usage Optimization
                            </span>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="box-button">
                                  <div class="box-tag box-tag-left"></div>
                                  <div class="box-icon">
                                      <img src="http://127.0.0.1:8000/assets/images/alignment.png">
                                  </div>
                                  <div class="box-tag box-tag-right"></div>
                                </div>
                                <span class="box-label">Organizational Alignment
                            </span>
                              </div>
                        </div>
                    </div>
                </div>
                
            </div>
</section>
  
<section class="sec-ptb" style="background: #f3f3f3;" id="finops">
    <div class="sec-content">
    </div>
    <div class="container-lg">

        <div class="row">
            <div class="col-left col-lg-8">
            <h2 class="sec-title"><span class="txt-blue">You are in the safe hands of Cloud FinOps experts.</span> <br>
                
             </h2>
           <p>We are Certified FinOps professionals, member of the FinOps Foundation and the FinOps Cost and Usage Specification (FOCUS™) group</p>
            </div>
            <div class="col-right col-lg-4" id="f-points">
                <img src="{{ asset('assets/images/finops-landing.png') }}"/>
            
           
            </div>
            </div>  
     
        </div>
</section>
    

     


       

        <footer class="footer-sec">
            <div class="section-overlay sec-pt-20">
                <div class="w-full px-4 md:px-5 lg:px-8 py-5 md:py-8">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-8">
                            <a href="javascript:;">
                                <h2 class="sec-title text-3xl font-bold text-white">Amplifying Cloud Value &amp; Potential <br><span class="text-acent italic">Connect with our Expert</span> Today!</h2>
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
                            <div class="ftr-copyright">© Copyright <span class="highlight1">DolpTec</span>
                                     All Rights Reserved</div>
                        </div>




                        <div class="col-lg-4 gap-4">

                            <span style="color: #fff;">ICO Number : ZB623235</span>
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
                                                    <option value="cloud-consulting">Cloud Consulting Services</option>
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
    </div>



<!--check eligiblity popup form-->
   <div id="popupOverlay1" class="overlay-container">
        <div class="popup-box">

            <form action="{{ route('enquires') }}" method="POST" class="contact-form1" id="home-enquire-form">
                                    <p class="title">Check your eligibility & save upto 30% <br>on your cloud cost!!</p>
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

            <button class="btn-close-popup" onclick="togglePopup1()">
                x
            </button>
        </div>
    </div>
<!--check eligiblity popup form end section-->

    <script>
        function openForm(pdfFile) {
            document.getElementById('pdf_file').value = pdfFile;
            document.getElementById('popup').style.display = 'block';
             document.getElementById('popup1').style.display = 'block';
        }
    
        document.getElementsByClassName('close')[0].onclick = function() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('popup1').style.display = 'none';
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

    <!--animation script-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
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


<style>
.high{font-size: 16px;}
.sec-ptb {
    padding: 40px 0;
}
.sec-pb {
    padding-bottom: 40px;
}
.hero-content{padding-top: 20px;}
.icon svg {
    fill: #16a571;
    width: 30px;
    position: absolute;
    top: -1rem;
    left: 1rem;
}


.left-blue-border {
    background-color: #fff;
    box-shadow: 0px 4px 18px 0px #dbdbdb;
    padding: 25px;
    position: relative;
    border-left: 7px solid #16a571;
    height: fit-content;
    width: 94%;
    margin-bottom: 40px;
}
.fullheight p {
    margin: 0px 0rem 0px 2.2rem;
    font-weight: 400;
}
.old {
    margin-left: 3rem;
}

.percentage{
    font-size: 35px;
    font-weight: 700;
    color: #16a571;
}
#c-points {
    margin-top: 1rem;
}
#f-points {
    margin-top: 0rem;
}
.box-border {
    background-color: #fff;
    box-shadow: 0px 4px 20px 0px #e5e2e2;
    padding: 20px;
    position: relative;
    height: fit-content;
    width: 100%;
    margin-bottom: 20px;
    margin-top: 18px;
    border-bottom: 0px solid #aeb4b9;
    border-radius: 10px;
}

    .box-row {
  display: flex;
  justify-content: space-between;
  width: 80vw;
  margin: auto;
}

.box-button {
  display: flex;
  align-items: center;
}

.box-label {
    text-align: center;
    max-width: 15rem;
    width: 10rem;
    font-weight: 600;
    line-height: 20px;
    margin: 0px auto;
}

.box {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.box-icon {
    width: 70%;
    height: auto;
    padding: 30px;
    margin-bottom: 8px;
    border-radius: 10px;
    border: 1px solid black;
    background: #16a571;
}

#finops .row{align-items: center;}

@media (max-width: 480px) {
    .hero-ptb {
    padding: 70px 0 0px !important;
    }
.old {
    margin-left: 1rem;
    }
.left-blue-border{padding: 20px;}

.box-border {    
    padding: 20px;
    width: 90%;
   margin: 0px auto 20px;
}
.sec-title {
    line-height: 35px !important;
}
  .box {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }
  .box-icon {
    width: 100%;
    height: auto;
    padding: 30px;
    margin: 0px 10px;
} 
.row .col-md-2{
    display: flex;
    width: 50%;
}
.box:first-child .box-tag-left{display: none;}
.box:last-child .box-tag-right{display: none;}
#mobile-step-approach{display: block !important;}
#desk-step-approach{display: none;}

.menu-area .mobile-nav-toggler{margin: 0px 0px;}
.menu-area .mobile-nav-toggler{padding: 8px 8px 8px;}
}

.box-tag {
  flex-grow: 1;
  min-width: 20px;
  height: 4px;
  background-color: black;
}

.box:first-child .box-tag-left {
  background-color: white;
}

.box:last-child .box-tag-right {
  background-color: white;
}

#mobile-step-approach{display: none;}

.footer-sec {
    background: url(/assets/images/footer/footer.png) center / cover;
    margin-top: 0px !important;
}

.sec-title{
    line-height: 50px;
}

.hero-ptb {
    padding: 230px 0 110px;
}
.main-header-one__bottom{margin: 0px 30px;}
.main-header-one__top-inner{margin: 0px 30px;}
.contact-form{top: -55px;}
.footer-sec .sec-title{color: #fff;}
.footer-sec .ftr-copyright{color: #fff;}
.agc li {
    background-color: #fff;
    box-shadow: 0px 4px 18px 0px #dbdbdb;
    padding: 15px;
    position: relative;
    height: fit-content;
    margin: 0px auto 30px;
    font-size: 15px;
}
</style>
</body>

</html>
