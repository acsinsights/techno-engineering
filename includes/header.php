<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Anand Infratech - Leading Infrastructure Company specializing in Bungalows, Buildings, Commercial & Residential Construction. Quality construction with timely delivery.">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <title>Anand Infratech | Premium Infrastructure & Construction Company</title>

    <!-- fontawesome css -->
    <link rel="preload" href="assets/css/plugins/fontawesome.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/swiper.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/aos.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/unicons.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/metismenu.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/magnific-popup.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/hover-revel.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="assets/css/plugins/timepickers.min.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <!-- bootstrap css -->
    <link rel="preload" href="assets/css/vendor/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Header Fixes -->
    <style>
    /* FORCE LOGO VISIBILITY - Remove all decorative backgrounds */
    .header-main-2 .header-mid-one-wrapper .logo-area::before,
    .header-main-2 .header-mid-one-wrapper .logo-area::after,
    .header-mid-one-wrapper .logo-area::before,
    .header-mid-one-wrapper .logo-area::after {
        display: none !important;
        content: none !important;
        background: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    .header-mid-one-wrapper .logo-area,
    .header-main-2 .header-mid-one-wrapper .logo-area {
        background: transparent !important;
        clip-path: none !important;
        -webkit-clip-path: none !important;
    }

    .header-mid-one-wrapper .logo-area img,
    .header-main-2 .header-mid-one-wrapper .log200pxo-area img {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        position: relative !important;
        z-index: 9999 !important;
        height: auto !important;
    }

    /* Navbar Container - same width as body content */
    .header-main .row,
    .header-top .row {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 0px;
    }

    .header-mid-one-wrapper.wrapper-two {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center;
        width: 100%;
        flex-wrap: nowrap;
    }

    .header-mid-one-wrapper.wrapper-two>.left {
        order: 1;
    }

    .header-mid-one-wrapper.wrapper-two>.header-right {
        order: 2;
    }

    /* Logo on left */
    .header-mid-one-wrapper .left {
        flex: 0 0 240px;
        display: flex !important;
        visibility: visible !important;
        min-width: 220px;
    }

    .header-mid-one-wrapper .left .logo-area {
        display: block !important;
        visibility: visible !important;
        width: 220px;
        background: transparent !important;
        clip-path: none !important;
        -webkit-clip-path: none !important;
    }

    .header-mid-one-wrapper .left .logo-area img {
        position: relative !important;
        z-index: 100 !important;
    }

    .header-mid-one-wrapper .logo-area::after,
    .header-mid-one-wrapper .logo-area::before {
        display: none !important;
        content: none !important;
    }

    /* Nav + Button on right */
    .header-mid-one-wrapper .header-right {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .header-mid-one-wrapper .nav-area {
        display: flex;
        align-items: center;
    }

    .nav-area .mainmenu {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        padding: 0;
    }

    .mainmenu>li>a {
        white-space: nowrap !important;
        padding: 10px 18px;
        font-weight: 500;
    }

    .cart-search-area {
        display: none !important;
    }

    /* Desktop Logo Size */
    .logo-area {
        display: block !important;
        visibility: visible !important;
    }

    .logo-area a {
        display: block !important;
    }

    .logo-area img {
        height: auto;
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* Mobile Header Fixes */
    @media (max-width: 991px) {
        .header-top {
            display: none !important;
        }

        .header-main {
            padding: 10px 15px;
        }

        .header-mid-one-wrapper .left {
            flex: 1;
        }

        .logo-area img {
            max-width: 150px !important;
            height: auto;
        }

        .nav-area {
            display: none !important;
        }

        .header-right .tmp-btn {
            display: none;
        }

        #menu-btn {
            display: flex !important;
        }
    }

    @media (max-width: 576px) {
        .logo-area img {
            max-width: 130px !important;
        }

        .header-main {
            padding: 8px 10px;
        }
    }
    </style>
</head>

<body>

    <!-- Header Start -->
    <header class="header-one header-seven inner header--sticky header-sticky-smooth">
        <!-- header top -->
        <div class="header-top overflow-visible">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-wrapper">
                        <!-- left area header top -->
                        <div class="left">
                            <!-- single map area -->
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="info">
                                    <span>Mon - Sat (9:00 - 18:00)</span>
                                </div>
                            </div>
                            <!-- single map area -->
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span><a href="tel:+919876543210">+91 98765 43210</a></span>
                                </div>
                            </div>
                            <!-- single map area -->
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Ahmedabad, Gujarat, India</span>
                                </div>
                            </div>
                        </div>
                        <!-- right area strat -->
                        <div class="right">
                            <ul class="social-wrapper-1 hover-bg-white">
                                <li class="single"><a target="_blank" href="https://www.facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="single"><a target="_blank" href="https://www.instagram.com/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="single"><a target="_blank" href="https://www.linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li class="single"><a target="_blank" href="https://wa.me/919876543210"><i
                                            class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom -->
        <div class="header-main header-main-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mid-one-wrapper wrapper-two">
                        <div class="left d-flex align-items-center">
                            <div class="logo-area shape-none"
                                style="display: block !important; visibility: visible !important;">
                                <a href="index.php" style="display: inline-block !important;">
                                    <img src="assets/images/logo/Anand-InfraTech-Logo.png" alt="Anand Infratech Logo"
                                        style="width: 220px; height: auto; display: block !important; visibility: visible !important; opacity: 1 !important;">
                                </a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="nav-area">
                                <ul class="mainmenu">
                                    <li class="main-nav">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li class="main-nav has-dropdown has-menu-child-item project-a-after">
                                        <a href="service.php">Services</a>
                                        <ul class="submenu parent-nav">
                                            <li><a href="service.php">All Services</a></li>
                                            <li><a href="service.php#rcc-work">RCC Work</a></li>
                                            <li><a href="service.php#brick-plaster-work">Brick Work & Plaster</a></li>
                                            <li><a href="service.php#tiling-work">Tiling Work</a></li>
                                            <li><a href="service.php#gypsum-painting">Gypsum, Painting & False
                                                    Ceiling</a></li>
                                            <li><a href="service.php#fabrication-wooden-work">Fabrication & Wooden
                                                    Work</a></li>
                                            <li><a href="service.php#plumbing-work">Plumbing</a></li>
                                            <li><a href="service.php#electrical-work">Electrical</a></li>
                                            <li><a href="service.php#mechanical-work">Mechanical</a></li>
                                            <li><a href="service.php#structural-audit">Structural Audit & Repairs</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-component">
                                <a href="contact.php" class="tmp-btn btn-primary button-flip btn-sm">
                                    <span data-text="Contact Us">Contact Us</span>
                                </a>
                                <div class="menu-area d-block d-xl-none" id="menu-btn">
                                    <div class="icon radius-small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                            viewbox="0 0 18 16" fill="none">
                                            <rect width="18" height="2" fill="#0C0A0A"></rect>
                                            <rect y="7" width="18" height="2" fill="#0C0A0A"></rect>
                                            <rect y="14" width="18" height="2" fill="#0C0A0A"></rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->