<?php include 'includes/header.php'; ?>

<!-- Breadcrumb Start -->
<div class="tmp-bread-crumb-area bg-breadcrumb bg-image-breadcrumb bg_image">
    <div class="container-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner ptb--100 ptb_sm--100 text-center">
                    <h1 class="title">Our Services</h1>
                    <div class="meta">
                        <a href="index.php" class="prev"><i class="fa-solid fa-house"></i> Home</a>
                        <span><i class="fa-regular fa-chevron-right"></i></span>
                        <a href="#" class="next">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Service Cards Styles -->
<style>
    @keyframes borderDraw {
        0% {
            stroke-dashoffset: 1200;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    .svc-section {
        padding: 90px 0 70px;
        background: #f7f8fc;
    }

    .svc-section .sec-top {
        text-align: center;
        margin-bottom: 55px;
    }

    .svc-section .sec-top span {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #ed3237;
        display: inline-block;
        margin-bottom: 10px;
    }

    .svc-section .sec-top h2 {
        font-size: 38px;
        font-weight: 800;
        color: #1a1a2e;
    }

    /* Card */
    .svc-card {
        position: relative;
        background: #fff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.4s ease;
        margin-bottom: 30px;
        border: 1px solid transparent;
    }

    .svc-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(237, 50, 55, 0.12);
        border-color: #ed3237;
    }

    /* SVG animated border */
    .svc-card .border-anim {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 2;
    }

    .svc-card .border-anim rect {
        fill: none;
        stroke: #ed3237;
        stroke-width: 2;
        stroke-dasharray: 1200;
        stroke-dashoffset: 1200;
        rx: 14;
        ry: 14;
        transition: stroke-dashoffset 0s;
    }

    .svc-card:hover .border-anim rect {
        animation: borderDraw 1.2s ease forwards;
    }

    /* Image */
    .svc-card .card-thumb {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .svc-card .card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .svc-card:hover .card-thumb img {
        transform: scale(1.08);
    }

    .svc-card .card-thumb .num-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 800;
        color: #ed3237;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        z-index: 3;
        transition: all 0.3s ease;
    }

    .svc-card:hover .card-thumb .num-badge {
        background: #ed3237;
        color: #fff;
        transform: rotate(-5deg);
    }

    .svc-card .card-thumb .svc-icon-badge {
        position: absolute;
        bottom: -22px;
        right: 20px;
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
        z-index: 3;
        box-shadow: 0 6px 18px rgba(237, 50, 55, 0.35);
        transition: transform 0.3s ease;
    }

    .svc-card:hover .svc-icon-badge {
        transform: scale(1.15) rotate(10deg);
    }

    /* Body */
    .svc-card .card-body-custom {
        padding: 28px 22px 22px;
    }

    .svc-card .card-body-custom h4 {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0 0 10px;
        transition: color 0.3s ease;
    }

    .svc-card:hover .card-body-custom h4 {
        color: #ed3237;
    }

    .svc-card .card-body-custom p {
        font-size: 13.5px;
        line-height: 1.6;
        color: #777;
        margin: 0 0 14px;
    }

    /* Feature tags */
    .svc-card .feature-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-bottom: 16px;
    }

    .svc-card .feature-tags span {
        font-size: 11.5px;
        padding: 4px 10px;
        background: #f4f5f9;
        border-radius: 20px;
        color: #555;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .svc-card:hover .feature-tags span {
        border-color: rgba(237, 50, 55, 0.2);
        background: #fff5f5;
    }

    /* Button */
    .svc-card .card-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: #1a1a2e;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 2px solid transparent;
        padding-bottom: 2px;
    }

    .svc-card:hover .card-link {
        color: #ed3237;
        border-bottom-color: #ed3237;
    }

    .svc-card .card-link i {
        font-size: 12px;
        transition: transform 0.3s ease;
    }

    .svc-card:hover .card-link i {
        transform: translateX(4px);
    }

    /* Responsive */
    @media (max-width: 991px) {
        .svc-section .sec-top h2 {
            font-size: 30px;
        }
    }

    @media (max-width: 575px) {
        .svc-section {
            padding: 60px 0 40px;
        }

        .svc-section .sec-top h2 {
            font-size: 24px;
        }

        .svc-card .card-thumb {
            height: 170px;
        }
    }
