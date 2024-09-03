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

<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>
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

</head>

<body class="body-dark-bg">
<!-- POPUP Model -->
<div id="popupOverlay"
		class="overlay-container">
		<div class="popup-box">

            <form action="thank-you.html" class="contact-form1">
                <h5 class="title">Book your free consultation today!!</h5>
                
                <div class="form-group">
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" name="name" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control rounded border-white mb-3 form-input" id="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" class="form-control rounded border-white mb-3 form-input" id="phone" name="phone" placeholder="Phone" required>
                </div>

                <div class="form-group">
                    <select id="services" name="services" class="form-control rounded border-white mb-3 form-input" aria-required="true">
                        <option value="">Select a Service</option>
                        <option value="cloud-consulting">Cloud Consulting Services</option>
                        <option value="cloud-migration">Cloud Migration</option>
                        <option value="cloud-landing-zone">Cloud Landing Zone Service</option>
                        <option value="devops-native">DevOps Native</option>
                        <option value="devops-non-native">DevOps Non Native</option>
                        <option value="architecture-services">Architecture Services</option>
                        <option value="finops-services">FinOps Services</option>
                        <option value="IT Support">Cloud/IT Support</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                
                <div class="submit-button-wrapper">
                    <button type="submit" class="thm-btn btn"><span class="txt">Submit</span></button>
                </div>
            </form>
            

			<button class="btn-close-popup"
					onclick="togglePopup()">
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
                                        <a href='index.html'><img src="assets/images/logo/logo.png"
                                                alt="site-logo" /></a>
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
                                                        <a href='index.html'><img src="assets/images/logo/logo.png"
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
                                        <a href='index.html'><img src="assets/images/logo/logo.png" alt="Logo" /></a>
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
                            <span class="sec-sub-title ">IT solutions for the new era</span>
                            <h1 class="hero-title text-white">Trust our services for your Cloud & IT objectives</h1>
                            <h3 class="text-white">Cloud & IT services customised for your business</h3>
                            <div class="hero-btn-area d-flex align-items-center">
                                <!-- <a class='thm-btn' href='about.html'>
                                    <span class="txt">Book your free consultation today !!</span>
                                </a> -->
                                <!-- <a href="https://www.youtube.com/watch?v=UVAyIh5V4NY" class="play-btn"><i class="fas fa-play"></i></a>
                                    <span class="play-intro">Play Intro</span> -->
                            </div>
                            <div class="hero-team-info d-flex align-items-center">
                                <!-- <div class="team-members d-flex">
                                    <div class="team-members-img">
                                        <img src="assets/images/team/team-info1.png" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="assets/images/team/team-info2.png" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="assets/images/team/team-info3.png" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="assets/images/team/team-info4.png" alt="" />
                                    </div>
                                    <div class="team-members-img">
                                        <img src="assets/images/team/team-info5.png" alt="" />
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
                                <form action="thank-you.html"  class="contact-form">
                                    <h5 class="title">Book your free consultation today!!</h5>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control rounded border-white mb-3 form-input" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="tel" class="form-control rounded border-white mb-3 form-input" id="phone" name="phone" placeholder="Phone" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <select id="services-list" name="services" class="form-control rounded border-white mb-3 form-input" aria-required="true">
                                            <option value="">Select a Service</option>
                                            <option value="cloud-consulting">Cloud Consulting Services</option>
                                            <option value="cloud-migration">Cloud Migration</option>
                                            <option value="cloud-landing-zone">Cloud Landing Zone Service</option>
                                            <option value="devops-native">DevOps Native</option>
                                            <option value="devops-non-native">DevOps Non Native</option>
                                            <option value="architecture-services">Architecture Services</option>
                                            <option value="finops-services">FinOps Services</option>
                                            <option value="IT Support">Cloud/IT Support</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" name="message" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    
                                    <div class="submit-button-wrapper">
                                        <button type="submit" class="thm-btn btn"><span class="txt">Submit</span></button>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="hero-info-img feature-two">
                                <!-- <img src="assets/images/hero/hero-info-img1.png" alt="hero-img" /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        

        <!-- service section start -->
        <section class="service-sec sec-pt" id="our-services">
            <div id="services-acc-desk" class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="sec-content">
                            <h6 class="sec-sub-title">Discover our Services</h6>
                            <h2 class="sec-title">All our services on offer are fixed price, no hidden cost.</h2>
                            <p class="sec-text">
                                We only offer services which we do best.
                            </p>

                        </div>
                    </div>
                    <div class="tabbed-about-us tabbed-about-us-v2">
                        <div class="flex-row" style="align-items: flex-start;">
                            <div class="col-sm-4">
                                <!-- ========== NAV TABS ========== -->
                                <ul class="tabs-nav" role="tablist">
                                    <li id="tab-FinOps" class="active" role="presentation"><a href="#FinOps" aria-controls="FinOps" role="tab" data-toggle="tab">FinOps</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                    <li id="tab-Cloud-Consulting" role="presentation"><a href="#Cloud-Consulting" aria-controls="Cloud-Consulting" role="tab" data-toggle="tab">Cloud Consulting</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                    <li id="tab-Cloud-Landing" role="presentation"><a href="#Cloud-Landing" aria-controls="Cloud-Landing" role="tab" data-toggle="tab">Cloud Landing environment (Zone) services</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                    <li id="tab-Architecture-and-Migration" role="presentation"><a href="#Architecture-and-Migration" aria-controls="Architecture-and-Migration" role="tab" data-toggle="tab">Architecture and Migration services</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                    <li id="tab-DevOps" role="presentation"><a href="#DevOps" aria-controls="DevOps" role="tab" data-toggle="tab">DevOps Services</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                    <li id="tab-IT-and-Cloud-Managed-Support" role="presentation"><a href="#IT-and-Cloud-Managed-Support" aria-controls="IT-and-Cloud-Managed-Support" role="tab" data-toggle="tab">IT & Cloud Managed Support</a><span class="bgcolor-major-gradient-overlay"></span></li>
                                </ul>



                                
                                
                            </div> <!-- //.col-sm-6 -->
    
                            <div class="col-sm-8">
                                <div class="tab-content">
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane active" id="FinOps">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>FinOps </h3>
                                        <h4>Financial Operations is an emerging discipline focused on managing cloud
                                           costs vs cloud usage.</h4>
                                        <div class="flex-row">
                                           <div class="col-lg-12">
                                              <h5>What our FinOps service helps organisations achieve</h5>
                                              <div class="flex-row">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li>Reduced cloud spend and cost optimisation.</li>
                                                        <li>Cost accountability and visibility.</li>
                                                     </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li>Continuous cost improvement cycle.</li>
                                                        <li>Cost governance with business objective alignment.</li>
                                                     </ul>
                                                </div>
                                              </div>
                                              
                                             
                                              <h5>Our FinOps experts approach.</h5>
                                              <ul>
                                                 <li>We follow industry proven FinOps foundation framework, actively
                                                    developed by all major cloud providers along with Linux
                                                    Foundation.</li>
                                                 <li>We would Implement efficient FinOps practice across FinOps
                                                    domains -
                                                 </li>
                                                 <div class="flex-row">
                                                    <div class="col-lg-6">
                                                        <ol>
                                                            <li>Understand cloud usage and cost.</li>
                                                            <li>Quantify business value.</li>
                                                            
                                                         </ol>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ol>
                                                            <li>Optimise usage and cost.</li>
                                                            <li>Effective ongoing operations.</li>
                                                         </ol>
                                                    </div>
                                                 </div>
                                                
                                              
                                                 <li>
                                                    we understand, organisations are not at the same level when it
                                                    comes
                                                    to FinOps, hence our goal is to make incremental improvements
                                                    using
                                                    iterative phases.
                                                 </li>
                                                 <ol>
                                                    <li><strong>Inform phase :- </strong>Identify cost, usage and efficiency data
                                                       points.</li>
                                                    <li><strong> Optimise phase :- </strong>Identify opportunities to improve cost and
                                                       usage.</li>
                                                    <li><strong> Operate phase :- </strong>Implement identified opportunities and
                                                       iterate on the
                                                       inform and optimise phases to achieve FinOps maturity.</li>
                                                 </ol>
                                              </ul>
                                           </div>
                                           
    
                                        </div>
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
    
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane" id="Cloud-Consulting">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>Cloud Consulting </h3>
    
                                        <h4>Our Cloud Consulting Services are highly customisable as per your operating
                                           industry and to meet your business needs.</h4>
    
                                        <div class="row">
    
                                           <div class="col-lg-12">
    
                                              <h5>Our deep industry expertise </h5>
                                              <ul>
                                                 <li>Life science, e-commerce Manufacturing</li>
                                                 <li>Education Finance Start-ups Retail</li>
    
                                              </ul>
                                           
                                              <h5>We take pride in formulating and providing a tailored service to
                                                 address your exact pain-points.</h5>
                                              <ul>
                                                 <li>Digital Transformation using Cloud technology.</li>
                                                 <li>Cloud adoption and exit consultation.</li>
                                                 <li>Operating model for Cloud.</li>
                                                 <li>Disaster Recovery and BCP ( Business Continuity Planning )</li>
                                                 <li>Multi-cloud consultation.</li>
                                                 <li>Governance and Delivery management.</li>
                                                 <li>Security &amp; Compliance consultation.</li>
                                                 <li>Sustainability planning.</li>
                                              </ul>
    
    
                                           </div>
                                           
    
                                        </div>
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
    
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane" id="Cloud-Landing">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>Cloud Landing environment (Zone) services</h3>
    
                                        <h4>Our service helps organisations to build and optimise a Secure, Scalable,
                                           and Compliant cloud environment for various business objectives. </h4>
    
                                        <div class="row">
    
                                           <div class="col-lg-12">
    
                                              <h5>Business objectives </h5>

                                              <ul>
                                                <li>Application migration</li>
                                                <li>Modernisation</li>
                                                <li>Transformation</li>
                                                <li>Disaster Recovery</li>
                                                <li>Backup management</li>
                                              </ul>
                                              
                                              
                                              <h5>We are cloud agnostic and offer landing zone implementation across
                                                 all major public and private cloud operators.
                                                 Includes both cloud native and non-native.</h5>
                                           
                                              <ul>
                                                 <li>(Amazon Web Services) AWS Landing zone accelerator (LZA) service
                                                 </li>
                                                 <li>(Google Cloud Platform) GCP Landing zone service.</li>
                                                 <li>Azure landing zone environment.</li>
                                                 <li>Oracle CIS benchmark cloud foundation environment.</li>
                                                 <li>OVHcloud compliant environment.</li>
    
                                              </ul>
    
    
                                           </div>
                                           
    
                                        </div>
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
    
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane" id="Architecture-and-Migration">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>Architecture and Migration services</h3>
    
                                        <h4>Our Architecture service offers design solutions for business applications
                                           and workloads destined for cloud platforms. Our solution utilises proven
                                           patterns and delivers on your business requirements of Data Privacy, Security, Resiliency, High Availability, Performance
                                           efficiency, Operational excellence. </h4>
    
                                        <div class="row">
    
                                           <div class="col-lg-12">
    
                                                
                                              <h5>Patterns </h5>
                                              <div class="flex-row">
                                                <div class="col-lg-4"><ul>
                                                    <li>Layered Multi-tier</li>
                                                    <li>Event driven</li>
                                                    <li>Client - Server</li>
                                                    
                                                    </ul>
                                                  </div>
                                                  <div class="col-lg-4"><ul>
                                                    <li>Client - Server</li>
                                                    <li>Microservices</li>
                                                    
                                                    </ul>
                                                  </div>
                                                <div class="col-lg-4"><ul>
                                                    
                                                    
                                                    <li>Containers/portable</li>
                                                    <li>Serverless cloud native</li>
                                                    </ul>
                                                  </div>
                                              </div>
                                              
                                              <h5>Migration service</h5>
                                              <p>Moving applications and data to the cloud is a complex endeavour,
                                                 however with our well-defined approach and migration tools
                                                 expertise, we promise to make this an effortless and pleasant
                                                 journey.</p>
                                                 <div class="flex-row">
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li>Key benefits of moving to cloud</li>
                                                             <li>Improved scalability and performance</li>
                                                             <li>Cost reduction with flexibility.</li>
                                                             
                
                                                          </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li>Agility and faster innovation.</li>
                                                             <li>Enhance availability and resilience. </li>
                                                        </ul>
                                                    </div>
                                                 </div>
                                             
                                              
                                              <h5>Our Approach</h5>
                                              <ul>
                                                 <li>Assessment &amp; Planning - Thorough assessment of existing
                                                    infrastructure, data and applications.</li>
                                                 <li>Risk Mitigation - Risk identification and mitigation to ensure a
                                                    minimum disruption migration.</li>
                                                 <li>Prioritization &amp; Test runs - Prioritise on factors like
                                                    effort, criticality, complexity and dependencies.</li>
                                                 <li>Execution - Implement using the industry proven 6R methodology,
                                                    automation and migration tools.</li>
                                                 <li>Optimisation &amp; Continuous Improvement - Post migration
                                                    refinement to realise migration business outcomes.</li>
    
                                              </ul>
    
                                           </div>
                                           
    
                                        </div>
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
    
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane" id="DevOps">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>DevOps Services</h3>
    
                                        <h4>In today's digital era, a business competitive advantage relies on an
                                           efficient cloud, data and application delivery process. </h4>
                                           <p>We provide a comprehensive devops service which helps organisations
                                            to gain agility and consistency across their software delivery cycle
                                            to achieve faster business results.
                                         We offer cloud native, non-native or a combination of both devops
                                            service with industry proven tools & languages
                                         Layered Multi-tier, Event driven, Client - Server, Microservices,
                                            Containers/portable,
                                            Serverless cloud native
                                         </p><br>
    
                                        <div class="row">
    
                                           <div class="col-lg-12">
    
                                              
                                              <h5>Cloud-Native</h5>
                                              <div class="row">
                                                 <div class="col-lg-4">
                                                    <ul>
                                                       <li>AWS, GCP &amp; Azure</li>
                                                       <li>CodeBuild</li>
                                                       <li>Code Deploy</li>
                                                       <li>Azure Pipelines</li>
    
                                                    </ul>
                                                 </div>
                                                 <div class="col-lg-4">
                                                    <ul>
    
                                                       <li>CodePipeline</li>
                                                       <li>CloudFormation</li>
                                                       <li>Cloud Build</li>
                                                       <li>Azure Artifacts</li>
                                                    </ul>
                                                 </div>
                                                 <div class="col-lg-4">
                                                    <ul>
                                                       <li>Cloud Deployment Manager</li>
                                                       <li>Cloud Deploy</li>
                                                       <li>Azure Devops</li>
    
                                                    </ul>
                                                 </div>
                                              </div>
                                              <h5>Non-Native</h5>
                                              <div class="row">
                                                 <div class="col-lg-4">
                                                    <ul>
                                                       <li>Terraform</li>
                                                       <li>Vault</li>
                                                       <li>Pulumi</li>
    
                                                    </ul>
                                                 </div>
                                                 <div class="col-lg-4">
                                                    <ul>
    
                                                       <li>Ansible</li>
                                                       <li>Python</li>
                                                       <li>YAML</li>
                                                    </ul>
                                                 </div>
                                                 <div class="col-lg-4">
                                                    <ul>
                                                       <li>Java</li>
    
                                                       <li>PowerShell</li>
                                                       <li>Snyk</li>
                                                       <li>Sentinel etc</li>
                                                    </ul>
                                                 </div>
                                              </div>
    
                                           </div>
                                           
    
                                        </div>
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
    
                                    <!-- ========== TAB PANE ========== -->
                                    <div role="tabpanel" class="tab-pane" id="IT-and-Cloud-Managed-Support">
                                        <div class="details-wrapper">
                                            <div class="details">
                                                <h3>Workplace Transformation / IT & Cloud Managed Support</h3>
    
                                                <h4>Flexible and customer centric support services designed with one and only objective of delivering business
                                                   value</h4>
                                                   <h5>we help extend the capability of your in-house IT teams or assume the role of your IT department for
                                                         SMEs.</h5>
                                                      <ul>
                                                         <li>Cloud Data centre managed support based on SRE principles.</li>
                                                         <li>IT operation support and Service desk services</li>
                                                         <li>Implementation &amp; migration to Google Workspace</li>
                                                         <li>Cloud based phone &amp; communication system.</li>
                                                         <li>Managed Hosting</li>
                                                         <li>Cyber security Assessments</li>
                                                         <li>Microsoft 365 Implementation.</li>
                                                         <li>Email Archiving and Backups</li>
                                                         <li>Email &amp; Endpoint security</li>
                                                         <li>MDR ( Managed Detection &amp; Response )</li>
                                                      </ul>
                                                   
                                            </div> <!-- //details -->
                                            
                                        </div> <!-- //.details-wrapper -->
                                    </div> <!-- //tab-pane -->
                                </div> <!-- //tab-content -->
                            </div>
                        </div><!-- //.row -->
                    </div> <!-- //tabbed-about-us -->
                </div>
            </div>


            <div id="services-acc" class="container">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sec-content">
                        <h6 class="sec-sub-title">Discover our Services</h6>
                        <h2 class="sec-title">All our services on offer are fixed price, no hidden cost</h2>
                        <p class="sec-text">
                            We only offer services which we do best.
                        </p>

                    </div>
                </div>
                <div class="accordion__wrapper">
               
            
                    <!-- Accordion 1  -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">FinOps</h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content active"> 
                            
                            <div id="FinOps" class="tabcontent active">
        
                                <div class="details">                                   
                            <h4>Financial Operations is an emerging discipline focused on managing cloud
                               costs vs cloud usage.</h4>
                            <div class="flex-row">
                               <div class="col-lg-12">
                                  <h5>What our FinOps service helps organisations achieve</h5>
                                  <div class="flex-row">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Reduced cloud spend and cost optimisation.</li>
                                            <li>Cost accountability and visibility.</li>
                                         </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Continuous cost improvement cycle.</li>
                                            <li>Cost governance with business objective alignment.</li>
                                         </ul>
                                    </div>
                                  </div>
                                  
                                 
                                  <h5>Our FinOps experts approach.</h5>
                                  <ul>
                                     <li>We follow industry proven FinOps foundation framework, actively
                                        developed by all major cloud providers along with Linux
                                        Foundation.</li>
                                     <li>We would Implement efficient FinOps practice across FinOps
                                        domains -
                                     </li>
                                     <div class="flex-row">
                                        <div class="col-lg-6">
                                            <ol>
                                                <li>Understand cloud usage and cost.</li>
                                                <li>Quantify business value.</li>
                                                
                                             </ol>
                                        </div>
                                        <div class="col-lg-6">
                                            <ol>
                                                <li>Optimise usage and cost.</li>
                                                <li>Effective ongoing operations.</li>
                                             </ol>
                                        </div>
                                     </div>
                                    
                                  
                                     <li>
                                        we understand, organisations are not at the same level when it
                                        comes
                                        to FinOps, hence our goal is to make incremental improvements
                                        using
                                        iterative phases.
                                     </li>
                                     <ol>
                                        <li><strong>Inform phase :- </strong>Identify cost, usage and efficiency data
                                           points.</li>
                                        <li><strong> Optimise phase :- </strong>Identify opportunities to improve cost and
                                           usage.</li>
                                        <li><strong> Operate phase :- </strong>Implement identified opportunities and
                                           iterate on the
                                           inform and optimise phases to achieve FinOps maturity.</li>
                                     </ol>
                                  </ul>
                               </div>
                               

                            </div>
                                </div>            
                        </div>
                    </div>
                    </div>
            
                    <!-- Accordion 2  -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">Cloud Consulting</h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content">
                            <div id="Cloud-Consulting" class="tabcontent active" style="display: block;">
                                <div class="details">
                                   

                            <h4>Our Cloud Consulting Services are highly customisable as per your operating
                               industry and to meet your business needs.</h4>

                            <div class="row">

                               <div class="col-lg-12">

                                  <h5>Our deep industry expertise </h5>
                                  <ul>
                                     <li>Life science, e-commerce Manufacturing</li>
                                     <li>Education Finance Start-ups Retail</li>

                                  </ul>
                               
                                  <h5>We take pride in formulating and providing a tailored service to
                                     address your exact pain-points.</h5>
                                  <ul>
                                     <li>Digital Transformation using Cloud technology.</li>
                                     <li>Cloud adoption and exit consultation.</li>
                                     <li>Operating model for Cloud.</li>
                                     <li>Disaster Recovery and BCP ( Business Continuity Planning )</li>
                                     <li>Multi-cloud consultation.</li>
                                     <li>Governance and Delivery management.</li>
                                     <li>Security &amp; Compliance consultation.</li>
                                     <li>Sustainability planning.</li>
                                  </ul>


                               </div>
                               

                            </div>
                                </div>
                             </div>
                        </div>
                    </div>
            
                    <!-- Accordion 3 -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">Cloud Landing environment (Zone) services </h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content">
                            <div id="Cloud-Landing-Environment" class="tabcontent active" style="display: block;">
                                <div class="details">
                                    

                            <h4>Our service helps organisations to build and optimise a Secure, Scalable,
                               and Compliant cloud environment for various business objectives. </h4>

                            <div class="row">

                               <div class="col-lg-12">

                                  <h5>Business objectives </h5>

                                  <ul>
                                    <li>Application migration</li>
                                    <li>Modernisation</li>
                                    <li>Transformation</li>
                                    <li>Disaster Recovery</li>
                                    <li>Backup management</li>
                                  </ul>
                                  
                                  
                                  <h5>We are cloud agnostic and offer landing zone implementation across
                                     all major public and private cloud operators.
                                     Includes both cloud native and non-native.</h5>
                               
                                  <ul>
                                     <li>(Amazon Web Services) AWS Landing zone accelerator (LZA) service
                                     </li>
                                     <li>(Google Cloud Platform) GCP Landing zone service.</li>
                                     <li>Azure landing zone environment.</li>
                                     <li>Oracle CIS benchmark cloud foundation environment.</li>
                                     <li>OVHcloud compliant environment.</li>

                                  </ul>


                               </div>
                               

                            </div>
                                </div>
                             </div>
                        </div>
                    </div>
        
                    <!-- Accordion 4 -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">Architecture and Migration services</h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content">
                            <div id="Architecture-and-Migration-Services" class="tabcontent active" style="display: block;">
                                <div class="details">
                                   

                            <h4>Our Architecture service offers design solutions for business applications
                               and workloads destined for cloud platforms. Our solution utilises proven
                               patterns and delivers on your business requirements of Data Privacy, Security, Resiliency, High Availability, Performance
                               efficiency, Operational excellence. </h4>

                            <div class="row">

                               <div class="col-lg-12">

                                    
                                  <h5>Patterns </h5>
                                  <div class="flex-row">
                                    <div class="col-lg-4"><ul>
                                        <li>Layered Multi-tier</li>
                                        <li>Event driven</li>
                                        <li>Client - Server</li>
                                        
                                        </ul>
                                      </div>
                                      <div class="col-lg-4"><ul>
                                        <li>Client - Server</li>
                                        <li>Microservices</li>
                                        
                                        </ul>
                                      </div>
                                    <div class="col-lg-4"><ul>
                                        
                                        
                                        <li>Containers/portable</li>
                                        <li>Serverless cloud native</li>
                                        </ul>
                                      </div>
                                  </div>
                                  
                                  <h5>Migration service</h5>
                                  <p>Moving applications and data to the cloud is a complex endeavour,
                                     however with our well-defined approach and migration tools
                                     expertise, we promise to make this an effortless and pleasant
                                     journey.</p>
                                     <div class="flex-row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li>Key benefits of moving to cloud</li>
                                                 <li>Improved scalability and performance</li>
                                                 <li>Cost reduction with flexibility.</li>
                                                 
    
                                              </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li>Agility and faster innovation.</li>
                                                 <li>Enhance availability and resilience. </li>
                                            </ul>
                                        </div>
                                     </div>
                                 
                                  
                                  <h5>Our Approach</h5>
                                  <ul>
                                     <li>Assessment &amp; Planning - Thorough assessment of existing
                                        infrastructure, data and applications.</li>
                                     <li>Risk Mitigation - Risk identification and mitigation to ensure a
                                        minimum disruption migration.</li>
                                     <li>Prioritization &amp; Test runs - Prioritise on factors like
                                        effort, criticality, complexity and dependencies.</li>
                                     <li>Execution - Implement using the industry proven 6R methodology,
                                        automation and migration tools.</li>
                                     <li>Optimisation &amp; Continuous Improvement - Post migration
                                        refinement to realise migration business outcomes.</li>

                                  </ul>

                               </div>
                               

                            </div>
                                </div>
                             </div>
                         </div>
                    </div>
            
                    <!-- Accordion 5 -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">DevOps Services</h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content">
                            <div id="DevOps-Services" class="tabcontent active" style="display: block;">
                                <div class="details">
                                   

                            <h4>In today's digital era, a business competitive advantage relies on an
                               efficient cloud, data and application delivery process. </h4>
                               <p>We provide a comprehensive devops service which helps organisations
                                to gain agility and consistency across their software delivery cycle
                                to achieve faster business results.
                             We offer cloud native, non-native or a combination of both devops
                                service with industry proven tools &amp; languages
                             Layered Multi-tier, Event driven, Client - Server, Microservices,
                                Containers/portable,
                                Serverless cloud native
                             </p><br>

                            <div class="row">

                               <div class="col-lg-12">

                                  
                                  <h5>Cloud-Native</h5>
                                  <div class="row">
                                     <div class="col-lg-4">
                                        <ul>
                                           <li>AWS, GCP &amp; Azure</li>
                                           <li>CodeBuild</li>
                                           <li>Code Deploy</li>
                                           <li>Azure Pipelines</li>

                                        </ul>
                                     </div>
                                     <div class="col-lg-4">
                                        <ul>

                                           <li>CodePipeline</li>
                                           <li>CloudFormation</li>
                                           <li>Cloud Build</li>
                                           <li>Azure Artifacts</li>
                                        </ul>
                                     </div>
                                     <div class="col-lg-4">
                                        <ul>
                                           <li>Cloud Deployment Manager</li>
                                           <li>Cloud Deploy</li>
                                           <li>Azure Devops</li>

                                        </ul>
                                     </div>
                                  </div>
                                  <h5>Non-Native</h5>
                                  <div class="row">
                                     <div class="col-lg-4">
                                        <ul>
                                           <li>Terraform</li>
                                           <li>Vault</li>
                                           <li>Pulumi</li>

                                        </ul>
                                     </div>
                                     <div class="col-lg-4">
                                        <ul>

                                           <li>Ansible</li>
                                           <li>Python</li>
                                           <li>YAML</li>
                                        </ul>
                                     </div>
                                     <div class="col-lg-4">
                                        <ul>
                                           <li>Java</li>

                                           <li>PowerShell</li>
                                           <li>Snyk</li>
                                           <li>Sentinel etc</li>
                                        </ul>
                                     </div>
                                  </div>

                               </div>
                               

                            </div>
                                </div>
                             </div>
                        </div>
                    </div>
        
                    <!-- Accordion 6 -->
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__question">Workplace Transformation / IT & Cloud Managed Support
                            </h2>
                            <span class="accordion__icon">
                                <i id="accordion-icon" class="ri-add-line"></i>
                            </span>
                        </div>
                        <div class="accordion__content">
                            <div id="Workplace-Transformation" class="tabcontent active" style="display: block;">
                                <div class="details">
                                    

                                    <h4>Flexible and customer centric support services designed with one and only objective of delivering business
                                       value</h4>
                                       <h5>we help extend the capability of your in-house IT teams or assume the role of your IT department for
                                             SMEs.</h5>
                                          <ul>
                                             <li>Cloud Data centre managed support based on SRE principles.</li>
                                             <li>IT operation support and Service desk services</li>
                                             <li>Implementation &amp; migration to Google Workspace</li>
                                             <li>Cloud based phone &amp; communication system.</li>
                                             <li>Managed Hosting</li>
                                             <li>Cyber security Assessments</li>
                                             <li>Microsoft 365 Implementation.</li>
                                             <li>Email Archiving and Backups</li>
                                             <li>Email &amp; Endpoint security</li>
                                             <li>MDR ( Managed Detection &amp; Response )</li>
                                          </ul>
                                       
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- services section end -->





        <!-- service section start -->

        <section class="service-sec sec-pb technology-desk">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="sec-content">
                            
                            <h2 class="sec-title text-center">Common Technologies Used By Our Engineers </h2>
                           
    
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="assets/images/non-native-logo/ansible.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/docker.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/java.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/kubernetes.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/microsoft.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/powershell.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/pulumi.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/python.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo//snyk (2).png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/terraform.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/non-native-logo/vault.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/1.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/7.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/images/native-logo/8.png" height="100" width="250" alt="" />
                        </div>
                    </div>
                </div>
                
              <!-- <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="700">
                
                <div class="col-6">
                  <div class="services-group no-gutter h-line-1-6 h-upper h-margin-0 h-regular">
      
      
                    
      
                    <div class="service-row-1 d-none d-lg-block">
                      <div class="service-item"><a class="service-content" href="javascript:;">
                          <div class="service-bg"></div>
                          <div class="service-icon">
                              <img src="assets/images/non-native-logo/ansible.png"/>
                          </div>
                          </a></div>
      
      
      
                          <div class="service-item"><a class="service-content" href="#">
                              <div class="service-bg"></div>
                              <div class="service-icon">
                                  <img src="assets/images/non-native-logo/docker.png"/>
                              </div>
                              </a></div>
      
      
      
      
                      <div class="service-item"><a class="service-content" href="#">
                          <div class="service-bg"></div>
                          <div class="service-icon">
                              <img src="assets/images/non-native-logo/java.png"/>
                          </div>
                          </a></div>
                    </div>
      
                    <div class="service-row-1 d-none d-lg-block">
                      
      
                      <div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                         <img src="assets/images/non-native-logo/kubernetes.png"/>
                      </div>
                      </a></div>
                      <div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                          <img src="assets/images/non-native-logo/microsoft.png"/>
                      </div>
                      </a></div>
      
      
      
                  <div class="service-item h-bold h-line-1-2 d-none d-lg-inline-block">
                    <div class="service-content service-content-no-hover">
                      <h4 class="aon-title text-black text-center">Non <span class="highlight1">Native</span></h4>
                    </div>
                  </div>    
      
                      <div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                         <img src="assets/images/non-native-logo/powershell.png"/>
                      </div>
                      </a></div><div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                          <img src="assets/images/non-native-logo/pulumi.png"/>
                      </div>
                      </a></div>
                </div>
      
                <div class="service-row-1 d-none d-lg-block">
                  <div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                         <img src="assets/images/non-native-logo/python.png"/>
                      </div>
                      </a></div>
      
      
      
                      <div class="service-item"><a class="service-content" href="#">
                          <div class="service-bg"></div>
                          <div class="service-icon">
                              <img src="assets/images/non-native-logo/snyk (2).png">
                          </div>
                          </a></div>
      
      
      
      
                  <div class="service-item"><a class="service-content" href="#">
                      <div class="service-bg"></div>
                      <div class="service-icon">
                          <img src="assets/images/non-native-logo/terraform.png"/>
                      </div>
                      </a></div>
                </div>
            </div>
                </div>


                <div class="col-6">
                    <div class="services-group no-gutter h-line-1-6 h-upper h-margin-0 h-regular">
        
        
                      
        
                      <div class="service-row-1 d-none d-lg-block">
                        <div class="service-item"><a class="service-content" href="javascript:;">
                            <div class="service-bg"></div>
                            <div class="service-icon">
                                <img src="assets/images/native-logo/1.png"/>
                            </div>
                            </a></div>
        
        
        
                            <div class="service-item"><a class="service-content" href="#">
                                <div class="service-bg"></div>
                                <div class="service-icon">
                                    <img src="assets/images/native-logo/2.png"/>
                                </div>
                                </a></div>
        
        
        
        
                        <div class="service-item"><a class="service-content" href="#">
                            <div class="service-bg"></div>
                            <div class="service-icon">
                                <img src="assets/images/native-logo/3.png"/>
                            </div>
                            </a></div>
                      </div>
        
                      <div class="service-row-1 d-none d-lg-block">
                        
        
                        <div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                           <img src="assets/images/native-logo/4.png"/>
                        </div>
                        </a></div>
                        <div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                            <img src="assets/images/native-logo/5.png"/>
                        </div>
                        </a></div>
        
        
        
                    <div class="service-item h-bold h-line-1-2 d-none d-lg-inline-block">
                      <div class="service-content service-content-no-hover">
                        <h4 class="aon-title text-black text-center"><span class="highlight1">Native</span></h4>
                      </div>
                    </div>    
        
                        <div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                           <img src="assets/images/native-logo/6.png"/>
                        </div>
                        </a></div><div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                            <img src="assets/images/native-logo/7.png"/>
                        </div>
                        </a></div>
                  </div>
        
                  <div class="service-row-1 d-none d-lg-block">
                    <div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                           <img src="assets/images/native-logo/8.png"/>
                        </div>
                        </a></div>
        
        
        
                        <div class="service-item"><a class="service-content" href="#">
                            <div class="service-bg"></div>
                            <div class="service-icon">
                                <img src="assets/images/non-native-logo/snyk (2).png">
                            </div>
                            </a></div>
        
        
        
        
                    <div class="service-item"><a class="service-content" href="#">
                        <div class="service-bg"></div>
                        <div class="service-icon">
                            <img src="assets/images/non-native-logo/terraform.png"/>
                        </div>
                        </a></div>
                  </div>
              </div>
                  </div>
              </div> -->
            </div>
          </section>

        <!-- <section id="technology" class="service-sec bg-light-greem sec-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-vertical">
                            
                                
                            <button class="tablinks-v" data-country="non-native" onmouseover="openCityVertical(event, 'non-native')">
                                <p data-title="non-native">Non-Native</p></button>
                            <button class="tablinks-v" onmouseover="openCityVertical(event, 'native')">Native</button>
                            
                        </div>
                        
                        <div id="non-native" class="tabcontent-v">
                            <h3>Non-Native</h3>
                            <div id="vertical-row" class="anon-services row">

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/ansible.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/java.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/microsoft.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/powershell.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/pulumi.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/python.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/snyk.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/Terraform.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/kubernetes.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/Vault.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/non-native-logo/docker.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                
                            </div>
                        </div>
                        
                        <div id="native" class="tabcontent-v">
                            <h3>Native</h3>
                            <div id="vertical-row" class="anon-services row">

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/1.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/2.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/3.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeIn" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/4.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeIn" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/5.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeIn" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/6.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeIn" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/7.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 col-lg-3 col-md-3 col-sm-5 col-6 text-center">
                                    <div class="item">
                                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeIn" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeIn;">
                                            <div class="aon-servi-box">
                                                <div class="aon-servi-inr">
                                                    <div class="aon-servi-icon">
                                                        <img src="assets/images/native-logo/8.png"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                



                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="clearfix"></div>
                        
                    </div>
                    
                </div>
            </div>

           
        </section> -->

        <section id="technology-mobile" class="service-sec sec-ptb">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                   
                        <h2 class="sec-title text-center">Technologies We've Worked on </h2>
                </div>
            </div>
            <h2 class="aon-title text-black text-center">Non Native</h2>
            <div id="mobile-vertical-row" class="anon-services row">

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/Ansible.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/java.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/microsoft.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/powershell.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/pulumi.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/python.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/snyk.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/Terraform.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/Vault.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/kubernetes.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/non-native-logo/docker.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                
            </div>
        </section>

        <section id="technology-mobile" class="service-sec sec-ptb">
            <h2 class="aon-title text-black text-center">Native</h2>
            <div id="mobile-vertical-row" class="anon-services row">

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/1.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/2.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/3.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/4.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/5.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/6.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/7.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                    <div class="item">
                        <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="aon-servi-box">
                                <div class="aon-servi-inr">
                                    <div class="aon-servi-icon">
                                        <img src="assets/images/native-logo/8.png">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </section>
        <!-- services section end -->
        <!-- newslatter section start --
        <section class="newslatter-sec bg-green">
            <div class="container">
                <div class="row aximo_screenfix_left">
                    <div class="col-lg-7 p-0">
                        <div class="video-sec">
                            <div class="video-sec-overlay d-flex align-items-center justify-content-center">
                                <a href="#" class="video-btn"><i class="flaticon-play-button-arrowhead"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <div class="sec-content">
                            <h2 class="sec-title">Subscribe to Our Newsletter</h2>
                            <p class="sec-text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="Subscribe-form d-sm-flex">
                                <input type="email" class="form-control" placeholder="Enter Your Email" id="cta-email"
                                    name="cta-eail" required="" />
                                <div class="submit-btn">
                                    <button type="submit" class="thm-btn">
                                        <span class="txt">Subscribe Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newslatter section start -->


        <!-- about section start -->
        <section class="about-sec sec-pb" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-images">
                            <div class="sec-img-one overflow-hidden wow fadeInLeft" data-wow-delay="500ms"
                                data-wow-duration="1500ms">
                                <img src="assets/images/about/about01.png" alt="about-img" />
                            </div>
                            <div class="sec-img-two overflow-hidden wow fadeInRight" data-wow-delay="500ms"
                                data-wow-duration="1500ms">
                                <img src="assets/images/about/about02.png" alt="about-img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 tab-col-gap wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="sec-content">
                            <h6 class="sec-sub-title">About <span class="highlight1">DolpTec</span></h6>
                            <h2 class="sec-title">The Worldwide Clouds Belong to Us!</h2>
                            <!-- <p class="sec-text">
                                At DolpTec, we are passionate about our customer’s success. Our belief is that cloud transformation to make an impact within an organisation requires a full 360° effort, hence we work with our customer at every step to review existing processes, skill composition and technology gaps. We provide a full set of services from cloud adoption, migration, architecture, cost management, development and support to ensure the transformation work delivers the best possible outcome to our customers.<br>

                                
                            </p> -->
                            <ul class="sec-list-item">
                                <h3>Our Vision</h3>
                                <li><i class="fa-solid fa-square-check"></i> To make public cloud platforms Secure, Compliant, Effective and Cost Efficient to adopt and operate.
                                </li>
                                
                            </ul>
                            <ul class="sec-list-item">
                                <h3>Our Believe</h3>
                                <li><i class="fa-solid fa-square-check"></i>Cloud is more than technology: It's a catalyst for reimagining workflows, optimizing processes, and disrupting conventional industries.
                                </li>

                                <li><i class="fa-solid fa-square-check"></i>Transformation requires a human touch: We partner with you, understanding your unique goals and crafting solutions tailored to your success.
                                </li>

                                <li>
                                    <i class="fa-solid fa-square-check"></i>Innovation fuels progress: We harness the power of the cloud to help you experiment, iterate, and build solutions that push boundaries.
                                </li>
                               
                                
                            </ul>
                            <div class="sec-btn">
                                <a class='thm-btn' href='javascript:;' onclick="togglePopup()"><span class="txt">Speak to an expert</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- Serice icon section -->
        <div class="service-sec sec-ptb">
            <div class="container">
                <div class="section-content">
                    <!--Title Section Start-->
                    <div class="sec-content">
                        <!-- <span class="aon-sub-title text-white">Our Services List</span> -->

                            <h2 class="sec-title text-center">Unleash your full potential with <span class="highlight1" >DolpTec</span></h2>

                            
                            <p class="sec-text text-center">
                                The whole new next level of service, at a competitive price
                            </p>
                    </div>
                    <!--Title Section End-->

                    <div class="aon-features-top-area">
                        <div class="anon-services row">
                            <!-- COLUMNS 1 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-1.png">
                                                </div>
                                                <h4 class="aon-servi-title">AWS Well-Architected review</h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-2.png">
                                                </div>
                                                <h4 class="aon-servi-title">Google cloud Well-Architected review</h4>
                                                <!-- <div class="aon-servi-text">IT Solution</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-3.png">
                                                </div>
                                                <h4 class="aon-servi-title">Microsoft / office 365 A3/E3/E5 Licences</h4>
                                                <!-- <div class="aon-servi-text">IT Stall</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-4.png">
                                                </div>
                                                <h4 class="aon-servi-title">Microsoft Intune & Defender plans </h4>
                                                <!-- <div class="aon-servi-text">IT Student</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-6.png">
                                                </div>
                                                <h4 class="aon-servi-title">Google Workspace Business plus/starter and Enterprise subscriptions </h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- COLUMNS 6 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-6.png">
                                                </div>
                                                <h4 class="aon-servi-title">Google workspace for Education</h4>
                                                <!-- <div class="aon-servi-text">IT Care</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-7.png">
                                                </div>
                                                <h4 class="aon-servi-title">Jamf Pro for macOS & iOS managed services</h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-8.png">
                                                </div>
                                                <h4 class="aon-servi-title">DevOps delivery review service </h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 9 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-9.png">
                                                </div>
                                                <h4 class="aon-servi-title">Sponsored Assessment for Cloud Migration</h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 10 -->
                            <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                                <div class="item">
                                    <div class="aon-servi-box-wrap aon-icon-effect  wow fadeInDown" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                                        <div class="aon-servi-box">
                                            <div class="aon-servi-inr">
                                                <div class="aon-servi-icon">
                                                    <img src="assets/images/services-icon/icon-10.png">
                                                </div>
                                                <h4 class="aon-servi-title">Discounts on AWS/Azure and Google cloud billing</h4>
                                                <!-- <div class="aon-servi-text">IT Recharge</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="owl-carousel mos-service-carousel aon-owl-arrow">



                        </div> -->
                    </div>

                </div>
            </div>
        </div>
