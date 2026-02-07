<?php include 'includes/header.php'; ?>

<!-- Breadcrumb Start -->
<div class="tmp-bread-crumb-area bg-breadcrumb bg-image-breadcrumb bg_image">
    <div class="container-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner ptb--100 ptb_sm--100 text-center">
                    <h1 class="title">Contact Us</h1>
                    <div class="meta">
                        <a href="index.php" class="prev"><i class="fa-solid fa-house"></i> Home</a>
                        <span><i class="fa-regular fa-chevron-right"></i></span>
                        <a href="#" class="next">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Get In Touch Area Start -->
<section class="tmp-get-in-touch-area area-3 tmp-section-gap">
    <div class="container-3">
        <div class="section-inner-1">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="300">
                    <div class="get-in-touch-wrapper">
                        <div class="icons"><i class="fa-regular fa-headphones"></i></div>
                        <h2 class="title">Call Us Anytime</h2>
                        <p><a class="hover-moving-primary" href="tel:+919876543210">+91 98765 43210</a></p>
                        <p><a class="hover-moving-primary" href="tel:+919876543211">+91 98765 43211</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="500">
                    <div class="get-in-touch-wrapper">
                        <div class="icons"><i class="fa-solid fa-envelope"></i></div>
                        <h2 class="title">Email Address</h2>
                        <p><a class="hover-moving-primary"
                                href="mailto:info@anandinfratech.com">info@anandinfratech.com</a></p>
                        <p><a class="hover-moving-primary"
                                href="mailto:projects@anandinfratech.com">projects@anandinfratech.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="700">
                    <div class="get-in-touch-wrapper">
                        <div class="icons"><i class="fa-regular fa-location-dot"></i></div>
                        <h2 class="title">Head Office Location</h2>
                        <p>Anand Infratech Pvt. Ltd., <br> Ahmedabad, Gujarat, India</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get In Touch Area End -->

<!-- Contact Form Section Start -->
<section class="tmp-contact-area contact tmp-section-gap">
    <div class="container-3">
        <div class="section-inner">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="right-content-area">
                        <h2 class="title">Let's Build Something Great Together!</h2>
                        <p class="desc mb--20">Thank you for your interest in Anand Infratech! Whether you're planning
                            to build your dream bungalow, commercial building, or need infrastructure development
                            services — we're here to help bring your vision to life.</p>
                        <div class="image-area">
                            <img src="assets/images/contact/07.webp" alt="Anand Infratech Construction">
                        </div>
                        <div class="get-in-touch-area">
                            <h3 class="mb--15">Connect With Us</h3>
                            <p class="mb--20">Stay updated with our latest projects and construction insights. Follow us
                                on social media for expert tips, project updates, and industry news.</p>
                            <div class="social-share-wrapper-1 style-footer">
                                <ul class="social-stylle-one justify-content-start">
                                    <li><a target="_blank" href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="https://x.com/"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/"><i
                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank" href="https://www.youtube.com/"><i
                                                class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form class="contact-form-style-default tmp-dynamic-form" action="mail.php" id="contact-form"
                            method="post">
                            <div class="top">
                                <h4 class="title">Get Free Consultation</h4>
                                <div class="double-input-wrapper">
                                    <div class="single-input">
                                        <label for="contact-name"><i class="fa-regular fa-user"></i> Your Name*</label>
                                        <input name="contact-name" type="text" id="contact-name"
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="single-input">
                                        <label for="contact-phone"><i class="fa-solid fa-phone"></i> Your
                                            Number*</label>
                                        <input type="text" name="contact-phone" id="contact-phone"
                                            placeholder="Enter your number" required>
                                    </div>
                                </div>
                                <label for="contact-email"><i class="fa-regular fa-envelope"></i> Your Email*</label>
                                <input type="email" id="contact-email" name="contact-email"
                                    placeholder="Enter your email" required>

                                <label for="contact-message"><i class="fa-regular fa-message"></i> Project
                                    Details*</label>
                                <textarea name="contact-message" id="contact-message" rows="5"
                                    placeholder="Tell us about your project requirements" required></textarea>
                            </div>

                            <div class="help-section">
                                <p>What Are You Looking For?</p>
                                <div class="check-box-flex-wrapper">
                                    <div class="check-box">
                                        <input type="checkbox" id="bungalow" name="service[]" value="Bungalow">
                                        <label for="bungalow">Bungalow</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" id="residential" name="service[]" value="Residential">
                                        <label for="residential">Residential</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" id="commercial" name="service[]" value="Commercial">
                                        <label for="commercial">Commercial</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" id="infrastructure" name="service[]"
                                            value="Infrastructure">
                                        <label for="infrastructure">Infrastructure</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" id="renovation" name="service[]" value="Renovation">
                                        <label for="renovation">Renovation</label>
                                    </div>
                                    <div class="check-box">
                                        <input type="checkbox" id="interior" name="service[]" value="Interior">
                                        <label for="interior">Interior</label>
                                    </div>
                                </div>
                            </div>

                            <button class="tmp-btn btn-primary hover-icon-reverse w-100" type="submit" id="submit">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Send Your Message</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section End -->

