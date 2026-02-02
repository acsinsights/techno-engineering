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

<!-- Custom Styles for Zig-Zag Services -->
<style>
.service-zigzag-section {
    padding: 80px 0;
}

.service-zigzag-section:nth-child(odd) {
    background: #fff;
}

.service-zigzag-section:nth-child(even) {
    background: #f8f9fa;
}

.service-zigzag-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    padding: 30px;
}

.service-zigzag-content .service-number {
    font-size: 60px;
    font-weight: 700;
    color: rgba(243, 117, 56, 0.15);
    line-height: 1;
    margin-bottom: 10px;
}

.service-zigzag-content .service-title {
    font-size: 32px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 20px;
    position: relative;
}

.service-zigzag-content .service-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 60px;
    height: 3px;
    background: #ed3237;
    border-radius: 2px;
}

.service-zigzag-content .service-desc {
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    margin-top: 25px;
    margin-bottom: 25px;
}

.service-zigzag-content .service-features {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
}

.service-zigzag-content .service-features li {
    padding: 8px 0;
    color: #555;
    font-size: 15px;
    display: flex;
    align-items: center;
}

.service-zigzag-content .service-features li i {
    color: #ed3237;
    margin-right: 12px;
    font-size: 14px;
}

.service-zigzag-image {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
}

.service-zigzag-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.service-zigzag-image:hover img {
    transform: scale(1.05);
}

.service-zigzag-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(237, 50, 55, 0.1) 0%, transparent 50%);
    z-index: 1;
    pointer-events: none;
}

.service-btn-zigzag {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 30px;
    background: #ed3237;
    color: #fff;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(237, 50, 55, 0.3);
    width: fit-content;
}

.service-btn-zigzag:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(243, 117, 56, 0.4);
    color: #fff;
}

.service-btn-zigzag i {
    transition: transform 0.3s ease;
}

.service-btn-zigzag:hover i {
    transform: translateX(5px);
}

@media (max-width: 991px) {
    .service-zigzag-content {
        padding: 20px 0;
    }

    .service-zigzag-content .service-title {
        font-size: 26px;
    }

    .service-zigzag-image img {
        height: 300px;
    }

    /* Mobile - Image on top, Content below */
    .service-zigzag-section .row {
        display: flex;
        flex-direction: column;
    }

    .service-zigzag-section .row>div {
        width: 100%;
        max-width: 100%;
    }

    .service-zigzag-section .row>div:has(.service-zigzag-image) {
        order: -1 !important;
    }

    /* Alternative for all sections - force image column first */
    .service-zigzag-section .col-image-mobile {
        order: -1 !important;
    }

    .service-zigzag-section .col-content-mobile {
        order: 1 !important;
    }
}
</style>