<!-- service icon section ends -->

        <!-- project section start -->
        <section class="project-sec sec-pb" id="our-approach">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-content">
                            <h6 class="sec-sub-title">Our Approach</h6>
                            <h2 class="sec-title">Your Partner in Innovative Cloud IT Solutions for Business</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-content">
                            <p>We specialize in providing scalable, secure, and efficient cloud
                                services that drive growth and streamline operations.
                                From infrastructure management to advanced AI and machine
                                learning capabilities, our solutions are designed to meet your
                                unique business needs. Consult with <span class="highlight1">DolpTec</span> experts to transform
                                your IT landscape with cutting-edge technology and expert support,
                                enabling you to focus on your core business objectives.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col">
                        <div class="project-slider owl-carousel owl-theme ptb-5">


                            <div class="item single-project">
                                <div class="aon-case-box-wrap shine-hover  wow fadeInDown" data-wow-duration="2000ms">
                                    <div class="aon-case-pic shine-box">
                                        <a class="elem" href="assets/images/project/project1.png"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic1.jpg">
                                            <img src="assets/images/project/project1.png" alt="#">
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
                                        <a class="elem" href="assets/images/project/project2.png"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic2.jpg">
                                            <img src="assets/images/project/project2.png" alt="#">
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
                                        <a class="elem" href="assets/images/project/project3.png"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic3.jpg">
                                            <img src="assets/images/project/project3.png" alt="#">
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
                                        <a class="elem" href="assets/images/project/project4.png"
                                            title="Nh-16 Highway Bridge" data-lcl-thumb="images/case/pic4.jpg">
                                            <img src="assets/images/project/project4.png" alt="#">
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
                                        <img src="assets/images/project/project2.png" alt="project" />
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
                                        <img src="assets/images/project/project3.png" alt="project" />
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
                                        <img src="assets/images/project/project2.png" alt="project" />
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
                
