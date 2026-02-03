<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Techno Engineering Pvt. Ltd. - We undertake Fabrication & Erection of Power Plants, Steel Plants, Refineries and Nuclear Plants. Piping, Mechanical Maintenance, Roofing, Cladding, Blasting & Painting Services.">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <title>Techno Engineering Pvt. Ltd. | Fabrication & Erection | Industrial Services</title>

    <!-- CSS Files -->
    <link rel="preload" href="assets/css/plugins/fontawesome.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/swiper.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/aos.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/unicons.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/metismenu.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/magnific-popup.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/plugins/hover-revel.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="assets/css/plugins/timepickers.min.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="preload" href="assets/css/vendor/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Header Styles - Compact Like ConstX -->
    <style>
        /* Compact Top Bar */
        .header-one .header-top {
            padding: 8px 0;
            background: #1a1a2e;
        }

        .header-top-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-top-wrapper .left {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .header-top-wrapper .single-component.info-con {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .header-top-wrapper .single-component.info-con .icon {
            font-size: 14px;
        }

        .header-top-wrapper .single-component.info-con .info span {
            font-size: 13px;
            white-space: nowrap;
        }

        /* Compact Main Header */
        .header-one .header-main {
            padding: 0;
            background: #fff;
        }

        .header-mid-one-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2px 0 !important;
            min-height: 70px;
        }

        /* Logo Size - Left Side */
        .logo-area {
            flex-shrink: 0;
        }

        .logo-area img {
            max-width: 220px !important;
            width: auto !important;
        }

        /* Nav + Header Right Container - All Right Side */
        .header-right-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: auto;
        }

        /* Navigation - Right Aligned */
        .nav-area {
            display: flex;
            align-items: center;
        }

        .nav-area .mainmenu {
            display: flex;
            align-items: center;
            gap: 0;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-area .mainmenu>li>a {
            padding: 12px 20px;
            font-size: 15px;
            font-weight: 500;
            white-space: nowrap;
        }

        /* Header Right - Contact Button */
        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-shrink: 0;
            margin-left: 10px;
        }

        .cart-search-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-right .tmp-btn.btn-sm {
            padding: 10px 20px;
            font-size: 14px;
        }

        /* Sticky Header Compact */
        .header--sticky.sticky {
            padding: 0;
        }

        .header--sticky.sticky .header-mid-one-wrapper {
            padding: 0px 0 !important;
        }

        /* Footer Logo - Match Template Size */
        .tmp-footer-area .single-footer-inner.logo-area .logo img {
            max-height: 80px !important;
            max-width: 220px !important;
            width: auto !important;
        }

        /* Project Tag Mobile Responsive */
        @media (max-width: 576px) {
            .project-wrapper .content-area .tag {
                padding: 5px 12px;
                font-size: 12px;
                margin-bottom: 8px;
            }

            .project-wrapper .content-area .title {
                font-size: 16px;
                line-height: 22px;
                margin-bottom: 5px;
            }

            .project-wrapper .content-area {
                padding: 15px;
            }
        }

        /* Mobile Header Logo Fix */
        @media (max-width: 768px) {
            .logo-area img {
                max-width: 140px !important;
                height: auto !important;
            }

            .header-mid-one-wrapper {
                min-height: 60px;
                padding: 5px 0 !important;
            }
        }

        @media (max-width: 480px) {
            .logo-area img {
                max-width: 150px !important;
                height: auto !important;
            }

            .header-mid-one-wrapper {
                min-height: 55px;
            }
        }

        /* Override Primary Color to Red #ed3237 */
        :root {
            --color-primary: #ed3237 !important;
            --color-primary-2: #ed3237 !important;
            --color-secondary: #ed3237 !important;
            --primary-600: #ed3237 !important;
            --primary-700: #ed3237 !important;
        }

        .tmp-btn.btn-primary {
            background: #ed3237 !important;
        }

        .tmp-btn.btn-primary::after {
            background: #c9282d !important;
        }

        .tmp-btn.btn-border:hover {
            background: #ed3237 !important;
            border-color: #ed3237 !important;
        }

        .cta-button-area .tmp-btn.bg-white {
            color: #ed3237 !important;
        }

        .cta-button-area .tmp-btn.bg-white:hover {
            background: #ed3237 !important;
            color: #fff !important;
        }

        /* CTA Button Hover Style */
        .cta-button-area .tmp-btn:hover {
            background: #fff !important;
            color: #ed3237 !important;
            border-color: #fff !important;
        }

        /* Footer Logo Mobile Responsive - Match Header Size */
        @media (max-width: 768px) {
            .tmp-footer-area .footer-widget .logo img {
                width: 140px !important;
                height: auto !important;
            }
        }

        @media (max-width: 480px) {
            .tmp-footer-area .footer-widget .logo img {
                width: 120px !important;
                height: auto !important;
            }
        }
    </style>
