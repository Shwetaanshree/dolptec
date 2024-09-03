<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”robots” content=”noindex”>
    <meta name="description"
        content="Purpose-built Integrated Construction Project Management Software For Builders, Contractors and Owners | CivitBuild - Construction ERP Software">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ========== Page Title ========== -->
    <title>Construction Project Management Software For Owners, Builders and Contractors</title>

    <base href="{{asset('public')}}/">

    <!-- ========== Favicon Icon ========== -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{asset('assets/img/favicon_io/site.webmanifest') }}">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/countrySelect.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('assets/css/intlTelInput.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css"> -->

    <!-- ========== End Stylesheet ========== -->
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KVPQXM47');</script>
<!-- End Google Tag Manager -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <script type="text/javascript">
    function callbackThen(response) {
        // read Promise object
        response.json().then(function(data) {
            console.log(data);
            if (data.success && data.score > 0.5) {
                console.log('valid recpatcha');
            } else {

                document.getElementById('modal-enquire-form').addEventListener('submit', function(event) {
                    event.preventDefault();
                    alert('recpatcha error');
                });
            }
        });
    }

    function callbackCatch(error) {
        console.error('Error:', error)
    }
    </script>

    {!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch',
    ]) !!}

    <style>
    .demo {
        /* background: linear-gradient(to right ,#f33963 ,#ff735b); */
        /* background: linear-gradient(to right ,#0070bc ,#0070bc); */
        background: linear-gradient(to right, #0070bc3b, #0070bc9c);
    }

    .top-icon,
    .bottom-icon {
        display: block;
        font-size: 70px;
        color: #fdfeff;
        text-align: center;
        margin: 0 auto;
    }

    .testimonial {
        padding: 0 40px;
        position: relative;
        overflow: hidden;
        /* background: linear-gradient(to right ,#ff735b ,#f33963); */
        background: linear-gradient(to right, #0070bc, #00ba50);
        color: #fdfeff;
        z-index: 1;
    }

    .testimonial:after {
        content: "";
        width: 150px;
        height: 107%;
        background: #00ba5099;
        position: absolute;
        top: -20px;
        left: -60px;
        transform: matrix(1, 0, 0.5, 1, 150, 0);
        z-index: -1;
    }

    .testimonial .pic {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        float: left;
        margin: 10px 25px 0 0;
        position: relative;
    }

    .testimonial .pic img {
        width: 100%;
        height: auto;
    }

    .testimonial .testimonial-content {
        width: 100%;
        height: 250px;
        float: right;
        padding: 30px 0;
    }

    .testimonial .testimonial-title {
        font-size: 20px;
        font-weight: 900;
        margin: 0 0 20px;
        text-transform: capitalize;
    }

    .testimonial .description {
        font-size: 14px;
        line-height: 26px;
    }

    .owl-theme .owl-controls .owl-page span {
        width: 10px;
        height: 10px;
        background: #fff;
        border: 2px solid #1ec4f3;
    }

    .owl-theme .owl-controls .owl-page:active span {
        color: #1ec4f3;
    }

    @media only screen and (max-width: 767px) {
        .testimonial {
            text-align: center;
        }

        .testimonial .pic {
            float: none;
            margin: 20px auto 0;
        }

        .testimonial .testimonial-content {
            width: 100%;
            height: 800px;
            float: none;
            padding: 20px 0;
        }

        .testimonial .description {
            font-size: 14px;
        }
    }

    @media only screen and (max-width: 480px) {
        .testimonial {
            padding: 0 20px;
        }

        .testimonial .testimonial-title {
            font-size: 22px;
        }
    }

    .error-message {
        color: white;
    }
    </style>
    
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '364226856329701');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=364226856329701&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>



<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

            <div class="container-fill">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Enquire
                                Now</a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Open modal
                            </button> -->
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->



                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars" style="color:#ffff;"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo2.png') }}" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('assets/img/logo2.png') }}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown dropdown-right">
                            <a href="/" class="smooth-menu">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#Features">Features</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#Who-use-CivitBUILD">Who use CivitBUILD</a>
                        </li>

                        <li>
                            <a class="smooth-menu" href="#Why-CivitBUILD">Why CivitBUILD</a>
                        </li>

                        <li>
                            <a class="smooth-menu" href="#reviews">Reviews</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area bg-gray text-center default-padding padding-xl">
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
    <footer class="bg-light footer-padding">
        <div class="container">
        <div class="f-items">
                <div class="row">
                    <div class="col-lg-8 col-md-6 item2">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                            Reach out to us for inquiries, assistance, or collaboration opportunities.
                            </p>
                            <div class="address">
                                <ul class="address-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span><a href="mailto:measales@thecivit.com">measales@thecivit.com</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span><a href="tel:+971503834122">+971 503834122</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 item2 footer-logo-center">
                        <div class="f-item">
                            <img src="{{asset('assets/img/footer-logo.png') }}" width="auto" height="55px"alt="Logo">
                            <div class="info">
                                <h5 style="font-weight: 600;">MEA Regional Office:</h5>
                                <span>SoftTech Digital Software L.L.C,<br>Fahad Building, Suite 028,<br>PO Box No. 79998,<br>Dubai, UAE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>&copy; Copyright <script type="text/javascript">
                                document.write(new Date().getFullYear());
                                </script>. All Rights Reserved.</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Enquiry modal -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title" style="font-size:25px;">Book a Free Demo Now!</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="{{ route('enquires') }}" method="POST" class="contact-form"
                            id="home-enquire-form">
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

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="fName" name="fName" placeholder="First Name"
                                            type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="lName" name="lName" placeholder="Last Name"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email"
                                            placeholder="Corporate Email ID" type="email" required>
                                        <span class="error-message" id="emailError"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control m-width" type="tel" id="phone2" name="phone"
                                            placeholder="Phone Number" required>
                                            <span class="error-message" id="phoneError"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select id="designation" name="designation" class="form-control"
                                            aria-required="true" aria-invalid="false"
                                            data-gtm-form-interact-field-id="0" style="height: 50px;" required>
                                            <option value="" selected="selected" class="gf_placeholder">
                                                Choose Designation</option>
                                            <option value="Accountant">Accountant</option>
                                            <option value="Procurement Manager">Procurement Manager</option>
                                            <option value="Project Manager">Project Manager</option>
                                            <option value="Plant &amp; Equipment Manager">Plant &amp;
                                                Equipment Manager</option>
                                            <option value="Site Agent">Site Agent</option>
                                            <option value="Quantity Surveyor">Quantity Surveyor</option>
                                            <option value="Estimator">Estimator</option>
                                            <option value="Other">Other</option>
                                            <option value="Partner/Owner">Partner/Owner</option>
                                            <option value="CEO/COO">CEO/COO</option>
                                            <option value="Director/MD/GM">Director/MD/GM</option>
                                            <option value="CFO/FD/FM">CFO/FD/FM</option>
                                            <option value="Commercial Manager">Commercial Manager</option>
                                            <option value="Construction Manager">Construction Manager
                                            </option>
                                            <option value="Estimation Manager">Estimation Manager</option>
                                            <option value="Operation Manager">Operation Manager</option>
                                            <option value="IT Manager">IT Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="companyType" name="companyType"
                                            style="height: 50px;" required>
                                            <option disabled="" selected="" value="">Select Company Type
                                            </option>
                                           <option value="General Contractor">General Contractor</option>
                                            <option value="Specialty Contractor">Specialty Contractor
                                            </option>
                                            <option value="Owner or Developer">Owner or Developer</option>
                                            <option value="Government">Government</option>
                                            <option value="Turnkey Contractor">Turnkey Contractor</option>
                                             <option value="Project Management & Consultants">Project Management & Consultants</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="companyName" name="companyName"
                                            placeholder="Company Name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="companyWebsite" name="companyWebsite"
                                            placeholder="Company Website" type="text">
                                        <span class="error-message" id="websiteError"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- <span id="country-code2" style="display: none;"></span>
                                        <input class="form-control" id="country-name2" name="country"
                                            value="United Arab Emirates" placeholder="Country" type="text"> -->
                                        <div class="form-item">
                                            <input class="form-control m-width" id="country_selector2" name="country" type="text" required>
                                            <label for="country_selector2" style="display:none;">Select a country
                                                here...</label>
                                        </div>
                                        <div class="form-item" style="display:none;">
                                            <input type="text" id="country_selector_code2" name="country_selector_code"
                                                data-countrycodeinput="1" class="form-control"
                                                placeholder="Selected country code will appear here" />
                                            <label for="country_selector_code2">...and the selected country code will be
                                                updated here</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="city" name="city"
                                            style="height: 50px;" required>
                                            <option disabled="" selected="" value="">Company Size
                                            </option>
                                            <option value="0 - 20">0 - 20</option>
                                            <option value="21 - 50">21 - 50</option>
                                            <option value="51 - 100">51 - 100</option>
                                            <option value="100+">100+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="aboutProject" name="aboutProject"
                                            placeholder="Tell Us About Project"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="text-align:center;">
                                    <button type="submit" name="submit" id="submit" class="contact-form-button">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->

            </div>
        </div>
    </div>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>

    <script>
    // Code for Form 2
    var input2 = document.querySelector('#phone2');
    var countryCodeSpan2 = document.querySelector('#country-code2');
    var iti2 = window.intlTelInput(input2, {});

    updatePhoneNumber2(); // Set initial phone number

    input2.addEventListener('countrychange', function() {
        updateCountryCode2();
        updatePhoneNumber2();
    });

    function updateCountryCode2() {
        var selectedCountryData2 = iti2.getSelectedCountryData();
        countryCodeSpan2.textContent = '+' + selectedCountryData2.dialCode;
    }

    function updatePhoneNumber2() {
        var phoneNumber2 = input2.value.replace(/\D/g, ''); // Remove non-numeric characters
        var selectedCountryData2 = iti2.getSelectedCountryData();
        input2.value = '+' + selectedCountryData2.dialCode + phoneNumber2;
    }
    </script>

    <script>
    $("#country_selector1, #country_selector2").countrySelect({
        preferredCountries: ["ae", "us", "gb"]
    });
    </script>

    <script>
    function validateForm(emailInputId, emailErrorId) {
        var emailInput = document.getElementById(emailInputId);
        var emailError = document.getElementById(emailErrorId);

        var emailRegex =
            /^[a-zA-Z0-9._%+-]+@(?!gmail\.com|yahoo\.com|outlook\.com|zoho\.com|protonmail\.com|mail\.com|gmx\.com|yandex\.com|aol\.com|tutanota\.com)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(emailInput.value)) {
            emailError.textContent = '';
            return true;
        } else {
            emailError.textContent = 'Please enter a valid professional email address.';
            return false;
        }
    }
</script>

<script>
    // For Form 1
    function validateForm1() {
        var phoneInput = document.getElementById('phone2');
        var phoneError = document.getElementById('phoneError');
        var phoneRegex = /^[0-9+]{12,14}$/;

        // Clear previous error message
        phoneError.innerHTML = '';

        if (!phoneRegex.test(phoneInput.value)) {
            // Display an error message
            phoneError.innerHTML = 'Please enter a valid phone number.';
            return false;
        }

        return true;
    }

    // Attach the input event to the phone input field for Form 1
    document.getElementById('phone2').addEventListener('input', function () {
        validateForm1();
    });

    // Attach the submit event to Form 1
    document.getElementById('home-enquire-form').addEventListener('submit', function (event) {
        if (!validateForm1()) {
            event.preventDefault(); // Prevent the default form submission if validation fails
        }
    });
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVPQXM47"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>

</html>