</style>

<!-- Services Section Start -->
<section class="svc-section">
    <div class="container-3">
        <div class="sec-top" data-sal="slide-up" data-sal-duration="600">
            <span>Our Services</span>
            <h2>What We Build For You</h2>
        </div>

        <div class="row g-4">
            <!-- 1 - RCC -->
            <div class="col-lg-4 col-md-6" id="rcc-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="100">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/01.webp" alt="RCC Work">
                        <span class="num-badge">01</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-building"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>RCC Work</h4>
                        <p>Expert Reinforced Cement Concrete services including foundations, columns, beams, slabs & complete structural framework for durable constructions.</p>
                        <div class="feature-tags">
                            <span>Foundations</span>
                            <span>Columns & Beams</span>
                            <span>Slabs</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 2 - Brick Work & Plaster -->
            <div class="col-lg-4 col-md-6" id="brick-plaster-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="200">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/02.webp" alt="Brick Work & Plaster">
                        <span class="num-badge">02</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-layer-group"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Brick Work & Plaster</h4>
                        <p>Professional masonry services with quality brickwork, internal & external plastering for smooth, durable & aesthetically pleasing walls.</p>
                        <div class="feature-tags">
                            <span>Masonry</span>
                            <span>Internal Plaster</span>
                            <span>External Plaster</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 3 - Tiling Work -->
            <div class="col-lg-4 col-md-6" id="tiling-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="300">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/03.webp" alt="Tiling Work">
                        <span class="num-badge">03</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-border-all"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Tiling Work</h4>
                        <p>Premium floor & wall tiling services including vitrified, ceramic, marble & granite installation with precision finishing for homes & commercial spaces.</p>
                        <div class="feature-tags">
                            <span>Floor Tiles</span>
                            <span>Wall Tiles</span>
                            <span>Marble & Granite</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 4 - Gypsum, Painting & False Ceiling -->
            <div class="col-lg-4 col-md-6" id="gypsum-painting" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="100">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/04.webp" alt="Gypsum, Painting & False Ceiling">
                        <span class="num-badge">04</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-paint-roller"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Gypsum, Painting & False Ceiling</h4>
                        <p>Complete interior finishing with gypsum boards, POP designs, designer false ceilings & premium quality painting for elegant interiors.</p>
                        <div class="feature-tags">
                            <span>False Ceiling</span>
                            <span>Painting</span>
                            <span>POP Work</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 5 - Fabrication & Wooden Work -->
            <div class="col-lg-4 col-md-6" id="fabrication-wooden-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="200">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/05.webp" alt="Fabrication & Wooden Work">
                        <span class="num-badge">05</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-gears"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Fabrication & Wooden Work</h4>
                        <p>Custom steel fabrication including gates, grills, railings & MS/SS work. Quality wooden work for doors, windows, wardrobes & modular furniture.</p>
                        <div class="feature-tags">
                            <span>Gates & Grills</span>
                            <span>Doors & Windows</span>
                            <span>Furniture</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 6 - Plumbing -->
            <div class="col-lg-4 col-md-6" id="plumbing-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="300">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/06.webp" alt="Plumbing">
                        <span class="num-badge">06</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-faucet-drip"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Plumbing</h4>
                        <p>Complete plumbing solutions including water supply lines, drainage systems, sanitary fittings, water tanks & bathroom installations.</p>
                        <div class="feature-tags">
                            <span>Water Supply</span>
                            <span>Drainage</span>
                            <span>Sanitary Fittings</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 7 - Electrical -->
            <div class="col-lg-4 col-md-6" id="electrical-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="100">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/01.webp" alt="Electrical">
                        <span class="num-badge">07</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-bolt"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Electrical</h4>
                        <p>Professional electrical services including wiring, panel boards, switches, lighting fixtures, earthing & complete electrical infrastructure.</p>
                        <div class="feature-tags">
                            <span>Wiring</span>
                            <span>Lighting</span>
                            <span>Panel Boards</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 8 - Mechanical -->
            <div class="col-lg-4 col-md-6" id="mechanical-work" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="200">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/02.webp" alt="Mechanical">
                        <span class="num-badge">08</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-wrench"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Mechanical</h4>
                        <p>Comprehensive mechanical services including HVAC systems, fire fighting equipment, lifts, pumps & all mechanical installations for buildings.</p>
                        <div class="feature-tags">
                            <span>HVAC</span>
                            <span>Fire Fighting</span>
                            <span>Lifts & Pumps</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- 9 - Structural Audit, Repairs & Maintenance -->
            <div class="col-lg-4 col-md-6" id="structural-audit" data-sal="slide-up" data-sal-duration="600"
                data-sal-delay="300">
                <div class="svc-card">
                    <svg class="border-anim">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" />
                    </svg>
                    <div class="card-thumb">
                        <img src="assets/images/service/03.webp" alt="Structural Audit, Repairs & Maintenance">
                        <span class="num-badge">09</span>
                        <span class="svc-icon-badge"><i class="fa-solid fa-clipboard-check"></i></span>
                    </div>
                    <div class="card-body-custom">
                        <h4>Structural Audit, Repairs & Maintenance</h4>
                        <p>Expert structural assessment, condition surveys, repair & rehabilitation services to ensure building safety, longevity & compliance with standards.</p>
                        <div class="feature-tags">
                            <span>Structural Audit</span>
                            <span>Repairs</span>
                            <span>Maintenance</span>
                        </div>
                        <a href="contact.php" class="card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Contact Area Start -->
