<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .services-mega-menu {
        min-width: min(980px, calc(100vw - 2rem));
        padding: 0;
        border: 1px solid rgba(15, 23, 42, 0.08) !important;
        border-radius: 20px !important;
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.14) !important;
        overflow: hidden;
        background: #fff !important;
    }

    .services-mega-menu::before {
        left: 50% !important;
    }

    .services-mega-grid.width-full-3 {
        width: 100%;
        display: grid;
        grid-template-columns: 1.08fr 0.96fr 0.96fr;
        gap: 0;
        background:
            radial-gradient(circle at top left, rgba(0, 208, 255, 0.10), transparent 28%),
            linear-gradient(135deg, #ffffff 0%, #f8fbff 100%);
    }

    .services-mega-grid.width-full-3 .dropdown-grid-item,
    .services-mega-grid.width-full-3 .dropdown-grid-item.last-item {
        width: auto;
        min-width: 0;
        grid-column-start: auto;
        padding: 20px 16px 18px;
        border-right: 1px solid rgba(15, 23, 42, 0.06);
        background: transparent;
    }

    .services-mega-grid .dropdown-grid-item:last-child {
        border-right: 0;
        background: linear-gradient(180deg, #f4fbff 0%, #eef7ff 100%);
    }

    .services-panel .drop-heading {
        margin: 0 0 8px;
        padding: 0;
        font-size: 0.72rem;
        line-height: 1.2;
        letter-spacing: 0.12em;
        color: #0f172a;
        opacity: 0.9;
    }

    .services-panel .drop-heading:not(:first-child) {
        margin-top: 14px;
        padding-top: 12px;
        border-top: 1px solid rgba(15, 23, 42, 0.08);
    }

    .services-panel .dropdown-link {
        display: flex;
        align-items: center;
        gap: 10px;
        min-height: 40px;
        margin-bottom: 5px;
        padding: 8px 10px !important;
        border: 1px solid transparent;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.72);
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease, background 0.22s ease;
    }

    .services-panel .dropdown-link:last-child {
        margin-bottom: 0;
    }

    .services-panel .dropdown-link span {
        flex: 0 0 32px;
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 0 !important;
        border-radius: 10px;
        background: rgba(0, 51, 102, 0.10);
        color: #003366;
        font-size: 0.85rem;
    }

    .services-panel .dropdown-link .drop-title {
        flex: 1;
        text-transform: none;
        font-size: 0.86rem;
        line-height: 1.25;
        color: #334155;
        font-weight: 600;
    }

    .services-panel .dropdown-link:hover {
        transform: translateY(-2px);
        border-color: rgba(0, 51, 102, 0.22);
        background: #ffffff;
        box-shadow: 0 10px 20px rgba(15, 23, 42, 0.07);
    }

    .services-panel .dropdown-link:hover .drop-title,
    .services-panel .dropdown-link:hover span {
        color: #003366;
    }

    .offcanvas-body .services-mega-menu {
        min-width: 100%;
        border-radius: 16px !important;
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.10) !important;
        border-color: rgba(15, 23, 42, 0.08) !important;
    }

    .offcanvas-body .services-mega-grid {
        display: grid;
        grid-template-columns: 1fr;
        background: #fff;
    }

    .offcanvas-body .services-mega-grid.width-full-3 .dropdown-grid-item,
    .offcanvas-body .services-mega-grid.width-full-3 .dropdown-grid-item.last-item {
        padding: 16px 14px;
        border-right: 0;
        border-bottom: 1px solid rgba(15, 23, 42, 0.06);
        border-radius: 0;
    }

    .offcanvas-body .services-mega-grid .dropdown-grid-item:last-child {
        border-bottom: 0;
    }

    @media (max-width: 1500px) {
        .services-mega-menu {
            min-width: min(860px, calc(100vw - 2rem));
        }

        .services-mega-grid.width-full-3 .dropdown-grid-item,
        .services-mega-grid.width-full-3 .dropdown-grid-item.last-item {
            padding: 18px 14px 16px;
        }

        .services-panel .drop-heading {
            font-size: 0.68rem;
            margin-bottom: 7px;
        }

        .services-panel .drop-heading:not(:first-child) {
            margin-top: 12px;
            padding-top: 10px;
        }

        .services-panel .dropdown-link {
            min-height: 38px;
            padding: 7px 9px !important;
            gap: 9px;
            margin-bottom: 4px;
        }

        .services-panel .dropdown-link span {
            flex: 0 0 30px;
            width: 30px;
            height: 30px;
            font-size: 0.8rem;
        }

        .services-panel .dropdown-link .drop-title {
            font-size: 0.81rem;
            line-height: 1.2;
        }
    }

    @media (max-width: 1250px) {
        .services-mega-menu {
            min-width: min(790px, calc(100vw - 1.75rem));
        }

        .services-mega-grid.width-full-3 {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .services-mega-grid.width-full-3 .dropdown-grid-item,
        .services-mega-grid.width-full-3 .dropdown-grid-item.last-item {
            padding: 16px 12px 14px;
        }

        .services-panel .drop-heading {
            font-size: 0.64rem;
            letter-spacing: 0.1em;
        }

        .services-panel .drop-heading:not(:first-child) {
            margin-top: 10px;
            padding-top: 9px;
        }

        .services-panel .dropdown-link {
            min-height: 34px;
            padding: 6px 8px !important;
            gap: 8px;
            border-radius: 10px;
        }

        .services-panel .dropdown-link span {
            flex: 0 0 28px;
            width: 28px;
            height: 28px;
            border-radius: 8px;
            font-size: 0.76rem;
        }

        .services-panel .dropdown-link .drop-title {
            font-size: 0.76rem;
            line-height: 1.15;
        }
    }

    @media (max-width: 991px) {
        .services-mega-menu {
            min-width: min(680px, calc(100vw - 1.5rem));
        }

        .services-mega-grid.width-full-3 {
            grid-template-columns: 1fr;
        }

        .services-mega-grid.width-full-3 .dropdown-grid-item,
        .services-mega-grid.width-full-3 .dropdown-grid-item.last-item {
            border-right: 0;
            border-bottom: 1px solid rgba(15, 23, 42, 0.06);
        }

        .services-mega-grid .dropdown-grid-item:last-child {
            border-bottom: 0;
        }
    }

    @media (max-width: 575px) {
        .services-panel .dropdown-link {
            min-height: 38px;
            padding: 8px 9px !important;
            border-radius: 11px;
        }

        .services-panel .dropdown-link span {
            flex-basis: 30px;
            width: 30px;
            height: 30px;
            border-radius: 8px;
            font-size: 0.8rem;
        }

        .services-panel .drop-heading {
            font-size: 0.68rem;
        }
    }
</style>
</head>

<body>

    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="assets/image/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <div class="main-wrapper">
        <!-- <div class="header-top " style="border-bottom: #8080809e 0.3px solid;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <ul class="nav_header_list">
                                <li><a href="https://www.google.com/maps?ll=19.203165,72.834758&z=17&t=m&hl=en&gl=US&mapclient=embed&cid=14052366403472457656"><img src="assets/image/icons/pin.png" alt="image">Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067. Maharashtra - INDIA.</a></li>
                                <li><a href="mailto:info@technofra.com"><img src="assets/image/icons/mail.png" alt="image">info@technofra.com</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <header class="main-header position-absolute w-100 ca-header">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">

                    <a href="index" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/image/icons/technofra_logo.png" alt="logo"
                            class="img-fluid logo-white tech_logo" />
                        <img src="assets/image/icons/technofra_logo.png" alt="logo"
                            class="img-fluid logo-color tech_logo" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="index" class="nav-link">Home</a></li>
                            <li><a href="about" class="nav-link">About US</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Services</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white services-mega-menu">
                                    <div class="dropdown-grid rounded-custom width-full-3 services-mega-grid">
                                        <div class="dropdown-grid-item bg-white radius-left-side services-panel">
                                            <h6 class="drop-heading">WEB & APP SOLUTIONS</h6>
                                            <a href="web-design" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-web-programming"></i>
                                                </span>
                                                <div class="drop-title">Web Design & Development</div>
                                            </a>
                                            <a href="shopify-website-development" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-code"></i>

                                                </span>
                                                <div class="drop-title">Shopify</div>
                                            </a>
                                            <a href="wordpress-development" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fab fa-wordpress"></i>
                                                </span>
                                                <div class="drop-title">WordPress</div>
                                            </a>
                                            <a href="cms-website-design" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-file-code"></i>

                                                </span>
                                                <div class="drop-title">CMS</div>
                                            </a>
                                            <a href="ios-app-development" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-mobile-alt"></i>
                                                </span>
                                                <div class="drop-title">ios App</div>
                                            </a>
                                            <a href="android-app-development" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-mobile-alt"></i>
                                                </span>
                                                <div class="drop-title">Android App</div>
                                            </a>
                                            <a href="website-maintenance" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-code-branch"></i>
                                                </span>
                                                <div class="drop-title">Web & App Maintenance</div>
                                            </a>
                                            <h6 class="drop-heading">Hosting & IT Services</h6>
                                            <a href="domain-hosting-services" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-server-storage"></i>
                                                </span>
                                                <div class="drop-title">Domain & Hosting
                                                </div>
                                            </a>
                                            <a href="it-infrastructure" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-laptop-code"></i>

                                                </span>
                                                <div class="drop-title">IT Infrastructure
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item bg-white services-panel">
                                           <h6 class="drop-heading">BRANDING</h6>
                                            <a href="branding" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-vector"></i>
                                                </span>
                                                <div class="drop-title">Branding
                                                </div>
                                            </a>
                                            <a href="ui-ux" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-palette"></i>
                                                </span>
                                                <div class="drop-title">UI/UX
                                                </div>
                                            </a>
                                            <h6 class="drop-heading">Online Marketing Services</h6>
                                            <a href="digital-marketing" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-chart-line"></i>
                                                </span>
                                                <div class="drop-title">DIGITAL MARKETING</div>
                                            </a>
                                            <a href="seo" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                                <div class="drop-title">Search Engine Optimization (SEO)</div>
                                            </a>
                                            <a href="ppc" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-bullhorn"></i>
                                                </span>
                                                <div class="drop-title">Paid Marketing (PPC)</div>
                                            </a>
                                            <a href="social-media-marketing" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-share-alt"></i>
                                                </span>
                                                <div class="drop-title">Social Media Marketing</div>
                                            </a>
                                            <a href="content-marketing" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-pen-nib"></i>
                                                </span>
                                                <div class="drop-title">Content Marketing</div>
                                            </a>
                                             
                                            
                                      
                                        </div>
                                        <div class="dropdown-grid-item last-item bg-light-subtle radius-right-side services-panel">

                                            <h6 class="drop-heading">api integration</h6>
                                            <a href="sms-otp" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                                <div class="drop-title">SMS/OTP</div>
                                            </a>
                                            <a href="whatsapp" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fab fa-whatsapp"></i>
                                                </span>
                                                <div class="drop-title">WhatsApp</div>
                                            </a>
                                            <a href="email-form" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                <div class="drop-title">Email Form</div>
                                            </a>
                                            <a href="chatbot" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-comments"></i>

                                                </span>
                                                <div class="drop-title">Chat Bot</div>
                                            </a>
                                            <a href="google-analyatics" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-analytics"></i>
                                                </span>
                                                <div class="drop-title">Google Analytics</div>
                                            </a>
                                            <a href="google-forms" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-clipboard"></i>
                                                </span>
                                                <div class="drop-title">Google Forms</div>
                                            </a>
                                            <a href="ivr-call" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-headset"></i>
                                                </span>
                                                <div class="drop-title">IVR/Call</div>
                                            </a>
                                            <a href="payment-gateway" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fa fa-credit-card"></i>
                                                </span>
                                                <div class="drop-title">Payment Gateway
                                                </div>
                                            </a>
                                            <a href="ai" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="fas fa-robot"></i>
                                                </span>
                                                <div class="drop-title">Ai
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="portfolio" class="nav-link">Portfolio</a></li>
                            <li><a href="career" class="nav-link">Career</a></li>
                            <li><a href="contact" class="nav-link">Contact</a></li>



                        </ul>
                    </div>

                    <div class="action-btns">
                        <!-- Theme Toggle Button -->
                        <span class="form-check d-inline-block">
                            <input class="form-check-input d-none tt-x" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <span class="btn btn-link p-1 tt-theme-toggle">
                                    <span class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light">
                                        <i class="flaticon-sun-1 fs-lg"></i>
                                    </span>
                                    <span class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark">
                                        <i class="flaticon-moon-1 fs-lg"></i>
                                    </span>
                                </span>
                            </label>
                        </span>

                        <!-- ENQUIRY NOW Button -->
                        <a href="enquirynow" class="btn btn-outline-info mob_non tab-non">ENQUIRY NOW</a>
                        <div class="menu-sidebar dn tab-non">
                            <button style="border: none;"><img src="assets/image/icons/right_side_menu.png" style="border-radius: 0px;" alt="Toggler"></button>
                        </div>

                    </div>
                </div>



    </div>
    </nav>
    <section class="hidden-bar">
        <div class="inner-box ">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title mrtmb ptb-20">
                <h4>Free Consultancy</h4>
                <h6 class="navnav"></h6>
                <span class="wh">A brand's digital strategy is a part of its overall business strategy, and as a leading branding agency we make that happen!</span>
            </div>

            <div class="appointment-form">
                <ul class="list-style-one navnav">
                    <h6 class="htsa ptb-20" style="color:#ffffff;">CONTACT US</h6>
                    <li class="wh "><i class="fas fa-map-marked-alt"></i>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067. Maharashtra - INDIA.</li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div>
                            <a class="text-white" href="tel:+918080621003">+91 8080 62 1003</a>

                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div>
                            <a class="text-white" href="mailto:info@technofra.com">info@technofra.com</a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="social-style-one navsoc ">
                <div class="footer-single-col text-start " style="padding-top: 20px;">
                    <ul class="list-unstyled list-inline footer-social-list mb-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/Technofra/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/technofra.company/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://x.com/Technofra_"><i class="fab fa-x-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://hk.linkedin.com/company/technofra"><i class="fa-brands fa-linkedin-in"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="offcanvas dpbgback offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
        <div class="offcanvas-header d-flex align-items-center mt-4">
            <a href="index" class="d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="assets/image/icons/technofra_logo.png" alt="logo" class="img-fluid ps-2 tech_logo" />
            </a>
            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="flaticon-cancel"></i>
            </button>
        </div>
        <div class="offcanvas-body z-10">
       
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                <li><a href="index" class="nav-link">Home</a></li>
                <li><a href="about" class="nav-link">About US</a></li>
             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white services-mega-menu">
                        <div class="dropdown-grid rounded-custom width-full-3 services-mega-grid">
                            <div class="dropdown-grid-item bg-white services-panel">
                                <h6 class="drop-heading">WEB & APP SOLUTIONS</h6>
                                <a href="web-design" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-web-programming"></i>
                                    </span>
                                    <div class="drop-title">Web Design & Development</div>
                                </a>
                                <a href="shopify-website-development" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-web-programming"></i>
                                    </span>
                                    <div class="drop-title">Shopify</div>
                                </a>
                                <a href="wordpress-development" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-web-programming"></i>
                                    </span>
                                    <div class="drop-title">WordPress</div>
                                </a>
                                <a href="cms-website-design" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-web-programming"></i>
                                    </span>
                                    <div class="drop-title">CMS</div>
                                </a>
                                <a href="ios-app-development" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-mobile-alt"></i>
                                    </span>
                                    <div class="drop-title">ios App</div>
                                </a>
                                <a href="android-app-development" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-mobile-alt"></i>
                                    </span>
                                    <div class="drop-title">Android App</div>
                                </a>
                                <a href="website-maintenance" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-web-programming"></i>
                                    </span>
                                    <div class="drop-title">Web & App Maintenance</div>
                                </a>
                            </div>
                            <div class="dropdown-grid-item bg-white services-panel">
                                <h6 class="drop-heading">BRANDING</h6>
                                <a href="branding" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-vector"></i>
                                    </span>
                                    <div class="drop-title">Branding
                                    </div>
                                </a>
                                <a href="ui-ux" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-palette"></i>
                                    </span>
                                    <div class="drop-title">UI/UX
                                    </div>
                                </a>
                                <h6 class="drop-heading">Online Marketing Services</h6>
                                <a href="digital-marketing" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-chart-line"></i>
                                    </span>
                                    <div class="drop-title">DIGITAL MARKETING</div>
                                </a>
                                <a href="seo" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <div class="drop-title">Search Engine Optimization (SEO)</div>
                                </a>
                                <a href="ppc" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    <div class="drop-title">Paid Marketing (PPC)</div>
                                </a>
                                <a href="social-media-marketing" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-share-alt"></i>
                                    </span>
                                    <div class="drop-title">Social Media Marketing</div>
                                </a>
                                <a href="content-marketing" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-pen-nib"></i>
                                    </span>
                                    <div class="drop-title">Content Marketing</div>
                                </a>
                                <h6 class="drop-heading">Hosting & IT Services</h6>

                                <a href="domain-hosting-services" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-server-storage"></i>
                                    </span>
                                    <div class="drop-title">Domain & Hosting
                                    </div>
                                </a>
                                <a href="it-infrastructure" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-laptop-code"></i>

                                    </span>
                                    <div class="drop-title">IT Infrastructure
                                    </div>
                                </a>
                           
                               
                                
                            </div>
                       
                       
                            <div class="dropdown-grid-item last-item bg-light-subtle services-panel">
                                <h6 class="drop-heading">api integration</h6>
                                <a href="sms-otp" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-key"></i>
                                    </span>
                                    <div class="drop-title">SMS/OTP</div>
                                </a>
                                <a href="whatsapp" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                    <div class="drop-title">WhatsApp</div>
                                </a>
                                <a href="email-form" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <div class="drop-title">Email Form</div>
                                </a>
                                <a href="chatbot" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-comments"></i>
                                    </span>
                                    <div class="drop-title">Chat Bot</div>
                                </a>
                                <a href="google-analyatics" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-analytics"></i>
                                    </span>
                                    <div class="drop-title">Google Analytics</div>
                                </a>
                                <a href="google-forms" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-clipboard"></i>
                                    </span>
                                    <div class="drop-title">Google Forms</div>
                                </a>
                                <a href="ivr-call" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="flaticon-headset"></i>
                                    </span>
                                    <div class="drop-title">IVR/Call</div>
                                </a>
                                <a href="payment-gateway" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fa fa-credit-card"></i>
                                    </span>
                                    <div class="drop-title">Payment Gateway
                                    </div>
                                </a>
                                <a href="ai" class="dropdown-link">
                                    <span class="me-2">
                                        <i class="fas fa-robot"></i>
                                    </span>
                                    <div class="drop-title">Ai
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Digital Marketing</a>
                    <ul class="dropdown-menu border-0 rounded-custom shadow py-2 bg-white">
                        <li><a class="dropdown-item" href="digital-marketing">Overview</a></li>
                        <li><a class="dropdown-item" href="seo">SEO</a></li>
                        <li><a class="dropdown-item" href="ppc">PPC</a></li>
                        <li><a class="dropdown-item" href="social-media-marketing">Social Media Marketing</a></li>
                        <li><a class="dropdown-item" href="content-marketing">Content Marketing</a></li>
                    </ul>
                </li>
                <li><a href="portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="career" class="nav-link">Career</a></li>
                <li><a href="contact" class="nav-link">Contact</a></li>



            </ul>
            <div class="action-btns mt-4 ps-3">
                <a href="request-demo.html" class="btn btn-outline-info">Get Started</a>
            </div>
        </div>
    </div>

    </header>


    <script>
        if ($('.menu-sidebar').length) {
            //Show Form
            $('.menu-sidebar').on('click', function(e) {
                e.preventDefault();
                $('body').toggleClass('side-content-visible');
            });
            //Hide Form
            $('.hidden-bar .inner-box .cross-icon,.form-back-drop,.close-menu').on('click', function(e) {
                e.preventDefault();
                $('body').removeClass('side-content-visible');
            });
            //Dropdown Menu
            $('.fullscreen-menu .navigation li.dropdown > a').on('click', function() {
                $(this).next('ul').slideToggle(500);
            });
        }
    </script>