<img id="dolptec-gif" src="assets/images/our-approch.gif"/>
            </div>
        </section>

        <!-- <section class="sec-pb">
            
            <div class="txt-wrapers ptb-5">
               
                <h2 class="highlight">With <span class="highlight1">DolpTec</span></h2>
                
              </div>
              <div class="arrow-right">
                <img src="assets/images/right.png"/>
              </div>
        </section> -->
       


        <!-- project section start -->
        <!-- business section start -->
        <section class="service-details-content sec-ptb bg-light-greem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-content h-100 d-flex justify-content-center flex-column">
                            
                            <h2 class="sec-title"><span class="highlight1">DolpTec's</span> Expert Cloud Consultants Answer Your Every Question</h2>
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
                                    <li>Where should I start on my cloud journey?</li>
                                    <li>What applications can be ‘lifted and shifted’ and which ones
                                        need to be refactored?</li>
                                    <li>Which applications should I migrate first?</li>
                                    <li>How long will a migration take and what will it cost?</li>
                                    <li>When will I see a return on investment?</li>
                                    <li>How can I get buy-in from stakeholders?</li>
                                    <li>Which cloud platform is best suited to my requirements?</li>
                                    <li>What benefits can the cloud bring to my business?</li>
                                </ul>
                                <div class="sec-btn">
                                    <a class="thm-btn" href="javascript:;" onclick="togglePopup()"><span class="txt">Speak to an expert</span></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 tab-col-gap">
                        <div class="sec-images wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="sec-img-one">
                                <img src="assets/images/about/about03.png" alt="about-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business section start -->
        <!-- company quick info start -->

        <!-- company quick info end -->
        <!-- pricing section start -->
        <section class="pricing-sec sec-ptb">
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
                                <img src="assets/images/client-logo/1.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/2.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/3.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 4 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/4.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>
                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/5.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>

                        <!-- Column 5 -->
                        <div class="mb-5 col-lg-2 col-md-3 col-sm-5 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/17.png" alt="Image" style="width: 85%;">
                            </div>
                        </div>



                    </div>


                    <div class="row align-items-center justify-content-center  wow fadeInDown"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInDown;">

                        <!-- Column 7 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/6.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 8 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/7.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 9 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/8.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 10 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/11.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 11 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/10.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 12 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/9.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 13 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/12.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 14 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/13.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 15 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/14.png" alt="Image">
                            </div>
                        </div>

                        <!-- Column 16 -->
                        <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <div class="site-clent-logo">
                                <img src="assets/images/client-logo/15.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- testimonial section end -->


        <!-- Testimonial section -->
        <!-- carousel -->
        <section class="testimonial_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about_content">
                            <div class="background_layer"></div>
                            <div class="layer_content">
                                <div class="sec-content mb-5">
                                    <h6 class="sec-sub-title"><span class="highlight1">DolpTec</span> Testimonials</h6>
                                    <h2 class="sec-title text-white">Happy Customers &
                                        Clients Integrity</h2>
                                    <p class="text-white"><span class="highlight1">DolpTec's</span> goal is to focus on customers' Cloud Landing Zones
                                        and be the best at cloud-serving supporters for them. Our cloud IT consultation
                                        expert strategies are more efficient and operational; when it comes to our
                                        commitment to customers.
                                    </p>
                                </div>

                                <a href="#">Get Cloud Consultation<i class="icofont-long-arrow-right"></i></a>
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
                                                    <h6>Robert Clarkson</h6>
                                                    <span>CEO, Axura</span>
                                                    <div class="aon-testmo-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well
                                                    organized and knowledgeable. I was most satisfied with the quality
                                                    of the workmanship. They did excellent work.</p>
                                            </div>
                                            <div class="images_box">
                                                <div class="testimonial_img">
                                                    <img class="img-center" src="assets\images\team\team1.png"
                                                        alt="images not found">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials">
                                            <div class="testimonial_content">
                                                <div class="testimonial_caption">
                                                    <h6>Robert Clarkson</h6>
                                                    <span>CEO, Axura</span>
                                                    <div class="aon-testmo-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well
                                                    organized and knowledgeable. I was most satisfied with the quality
                                                    of the workmanship. They did excellent work.</p>
                                            </div>
                                            <div class="images_box">
                                                <div class="testimonial_img">
                                                    <img class="img-center" src="assets\images\team\team1.png"
                                                        alt="images not found">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials">
                                            <div class="testimonial_content">
                                                <div class="testimonial_caption">
                                                    <h6>Robert Clarkson</h6>
                                                    <span>CEO, Axura</span>
                                                    <div class="aon-testmo-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <p>The team at Tectxon industry is very talented, dedicated, well
                                                    organized and knowledgeable. I was most satisfied with the quality
                                                    of the workmanship. They did excellent work.</p>
                                            </div>
                                            <div class="images_box">
                                                <div class="testimonial_img">
                                                    <img class="img-center" src="assets\images\team\team1.png"
                                                        alt="images not found">
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
        </section>

        <!-- Testimonials End -->

        <!-- blog section start -->
        <section class="blog-sec sec-ptb" id="resources">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-content">
                            <h6 class="sec-sub-title">Our Resources</h6>
                            <h2 class="sec-title">Let's Checkout Our All Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-sidebar-box">
                                <ul>
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <!-- blog sidebar box item 1 -->
                                        <div class="img-box">
                                            <img src="assets/images/blog/blog-s1.png" alt="blog" />
                                        </div>
                                        <div class="content-box">
                                           
                                            <div class="title-box">
                                                <h3><a href='javascript:;'>AWS - Build & run applications</a></h3>
                                        <p>The cloud provides a platform on which businesses can innovate faster. 
                                            According to the 2022 Forrester State of the Cloud in North America report, 
                                            94% of US enterprises are using cloud.</p>
                                      
                                            </div>
                                            <div class="btn-box">
                                               
                                                <button class="thm-btn btn" id="download-brochure"><span class="txt">Download Brochure</span></button>
                                            </div>
                                        </div>
                                    </li>
                                   
    
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <!-- blog sidebar box item 1 -->
                                        <div class="img-box">
                                            <img src="assets/images/blog/blog-s3.png" alt="blog" />
                                        </div>
                                        <div class="content-box">
                                            
                                            <div class="title-box">
                                                <h3><a href='javascript:;'>Google Cloud - Make your journey to the cloud successful and cost effective</p>
                                                    </a></h3>
                                      <p> with guidance from Google Cloud’s ebook. It includes:
    
                                        - Critical considerations for a seamless migration
                                        - Questions to help you understand your existing environment
                                        - Tips for maximizing the ROI of your move
                                        - Examples of successful migrations from companies like Twitter, Evernote, and Etsy</p>
                                            </div>
                                            <div class="btn-box">
                                               
                                                <button class="thm-btn btn" id="download-brochure1"><span class="txt">Download Brochure</span></button>
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
                                    data-wow-delay="700ms" data-wow-duration="1500ms">
                                    <!-- blog sidebar box item 2 -->
                                    <div class="img-box">
                                        <img src="assets/images/blog/blog-s2.png" alt="blog" />
                                    </div>
                                    <div class="content-box">
                                       
                                        <div class="title-box">
                                            <h3><a href='javascript:;'>AWS - Unlock Your Growth Potential with Migration to Cloud</a></h3>
                                            <p>This eBook is intended to help decision-makers in small and medium-sized businesses understand the benefits of migrating data and applications to the cloud.</p>
                                        </div>
                                        <div class="btn-box">
                                           
                                            <button class="thm-btn btn" id="download-brochure2"><span class="txt">Download Brochure</span></button>
                                        </div>
                                    </div>
                                </li>
                                    <li class="blog-sidebar-box-item blog-item d-sm-flex wow fadeInUp"
                                        data-wow-delay="700ms" data-wow-duration="1500ms">
                                        <!-- blog sidebar box item 2 -->
                                        <div class="img-box">
                                            <img src="assets/images/blog/blog-s4.png" alt="blog" />
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
                                                <h3><a href='javascript:;'>Microsoft Azure - Simplifying cloud migration and modernization journey with Microsoft Azure
    
    
                                                </a></h3>
                                                <p>This eBook is intended to help decision-makers in small and medium-sized businesses understand the benefits of migrating data and applications to the cloud.</p>
                                            </div>
                                            <div class="btn-box">
                                               
                                                <button class="thm-btn btn" id="download-brochure3"><span class="txt">Download Brochure</span></button>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
    
    
                            </div>
    
                        </div>
    
                    </div>
                </div>
                
            </div>
        </section>
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

                    <div id="footer-second-row" class="flex flex-row items-center justify-center gap-3">
                        <div class="col-lg-8">
                            <div class="ftr-copyright text-white">© Copyright <span class="highlight1">DolpTec</span>
                                     All Rights Reserved</div>
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
    </div>




     <!-- Trigger/Open The Popup -->


   <!-- The Popup -->
   <!-- The Popup -->


   <div id="popup" class="popup">
    <!-- Popup content -->
    <div class="popup-content">
        <span class="close">&times;</span>
        <form action="{{ route('downloadBrochure') }}" method="POST" class="contact-form1" id="home-enquire-form">
               {!! csrf_field() !!}
               <h5 class="title">Book your free consultation today !!</h5>
               <div>
                   <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" name="name" placeholder="Name" required>
               </div>
               <div>
                   <input type="email" class="form-control rounded border-white mb-3 form-input" name="email" placeholder="Email" required>
               </div>
               <div>
                   <input type="tel" class="form-control rounded border-white mb-3 form-input" name="phone" placeholder="Phone" required>
               </div>
               <input type="hidden" name="pdf_file" id="pdf_file">
               <div class="submit-button-wrapper">
                   <button type="submit" class="btn thm-btn" onclick="setPdfFile('aws-ebook-build-run-applications.pdf')">Download Brochure 1</button>
                   <button type="submit" class="btn thm-btn" onclick="setPdfFile('pdf2.pdf')">Download Brochure 2</button>
                   <button type="submit" class="btn thm-btn" onclick="setPdfFile('pdf3.pdf')">Download Brochure 3</button>
                   <button type="submit" class="btn thm-btn" onclick="setPdfFile('pdf4.pdf')">Download Brochure 4</button>
               </div>
           </form>
           
           <script>
           function setPdfFile(fileName) {
               document.getElementById('pdf_file').value = fileName;
           }
           </script>
           
       
    </div>
</div>

   
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
</body>

</html>