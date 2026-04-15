<?php
session_start();

$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);

 $skipAutoCanonical = true;
include 'header.php';
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-189WWHXLSS"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-189WWHXLSS');
</script>
<!-- MS Clarity -->
<script type="text/javascript">
(function(c, l, a, r, i, t, y) {
    c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
    };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
})(window, document, "clarity", "script", "mxzdn16ndk");
</script>
<!--END MS Clarity -->
<title>Creative Website Design & Development Agency</title>
<!-- Final Optimized Keywords -->
<!-- Meta Keywords -->
<meta name="keywords"
    content="website development company, website development services, website design and development, website development agency, building website for business">

<!-- Open Graph Title -->
<meta property="og:title" content="Website Design & Development Company in Mumbai, India | Technofra">

<!-- Open Graph Description -->
<meta property="og:description"
    content="Technofra is a leading website design and development company in Mumbai, India. We build fast, responsive, and business-focused websites to grow your online presence.">

<link rel="canonical" href="https://technofra.com/web-design">

<style>
.nav-lin.active {
    background-color: #0b3466;
    color: white;
}

.nav-lin:hover {
    background-color: #0b3466;
    color: white;
}

.portdot {
    background-color: #5a5a5a;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    display: block;
    margin: 2px;
}

.dpflex {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
}

.project .project-slider .single-slider {
    margin: 0px 15px;
    position: relative;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    padding: 20px;

}

.project .project-slider .single-slider {
    margin: 0px 15px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}



.project .project-slider .single-slider .heading h3 a:hover {
    color: white;
    transition: all 0.4s;
}

.project .project-slider .single-slider .heading h3 a {
    display: inline-block;
    /* font-size: var(--f-fs-font-fs20); */
    line-height: var(--f-fs-font-fs28);
    font-weight: var(--f-fw-blod);
    font-size: 20px;
    color: white;
}

.project .project-slider .single-slider .learn {
    transition: all 0.4s;
    color: white;
    /* font-size: var(--f-fs-font-fs18); */
    line-height: var(--f-fs-font-fs18);
    font-weight: var(--f-fw-blod);
    display: inline-block;
    margin-top: 16px;
    background: #ff6b35bf;
    padding: 8px;
    border-radius: 6px;
    font-size: 14px;
}

.project .project-slider .owl-nav button {
    background: #003366;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    transition: all 0.4s;
}

.owl-carousel {
    background: 0 0;
    color: #f8f9fa;
    border: none;
    padding: 0 !important;
    font: inherit;
}

/* manish */
.nav-lin {
    padding: 10px;
    display: flex;
    border-radius: 6px;
    margin-bottom: 16px;
    align-items: center;
}

.nav-lin i {
    margin-right: 8px;
    /* Adjust spacing between icon and text */
}

/* Add grey background for active tab */
.nav-lin.active {
    background-color: #0b3466;
}

/* Optional: Add hover effect */
.nav-lin:hover {
    background-color: #0b3466;
}