<!-- Services Zig-Zag Section Start -->
<div class="services-zigzag-wrapper">

    <!-- Service 1: Fabrication & Erection - Text Left, Image Right -->
    <section class="service-zigzag-section" id="fabrication-erection">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 col-content-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">01</span>
                        <h2 class="service-title">Fabrication & Erection</h2>
                        <p class="service-desc">We hold years of experience and knowledge of rendering services for
                            Heavy Steel Structures fabrication. To render offered fabrication services for heavy steel
                            structures, we have appointed a team of adroit professionals who follow industry set
                            guidelines and ensure execution within stipulated time frame.</p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Power Plants & Steel Plants Fabrication</li>
                            <li><i class="fa-solid fa-check-circle"></i> Refineries & Nuclear Plants Structures</li>
                            <li><i class="fa-solid fa-check-circle"></i> Piping - Carbon Steel, Alloy Steel & Stainless
                                Steel</li>
                            <li><i class="fa-solid fa-check-circle"></i> Static & Rotary Equipment Erection</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-image-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/01.webp" alt="Fabrication & Erection">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2: Mechanical Maintenance - Image Left, Text Right -->
    <section class="service-zigzag-section" id="mechanical-maintenance">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2 col-content-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">02</span>
                        <h2 class="service-title">Mechanical Maintenance</h2>
                        <p class="service-desc">We undertake Mechanical Maintenance of heat exchangers, Vessels,
                            Columns, Filters. Repairs & Maintenance of exchangers, heaters, dryers & Furnace to large
                            Public & Private sector undertaking. Driven with superiority, we present top class services
                            for Heat Exchanger Maintenance.</p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Heat Exchangers & Vessels Maintenance</li>
                            <li><i class="fa-solid fa-check-circle"></i> Columns & Filters Repairs</li>
                            <li><i class="fa-solid fa-check-circle"></i> Heaters, Dryers & Furnace Maintenance</li>
                            <li><i class="fa-solid fa-check-circle"></i> Public & Private Sector Services</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 col-image-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/02.webp" alt="Mechanical Maintenance">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: Roofing & Cladding - Text Left, Image Right -->
    <section class="service-zigzag-section" id="roofing-cladding">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 col-content-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">03</span>
                        <h2 class="service-title">Roofing & Cladding</h2>
                        <p class="service-desc">We are engaged in manufacturing wide gamut of Roofing and Wall Cladding
                            Products. These are fabricated using top quality materials sourced from reliable vendors.
                            Our products are well known for quality and longer service life.</p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Color Coated Profile Sheets</li>
                            <li><i class="fa-solid fa-check-circle"></i> Industrial Roofing Solutions</li>
                            <li><i class="fa-solid fa-check-circle"></i> Turnkey Roofing Projects</li>
                            <li><i class="fa-solid fa-check-circle"></i> Wall Cladding Products</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-image-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/03.webp" alt="Roofing & Cladding">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 4: Blasting & Painting - Image Left, Text Right -->
    <section class="service-zigzag-section" id="blasting-painting">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2 col-content-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">04</span>
                        <h2 class="service-title">Blasting & Painting</h2>
                        <p class="service-desc">We are engaged in rendering unparalleled Blasting, Painting & Coating
                            Services. We are one of the leading contractors executing Sandblasting and all types of
                            Industrial Painting Contracts, providing quality solutions in corrosion protection.</p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Copper-slag, Grit & Sand Blasting</li>
                            <li><i class="fa-solid fa-check-circle"></i> Epoxy Brush Painting</li>
                            <li><i class="fa-solid fa-check-circle"></i> Airless Spray Painting</li>
                            <li><i class="fa-solid fa-check-circle"></i> Guniting & Shotcreting Services</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 col-image-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/04.webp" alt="Blasting & Painting">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 5: Labour Supply - Text Left, Image Right -->
    <section class="service-zigzag-section" id="labour-supply">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 col-content-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">05</span>
                        <h2 class="service-title">Labour Supply</h2>
                        <p class="service-desc">We are one of the prestigious service providers involved in offering
                            Contractor Labour for Construction and other industries. These services are rendered by
                            highly dedicated, punctual, obedient and hardworking professionals with years of experience.
                        </p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Skilled & Semi-skilled Manpower</li>
                            <li><i class="fa-solid fa-check-circle"></i> Experienced Engineers & Supervisors</li>
                            <li><i class="fa-solid fa-check-circle"></i> Construction Industry Labour</li>
                            <li><i class="fa-solid fa-check-circle"></i> Industry Leading Prices</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-image-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/05.webp" alt="Labour Supply">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 6: Mechanical Fabrication HRT - Image Left, Text Right -->
    <section class="service-zigzag-section" id="mechanical-fabrication-hrt">
        <div class="container-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2 col-content-mobile" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-zigzag-content">
                        <span class="service-number">06</span>
                        <h2 class="service-title">Mechanical Fabrication – HRT</h2>
                        <p class="service-desc">Liquid Separation is the basic function of High Rate Thickener (HRT). We
                            are executing components fabrication for HRT (export quality) at M/s Tenova India Private
                            Limited's workshop, Bangalore - part of Tenova Mining and Minerals Division of Tenova S.P.A,
                            Italy.</p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check-circle"></i> Support Structures & Discharge Cones</li>
                            <li><i class="fa-solid fa-check-circle"></i> Tank Shells, Bridges & Rack Arms</li>
                            <li><i class="fa-solid fa-check-circle"></i> Center Columns & Torque Cages</li>
                            <li><i class="fa-solid fa-check-circle"></i> Feedwells, Scrapers & Drives</li>
                        </ul>
                        <a href="contact.php" class="service-btn-zigzag">Get Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 col-image-mobile" data-sal="slide-right" data-sal-duration="800">
                    <div class="service-zigzag-image">
                        <img src="assets/images/service/06.webp" alt="Mechanical Fabrication HRT">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Services Zig-Zag Section End -->

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
                            <h3 class="title">Need Industrial Solutions?</h3>
                            <p class="desc">We have experienced Engineers & Supervisors, Skilled Manpower with ample
                                tools & tackles to execute multiple projects and jobs at same time. Reliable, efficient,
                                and tailored to your needs.</p>
                        </div>
                        <div class="social-bottom-area">
                            <div class="phone">
                                <h4 class="mb--20">Call Us Now</h4>
                                <a class="hover-moving-primary" href="tel:+919898234294">(+91) 98982 34294</a>
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
                        <form action="#">
                            <h3 class="title">Get a Free Quote</h3>
                            <div class="form-inner">
                                <div class="single-wrapper">
                                    <label for="name"><i class="fa-regular fa-user"></i> Your Name</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="single-wrapper">
                                    <label for="email"><i class="fa-regular fa-envelope"></i> Your Email</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="single-wrapper">
                                    <label for="message"><i class="fa-regular fa-message"></i> Project Details</label>
                                    <textarea name="message" id="message" required></textarea>
                                </div>
                                <div class="single-wrapper">
                                    <button class="tmp-btn btn-primary hover-icon-reverse w-100">
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
                Deliver Excellence</h2>
        </div>
        <div class="section-inner mt--60">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">01</p>
                            <h3 class="title"><a href="#">Expert Consultation</a></h3>
                            <p class="desc">Our experienced Engineers & Supervisors assess your project requirements and
                                provide tailored solutions for Power Plants, Steel Plants & Refineries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="300">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">02</p>
                            <h3 class="title"><a href="#">Skilled Execution</a></h3>
                            <p class="desc">With ample tools & tackles, our skilled manpower executes multiple projects
                                simultaneously while maintaining highest quality standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="500">
                    <div class="working-process-wrapper6 cp-none">
                        <div class="content">
                            <p class="number">03</p>
                            <h3 class="title"><a href="#">Quality Delivery</a></h3>
                            <p class="desc">We deliver reliable, efficient solutions tailored to your needs, serving
                                large Public & Private sector undertakings with excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Working Process Area End -->