</head>

<body class="home-one">

    <!-- Header Start -->
    <header class="header-one header--sticky header-sticky-smooth globalNav noDropdownTransition">
        <!-- Top Bar - Compact Single Line -->
        <div class="header-top overflow-visible">
            <div class="container-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-wrapper">
                            <!-- Left - Contact Info -->
                            <div class="left">
                                <div class="single-component info-con">
                                    <div class="icon"><i class="fal fa-clock"></i></div>
                                    <div class="info"><span>Mon - Sat (9:00 - 18:00)</span></div>
                                </div>
                                <div class="single-component info-con">
                                    <div class="icon"><i class="fal fa-phone"></i></div>
                                    <div class="info"><span><a href="tel:+919833771515">(+91) 98337 71515</a></span>
                                    </div>
                                </div>
                                <div class="single-component info-con">
                                    <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="info"><span>Room No.B-003, Neel Residency Phase-I, New Panvel -
                                            410206</span></div>
                                </div>
                            </div>
                            <!-- Right - Social Icons -->
                            <div class="right">
                                <ul class="social-wrapper-1 hover-bg-white ml_-10">
                                    <li class="single"><a target="_blank" href="https://www.facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://x.com/"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://www.instagram.com/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header - Logo, Nav, Button in One Line -->
        <div class="header-main">
            <div class="container-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-mid-one-wrapper">
                            <!-- Logo - Left Side -->
                            <div class="logo-area">
                                <a href="index.php">
                                    <img src="assets/images/logo/TECHNOlogo.svg" alt="Techno Engineering Logo">
                                </a>
                            </div>

                            <!-- Right Section - Nav + Contact Button -->
                            <div class="header-right-section">
                                <!-- Navigation Menu -->
                                <div class="nav-area">
                                    <ul class="mainmenu">
                                        <li class="main-nav">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="main-nav">
                                            <a href="about.php">About Us</a>
                                        </li>
                                        <li class="main-nav has-dropdown has-menu-child-item">
                                            <a href="service.php">Services <i
                                                    class="fa-regular fa-chevron-down"></i></a>
                                            <ul class="submenu parent-nav">
                                                <li><a href="service.php#fabrication-erection">Fabrication &
                                                        Erection</a></li>
                                                <li><a href="service.php#mechanical-maintenance">Mechanical
                                                        Maintenance</a></li>
                                                <li><a href="service.php#roofing-cladding">Roofing & Cladding</a></li>
                                                <li><a href="service.php#blasting-painting">Blasting & Painting</a></li>
                                                <li><a href="service.php#labour-supply">Labour Supply</a></li>
                                                <li><a href="service.php#mechanical-fabrication-hrt">Mechanical
                                                        Fabrication HRT</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Contact Button -->
                                <div class="header-right">
                                    <div class="single-component">
                                        <a href="contact.php" class="tmp-btn btn-primary button-flip btn-sm">
                                            <span data-text="Contact Us">Contact Us</span>
                                        </a>
                                        <div class="menu-area d-block d-xl-none" id="menu-btn">
                                            <button class="setting-btn">
                                                <span class="bar bar1"></span>
                                                <span class="bar bar2"></span>
                                                <span class="bar bar1"></span>
                                            </button>
                                        </div>
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