/* end */
.sc-team-filter-nav li a {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #666;
    font-weight: 600;
    padding: 10px 20px;
    border: 1px solid rgba(17, 24, 39, .12);
    border-radius: 5px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.dpmb-150 {
    margin-bottom: 150px;
}

.ma-contact-img {
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.ma-contact {
    background-image: url(assets/image/websitedevlopment/contact-bg.webp);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.swiper-slide {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: relative;
    -webkit-transition-property: -webkit-transform;
    transition-property: -webkit-transform;
    transition-property: transform;
    transition-property: transform, -webkit-transform;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

.box-h {
    height: 315px;

}

.bgc-primary {
    background-color: #0a2c5e;
}

.bg-circle1 {
    background-color: #49cef7;
}

.dp-r-10 {
    border-radius: 10px !important;
}

.bg-circle2 {
    background-color: #012d61;
}

@media only screen and (min-width: 1200px) and (max-width: 1400px) {
    .dpmt-70 {
        margin-top: 0px !important;
    }
}

/* Khushi laptop: */
@media only screen and (min-width: 1030px) and (max-width: 1366px) {
    .heading-2 {
        font-size: 50px;
    }

    .fs-18 {
        font-size: 16px;
    }

    .link {
        text-decoration: none;
        -webkit-transition: all .3s ease;
        font-size: 9px;
        transition: all .3s ease;
    }

    .heading-6 {
        font-size: 18px;
    }

    .col-xxl-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 41.66666667%;
    }

    .place-content-center {
        place-content: center;

        padding-left: 0px;
    }

    .width-20 {
        width: 4rem;
    }

    .height-20 {
        height: 4rem;
    }

    .img-fluid {

        height: auto;
    }

    .box-h {
        height: 230px;
    }

    .dpmt-70 {
        margin-top: 0px;
    }
}

/* sir laptop: */
@media only screen and (min-width : 1380px) and (max-width : 1600px) {
    .heading-2 {
        font-size: 50px;
    }

    .heading-6 {
        font-size: 18px;
    }

    .fs-18 {
        font-size: 16px;
    }

    .place-content-center {
        place-content: center;

        padding-left: 0px;
    }

    .box-h {
        height: 260px;
    }

    .width-20 {
        width: 4rem;
    }

    .height-20 {
        height: 4rem;
    }

    .icon-img {
        max-width: 80%;
        height: auto;
    }
}

.clr-red {
    color: #38d1fe;
}

.social-media-btn.active .bgc-text-1 {
    background: linear-gradient(287.85deg, #0b3466 0%, #38d1fe 95.32%);
}

.showcase-card {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    border-radius: 10px;
}

.hero-app-img::before {
    content: "";
    position: absolute;
    top: 50%;
    right: 50%;
    -webkit-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
    border-radius: 50%;
    background-color: #0a112f00;
    width: 500px;
    height: 500px;
}

.social-media-content dp-r-10::after {
    content: "";
    position: absolute;
    inset-block: 0;
    inset-inline-start: 0;
    inset-inline-end: 58%;
    background-image: url();
    background-size: contain;
    background-position: left bottom;
    background-repeat: no-repeat;
}

.section-space {
    padding-top: clamp(3.75rem, 2.5vw + 1rem, 7.5rem);
    padding-bottom: clamp(3.75rem, 2.5vw + 1rem, 7.5rem);
}

.border-red-clr {
    --bs-border-color: #38d1fe5e;
}

.ca-goal-card {
    position: relative;
    background-color: #f4f5fe;
    isolation: isolate;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}

.bgc-danger {
    background-color: #38d1fe;
}

.ca-goal-slider__pagination .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background-color: #898989;
    opacity: 1;
}

.text-c {
    justify-content: center;
}

@media (max-width:480px) {
    .text-c {
        justify-content: start;
    }

    .lead {
        padding-bottom: 20px;
    }

    .link {
        text-decoration: none;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        font-size: 6px;
    }

    .showcase-card:hover .showcase-card__content {
        inset-block-end: 0.1rem;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

.border-secondary-clr {
    --bs-border-color: #38d1fe !important;
}

.btn-outline-light:hover,
.btn-outline-light:active,
.btn-outline-light.active,
.btn-outline-light.show {
    color: #38d1fe !important;
}



@media (min-width: 993px) and (max-width: 1199px) {

    p {
        font-size: 14px;
    }
}



.it-company-slider__pagination span {
    margin: 0 !important;
    width: 88px;
    height: 4px;
    background: #38d1fe;
    opacity: 1;
    border-radius: 0;
}

.it-company-slider__pagination span:hover,
.it-company-slider__pagination span.swiper-pagination-bullet-active {
    background: #0b3466;
}

.it-slider-nav {
    width: 50px;
    height: 50px;
}

.ptb-150 {
    padding: 150px 0px;
}

.dpmt-70 {
    margin-top: 70px;
}

.social-media-btn {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 20px;
    padding: 10px 15px;
    border-radius: 10px;
    margin: 10px;
}

.single-payment-step {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}

.baner {
    background: url('assets/image/websitemaintenance/banner011.webp')no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

/* Add transition for smooth color and underline effect */
.nav-link1 {
    position: relative;
    color: rgb(56 209 254);
    text-decoration: none;
    padding-bottom: 5px;
    transition: color 0.3s ease;
}

.nav-link1.active {
    color: #38d1fe;
    /* Active color */
}

/* Underline effect */
.nav-link1::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #20a552;
    /* Color of the underline */
    bottom: 0;
    left: 0;
    transform: scaleX(0);
    /* Start with no underline */
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
    /* Smooth transition for the underline */
}

/* When the link is active, show the underline */
.nav-link1.active::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

/* On hover, change color and show underline */
.nav-link1:hover {
    color: #20a552;
}

.nav-link1:hover::after {
    transform: scaleX(1);
    /* Show underline on hover */
    transform-origin: bottom left;
}

.container1 {
    margin: auto;
    overflow-x: scroll;
    white-space: nowrap;
    display: flex;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.scroll-disabler {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.0001);
}

::-webkit-scrollbar {
    display: none;
}

article {
    min-width: 250px;
    padding: 1rem;
}

.nav-item1 {
    margin: 20px 25px 0px 0px;
}

.btn-38-outline {
    border: 1px solid #38d1fe;
    -webkit-transition: .5s;
    transition: .5s;
    color: #dbdbdb;
}

.btn-38-outline:hover {
    background-color: #38d1fe;
}

@media(max-width:480px) {
    .mkt {
        margin-top: 20px;
    }
}

.eep-status-alert {
    max-width: 1180px;
    margin: 24px auto 0;
    padding: 14px 18px;
    border-radius: 14px;
    font-size: 15px;
    line-height: 1.5;
}

.eep-status-alert.success {
    background: #eaf8ef;
    border: 1px solid #b8e2c3;
    color: #146c2e;
}

.eep-status-alert.error {
    background: #fff1f1;
    border: 1px solid #f0b9b9;
    color: #9c1d1d;
}

.eep-calendar-day[disabled],
.eep-time-option[disabled] {
    opacity: 0.35;
    cursor: not-allowed;
    pointer-events: none;
}

.eep-time-option[disabled] {
    text-decoration: line-through;
}

.eep-book-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(7, 15, 43, 0.72);
}

.eep-book-modal.show {
    display: flex;
}

.eep-book-modal-dialog {
    width: 100%;
    max-width: 520px;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 24px 80px rgba(15, 23, 42, 0.24);
    overflow: hidden;
}

.eep-book-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 24px 12px;
}

.eep-book-modal-head h3 {
    margin: 0 0 6px;
    font-size: 28px;
    line-height: 1.2;
    color: #101828;
}

.eep-book-modal-head p {
    margin: 0;
    color: #475467;
}

.eep-book-close {
    border: 0;
    width: 40px;
    height: 40px;
    border-radius: 999px;
    background: #f3f4f6;
    color: #111827;
    font-size: 28px;
    line-height: 1;
}

.eep-book-form {
    padding: 0 24px 24px;
}

.eep-book-summary {
    padding: 14px 16px;
    margin-bottom: 18px;
    border-radius: 16px;
    background: #f5f9ff;
    border: 1px solid #dbe7ff;
    color: #12315f;
    font-size: 14px;
}

.eep-book-field {
    margin-bottom: 16px;
}

.eep-book-field label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
}

.eep-book-field input {
    width: 100%;
    height: 50px;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    outline: none;
}

.eep-book-field input:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.eep-book-submit {
    width: 100%;
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #16a34a, #15803d);
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 14px 18px;
}

.webdesign-booking-card .eep-calendar-card {
    width: 100%;
}

.webdesign-booking-card {
    margin-left: auto;
    margin-right: auto;
    position: relative !important;
    inset: auto !important;
}

.webdesign-booking-card .eep-calendar-head {
    margin-bottom: 12px;
}

.webdesign-booking-card .eep-calendar-title-row {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
}

.webdesign-booking-card .eep-calendar-title {
    font-size: 24px;
    margin: 0;
    white-space: nowrap;
}

.webdesign-booking-card .eep-calendar-sub {
    font-size: 13px;
}

.webdesign-booking-card .eep-calendar-box {
    padding: 12px;
}

.webdesign-booking-card .eep-month-label {
    font-size: 16px;
}

.webdesign-booking-card .eep-calendar-week {
    gap: 4px;
    font-size: 10px;
}

.webdesign-booking-card .eep-calendar-grid {
    gap: 4px;
}

.webdesign-booking-card .eep-calendar-empty,
.webdesign-booking-card .eep-calendar-day {
    height: 34px;
}

.webdesign-booking-card .eep-calendar-day {
    font-size: 12px;
}

.webdesign-booking-card .eep-calendar-info {
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 12px;
}

.webdesign-booking-card .eep-selected-date,
.webdesign-booking-card .eep-time-trigger {
    padding: 10px 11px;
    border-radius: 13px;
    font-size: 13px;
}

.webdesign-booking-card .eep-time-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.webdesign-booking-card .eep-pill-icon {
    width: 30px;
    height: 30px;
    border-radius: 9px;
}

.webdesign-booking-card .eep-selected-date-text,
.webdesign-booking-card .eep-time-text {
    font-size: 12px;
}

.webdesign-booking-card .eep-time-option {
    padding: 8px 7px;
    font-size: 11px;
}

.webdesign-booking-card .eep-calendar-actions {
    grid-template-columns: 1fr;
    margin-top: 10px;
}

.webdesign-booking-card .eep-btn-green {
    justify-content: center;
    padding: 12px 12px;
    font-size: 13px;
    border-radius: 13px;
}

@media (max-width: 1199px) {
    .webdesign-booking-card {
        max-width: 390px;
    }
}

@media (max-width: 576px) {
    .eep-book-modal-dialog {
        border-radius: 18px;
    }

    .eep-book-modal-head {
        padding: 20px 20px 12px;
    }

    .eep-book-modal-head h3 {
        font-size: 22px;
    }

    .eep-book-form {
        padding: 0 20px 20px;
    }

    .webdesign-booking-card {
        max-width: 100%;
    }

    .webdesign-booking-card .eep-calendar-title {
        font-size: 24px;
    }

    .webdesign-booking-card .eep-calendar-box {
        padding: 14px;
    }

    .webdesign-booking-card .eep-calendar-info {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'navbar.php'; ?>

<?php if ($bookCallStatus): ?>
<div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>


<section class="hero-section ptb-100  d-flex align-items-center text-white position-relative baner">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="hero-content-wrap">

                    <h1 class="fw-bold display-5 white">Web Design & Development Company in Mumbai</h1>
                    <p class="lead mt-3">
                        At Technofra, we specialize in creating stunning, high-performance websites that drive traffic,
                        engage visitors, and convert leads into customers. With over 14 years of experience and a team
                        of skilled professionals, we offer custom website design and development services tailored to
                        meet the unique needs of businesses of all sizes.
                    </p>
                    <div class="mt-5">
                        <div class="d-flex align-items-center gap-3 flex-wrap flex-md-nowrap mt-4">
                            <p class="text-black fs-14 mb-0">Types of Website: </p>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <span
                                    class="d-inline-block btn btn-sm text-black fs-14 fw-medium btn-38-outline rounded-pill">Business</span>
                                <span
                                    class="d-inline-block btn btn-sm text-black fs-14 fw-medium btn-38-outline rounded-pill">E-commerce</span>
                                <span
                                    class="d-inline-block btn btn-sm text-black fs-14 fw-medium btn-38-outline rounded-pill">Health
                                </span>
                                <span
                                    class="d-inline-block btn btn-sm text-black fs-14 fw-medium btn-38-outline rounded-pill">Portfolio</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-6 text-center">
                <img src="assets\image\websitedevlopment\1 webp..webp" class="mtk" alt="Website Development">
            </div>
        </div>
    </div>
</section>



<div class="ptb-80 pb-80 bgc-white" style="z-index: -1;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="lead" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="assets/image/websitedevlopment/web01.webp" alt="Web design and development"
                        class="img-fluid w-100 object-fit-cover">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                data-aos-duration="500">
                <h4 class="heading-4 margin-bottom-8 clr-text">
                    Looking For The Best Web Design & Development Agency?
                </h4>
                <p>

                    Looking for the best web design and development company to elevate your online presence?
                    Look no further than <span class="aih-color ff-poppins">Technofra</span>. We specialize in
                    creating stunning, user-friendly websites that engage audiences and deliver measurable results.
                </p>

                <p>
                    Our team of experienced designers and developers combines creativity with technical expertise
                    to provide custom web solutions tailored to your business needs. Whether you're a startup or
                    an established enterprise, we have the skills and dedication to turn your vision into reality.
                </p>

            </div>
        </div>
    </div>
</div>

<section class="ptb-60" style="background: url('assets/image/websitedevlopment/amazing-banner.webp')no-repeat center
          center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h2 class="text-white mb-3">Amazing Web Design Features</h2>

                </div>
            </div>
        </div>
        <div class="row mb--150">
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/responsive.png" alt="Responsive Design Development" />
                    <h6 class="mt-4">Responsive Design</h6>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/custom.png" alt="Custom Code Developer" />
                    <h6 class="mt-4">Powerful Customization</h6>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/animation.png" alt="Html Developer" />
                    <h6 class="mt-4">Cool & Modern Animation</h6>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/seo.png" alt="SEO Developer" />
                    <h6 class="mt-4">SEO Friendly Coding</h6>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/customer-service.png" alt="Technical Supports" />
                    <h6 class="mt-4">Best Technical Supports</h6>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="single-payment-step bg-white p-4 mb-4 mb-lg-0 text-center">
                    <img src="assets/image/icons/website-design.png" alt="icon" />
                    <h6 class="mt-4">Varied Layout & Parallax</h6>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section pt-200">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">

                    <h2>Our Web Design &
                        Development Services</h2>
                    <p class="mt-3">Our Web Design & Development services deliver innovative, responsive, and
                        high-performance websites tailored to your business needs.</p>
                    <div class="row mt-5">

                        <div class="col-lg-3">
                            <ul class="nav flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin active" id="tab1" data-bs-toggle="pill" data-bs-target="#image1"
                                        type="button" role="tab" aria-controls="image1" aria-selected="true">
                                        <i class="fas fa-paint-brush me-2"></i>
                                        Custom Website Design
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin" id="tab2" data-bs-toggle="pill" data-bs-target="#image2"
                                        type="button" role="tab" aria-controls="image2" aria-selected="false">
                                        <i class="fas fa-columns me-2"></i>
                                        E-commerce Website Design
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin" id="tab3" data-bs-toggle="pill" data-bs-target="#image3"
                                        type="button" role="tab" aria-controls="image3" aria-selected="false">
                                        <i class="fas fa-layer-group me-2"></i>
                                        Content Management
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin" id="tab4" data-bs-toggle="pill" data-bs-target="#image4"
                                        type="button" role="tab" aria-controls="image4" aria-selected="false">
                                        <i class="fas fa-bars me-2"></i>
                                        Responsive Website Design
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin" id="tab5" data-bs-toggle="pill" data-bs-target="#image5"
                                        type="button" role="tab" aria-controls="image5" aria-selected="false">
                                        <i class="fas fa-border-top me-2"></i>
                                        Website Support
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="nav-lin" id="tab6" data-bs-toggle="pill" data-bs-target="#image6"
                                        type="button" role="tab" aria-controls="image6" aria-selected="false">
                                        <i class="fas fa-file-alt me-2"></i>
                                        Graphics Design
                                    </p>
                                </li>

                            </ul>
                        </div>


                        <div class="col-lg-9">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="image1" role="tabpanel"
                                    aria-labelledby="tab1">

                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class=" bgc-white rounded-4 dp-r-10 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/custom-website-design.webp"
                                                        alt="Custom Website Design" class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        Custom Website Design
                                                    </h5>
                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Transform your vision into reality with our custom website
                                                        design services. We build unique, fully-functional websites from
                                                        scratch, tailored to your specific business goals and brand
                                                        identity.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade" id="image2" role="tabpanel" aria-labelledby="tab2">

                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class="social-media-content dp-r-10 bgc-white rounded-4 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/e-commerce-website-design.webp"
                                                        alt="E-commerce Website Design"
                                                        class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        E-commerce Website Design
                                                    </h5>
                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Boost your online sales with our robust e-commerce website
                                                        design. We develop user-friendly, secure, and scalable online
                                                        stores that provide a seamless shopping experience for your
                                                        customers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="image3" role="tabpanel" aria-labelledby="tab3">
                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class="social-media-content dp-r-10 bgc-white rounded-4 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/content-management.webp"
                                                        alt="Content Creater" class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        Content Management
                                                    </h5>
                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Take control of your website with our CMS website solutions. We
                                                        work with popular platforms like WordPress, Joomla, and Drupal,
                                                        allowing you to easily manage and update your content without
                                                        any technical knowledge.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade" id="image4" role="tabpanel" aria-labelledby="tab4">
                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class="social-media-content dp-r-10 bgc-white rounded-4 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/responsive-website-design.webp"
                                                        alt="Responsive Website Developer"
                                                        class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        Responsive Website Design
                                                    </h5>
                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Ensure your website looks great and functions perfectly on all
                                                        devices with our responsive web design services. We create
                                                        mobile-friendly websites that offer an optimal user experience
                                                        on smartphones, tablets, and desktops.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="image5" role="tabpanel" aria-labelledby="tab4">

                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class="social-media-content dp-r-10 bgc-white rounded-4 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/website-support.webp"
                                                        alt="Web Programming" class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        Website Support
                                                    </h5>
                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Keep your website running smoothly with our ongoing maintenance
                                                        and support services. We offer regular updates, security checks,
                                                        and performance optimization to ensure your site remains fast,
                                                        secure, and up-to-date.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="image6" role="tabpanel" aria-labelledby="tab5">
                                    <div class="border border-red-clr rounded-4 padding-4 dp-r-10">
                                        <div
                                            class="social-media-content dp-r-10 bgc-white rounded-4 section-space padding-x-2 padding-x-xsm-4 padding-x-sm-8 padding-x-md-12 padding-end-xxl-25">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <img src="assets/image/websitedevlopment/graphics-design.webp"
                                                        alt="Graphics Designer" class="img-fluid rounded-4 lead">
                                                </div>

                                                <div class="col-lg-6">
                                                    <h5 class="heading-5 font-weight-semibold margin-bottom-5 clr-text">
                                                        Graphics Design
                                                    </h5>

                                                    <p class="clr-paragraph margin-bottom-8">
                                                        Improve your website's visual appeal with our graphic design
                                                        services. We create custom banners, icons, page visuals, and
                                                        brand-focused design elements that make your website look more
                                                        professional, engaging, and easy to navigate.
                                                    </p>
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
        </div>
    </div>
</section>

<section class="ptb-80 bg-black position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title mb-5 text-center">
                    <h2 class="text-white">Why Choose Us</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="game-features mb-5 mb-lg-0" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="game-feature d-flex align-items-center mb-4">
                        <div class="game-feature-icon flex-shrink-0">
                            <img src="assets/image/icons/why-solution.png" class="img-fluid"
                                alt="Web Development Agency" />
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Custom Solutions</h5>
                            <p class="m-0 text-off-white">
                                We create tailored websites designed to meet your unique business needs.
                            </p>
                        </div>
                    </div>
                    <div class="game-feature d-flex align-items-center mb-4">
                        <div class="game-feature-icon flex-shrink-0">
                            <img src="assets/image/icons/why-expertise.png" class="img-fluid"
                                alt="Responsive Web Development" />
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Proven Expertise</h5>
                            <p class="m-0 text-off-white">
                                Our expert team delivers high-performing, results- driven websites.
                            </p>
                        </div>
                    </div>
                    <div class="game-feature d-flex align-items-center">
                        <div class="game-feature-icon flex-shrink-0">
                            <img src="assets/image/icons/why-support.png" class="img-fluid" alt="website developmetn" />
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">End-to-End Support</h5>
                            <p class="m-0 text-off-white">
                                From concept to launch, we provide full transparency and ongoing support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="game-feature-img position-relative" data-aos="fade-left" data-aos-anchor="#example-anchor"
                    data-aos-offset="500" data-aos-duration="500">
                    <img src="assets/image/websitedevlopment/laptop.webp" class="img-fluid position-relative z-5"
                        alt="Web Design Company" />

                </div>
            </div>
        </div>
    </div>

</section>
<div class="aih-cummiunte-area ah-bg ptb-80">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col-xxl-4 col-lg-4">
                <h2 class="aih-title aih-color-two mb-40">Join Our Community</h2>
                <a href="tel:+918080803374" target="_blank" class="btn btn-outline-info rounded-5"> <i
                        class="fa-light fa-phone-volume"></i> +91 8080 80 3374

                </a>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="position-relative pl-40 pr-15 aih-border-style-two">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="risk-counter-item mt-20">
                                <h3 class="aih-title fs-56 ff-dmsans fw-700"><span class="counter">99</span>%
                                </h3>
                                <p class=" ff-dmsans ">Projects Delivered On-Time On-Budget</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="risk-counter-item risk-border-left risk-border-color pl-40 mt-20">
                                <h3 class=" fs-56 ff-dmsans fw-700"><span class="counter">1</span>M+
                                </h3>
                                <p class=" ff-dmsans ">USD Saved by our expert advice</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="risk-counter-item risk-border-left risk-border-color pl-40 mt-20">
                                <h3 class=" fs-56 ff-dmsans fw-700"><span class="counter">85</span>%
                                </h3>
                                <p class=" ff-dmsans ">Clients return for further business enhancements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<section style="background-color: #033464;">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <img class="dpdestopblock" src="assets/image/websitedevlopment/website_processing.webp"
                    alt="Web Design & Development Agency">
                <img class="dpmobblock" src="assets/image/websitedevlopment/mob_website_processing.webp"
                    alt="Creative Web Design Agency">
            </div>
        </div>

    </div>
</section>

<div class="project ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <!-- <span class="crm-subtitle ">Tech Stack <img src="assets/image/arrow-red.webp" alt="arrow"></span> -->
                    <h2 class="pb-20">Technologies We Employ and Utilize</h2>
                    <p class="mb-20">Technofra choose the newest and most reliable technology that fits your business
                        goals perfectly.</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav mb-0" id="nav-tab" role="tablist">
                    <li class="nav-item1">
                        <a class="nav-link1 active" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1"
                            role="tab" aria-selected="false">
                            Mobile
                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-2" data-bs-toggle="tab" data-bs-target="#tab-2" role="tab"
                            aria-selected="false">
                            Front-End
                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-3" data-bs-toggle="tab" data-bs-target="#tab-3" role="tab"
                            aria-selected="false">
                            Back-End
                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-4" data-bs-toggle="tab" data-bs-target="#tab-4" role="tab"
                            aria-selected="false">
                            E-commerce

                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-5" data-bs-toggle="tab" data-bs-target="#tab-5" role="tab"
                            aria-selected="false">
                            DevOps
                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-6" data-bs-toggle="tab" data-bs-target="#tab-6" role="tab"
                            aria-selected="false">
                            Database
                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-7" data-bs-toggle="tab" data-bs-target="#tab-7" role="tab"
                            aria-selected="false">
                            Quality

                        </a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link1" href="#tab-8" data-bs-toggle="tab" data-bs-target="#tab-8" role="tab"
                            aria-selected="false">
                            Cloud
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade pt-60 active show" id="tab-1" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/react-native.png"
                                                            alt="React Native Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">React Native</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>

                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/andriod.png"
                                                            alt="Android Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Android</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/flutter.png"
                                                            alt="Flutter Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Flutter</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/xamarin.png"
                                                            alt="Xamarin Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Xamarin</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/hybrid.png"
                                                            alt="Hybrid" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Hybrid</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/crossplatform.png"
                                                            alt="Cross-Platform Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Cross-Platform</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/ios.png"
                                                            alt="iOS App Developement" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">iOS</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/Ionic.png" alt="Ionic"
                                                            class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Ionic</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/pwa.png"
                                                            alt="Progressive Web Apps" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">PWA</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/mobile/swift.png"
                                                            alt="Swift Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Swift</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-2" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/angular.png"
                                                            alt="Angular Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Angular</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/css.png"
                                                            alt="CSS Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">CSS</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/gatsby.png"
                                                            alt="Gatsby Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Gatsby</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/html.png"
                                                            alt="HTML Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">HTML</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/js.png"
                                                            alt="JavaScript Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Js</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/nextjs.png"
                                                            alt="Next.js Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Next.js</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/nuxt.png"
                                                            alt="Nuxt Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Nuxt</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/react.png"
                                                            alt="React Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">React</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/frontend/vue.js.png"
                                                            alt="Vue.js Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Vue.js</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60 " id="tab-3" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/codeigniter.png"
                                                            alt="Codeigniter Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Codeigniter</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>

                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/go.png"
                                                            alt="Go Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Go</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/graphql.png"
                                                            alt="GraphQL Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">GraphQL</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/java.png"
                                                            alt="Java Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Java</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/laravel.png"
                                                            alt="Laravel Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Laravel</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/microsoft.net.png"
                                                            alt="Microsoft .NET Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Microsoft .NET</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/nest.png"
                                                            alt="Nest Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Nest</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/node-js.png"
                                                            alt="Node.js Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Node.js</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/backend/php.png"
                                                            alt="PHP Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">PHP</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-4" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/contentful.png"
                                                            alt="Contentful" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Contentful</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>

                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/maganto.png"
                                                            alt="Magento Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Magento</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/shopify.png"
                                                            alt="Shopify Developer Company" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Shopify</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/strapi.png"
                                                            alt="Strapi Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Strapi</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/woo-commerce.png"
                                                            alt="WooCommerce Developer in India" class="img-fluid">
                                                        <h6 class="mb-0 mt-4"> WooCommerce</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/e-commerce/wordpress.png"
                                                            alt="WordPress Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">WordPress</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-5" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/ansible.png"
                                                            alt="Ansible Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Ansible</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/digital-ocean.png"
                                                            alt="DigitalOcean Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">DigitalOcean</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/docker.png"
                                                            alt="Docker Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Docker</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/elastic-search.png"
                                                            alt="Elastic search" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Elastic search</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/github.png"
                                                            alt="Github" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Github</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/gitlab.png"
                                                            alt="Gitlab" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Gitlab</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/grafana.png"
                                                            alt="Grafana" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Grafana</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/jenkins.png"
                                                            alt="Jenkins Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Jenkins</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/kubernetes.png"
                                                            alt="Kubernetes Cluster Management" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Kubernetes</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/mesos.png"
                                                            alt="Apache Mesos" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Mesos</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/microsoft-azure.png"
                                                            alt="Microsoft Azure Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Microsoft Azure</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/openshift.png"
                                                            alt="Openshift Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Openshift</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/rackspace.png"
                                                            alt="Rackspace" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Rackspace</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/devops/terraform.png"
                                                            alt="Terraform Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Terraform</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-6" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/firebase.png"
                                                            alt="Firebase Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Firebase</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/mongo-db.png"
                                                            alt="MongoDB Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">MongoDB</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/mysql.png"
                                                            alt=" MySQL Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">MySQL</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/nosql.png"
                                                            alt="NoSQL Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">NoSQL</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/oracle.png"
                                                            alt="Oracle Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Oracle</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/postgresql.png"
                                                            alt="PostgreSQL Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">PostgreSQL</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/sqlservals.png"
                                                            alt="SQL Server Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">SQL Server</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/database/sql.png"
                                                            alt="SQL Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">SQL</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-7" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/hp-quicktest.png"
                                                            alt="hp quicktest professional" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">HP QuickTest</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/jest.png" alt="Jest"
                                                            class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Jest</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/jmeter.png"
                                                            alt="JMeter" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">JMeter</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/meter.png" alt="Meter"
                                                            class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Meter</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/postman.png"
                                                            alt="Postman" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Postman</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/selenium.png"
                                                            alt="Selenium" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Selenium</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/soapui.png"
                                                            alt="SoapUI" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">SoapUI</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/quality/uft.png"
                                                            alt="UFT Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">UFT</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-8" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-12">
                                <div class="container1" id="infiniteScroll--left">
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/cloud/aws.png"
                                                            alt="AWS Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">AWS</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>


                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/cloud/azure.png"
                                                            alt="Azure Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Azure</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                    <article>
                                        <div class="integration-wrapper position-relative w-100">
                                            <ul class="integration-list list-unstyled mb-0">
                                                <li>
                                                    <div class="single-integration bg-white">
                                                        <img src="assets/image/technology/cloud/google-cloud.png"
                                                            alt="Google cloud Developer" class="img-fluid">
                                                        <h6 class="mb-0 mt-4">Google cloud</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ptb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class=" mb-4">Awesome Responsive
                        In All Device.</h2>
                    <p>
                        Responsive design is a web design approach aimed at
                        creating websites that provide optimal viewing and
                        interaction.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img src="assets/image/websitedevlopment/responsive.webp" alt="Responsive Web Design" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom">
            </div>
        </div>

    </div>
</section>
<div class="ptb-60 bg-light-subtle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h6 class="heading-6  clr-white margin-bottom-8 font-weight-medium text-center" style="color: #ee7d25;">
                    Trusted by More than 25k Users Globally
                </h6>
                <div class="swiper ca-client-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-dc1b3157c3daebf4" aria-live="off"
                        style="transition-duration: 8000ms; transform: translate3d(-1848px, 0px, 0px);">
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="2 / 6">
                            <img src="assets/image/client/belting-enterprice.webp" alt="Best Web Development Company"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="3 / 6">
                            <img src="assets/image/client/delta.webp" alt="Web Design & Development Agency"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="4 / 6">
                            <img src="assets/image/client/dipu-logo.webp" alt="Creative Web Design Agency"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="4"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="5 / 6">
                            <img src="assets/image/client/ish-logo.webp" alt="Modern Website Design Services"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="5"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="6 / 6">
                            <img src="assets/image/client/JPC_logo.webp" alt="Custom Website Development"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center" data-swiper-slide-index="0"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="1 / 6">
                            <img src="assets/image/client/belting-enterprice.webp" alt="Website Development Services"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="1"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="2 / 6">
                            <img src="assets/image/client/delta.webp" alt="Responsive Web Design" class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-active" data-swiper-slide-index="2"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="3 / 6">
                            <img src="assets/image/client/dipu-logo.webp" alt="Web Design Company" class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-next" data-swiper-slide-index="3"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="4 / 6">
                            <img src="assets/image/client/sanjay.webp" alt="Web Development Company" class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center" data-swiper-slide-index="4"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="5 / 6">
                            <img src="assets/image/client/JPC_logo.webp" alt="Website Design Services"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center" data-swiper-slide-index="5"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="6 / 6">
                            <img src="assets/image/client/sna.webp" alt="Programming Services" class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0"
                            style="width: 240px; margin-right: 24px;" role="group" aria-label="1 / 6">
                            <img src="assets/image/client/belting-enterprice.webp" alt="Web Page Development"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="2 / 6">
                            <img src="assets/image/client/delta.webp" alt="Web Design & Development Agency"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="3 / 6">
                            <img src="assets/image/client/dipu-logo.webp" alt="Technofra Web Design" class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" style="width: 240px; margin-right: 24px;" role="group"
                            aria-label="4 / 6">
                            <img src="assets/image/client/ish-logo.webp" alt="Best Website Developers"
                                class="img-fluid">
                        </div>
                        <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="4"
                            role="group" aria-label="5 / 6" style="width: 240px; margin-right: 24px;">
                            <img src="assets/image/client/tricil.webp" alt="Best Web Development Company"
                                class="img-fluid">
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'potfolio-slider.php'; ?>

<section class="faq-section ptb-60">
    <div class="container">

        <div class="row justify-content-between">
            <div class="section-heading text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="col-lg-12">
                <div class="accordion-faq-content-wrap">
                    <div id="faq-accordion-1">
                        <div class="accordion faq-accordion " id="accordionExample-2">
                            <div class="accordion-item border border-2 active">
                                <h5 class="accordion-header" id="faq-2-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-1" aria-expanded="false">
                                        How long does it take to build a website?
                                    </button>
                                </h5>
                                <div id="collapse-2-1" class="accordion-collapse collapse " aria-labelledby="faq-2-1"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        The timeline for website development depends on the complexity of the project. A
                                        simple website may take 2-4 weeks, while a more complex site with custom
                                        features can take several months. We work closely with you to set realistic
                                        deadlines and keep you updated throughout the process.


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-2" aria-expanded="false">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h5>
                                <div id="collapse-2-2" class="accordion-collapse collapse" aria-labelledby="faq-2-2"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, all the websites we develop are fully responsive, meaning they are designed
                                        to work seamlessly on all devices, including desktops, tablets, and smartphones.
                                        This ensures your visitors have a great experience regardless of how they access
                                        your site.


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-3" aria-expanded="false">
                                        Can I make updates to my website after it is live?
                                    </button>
                                </h5>
                                <div id="collapse-2-3" class="accordion-collapse collapse" aria-labelledby="faq-2-3"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Absolutely! We provide user-friendly content management systems (CMS) like
                                        WordPress, so you can easily update text, images, and other content yourself.
                                        Additionally, we offer ongoing support if you prefer us to handle updates for
                                        you.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-4" aria-expanded="false">
                                        What steps do you take to ensure my website is secure?
                                    </button>
                                </h5>
                                <div id="collapse-2-4" class="accordion-collapse collapse" aria-labelledby="faq-2-4"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        We prioritize security by implementing SSL certificates, regular software
                                        updates, and secure coding practices. We can also add features like firewalls,
                                        reCAPTCHA, and two-factor authentication (2FA) for added protection against
                                        threats.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-5" aria-expanded="false">
                                        What happens if I need help after the website is launched?
                                    </button>
                                </h5>
                                <div id="collapse-2-5" class="accordion-collapse collapse" aria-labelledby="faq-2-5"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        We offer ongoing support and maintenance packages to ensure your website stays
                                        up-to-date and functional. Whether it's resolving issues, adding new features,
                                        or optimizing performance, our team is here to help whenever you need us.
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

<?php
$bookCallSettings = [
    'section_classes' => 'ma-contact bac-section ptb-100  position-relative z-1',
    'background_image' => 'assets/image/websitedevlopment/contact-bg.webp',
    'image_src' => 'assets/image/websitedevlopment/contact-man.webp',
    'image_alt' => 'Book a call illustration',
    'image_classes' => 'img-fluid ma-contact-img bac-image position-absolute pe-none z-n1 d-none d-lg-block',
    'eyebrow' => 'Contact Us',
    'title' => 'Need a Successful Project?',
    'phone_label' => 'Call Us at:',
    'phone_number' => '+91 8080 80 3374',
    'benefits_title' => 'Your Benefits:',
    'benefit_box_classes' => 'contact-benefit bac-benefits dp-r-10 bg-white bg-opacity-25 p-3 rounded-4 border',
    'card_shell_classes' => 'ma-form-wrapper bac-card-shell webdesign-booking-card bg-white w-100 shadow-sm px-4 py-3 rounded-6',
    'benefits' => [
        'Custom Solutions',
        'Expert Advice',
        'Quick Delivery',
        'Affordable Pricing',
        'Modern Tools',
        '24/7 Support',
        'SEO Friendly Structure',
        'Mobile Responsive Design',
        'Fast Loading Performance',
        'Conversion Focused',
    ],
];
include 'book-a-call.php';
?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const scrollContainers = document.querySelectorAll("#infiniteScroll--left");

    scrollContainers.forEach((container) => {
        let isScrollingPaused = false;

        // Function to check if the first article is fully out of view
        function isElementOutOfViewport(el) {
            const rect = el.getBoundingClientRect();
            return rect.right <= 0; // Returns true if the element has moved completely out of view
        }

        // Function to move the first article to the end
        function moveFirstArticleToEnd() {
            const firstArticle = container.querySelector("article");
            if (isElementOutOfViewport(firstArticle)) {
                container.appendChild(firstArticle); // Move first article to the end
                container.scrollLeft -= firstArticle.offsetWidth; // Adjust scroll position
            }
        }

        // Function to handle continuous scrolling
        function scrollContainer() {
            if (!isScrollingPaused) {
                container.scrollLeft += 1; // Scroll slowly to the right
                moveFirstArticleToEnd(); // Check if the first article needs to be moved to the end
            }
        }

        // Pause scrolling when hovering over an article
        function pauseScrolling() {
            isScrollingPaused = true;
        }

        // Resume scrolling when the mouse leaves an article
        function resumeScrolling() {
            isScrollingPaused = false;
        }

        // Add hover event listeners to all articles
        const articles = container.querySelectorAll("article");
        articles.forEach((article) => {
            article.addEventListener("mouseenter", pauseScrolling);
            article.addEventListener("mouseleave", resumeScrolling);
        });

        // Start the scrolling interval
        setInterval(scrollContainer, 15);
    });
});
</script>
<?php include 'footer.php'; ?>