<!-- Testimonials Area Start -->
<section class="tmp-testimonials-area3 bg-white-v2 m-0 tmp-section-gapTop pb--60">
    <div class="container-3">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="content-slider-inner home-ten">
                    <div class="feedback-wrapper">
                        <p class="sub-title">
                            <img src="assets/images/testimonials/quote3.svg" alt="">
                            Client Feedback
                        </p>
                        <h3 class="title">Trusted by Industry Leaders</h3>
                        <p class="desc">Our commitment to excellence has made us a preferred partner for AM/NS, JSW
                            Steel, Jindal Steel, Essar Steel, L&T Defence, Tata Projects and more.</p>
                        <div class="bottom-service">
                            <p><span>20+</span> Years of Excellence</p>
                        </div>
                    </div>
                    <div class="pagination-area">
                        <div class="swiper-pagination-n"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonial-slider-inner home-ten">
                    <div class="swiper tmp-testimonialSlider3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper4">
                                    <div class="image-area">
                                        <img src="assets/images/testimonials/12.webp" width="298" alt="">
                                    </div>
                                    <div class="content-area">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p class="desc">Techno Engineering delivered exceptional fabrication and
                                            erection work for our steel plant expansion. Their experienced team and
                                            commitment to safety standards is truly commendable.</p>
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4 class="title">Project Manager</h4>
                                                <p class="designation">AM/NS Projects, Hazira</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper4">
                                    <div class="image-area">
                                        <img src="assets/images/testimonials/11.webp" width="298" alt="">
                                    </div>
                                    <div class="content-area">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p class="desc">Their mechanical maintenance team handles our heat exchangers,
                                            vessels, and columns with exceptional expertise. A reliable partner for all
                                            our maintenance needs.</p>
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4 class="title">Operations Head</h4>
                                                <p class="designation">JSW Steel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper4">
                                    <div class="image-area">
                                        <img src="assets/images/testimonials/12.webp" width="298" alt="">
                                    </div>
                                    <div class="content-area">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p class="desc">Outstanding blasting and painting services for our refinery
                                            project. The team's professionalism and quality workmanship exceeded our
                                            expectations.</p>
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4 class="title">Project Director</h4>
                                                <p class="designation">Essar Steel Ltd., Hazira</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-navigation-area">
                        <div class="swiper-btn swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-btn swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
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
                                <a href="#">
                                    <img src="assets/images/brand/partner-5.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-3.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-6.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-1.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-2.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-6.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-7.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-wrapper">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/brand/partner-3.webp" alt="">
                                </a>
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