<!-- Map Section Start -->
<section class="tmp-contact-area tmp-section-gap">
    <div class="container-3">
        <div class="section-inner">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="contact-map">
                        <div class="section-title-area-3 text-center mb--40">
                            <h2 class="section-title">Visit Our Office</h2>
                            <p class="desc">Find us at our office location or reach out through the contact form above.
                            </p>
                        </div>
                        <div class="map-contact height-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.74842869906!2d72.41493078183103!3d23.020474185119053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1706889000000!5m2!1sen!2sin" width="100%" height="650" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->

<!-- Why Choose Us Section Start -->
<style>
    .why-choose-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        overflow: hidden;
    }

    .why-choose-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: linear-gradient(135deg, rgba(237, 50, 55, 0.05), rgba(243, 117, 56, 0.05));
        border-radius: 50%;
    }

    .why-choose-section::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 400px;
        height: 400px;
        background: linear-gradient(135deg, rgba(237, 50, 55, 0.03), rgba(243, 117, 56, 0.03));
        border-radius: 50%;
    }

    .why-choose-card {
        background: #fff;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .why-choose-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ed3237, #f37538);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }

    .why-choose-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(237, 50, 55, 0.3);
        background: linear-gradient(135deg, #ed3237, #f37538);
    }

    .why-choose-card:hover h4,
    .why-choose-card:hover p {
        color: #fff;
    }

    .why-choose-card:hover .wc-number {
        color: rgba(255, 255, 255, 0.15);
    }

    .why-choose-card:hover::before {
        transform: scaleX(1);
    }

    .why-choose-card:hover .wc-icon {
        transform: rotateY(360deg);
        background: #fff;
    }

    .why-choose-card:hover .wc-icon i {
        background: linear-gradient(135deg, #ed3237, #f37538);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .wc-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #fff5f5, #fff0eb);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        transition: all 0.6s ease;
        border: 2px solid rgba(237, 50, 55, 0.1);
    }

    .wc-icon i {
        font-size: 36px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        transition: all 0.4s ease;
    }

    .wc-number {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 60px;
        font-weight: 800;
        color: rgba(237, 50, 55, 0.06);
        line-height: 1;
    }

    .why-choose-card h4 {
        font-size: 20px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 15px;
    }

    .why-choose-card p {
        font-size: 15px;
        color: #666;
        line-height: 1.7;
        margin: 0;
    }

    .section-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, rgba(237, 50, 55, 0.1), rgba(243, 117, 56, 0.1));
        padding: 10px 24px;
        border-radius: 50px;
        margin-bottom: 20px;
    }

    .section-badge span {
        width: 8px;
        height: 8px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .section-badge p {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(1.2);
        }
    }
</style>
<section class="tmp-section-gap why-choose-section">
    <div class="container-3" style="position: relative; z-index: 1;">
        <div class="text-center mb-5">
            <div class="section-badge" data-sal="zoom-in" data-sal-duration="600">
                <span></span>
                <p>Why Choose Us</p>
            </div>
            <h2 class="section-title" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200" style="font-size: 42px; font-weight: 800; color: #1a1a2e;">
                Your Trusted Construction<br>
                <span style="background: linear-gradient(135deg, #ed3237, #f37538); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Partner in Gujarat</span>
            </h2>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-lg-3 col-md-6" data-sal="fade-up" data-sal-duration="800" data-sal-delay="100">
                <div class="why-choose-card">
                    <span class="wc-number">01</span>
                    <div class="wc-icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h4>15+ Years Experience</h4>
                    <p>Proven track record in delivering quality construction projects across Gujarat.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-sal="fade-up" data-sal-duration="800" data-sal-delay="200">
                <div class="why-choose-card">
                    <span class="wc-number">02</span>
                    <div class="wc-icon">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <h4>Expert Team</h4>
                    <p>Skilled architects, engineers, and craftsmen dedicated to excellence.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-sal="fade-up" data-sal-duration="800" data-sal-delay="300">
                <div class="why-choose-card">
                    <span class="wc-number">03</span>
                    <div class="wc-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h4>On-Time Delivery</h4>
                    <p>We complete projects on schedule without compromising quality.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-sal="fade-up" data-sal-duration="800" data-sal-delay="400">
                <div class="why-choose-card">
                    <span class="wc-number">04</span>
                    <div class="wc-icon">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </div>
                    <h4>Customer Satisfaction</h4>
                    <p>Your satisfaction is our priority with transparent communication throughout.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Section End -->

<!-- CTA Section Start -->
<section class="our-newsletter-area-start tmp-section-gap bg_primary">
    <div class="container-3">
        <div class="row">
            <div class="section-title-area-3">
                <p class="sub-title cg">START YOUR DREAM PROJECT</p>
                <h2 class="section-title" style="color: #1a1a2e;">Ready to Build With Us?</h2>
                <p class="desc" style="color: #555;">
                    Get a free consultation and cost estimate for your construction project. Our team is ready to help
                    you turn your vision into reality with quality craftsmanship and timely delivery.
                </p>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div style="display: flex; justify-content: center; align-items: center; gap: 15px; flex-wrap: wrap;">
                    <a href="contact.php" class="tmp-btn btn-primary hover-icon-reverse">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Get Free Estimate</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                    <a href="tel:+919876543210" class="tmp-btn btn-border hover-icon-reverse"
                        style="border-color: #1a1a2e !important; color: #1a1a2e !important;">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text"><i class="fa-solid fa-phone"></i> +91 98765 43210</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->

<?php include 'includes/footer.php'; ?>