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

<!-- Premium Zig-Zag Services -->
<style>
    /* Main Section */
    .premium-services {
        padding: 100px 0;
        background: linear-gradient(180deg, #f8f9fc 0%, #fff 100%);
        position: relative;
        overflow: hidden;
    }

    .premium-services::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(ellipse at 20% 50%, rgba(237, 50, 55, 0.04) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 80%, rgba(243, 117, 56, 0.03) 0%, transparent 50%);
        pointer-events: none;
    }

    /* Section Header */
    .premium-services .sec-header {
        text-align: center;
        margin-bottom: 80px;
        position: relative;
        z-index: 2;
    }

    .premium-services .sec-header .badge-text {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 25px;
        background: rgba(237, 50, 55, 0.08);
        border: 1px solid rgba(237, 50, 55, 0.2);
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        color: #ed3237;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    .premium-services .sec-header h2 {
        font-size: 52px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .premium-services .sec-header h2 span {
        background: linear-gradient(135deg, #ed3237, #f37538);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .premium-services .sec-header p {
        font-size: 18px;
        color: #666;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Timeline Container */
    .timeline-container {
        position: relative;
        padding: 0 20px;
    }

    .timeline-container::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, #ed3237, #f37538, #ed3237);
        transform: translateX(-50%);
        border-radius: 10px;
    }

    /* Service Block */
    .svc-block {
        position: relative;
        margin-bottom: 80px;
        z-index: 2;
    }

    .svc-block:last-child {
        margin-bottom: 0;
    }

    .svc-block .row {
        align-items: center;
    }

    /* Timeline Dot */
    .svc-block .timeline-dot {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        box-shadow: 0 0 40px rgba(237, 50, 55, 0.3);
        animation: pulse-glow 2s ease-in-out infinite;
    }

    .svc-block .timeline-dot span {
        font-size: 24px;
        font-weight: 800;
        color: #fff;
    }

    @keyframes pulse-glow {

        0%,
        100% {
            box-shadow: 0 0 20px rgba(237, 50, 55, 0.3);
        }

        50% {
            box-shadow: 0 0 50px rgba(237, 50, 55, 0.5);
        }
    }

    /* Image Card */
    .svc-block .img-card {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        background: #f0f0f0;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
    }

    .svc-block .img-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(237, 50, 55, 0.2), transparent 60%);
        z-index: 1;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .svc-block:hover .img-card::before {
        opacity: 1;
    }

    .svc-block .img-card img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        transition: transform 0.7s ease, filter 0.5s ease;
    }

    .svc-block:hover .img-card img {
        transform: scale(1.1);
    }

    /* Service Badge on Image */
    .svc-block .img-card .svc-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        padding: 20px 25px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 16px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        z-index: 5;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .svc-block .img-card .svc-badge .icon-box {
        width: 55px;
        height: 55px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .svc-block .img-card .svc-badge .icon-box i {
        font-size: 24px;
        color: #fff;
    }

    .svc-block .img-card .svc-badge .badge-content h5 {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0 0 4px;
    }

    .svc-block .img-card .svc-badge .badge-content span {
        font-size: 13px;
        color: #666;
    }

    /* Content Card */
    .svc-block .content-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: 24px;
        padding: 45px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
    }

    .svc-block .content-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ed3237, #f37538);
    }

    .svc-block .content-card .cat-tag {
        display: inline-block;
        padding: 6px 16px;
        background: rgba(237, 50, 55, 0.1);
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        color: #ed3237;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .svc-block .content-card h3 {
        font-size: 32px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 18px;
        line-height: 1.3;
    }

    .svc-block .content-card .desc {
        font-size: 16px;
        line-height: 1.8;
        color: #666;
        margin-bottom: 30px;
    }

    /* Feature Grid */
    .svc-block .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 30px;
    }

    .svc-block .feature-grid .feat-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 18px;
        background: #f8f9fc;
        border-radius: 12px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .svc-block .feature-grid .feat-item:hover {
        background: rgba(237, 50, 55, 0.08);
        border-color: rgba(237, 50, 55, 0.2);
        transform: translateX(5px);
    }

    .svc-block .feature-grid .feat-item i {
        color: #ed3237;
        font-size: 16px;
    }

    .svc-block .feature-grid .feat-item span {
        color: #444;
        font-size: 14px;
        font-weight: 500;
    }

    /* Stats Strip */
    .svc-block .stats-strip {
        display: flex;
        gap: 25px;
        padding: 25px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        margin-bottom: 30px;
    }

    .svc-block .stats-strip .stat-box {
        text-align: center;
        flex: 1;
    }

    .svc-block .stats-strip .stat-box h4 {
        font-size: 28px;
        font-weight: 800;
        background: linear-gradient(135deg, #ed3237, #f37538);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 5px;
    }

    .svc-block .stats-strip .stat-box span {
        font-size: 12px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* CTA Button */
    .svc-block .cta-link {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 32px;
        background: linear-gradient(135deg, #ed3237, #f37538);
        border: none;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(237, 50, 55, 0.3);
    }

    .svc-block .cta-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(237, 50, 55, 0.4);
        color: #fff;
    }

    .svc-block .cta-link i {
        transition: transform 0.3s ease;
    }

    .svc-block .cta-link:hover i {
        transform: translateX(5px);
    }

    /* Responsive */
    @media (max-width: 1199px) {
        .timeline-container::before {
            display: none;
        }

        .svc-block .timeline-dot {
            display: none;
        }
    }

    @media (max-width: 991px) {
        .premium-services .sec-header h2 {
            font-size: 36px;
        }

        .svc-block {
            margin-bottom: 50px;
        }

        .svc-block .content-card {
            padding: 30px;
            margin-top: 30px;
        }

        .svc-block .content-card h3 {
            font-size: 26px;
        }

        .svc-block .feature-grid {
            grid-template-columns: 1fr;
        }

        .svc-block .img-card img {
            height: 320px;
        }
    }

    @media (max-width: 575px) {
        .premium-services {
            padding: 60px 0;
        }

        .premium-services .sec-header h2 {
            font-size: 28px;
        }

        .svc-block .content-card {
            padding: 25px;
        }

        .svc-block .stats-strip {
            flex-wrap: wrap;
            gap: 15px;
        }

        .svc-block .stats-strip .stat-box {
            flex: 1 1 45%;
        }
    }
</style>

<section class="premium-services">
    <div class="container">
        <div class="sec-header" data-sal="slide-up" data-sal-duration="600">
            <span class="badge-text"><i class="fa-solid fa-star"></i> Our Expertise</span>
            <h2>Building Excellence<br><span>One Service at a Time</span></h2>
            <p>From foundation to finishing, Anand Infratech delivers comprehensive construction solutions with 15+ years of expertise, quality craftsmanship, and on-time delivery.</p>
        </div>

        <div class="timeline-container">
            <!-- Service 1: RCC Work -->
            <div class="svc-block" id="rcc-work">
                <div class="timeline-dot"><span>01</span></div>
                <div class="row g-4">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/01.webp" alt="RCC Work">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-building"></i></div>
                                <div class="badge-content">
                                    <h5>RCC Work</h5>
                                    <span>Structural Excellence</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Core Structure</span>
                            <h3>RCC Work & Structural Framework</h3>
                            <p class="desc">Our expert team delivers Reinforced Cement Concrete work that forms the backbone of any construction. With precision engineering and quality materials, we create structures that stand strong for generations.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Deep Foundation</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Columns & Beams</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>RCC Slabs</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Staircase</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>500+</h4><span>Projects</span>
                                </div>
                                <div class="stat-box">
                                    <h4>100%</h4><span>Quality</span>
                                </div>
                                <div class="stat-box">
                                    <h4>15+</h4><span>Years</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: Brick Work (Reversed) -->
            <div class="svc-block" id="brick-plaster-work">
                <div class="timeline-dot"><span>02</span></div>
                <div class="row g-4 flex-lg-row-reverse">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/02.webp" alt="Brick Work">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-layer-group"></i></div>
                                <div class="badge-content">
                                    <h5>Brick Work</h5>
                                    <span>Masonry Experts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Masonry Work</span>
                            <h3>Brick Work & Plastering</h3>
                            <p class="desc">Transform your structure with professional masonry services. We use premium quality bricks and advanced plastering techniques to create walls that are sturdy and aesthetically perfect.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>AAC Blocks</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Red Brick</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Internal Plaster</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>External Plaster</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>1L+</h4><span>Sq. Ft.</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Zero</h4><span>Cracks</span>
                                </div>
                                <div class="stat-box">
                                    <h4>A+</h4><span>Grade</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Tiling -->
            <div class="svc-block" id="tiling-work">
                <div class="timeline-dot"><span>03</span></div>
                <div class="row g-4">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/03.webp" alt="Tiling Work">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-border-all"></i></div>
                                <div class="badge-content">
                                    <h5>Tiling Work</h5>
                                    <span>Premium Flooring</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Flooring</span>
                            <h3>Tiling & Flooring Solutions</h3>
                            <p class="desc">Elevate your spaces with premium tiling services. From elegant marble floors to designer wall tiles, we deliver flawless installation with precision cuts and perfect alignment.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Vitrified Tiles</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Italian Marble</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Granite</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Wall Tiles</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>50K+</h4><span>Sq. Ft.</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Perfect</h4><span>Finish</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Top</h4><span>Brands</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4: Painting (Reversed) -->
            <div class="svc-block" id="gypsum-painting">
                <div class="timeline-dot"><span>04</span></div>
                <div class="row g-4 flex-lg-row-reverse">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/04.webp" alt="Painting">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-paint-roller"></i></div>
                                <div class="badge-content">
                                    <h5>Painting</h5>
                                    <span>Interior Finishing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Finishing</span>
                            <h3>Painting, Gypsum & False Ceiling</h3>
                            <p class="desc">Give your interiors a stunning makeover with comprehensive finishing services. From elegant false ceilings to premium paints, we create spaces that reflect your style.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>False Ceiling</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Gypsum Work</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Interior Paint</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Texture Paint</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>200+</h4><span>Homes</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Asian</h4><span>Paints</span>
                                </div>
                                <div class="stat-box">
                                    <h4>5yr</h4><span>Warranty</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 5: Fabrication -->
            <div class="svc-block" id="fabrication-wooden-work">
                <div class="timeline-dot"><span>05</span></div>
                <div class="row g-4">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/05.webp" alt="Fabrication">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-gears"></i></div>
                                <div class="badge-content">
                                    <h5>Fabrication</h5>
                                    <span>Custom Crafts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Woodwork</span>
                            <h3>Fabrication & Woodwork</h3>
                            <p class="desc">Experience the perfect blend of strength and elegance. From sturdy MS gates to beautiful wooden furniture, we craft pieces that last a lifetime with premium materials.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>MS/SS Gates</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Railings</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Wood Doors</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Wardrobes</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>1000+</h4><span>Items</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Teak</h4><span>Quality</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Custom</h4><span>Design</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 6: Plumbing (Reversed) -->
            <div class="svc-block" id="plumbing-work">
                <div class="timeline-dot"><span>06</span></div>
                <div class="row g-4 flex-lg-row-reverse">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/06.webp" alt="Plumbing">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-faucet-drip"></i></div>
                                <div class="badge-content">
                                    <h5>Plumbing</h5>
                                    <span>Water Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Plumbing</span>
                            <h3>Complete Plumbing Services</h3>
                            <p class="desc">Ensure smooth water flow throughout your property with expert plumbing services. We use branded fittings and modern techniques for leak-proof installations.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Water Supply</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Drainage</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Bath Fittings</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Water Tank</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>Zero</h4><span>Leakage</span>
                                </div>
                                <div class="stat-box">
                                    <h4>CPVC</h4><span>Pipes</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Jaguar</h4><span>Fittings</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 7: Electrical -->
            <div class="svc-block" id="electrical-work">
                <div class="timeline-dot"><span>07</span></div>
                <div class="row g-4">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/07.webp" alt="Electrical">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-bolt"></i></div>
                                <div class="badge-content">
                                    <h5>Electrical</h5>
                                    <span>Power Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Electrical</span>
                            <h3>Electrical Wiring & Installation</h3>
                            <p class="desc">Power up your property safely with professional electrical services. From concealed wiring to smart home automation, we deliver safe and efficient solutions.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Concealed Wire</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Panel Boards</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Lighting</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Earthing</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>ISI</h4><span>Certified</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Havells</h4><span>Wires</span>
                                </div>
                                <div class="stat-box">
                                    <h4>100%</h4><span>Safe</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 8: Mechanical (Reversed) -->
            <div class="svc-block" id="mechanical-work">
                <div class="timeline-dot"><span>08</span></div>
                <div class="row g-4 flex-lg-row-reverse">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/12.webp" alt="Mechanical">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-wrench"></i></div>
                                <div class="badge-content">
                                    <h5>Mechanical</h5>
                                    <span>MEP Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">MEP</span>
                            <h3>Mechanical & HVAC Solutions</h3>
                            <p class="desc">Complete MEP solutions for commercial and residential projects. From HVAC systems to fire safety, we ensure your building meets all modern standards.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>HVAC System</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Fire Safety</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Lift Install</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Solar Setup</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>50+</h4><span>Buildings</span>
                                </div>
                                <div class="stat-box">
                                    <h4>NOC</h4><span>Compliant</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Green</h4><span>Energy</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 9: Structural Audit -->
            <div class="svc-block" id="structural-audit">
                <div class="timeline-dot"><span>09</span></div>
                <div class="row g-4">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700">
                        <div class="img-card">
                            <img src="assets/images/service/13.webp" alt="Structural Audit">
                            <div class="svc-badge">
                                <div class="icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                                <div class="badge-content">
                                    <h5>Audit & Repairs</h5>
                                    <span>Safety First</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700">
                        <div class="content-card">
                            <span class="cat-tag">Safety</span>
                            <h3>Structural Audit & Repairs</h3>
                            <p class="desc">Ensure your building's safety and longevity with comprehensive structural audit and repair services. Our expert engineers identify issues early and provide effective solutions.</p>

                            <div class="feature-grid">
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Assessment</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Crack Repair</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Waterproof</span></div>
                                <div class="feat-item"><i class="fa-solid fa-check"></i><span>Retrofitting</span></div>
                            </div>

                            <div class="stats-strip">
                                <div class="stat-box">
                                    <h4>100+</h4><span>Audits</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Certified</h4><span>Engineers</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Detailed</h4><span>Reports</span>
                                </div>
                            </div>

                            <a href="contact.php" class="cta-link">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Premium Services End -->

<!-- Contact Area Start -->
<h3>RCC Work & Structural Framework</h3>
<p class="desc">Our expert team delivers Reinforced Cement Concrete (RCC) work that forms the backbone of any construction. With precision engineering and quality materials, we create structures that stand strong for generations.</p>

<ul class="feature-list">
    <li><i class="fa-solid fa-check-circle"></i> Deep Foundation Work</li>
    <li><i class="fa-solid fa-check-circle"></i> Columns & Beams</li>
    <li><i class="fa-solid fa-check-circle"></i> RCC Slabs & Roofing</li>
    <li><i class="fa-solid fa-check-circle"></i> Staircase Construction</li>
    <li><i class="fa-solid fa-check-circle"></i> Retaining Walls</li>
    <li><i class="fa-solid fa-check-circle"></i> Water Tanks</li>
</ul>

<div class="stats-row">
    <div class="stat-item">
        <h4>500+</h4>
        <span>Projects</span>
    </div>
    <div class="stat-item">
        <h4>100%</h4>
        <span>Quality</span>
    </div>
    <div class="stat-item">
        <h4>15+</h4>
        <span>Years Exp.</span>
    </div>
</div>

<a href="contact.php" class="cta-btn">
    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>
</div>
</div>

<!-- Service 2: Brick Work & Plaster (Reversed) -->
<div class="zz-item" id="brick-plaster-work">
    <div class="row flex-lg-row-reverse">
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/02.webp" alt="Brick Work & Plaster">
                    <span class="number-badge">02</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-border-all"></i> Masonry Expertise</span>
                <h3>Brick Work & Plastering Services</h3>
                <p class="desc">Transform your structure with our professional masonry services. We use premium quality bricks and advanced plastering techniques to create walls that are not just sturdy but also aesthetically perfect.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> AAC Block Work</li>
                    <li><i class="fa-solid fa-check-circle"></i> Red Brick Masonry</li>
                    <li><i class="fa-solid fa-check-circle"></i> Internal Plastering</li>
                    <li><i class="fa-solid fa-check-circle"></i> External Plastering</li>
                    <li><i class="fa-solid fa-check-circle"></i> Waterproof Plaster</li>
                    <li><i class="fa-solid fa-check-circle"></i> Neeru Finish</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>1L+</h4>
                        <span>Sq. Ft. Done</span>
                    </div>
                    <div class="stat-item">
                        <h4>Zero</h4>
                        <span>Cracks</span>
                    </div>
                    <div class="stat-item">
                        <h4>A+</h4>
                        <span>Grade Work</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 3: Tiling Work -->
<div class="zz-item" id="tiling-work">
    <div class="row">
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/03.webp" alt="Tiling Work">
                    <span class="number-badge">03</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-border-all"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-th"></i> Premium Finishing</span>
                <h3>Tiling & Flooring Solutions</h3>
                <p class="desc">Elevate your spaces with our premium tiling services. From elegant marble floors to designer wall tiles, we deliver flawless installation with precision cuts and perfect alignment every time.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> Vitrified Tiles</li>
                    <li><i class="fa-solid fa-check-circle"></i> Italian Marble</li>
                    <li><i class="fa-solid fa-check-circle"></i> Granite Flooring</li>
                    <li><i class="fa-solid fa-check-circle"></i> Designer Wall Tiles</li>
                    <li><i class="fa-solid fa-check-circle"></i> Bathroom Tiling</li>
                    <li><i class="fa-solid fa-check-circle"></i> Outdoor Paving</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>50K+</h4>
                        <span>Sq. Ft. Tiled</span>
                    </div>
                    <div class="stat-item">
                        <h4>Perfect</h4>
                        <span>Alignment</span>
                    </div>
                    <div class="stat-item">
                        <h4>Top</h4>
                        <span>Brands</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 4: Gypsum, Painting & False Ceiling (Reversed) -->
<div class="zz-item" id="gypsum-painting">
    <div class="row flex-lg-row-reverse">
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/04.webp" alt="Painting & False Ceiling">
                    <span class="number-badge">04</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-paint-roller"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-palette"></i> Interior Finishing</span>
                <h3>Painting, Gypsum & False Ceiling</h3>
                <p class="desc">Give your interiors a stunning makeover with our comprehensive finishing services. From elegant false ceilings to premium paints, we create spaces that reflect your style and personality.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> Designer False Ceiling</li>
                    <li><i class="fa-solid fa-check-circle"></i> Gypsum Board Work</li>
                    <li><i class="fa-solid fa-check-circle"></i> POP Decorations</li>
                    <li><i class="fa-solid fa-check-circle"></i> Interior Painting</li>
                    <li><i class="fa-solid fa-check-circle"></i> Texture Painting</li>
                    <li><i class="fa-solid fa-check-circle"></i> External Painting</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>200+</h4>
                        <span>Homes Done</span>
                    </div>
                    <div class="stat-item">
                        <h4>Asian</h4>
                        <span>Paints Used</span>
                    </div>
                    <div class="stat-item">
                        <h4>5yr</h4>
                        <span>Warranty</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 5: Fabrication & Wooden Work -->
<div class="zz-item" id="fabrication-wooden-work">
    <div class="row">
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/05.webp" alt="Fabrication & Wooden Work">
                    <span class="number-badge">05</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-hammer"></i> Custom Craftsmanship</span>
                <h3>Fabrication & Woodwork Services</h3>
                <p class="desc">Experience the perfect blend of strength and elegance with our fabrication and woodwork services. From sturdy MS gates to beautiful wooden furniture, we craft pieces that last a lifetime.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> MS/SS Gates & Grills</li>
                    <li><i class="fa-solid fa-check-circle"></i> Staircase Railings</li>
                    <li><i class="fa-solid fa-check-circle"></i> Wooden Doors</li>
                    <li><i class="fa-solid fa-check-circle"></i> Wardrobe & Cupboards</li>
                    <li><i class="fa-solid fa-check-circle"></i> Modular Kitchen</li>
                    <li><i class="fa-solid fa-check-circle"></i> Window Frames</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>1000+</h4>
                        <span>Items Made</span>
                    </div>
                    <div class="stat-item">
                        <h4>Teak</h4>
                        <span>Wood Quality</span>
                    </div>
                    <div class="stat-item">
                        <h4>Custom</h4>
                        <span>Designs</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 6: Plumbing (Reversed) -->
<div class="zz-item" id="plumbing-work">
    <div class="row flex-lg-row-reverse">
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/06.webp" alt="Plumbing">
                    <span class="number-badge">06</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-faucet-drip"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-droplet"></i> Water Solutions</span>
                <h3>Complete Plumbing Services</h3>
                <p class="desc">Ensure smooth water flow throughout your property with our expert plumbing services. We use branded fittings and modern techniques for leak-proof installations that serve you for decades.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> Water Supply Lines</li>
                    <li><i class="fa-solid fa-check-circle"></i> Drainage Systems</li>
                    <li><i class="fa-solid fa-check-circle"></i> Bathroom Fittings</li>
                    <li><i class="fa-solid fa-check-circle"></i> Water Tank Installation</li>
                    <li><i class="fa-solid fa-check-circle"></i> Septic Tank Work</li>
                    <li><i class="fa-solid fa-check-circle"></i> Rainwater Harvesting</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>Zero</h4>
                        <span>Leakage</span>
                    </div>
                    <div class="stat-item">
                        <h4>CPVC</h4>
                        <span>Pipes Used</span>
                    </div>
                    <div class="stat-item">
                        <h4>Jaguar</h4>
                        <span>Fittings</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 7: Electrical -->
<div class="zz-item" id="electrical-work">
    <div class="row">
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/07.webp" alt="Electrical Work">
                    <span class="number-badge">07</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-plug"></i> Power Solutions</span>
                <h3>Electrical Wiring & Installation</h3>
                <p class="desc">Power up your property safely with our professional electrical services. From concealed wiring to smart home automation, we deliver solutions that are safe, efficient, and future-ready.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> Concealed Wiring</li>
                    <li><i class="fa-solid fa-check-circle"></i> DB & Panel Boards</li>
                    <li><i class="fa-solid fa-check-circle"></i> Lighting Fixtures</li>
                    <li><i class="fa-solid fa-check-circle"></i> Power Points</li>
                    <li><i class="fa-solid fa-check-circle"></i> Earthing System</li>
                    <li><i class="fa-solid fa-check-circle"></i> Smart Automation</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>ISI</h4>
                        <span>Certified</span>
                    </div>
                    <div class="stat-item">
                        <h4>Havells</h4>
                        <span>Wires Used</span>
                    </div>
                    <div class="stat-item">
                        <h4>Safe</h4>
                        <span>Installation</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 8: Mechanical (Reversed) -->
<div class="zz-item" id="mechanical-work">
    <div class="row flex-lg-row-reverse">
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/12.webp" alt="Mechanical Work">
                    <span class="number-badge">08</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-cog"></i> MEP Services</span>
                <h3>Mechanical & HVAC Solutions</h3>
                <p class="desc">Complete mechanical, electrical, and plumbing (MEP) solutions for commercial and residential projects. From HVAC systems to fire safety, we ensure your building meets all modern standards.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> HVAC Systems</li>
                    <li><i class="fa-solid fa-check-circle"></i> Fire Fighting System</li>
                    <li><i class="fa-solid fa-check-circle"></i> Lift Installation</li>
                    <li><i class="fa-solid fa-check-circle"></i> Water Pumps</li>
                    <li><i class="fa-solid fa-check-circle"></i> Generator Setup</li>
                    <li><i class="fa-solid fa-check-circle"></i> Solar Systems</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>50+</h4>
                        <span>Buildings</span>
                    </div>
                    <div class="stat-item">
                        <h4>NOC</h4>
                        <span>Compliant</span>
                    </div>
                    <div class="stat-item">
                        <h4>Energy</h4>
                        <span>Efficient</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Service 9: Structural Audit, Repairs & Maintenance -->
<div class="zz-item" id="structural-audit">
    <div class="row">
        <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
            <div class="img-side">
                <div class="img-wrapper">
                    <img src="assets/images/service/13.webp" alt="Structural Audit">
                    <span class="number-badge">09</span>
                    <div class="floating-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
            <div class="content-side">
                <span class="service-tag"><i class="fa-solid fa-shield-check"></i> Safety First</span>
                <h3>Structural Audit & Repairs</h3>
                <p class="desc">Ensure your building's safety and longevity with our comprehensive structural audit and repair services. Our expert engineers identify issues early and provide effective repair solutions.</p>

                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> Structural Assessment</li>
                    <li><i class="fa-solid fa-check-circle"></i> Condition Survey</li>
                    <li><i class="fa-solid fa-check-circle"></i> Crack Repairs</li>
                    <li><i class="fa-solid fa-check-circle"></i> Waterproofing</li>
                    <li><i class="fa-solid fa-check-circle"></i> Retrofitting</li>
                    <li><i class="fa-solid fa-check-circle"></i> Annual Maintenance</li>
                </ul>

                <div class="stats-row">
                    <div class="stat-item">
                        <h4>100+</h4>
                        <span>Audits Done</span>
                    </div>
                    <div class="stat-item">
                        <h4>Certified</h4>
                        <span>Engineers</span>
                    </div>
                    <div class="stat-item">
                        <h4>Detailed</h4>
                        <span>Reports</span>
                    </div>
                </div>

                <a href="contact.php" class="cta-btn">
                    Get Free Quote <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

</div>
</section>
<!-- Zig-Zag Services Section End -->

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