<section class="tmp-contact-area tmp-section-gapTop">
    <div class="container-3">
        <div class="section-inner">
            <div class="row g-5">
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="000">
                    <div class="left-side-content">
                        <div class="image-area">
                            <img src="assets/images/contact/07-1.webp" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">Need Construction Solutions?</h3>
                            <p class="desc">We have experienced architects, civil engineers, and skilled craftsmen with
                                modern equipment to execute multiple construction projects simultaneously. Reliable,
                                efficient, and tailored to your needs.</p>
                        </div>
                        <div class="social-bottom-area">
                            <div class="phone">
                                <h4 class="mb--20">Call Us Now</h4>
                                <a class="hover-moving-primary" href="tel:+919876543210">(+91) 98765 43210</a>
                            </div>
                            <div class="social-icon-wrapper">
                                <h4>Follow Us</h4>
                                <div class="social-share-wrapper-1 style-footer">
                                    <ul class="social-stylle-one justify-content-start mt--10">
                                        <li><a target="_blank" href="https://www.facebook.com/"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://x.com/"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800" data-sal-delay="200">
                    <div class="contact-form-area">
                        <form action="mail.php" id="quote-form" method="post">
                            <h3 class="title">Get a Free Quote</h3>
                            <div class="form-inner">
                                <input type="hidden" name="form_type" value="quote">
                                <div class="single-wrapper">
                                    <label for="quote-name"><i class="fa-regular fa-user"></i> Your Name</label>
                                    <input type="text" id="quote-name" name="contact-name" required>
                                </div>
                                <div class="single-wrapper">
                                    <label for="quote-email"><i class="fa-regular fa-envelope"></i> Your Email</label>
                                    <input type="email" id="quote-email" name="contact-email" required>
                                </div>
                                <div class="single-wrapper">
                                    <label for="quote-message"><i class="fa-regular fa-message"></i> Project
                                        Details</label>
                                    <textarea name="contact-message" id="quote-message" required></textarea>
                                </div>
                                <div class="single-wrapper">
                                    <button type="submit" class="tmp-btn btn-primary hover-icon-reverse w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Request Quote</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Working Process Area Start -->
<section class="tmp-working-process-area tmp-section-gap bg-white">
    <div class="container-3">
        <div class="section-title-area-3">
            <p class="sub-title cg" data-sal="slide-up-large" data-sal-duration="800" data-sal-delay="200">Our Approach
            </p>
            <h2 class="section-title" data-sal="slide-up-large" data-sal-duration="800" data-sal-delay="400">How We
                Build Your Vision</h2>
        </div>
        <div class="section-inner mt--60">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">01</p>
                            <h3 class="title"><a href="#">Consultation & Planning</a></h3>
                            <p class="desc">Our experienced architects and engineers assess your requirements, create
                                detailed plans, provide accurate cost estimates, and guide you through government
                                approvals for a smooth project start.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="300">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">02</p>
                            <h3 class="title"><a href="#">Construction & Execution</a></h3>
                            <p class="desc">With skilled craftsmen, quality materials, and modern equipment, our team
                                executes your project with precision — from foundation work and structural framing to
                                electrical, plumbing, and finishing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="500">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">03</p>
                            <h3 class="title"><a href="#">Quality Handover</a></h3>
                            <p class="desc">We conduct thorough quality inspections, ensure everything meets our high
                                standards, and deliver your completed project on time — ready for you to move in or
                                start operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Working Process Area End -->

<!-- Testimonials Area Start -->
<section class="tmp-testimonials-area area-4" style="margin-bottom: 80px;">
    <div class="container-3">
        <div class="section-title-area-3">
            <h2 class="section-title">Trusted by Homeowners & <br> Businesses Alike</h2>
        </div>
    </div>
    <div class="section-inner">
        <div class="swiper tmpTestimonialSlider3 common-swiper-inside">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">Anand Infratech built our dream bungalow exactly as we envisioned. The
                                quality of construction, attention to detail, and timely delivery exceeded all our
                                expectations. Highly recommended!</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Rajesh Patel</h3>
                                    <p>Homeowner, Ahmedabad</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">We hired Anand Infratech for our commercial building project. Their
                                professional approach, transparent pricing, and quality workmanship made the entire
                                process stress-free.</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Amit Sharma</h3>
                                    <p>Business Owner, Surat</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">Outstanding renovation work on our 20-year-old home. Anand Infratech
                                transformed it into a modern, beautiful space. Their interior design team is incredibly
                                talented and creative.</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Priya Mehta</h3>
                                    <p>Homeowner, Vadodara</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">Anand Infratech completed our apartment complex ahead of schedule. Their
                                project management skills are excellent and they maintained top quality throughout the
                                construction.</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Vikram Singh</h3>
                                    <p>Real Estate Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">Their 15+ years of experience shows in every project. From the initial
                                design consultation to the final handover, Anand Infratech maintained professionalism
                                and quality at every step.</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Suresh Joshi</h3>
                                    <p>Property Owner, Rajkot</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-wrapper3">
                        <div class="star-rating-area">
                            <h3>5.0</h3>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="bottom-text">
                            <p class="desc">Anand Infratech handled our infrastructure project with remarkable
                                efficiency. Their team's dedication and use of modern construction techniques delivered
                                exceptional results.</p>
                            <div class="author-area">
                                <div class="image"
                                    style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fa-solid fa-user" style="color: #888; font-size: 20px;"></i>
                                </div>
                                <div class="name-designation">
                                    <h3>Manoj Desai</h3>
                                    <p>Municipal Corporation</p>
                                </div>
                            </div>
                        </div>
                        <div class="quote">
                            <img src="assets/images/testimonials/quote2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-area">
                <div class="swiper-btn swiper-button-prev">
                    <div class="custom-overfolow-btn">
                        <i class="invers-icon fal fa-arrow-left"></i>
                        <i class="invers-icon-top fal fa-arrow-left"></i>
                    </div>
                </div>
                <div class="swiper-btn swiper-button-next">
                    <div class="custom-overfolow-btn">
                        <i class="invers-icon fal fa-arrow-right"></i>
                        <i class="invers-icon-top fal fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area End -->

<!-- Brand Area Start -->
<section class="tmp-brand-area area-4 tmp-section-gapBottom bg-white-v2">
    <div class="container-3">
        <div class="section-inner">
            <div class="swiper tmpBrandSlider small-brand">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-5.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-3.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-6.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-1.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-2.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-6.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-7.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#"><img src="assets/images/brand/partner-3.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="swiper-btn swiper-button-prev">
                        <div class="custom-overfolow-btn">
                            <i class="invers-icon fal fa-arrow-left"></i>
                            <i class="invers-icon-top fal fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="swiper-btn swiper-button-next">
                        <div class="custom-overfolow-btn">
                            <i class="invers-icon fal fa-arrow-right"></i>
                            <i class="invers-icon-top fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brand Area End -->

<div class="tmp-section-gapBottom bg-white-v2"></div>

<?php include 'includes/footer.php'; ?>