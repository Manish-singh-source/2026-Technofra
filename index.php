<?php
session_start();

$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);

include 'header.php';
?>
<meta property="og:title" content="Technofra - Expert Web Design, Development &amp; Digital Solutions">
<meta property="og:site_name" content="Technofra">
<meta property="og:url" content="https://technofra.com/">
<meta property="og:description"
    content="Technofra is a leading web design, development, and digital marketing agency . We specialize in websites, apps, hosting, branding & SEO.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.instagram.com/p/DEhuxezt1Zn/">
<meta property="og:image:alt"
    content="Ready to take your business to new heights? Our expert website development services will help you stand out in the digital world! From e-commerce solutions to custom websites. Let’s elevate your online presence today!">
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
<title>Technofra - Expert Web Design, Development & Digital Solutions</title>


<style>
.eep-btn-green:hover {
    color: #036;
    transition: 0.8s ease-in-out;

}

.tfxClrElectric {
    color: #00a2ff;
}

.tfxClrClean {
    color: #2ECC71;
}

.eep-btn-green {
    justify-content: center;
}

@media (max-width: 576px) {

    .eep-calendar-info {
        display: grid !important;
    }

    .dis-hide {
        visibility: hidden;
    }

    .hero10 .bg {
        min-height: 600px;
    }

    .bannerh {
        font-size: 25px !important;
        font-weight: 600;
    }

    .bannerh1 {
        font-size: 14px !important;
        font-weight: 500;
    }

    .hero10 {
        height: 584px;
    }
}

.mtb-20 {
    margin: 20px 0px;
}

.tfx-faq-section {
    background: #ffffff;
}

.tfx-faq-shell {     
    margin: 0 auto;
}

.tfx-faq-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 42px;
    margin-top: 34px;
}

.tfx-faq-column {
    display: flex;
    flex-direction: column;
    gap: 0;
}

.tfx-faq-column .accordion-item {
    background: transparent;
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #e5e7eb;
}

.tfx-faq-item {
    /* border-bottom: 1px solid #e5e7eb; */
    padding: 0;
}

.tfx-faq-trigger {
    width: 100%;
    border: none;
    background: transparent;
    padding: 22px 0;
    display: flex;
    align-items: center;
    gap: 16px;
    text-align: left;
    box-shadow: none;
}

.tfx-faq-trigger:focus {
    outline: none;
    box-shadow: none;
}

.tfx-faq-icon {
    width: 38px;
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    color: #003366;
    font-size: 21px;
}

/* .tfx-faq-icon::after {
    content: "";
    position: absolute;
    right: 2px;
    bottom: 4px;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #003366;
} */

.tfx-faq-icon.orange {
    color: #003366;
}

.tfx-faq-icon.orange::after {
    background: #003366;
}

.tfx-faq-question {
    flex: 1;
    font-size: 18px;
    line-height: 1.45;
    font-weight: 600;
    color: #242628;
    padding-right: 12px;
}

.tfx-faq-plus {
    width: 24px;
    height: 24px;
    position: relative;
    flex-shrink: 0;
    margin-left: 10px;
}

.tfx-faq-plus::before,
.tfx-faq-plus::after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    background: #6e7074;
    border-radius: 2px;
    transform: translate(-50%, -50%);
    transition: transform 0.25s ease, opacity 0.25s ease;
}

.tfx-faq-plus::before {
    width: 16px;
    height: 2px;
}

.tfx-faq-plus::after {
    width: 2px;
    height: 16px;
}

.tfx-faq-trigger:not(.collapsed) .tfx-faq-plus::after {
    opacity: 0;
    transform: translate(-50%, -50%) scaleY(0);
}

.tfx-faq-answer {
    padding: 0 0 22px 58px;
    font-size: 15px;
    line-height: 1.8;
    color: #6b7280;
    max-width: 92%;
}

@media (max-width: 991px) {
    .tfx-faq-grid {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .tfx-faq-column {
        gap: 0;
    }
}

@media (max-width: 576px) {
    .tfx-faq-trigger {
        padding: 18px 0;
        gap: 12px;
    }

    .tfx-faq-icon {
        width: 34px;
        height: 34px;
        font-size: 18px;
    }

    .tfx-faq-question {
        font-size: 16px;
    }

    .tfx-faq-answer {
        padding-left: 46px;
        max-width: 100%;
        font-size: 14px;
    }
}

/* Small Devices (Phones, Landscape) */
@media (min-width: 577px) and (max-width: 768px) {

    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-sm,
    .navbar>.container-md,
    .navbar>.container-lg,
    .navbar>.container-xl,
    .navbar>.container-xxl {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: inherit;
        flex-wrap: inherit;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .tab-non {
        display: none;
    }

    .single-service {
        border: none !important;
        margin-top: 10px;
    }



    blockquote {
        padding: 10px !important;
    }

    .footer_padding {
        padding: 0px 40px;
    }

    .footer-logo {
        padding-bottom: 20px;
    }

    .dis-hide {
        visibility: hidden;
    }

    .about5 {
        padding: 60px 0px 50px 0px;
    }

    .form-check {
        padding-bottom: 10px;
        margin-right: 60px;
    }
}

.clogo {
    width: 100% !important;
    border: 1px solid #dbdbdb;
    border-radius: 50% !important;
    padding: 5px;

}

.mlp-testimonial-box {
    padding: 24px 14px 10px;
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.mlp-testimonial-card {
    cursor: default;
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
    max-height: calc(100vh - 40px);
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 24px 80px rgba(15, 23, 42, 0.24);
    overflow: hidden;
    display: flex;
    flex-direction: column;
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
    overflow-y: auto;
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

.eep-book-field input,
.eep-book-field select,
.eep-book-field textarea {
    width: 100%;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    outline: none;
    font-family: inherit;
}

.eep-book-field input {
    height: 50px;
}

.eep-book-field select {
    height: 50px;
    background: #ffffff;
}

.eep-book-field textarea {
    min-height: 110px;
    padding: 14px 16px;
    resize: vertical;
}

.eep-book-field input:focus,
.eep-book-field select:focus,
.eep-book-field textarea:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.eep-phone-group {
    display: grid;
    grid-template-columns: 110px minmax(0, 1fr);
    gap: 12px;
}

@media (max-width: 576px) {
    .eep-phone-group {
        grid-template-columns: 1fr;
    }
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

@media (max-width: 576px) {
    .eep-book-modal {
        padding: 12px;
        align-items: flex-start;
    }

    .eep-book-modal-dialog {
        border-radius: 18px;
        max-height: calc(100vh - 24px);
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
}

.eep-calendar-info {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 14px;
    flex-wrap: nowrap;
}

.eep-calendar-info .eep-selected-date,
.eep-calendar-info .eep-time-picker-wrap {
    width: auto;
    max-width: none;
    flex: 1 1 0;
}

.eep-timezone-note {
    margin-top: 12px;
    font-size: 13px;
    line-height: 1.6;
    color: #475467;
}

.eep-timezone-note strong {
    color: #12315f;
}

.eep-local-time-note {
    margin-top: 10px;
    font-size: 13px;
    line-height: 1.6;
    color: #475467;
}

.eep-local-time-note strong {
    color: #12315f;
}

.eep-book-summary-line {
    margin-top: 6px;
}

.eep-calendar-actions {
    display: flex !important;
    justify-content: center;
}

.eep-calendar-actions .eep-btn-green {
    justify-content: center;
}

.eep-calendar-title-row {
    display: inline-flex;
    align-items: center;
    gap: 12px;
}

.eep-calendar-title-row .eep-calendar-title {
    margin: 0;
}

.eep-calendar-title-row .eep-calendar-icon {
    width: auto;
    height: auto;
    border-radius: 0;
    background: transparent;
    display: inline-flex;
    place-items: unset;
    font-size: 40px;
    line-height: 1;
    color: #1f2430;
}

@media only screen and (min-width: 1030px) and (max-width: 1366px) {
    .uxb_about_feature_grid {
        gap: 10px 18px;
    }

    .uxb_about_feature_item {
        font-size: 14px;
        line-height: 1.35;
    }

    .uxb_about_exp_brochure_strip {
        gap: 14px;
        padding: 16px 18px;
        align-items: center;
    }

    .uxb_about_exp_left_area {
        min-width: 118px;
    }

    .uxb_about_exp_big_text {
        font-size: 32px;
        line-height: 1;
    }

    .uxb_about_exp_small_text {
        font-size: 13px;
        line-height: 1.3;
    }

    .uxb_about_exp_mid_divider {
        margin: 0 2px;
    }

    .about-company-brochure-btn {
        font-size: 14px;
        padding: 12px 18px;
        white-space: nowrap;
    }
}
</style>
<?php include 'navbar.php'; ?>
<section class="rnHeroSlider">
    <div class="rnHeroSlide rnHeroActive">
        <video autoplay muted loop playsinline>
            <source src="assets/video/technofra_hero.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Transform Your Business with the Latest
                Technology Solutions</h1>
            <p class="pb-20">Empower your business with cutting-edge technology solutions that boost efficiency,
                innovation, growth,
                and long-term success.
            </p>
            <div class="rnHeroButtons">
                <a href="web-design" class="rnHeroBtnLight">Website Development</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/app-dev-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Turning Ideas Into Mobile Apps</h1>
            <p class="pb-20">We turn your ideas into powerful mobile apps that engage users, solve problems, and drive
                growth.
            </p>
            <div class="rnHeroButtons">
                <a href="ios-app-development" class="rnHeroBtnLight">App Development</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/branding-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Build a Strong Brand with Innovative Branding Solutions</h1>
            <p class="pb-20">Create a memorable brand identity with innovative branding solutions that inspire trust,
                attract customers, and fuel growth.
            </p>
            <div class="rnHeroButtons">
                <a href="branding" class="rnHeroBtnLight">Branding</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/ui-ux-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Design Meaningful Experiences with Smart UI/UX Solutions</h1>
            <p class="pb-20">Craft meaningful digital experiences with smart UI/UX solutions that enhance usability,
                engagement, and customer satisfaction.
            </p>
            <div class="rnHeroButtons">
                <a href="ui-ux" class="rnHeroBtnLight">UI/UX Design</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/payment-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Make Online Payments Easy with Trusted Payment Integration</h1>
            <p class="pb-20">Simplify transactions with trusted payment integration that ensures secure, seamless, and
                convenient online payment experiences.
            </p>
            <div class="rnHeroButtons">
                <a href="payment-gateway" class="rnHeroBtnLight">Payment Integration</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/digital-marketing.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Boost Your Brand with Powerful Digital Marketing Solutions</h1>
            <p class="pb-20">Grow your brand with powerful digital marketing solutions that increase visibility, engage
                audiences, and drive results.
            </p>
            <div class="rnHeroButtons">
                <a href="digital-marketing" class="rnHeroBtnLight">Digital Marketing</a>
                <a href="contact#contactForm" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Continuous logo slider -->
    <div class="rnCenterSwiperWrap">
        <div class="rnHeroLogoSlider">
            <div class="rnHeroLogoTrack">
                <div class="rnHeroLogoGroup">
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                </div>

                <div class="rnHeroLogoGroup" aria-hidden="true">
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>

                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rnHeroNavigation">
        <span class="rnHeroPrev">&#10094;</span>
        <span class="rnHeroNext">&#10095;</span>
    </div>

    <div class="rnHeroTabsWrap">
        <div class="rnHeroTabs">
            <div class="rnHeroTabItem rnHeroActive" data-slide="0">Website Development</div>
            <div class="rnHeroTabItem" data-slide="1">App Development</div>
            <div class="rnHeroTabItem" data-slide="2">Branding</div>
            <div class="rnHeroTabItem" data-slide="3">UI/UX Design</div>
            <div class="rnHeroTabItem" data-slide="4">Payment Integration</div>
            <div class="rnHeroTabItem" data-slide="5">Digital Marketing</div>
        </div>
    </div>


</section>


<section class="uxb_about_section_wrap">
    <div class="uxb_about_container container">
        <div class="uxb_about_grid_main">

            <!-- LEFT -->
            <div class="uxb_about_left_block">
                <span class="crm-subtitle aos-init aos-animate pb-20" data-aos="fade-left" data-aos-duration="600">More
                    About Us <img src="assets/image/arrow-red.png" alt="arrow"></span>
                <!-- <div class="uxb_about_mini_title"></div> -->

                <h2 class="uxb_about_heading_title">
                    Your End-to-End Digital & Branding Partner for Business Growth
                </h2>

                <p class="uxb_about_para_text" data-aos="fade-right" data-aos-duration="600">
                    Technofra is a trusted partner in maximizing digital potential. Starting with a bold vision to
                    transform online customer interactions, we now lead in innovation. Offering tailored web design
                    and development solutions, we help businesses thrive and achieve impactful outcomes in the
                    ever-evolving digital landscape.
                </p>

                <div class="uxb_about_feature_grid" data-aos="fade-right" data-aos-duration="600">
                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <h3 class="subp">Innovative IT Solutions</h3>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <h3 class="subp">Custom Web Design Services</h3>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <h3 class="subp">Business Growth Strategies</h3>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Customer-Focused Approach</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <h3 class="subp">Mission-Driven Development</h3>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <h3 class="subp">Trusted Digital Partner</h3>
                    </div>
                </div>

                <div class="uxb_about_bottom_row_redesign">
                    <div class="uxb_about_exp_brochure_strip">
                        <div class="uxb_about_exp_left_area" data-aos="fade-up" data-aos-duration="600">
                            <div class="uxb_about_exp_big_text">14+</div>
                            <div class="uxb_about_exp_small_text">Years of Experience</div>
                        </div>

                        <div class="uxb_about_exp_mid_divider" data-aos="fade-up" data-aos-duration="600"></div>
                        <button type="button" class="about-company-brochure-btn white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Download Company Profile <i class="fa-solid fa-file-pdf"></i>
                        </button>

                        <!-- <div class="uxb_about_exp_right_area" data-aos="fade-up" data-aos-duration="600">
                            <a href="assets/pdf/technofra-brochure.pdf" class="uxb_about_exp_brochure_btn" download>
                                Download Company Profile &nbsp;&nbsp;<i class="fa-solid fa-file-pdf"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="uxb_about_right_visual" data-aos="fade-left" data-aos-duration="600">
                <div class="uxb_about_small_card_img">
                    <img src="assets\image\home\about-02.webp" alt="Meeting Image">
                </div>

                <div class="uxb_about_big_image_holder">
                    <img src="assets\image\home\about-01.webp" alt="Business Team">
                </div>

                <div class="uxb_about_trust_badge">
                    <h3>Trusted By 2.5K+ Customers</h3>
                    <!-- <p>Our Expert Team</p> -->

                    <div class="uxb_about_avatar_group_shell">
                        <div class="uxb_about_avatar_stack_list">
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\1.png" alt="User 1">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\2.png" alt="User 2">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\3.png" alt="User 3">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\4.png" alt="User 4">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\5.png" alt="User 4">
                            </div>
                        </div>

                        <!-- <div class="uxb_about_avatar_plusmore"></div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="stats-section" data-aos="fade-up" data-aos-duration="600">
    <div class="stats-container container">
        <div class="stat-box">
            <h2 class="counter" data-target="2100">0+</h2>
            <p>Successful Projects</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="50">0+</h2>
            <p>Expert Team</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="1550">0+</h2>
            <p>Happy Customers</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="14">0+</h2>
            <p>Years of Experience</p>
        </div>
    </div>
</section>

<section class="servicess">
    <div class="container">

        <div class="dd-section">
            <div class="dd-left">
                <span class="crm-subtitle" data-aos="fade-left" data-aos-duration="600">Our Services <img
                        src="assets/image/arrow-red.png" alt="arrow"></span>
                <h2 class="dd-heading" data-aos="fade-up" data-aos-duration="600">
                    Services We Provide
                </h2>

                <p class="dd-description" data-aos="fade-right" data-aos-duration="600">
                    We provide comprehensive digital services including
                    website and mobile app development, branding,
                    digital marketing, payment and API integration,
                    domain hosting, and IT infrastructure solutions
                    tailored
                    for modern businesses.
                </p>

                <div class="dd-image-row">
                    <div class="dd-image-box image-anime" data-aos="fade-up" data-aos-duration="600">
                        <img src="assets\image\home\1.webp">
                    </div>
                    <div class="dd-image-box image-anime" data-aos="fade-up" data-aos-duration="600">
                        <img src="assets\image\home\2.webp">
                    </div>
                </div>

                <div class="dd-bottom-text" data-aos="fade-right" data-aos-duration="600">
                    Our expert team creates innovative, scalable, and
                    result-driven solutions that strengthen your online
                    presence, enhance customer engagement, and
                    accelerate sustainable business growth in the
                    digital world.
                </div>
                <div class="rnHeroButtons btnn">
                    <a href="https://wa.me/918080803374" class="finbiz-btn aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="900" target="_blank">Let's Chat With Us
                    </a>
                    <a href="tel:+918080803374" class="btn btn-outline-info" target="_blank">Let's Call Us</a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="dd-right">

                <div class="dd-left-cards">

                    <!-- 01 -->
                    <a href="web-design">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-laptop-code"></i></div>
                                    <small class="dd-card-number">01</small>
                                    <h3 class="dd-card-title">Web / App Development</h3>
                                    <p class="dd-card-text">
                                        Build scalable and high-performance web and mobile applications.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss1.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 02 -->
                    <a href="shopify-website-development">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front" style="background-color: #0b2e59;color: #ffffff;">
                                    <div class="dd-icon-box" style="background-color:#ffffff">
                                        <i class="fa-solid fa-cart-shopping" style="color:#0b2e59"></i>
                                    </div>
                                    <small class="dd-card-number">02</small>
                                    <h3 class="dd-card-title" style="color:#ffffff">E-Commerce Development</h3>
                                    <p class="dd-card-text white">
                                        Create secure and scalable online stores to boost sales.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss2.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 03 -->
                    <a href="branding">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-palette"></i></div>
                                    <small class="dd-card-number">03</small>
                                    <h3 class="dd-card-title">Branding</h3>
                                    <p class="dd-card-text">
                                        Build strong brand identity that connects and stands out.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss3.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="dd-right-cards" data-aos="fade-up" data-aos-duration="600">

                    <!-- 04 -->
                    <a href="digital-marketing">
                        <div class="dd-card">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-chart-line"></i></div>
                                    <small class="dd-card-number">04</small>
                                    <h3 class="dd-card-title">Digital Marketing</h3>
                                    <p class="dd-card-text">
                                        Drive growth with data-driven marketing strategies.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets\image\home\digitals.png">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 05 -->
                    <a href="social-media-marketing">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-brands fa-instagram"></i></div>
                                    <small class="dd-card-number">05</small>
                                    <h3 class="dd-card-title">Social Media Marketing</h3>
                                    <p class="dd-card-text">
                                        Boost engagement with creative social media campaigns.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets\image\home\socails.png">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
</section>









<section class="medlaunch-wrapper ptb-60">
    <div class="container">
        <div class="section-heading crm-title text-center" data-aos="fade-up" data-aos-duration="600">
            <span class="crm-subtitle ">Why Technofra<img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2>Why Choose Us</h2>
        </div>
        <div class="medlaunch-grid " data-aos="fade-up" data-aos-duration="600">
            <div class="medlaunch-card medlaunch-info-card" data-aos="fade-up" data-aos-duration="600">
                <div class="medlaunch-icon"><i class="fa-solid fa-globe"></i></div>
                <h3 class="medlaunch-title">Innovative Solutions</h3>
                <p class="medlaunch-text">
                    We deliver smart and scalable digital solutions that help businesses grow faster, improve
                    efficiency, and build a strong online presence.
                </p>
            </div>

            <div class="medlaunch-card medlaunch-image-card" data-aos="fade-up" data-aos-duration="600">
                <img src="assets\image\home\support-team.webp" class="medlaunch-img"
                    alt="Technofra support team assisting clients in real time">
                <div class="medlaunch-image-content">
                    <div class="medlaunch-label">Real-Time Support Team</div>
                    <h3 class="medlaunch-title">Always-On Client Support</h3>
                    <p class="medlaunch-text">
                        Our responsive support specialists stay available at every stage to resolve issues faster,
                        maintain momentum, and keep your business running smoothly.
                    </p>

                </div>
            </div>

            <div class="medlaunch-card medlaunch-green-card" data-aos="fade-up" data-aos-duration="600">
                <h3 class="medlaunch-title">Collaborative Approach</h3>
                <p class="medlaunch-text">
                    We work closely with our clients to understand their goals, create tailored strategies, and deliver
                    impactful technology solutions with precision.
                </p>

                <div class="medlaunch-users">
                    <img src="https://i.pravatar.cc/100?img=4" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=3" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=2" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=1" class="medlaunch-user">
                    <span class="medlaunch-count">25k</span>
                </div>
            </div>

            <div class="medlaunch-card medlaunch-image-card" data-aos="fade-up" data-aos-duration="600">
                <img src="assets\image\home\ourteam.webp" class="medlaunch-img"
                    alt="Technofra skilled team collaborating on digital solutions">
                <div class="medlaunch-image-content">
                    <div class="medlaunch-label">Our Skilled Team</div>
                    <h3 class="medlaunch-title">Expertise That Delivers</h3>
                    <p class="medlaunch-text">
                        Our designers, developers, and strategists combine practical experience with focused execution
                        to build polished solutions that align with your business goals.
                    </p>
                    <!-- <ul class="medlaunch-points">
                        <li>Cross-functional experts under one roof</li>
                        <li>Quality-driven execution from start to finish</li>
                        <li>Tailored strategies for measurable growth</li>
                    </ul> -->
                </div>
            </div>

        </div>
    </div>
</section>

<?php if ($bookCallStatus): ?>
<div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>

<section class="eep-hero" id="book-call-widget">
    <div class="eep-container container">
        <div class="eep-contact-wrap">
            <div class="eep-calendar-card">
                <div class="eep-calendar-head">
                    <div>
                        <div class="eep-calendar-title-row">
                            <div class="eep-calendar-icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <h2 class="eep-calendar-title">Book A Call With Us</h2>
                        </div>
                        <p class="eep-calendar-sub pt-2">
                            Pick a date and time to connect with one of our expert team members
                        </p>
                    </div>
                </div>

                <div class="eep-calendar-box">
                    <div class="eep-calendar-nav">
                        <button id="prevMonth" class="eep-cal-btn" type="button">&#8249;</button>
                        <div id="monthLabel" class="eep-month-label">March 2026</div>
                        <button id="nextMonth" class="eep-cal-btn" type="button">&#8250;</button>
                    </div>

                    <div class="eep-calendar-week">
                        <span>Sun</span>
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                    </div>

                    <div id="calendarGrid" class="eep-calendar-grid"></div>
                </div>

                <div class="eep-calendar-info">
                    <div id="selectedDatePill" class="eep-selected-date">
                        <span class="eep-pill-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </span>
                        <span id="selectedDateText" class="eep-selected-date-text">Select date</span>
                    </div>

                    <div class="eep-time-picker-wrap">
                        <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                            <span class="eep-pill-icon">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <span id="selectedTimeText" class="eep-time-text">Select Time</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                        <div id="timeDropdown" class="eep-time-dropdown">
                            <div id="timeGrid" class="eep-time-grid"></div>
                        </div>
                    </div>
                </div>

                <div class="eep-timezone-note">
                    <strong>Slots Time</strong>
                    <span id="viewerTimezoneNote"></span>
                    <div id="selectedLocalTimeNote" class="eep-local-time-note"></div>
                </div>


                <div class="mt-20 text-center">


                    <a href="#book-call" class="eep-btn-green" id="bookCallBtn">
                        <i class="fa-solid fa-calendar-plus"></i>
                        Book A Call With Us
                    </a>
                </div>
            </div>
        </div>

        <div class="eep-right">
            <div class="eep-right-inner">
                <div class="eep-circle-wrap">
                    <div class="eep-circle eep-circle-1"></div>
                    <div class="eep-circle eep-circle-2"></div>
                    <div class="eep-circle eep-circle-3"></div>

                    <div class="eep-dot eep-dot-1"></div>
                    <div class="eep-dot eep-dot-2"></div>
                    <div class="eep-dot eep-dot-3"></div>
                </div>

                <div class="eep-center-circle"></div>
                <div class="eep-person">
                    <img src="assets/image/home/cont2.png" alt="Contact person" />
                </div>
            </div>
        </div>
    </div>
</section>

<div class="eep-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="eep-book-modal-dialog">
        <div class="eep-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="eep-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>

        <form class="eep-book-form" action="book-call-handler" method="post">
            <div class="eep-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <div class="eep-book-summary-line"><strong>Time (IST):</strong> <span id="modalSelectedTime">Not selected</span></div>
                <div class="eep-book-summary-line"><strong>Your Local Time:</strong> <span id="modalSelectedLocalTime">Not selected</span></div>
            </div>

            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">
            <input type="hidden" name="user_timezone" id="userTimezoneInput">

            <div class="eep-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>

            <div class="eep-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>

            <div class="eep-book-field">
                <label for="bookCallPhone">Number</label>
                <div class="eep-phone-group">
                    <select id="bookCallCountryCode" aria-label="Select country code">
                        <option value="+91" selected>India (+91)</option>
                    </select>
                    <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your phone number" pattern="[0-9\\-\\s()]{6,18}" title="Enter a valid phone number." required>
                </div>
            </div>

            <div class="eep-book-field">
                <label for="bookCallAgenda">Meeting Agenda</label>
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4"
                    required></textarea>
            </div>

            <button type="submit" class="eep-book-submit">Submit Booking</button>
        </form>
    </div>
</div>

<!-- <section class="indusSecWrap_v1">
    <div class="indusInnerBox_v1 container" data-aos="fade-up" data-aos-duration="600">
        <span class="crm-subtitle "> Our Industries <img src="assets/image/arrow-red.png" alt="arrow"> </span>
        <h2 class="indusHeadingTxt_v1">Industries We Serve</h2>

        <div class="indusGridFlex_v1" data-aos="fade-up" data-aos-duration="600">

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_defence_v1"><i class="fa-solid fa-scale-balanced"></i></div>
                <div class="indusTitleTxt_v1">Attorney</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_consumer_v1"><i class="fa-solid fa-user-gear"></i></div>
                <div class="indusTitleTxt_v1">Auto Repair</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_aviation_v1"><i class="fa-solid fa-hard-hat"></i></div>
                <div class="indusTitleTxt_v1">Construction</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_bank_v1"><i class="fa-solid fa-tooth"></i></div>
                <div class="indusTitleTxt_v1">Dental</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_ayush_v1"><i class="fa-solid fa-golf-ball-tee"></i></div>
                <div class="indusTitleTxt_v1">Golf Cart</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_auto_v1"><i class="fa-solid fa-fan"></i></div>
                <div class="indusTitleTxt_v1">HVAC</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_agri_v1"><i class="fa-solid fa-tree"></i></div>
                <div class="indusTitleTxt_v1">Landscaping</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_cement_v1"><i class="fa-solid fa-wrench"></i></div>
                <div class="indusTitleTxt_v1">Plumber</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_ecom_v1"><i class="fa-solid fa-utensils"></i></div>
                <div class="indusTitleTxt_v1">Restaurant</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_bio_v1"><i class="fa-solid fa-house"></i></div>
                <div class="indusTitleTxt_v1">Roofing</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_autoComp_v1"><i class="fa-solid fa-truck"></i></div>
                <div class="indusTitleTxt_v1">Trucking</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_chem_v1"><i class="fa-solid fa-bug"></i></div>
                <div class="indusTitleTxt_v1">Pest Control</div>
            </div>

        </div>

    </div>
</section> -->


<section class="tfxIndusSection">
    <div class="tfxIndusContainer container">
        <div class="section-heading crm-title text-center" data-aos="fade-up" data-aos-duration="600">
            <span class="crm-subtitle">Our Industries <img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2 class="white">Industries We Serve</h2>
        </div>
        <!-- <h2 class="tfxIndusHeading">Industries We Serve</h2>
        <p class="tfxIndusSubheading">Serving diverse industries with tailored digital solutions</p> -->

        <div class="tfxIndusSliderWrap">
            <button class="tfxIndusNav tfxIndusPrev" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="tfxIndusViewport">
                <div class="tfxIndusTrack" id="tfxIndusTrack">

                    <!-- Clone Last Slide -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRealEstate"><i class="fa-solid fa-building"></i></div>
                                <div class="tfxIndusTitle">Real Estate</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHealthcare"><i class="fa-solid fa-stethoscope"></i></div>
                                <div class="tfxIndusTitle">Healthcare</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEducation"><i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="tfxIndusTitle">Education</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFinance"><i class="fa-solid fa-money-bill-trend-up"></i>
                                </div>
                                <div class="tfxIndusTitle">Finance</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTravel"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="tfxIndusTitle">Travel</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLogistics"><i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div class="tfxIndusTitle">Logistics</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrBeauty"><i class="fa-solid fa-scissors"></i></div>
                                <div class="tfxIndusTitle">Beauty & Salon</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFitness"><i class="fa-solid fa-dumbbell"></i></div>
                                <div class="tfxIndusTitle">Fitness & Gym</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEvent"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="tfxIndusTitle">Event Management</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRetail"><i class="fa-solid fa-store"></i></div>
                                <div class="tfxIndusTitle">Retail</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrManufacturing"><i class="fa-solid fa-industry"></i></div>
                                <div class="tfxIndusTitle">Manufacturing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAttorney"><i class="fa-solid fa-scale-balanced"></i>
                                </div>
                                <div class="tfxIndusTitle">Attorney</div>
                            </div>
                        </div>
                    </div>

                    <!-- Original Slide 1 -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrIT"><i class="fa-solid fa-laptop-code"></i></div>
                                <div class="tfxIndusTitle">IT Services</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAutoRepair"><i class="fa-solid fa-user-gear"></i></div>
                                <div class="tfxIndusTitle">Auto Repair</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrConstruction"><i class="fa-solid fa-helmet-safety"></i>
                                </div>
                                <div class="tfxIndusTitle">Construction</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrElectric"><i class="fa-solid fa-bolt"></i></div>
                                <div class="tfxIndusTitle">Electrician</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrClean"><i class="fa-solid fa-broom"></i></div>
                                <div class="tfxIndusTitle">Cleaning</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHvac"><i class="fa-solid fa-fan"></i></div>
                                <div class="tfxIndusTitle">HVAC</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLandscaping"><i class="fa-solid fa-tree"></i></div>
                                <div class="tfxIndusTitle">Landscaping</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPlumber"><i class="fa-solid fa-wrench"></i></div>
                                <div class="tfxIndusTitle">Plumber</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRestaurant"><i class="fa-solid fa-utensils"></i></div>
                                <div class="tfxIndusTitle">Restaurant</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRoofing"><i class="fa-solid fa-house"></i></div>
                                <div class="tfxIndusTitle">Roofing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTrucking"><i class="fa-solid fa-truck"></i></div>
                                <div class="tfxIndusTitle">Trucking</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPest"><i class="fa-solid fa-bug"></i></div>
                                <div class="tfxIndusTitle">Pest Control</div>
                            </div>
                        </div>
                    </div>

                    <!-- Original Slide 2 -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRealEstate"><i class="fa-solid fa-building"></i></div>
                                <div class="tfxIndusTitle">Real Estate</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHealthcare"><i class="fa-solid fa-stethoscope"></i></div>
                                <div class="tfxIndusTitle">Healthcare</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEducation"><i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="tfxIndusTitle">Education</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFinance"><i class="fa-solid fa-money-bill-trend-up"></i>
                                </div>
                                <div class="tfxIndusTitle">Finance</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTravel"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="tfxIndusTitle">Travel</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLogistics"><i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div class="tfxIndusTitle">Logistics</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrBeauty"><i class="fa-solid fa-scissors"></i></div>
                                <div class="tfxIndusTitle">Beauty & Salon</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFitness"><i class="fa-solid fa-dumbbell"></i></div>
                                <div class="tfxIndusTitle">Fitness & Gym</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEvent"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="tfxIndusTitle">Event Management</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRetail"><i class="fa-solid fa-store"></i></div>
                                <div class="tfxIndusTitle">Retail</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrManufacturing"><i class="fa-solid fa-industry"></i></div>
                                <div class="tfxIndusTitle">Manufacturing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAttorney"><i class="fa-solid fa-scale-balanced"></i>
                                </div>
                                <div class="tfxIndusTitle">Attorney</div>
                            </div>

                        </div>
                    </div>

                    <!-- Clone First Slide -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrIT"><i class="fa-solid fa-laptop-code"></i></div>
                                <div class="tfxIndusTitle">IT Services</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAutoRepair"><i class="fa-solid fa-user-gear"></i></div>
                                <div class="tfxIndusTitle">Auto Repair</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrConstruction"><i class="fa-solid fa-helmet-safety"></i>
                                </div>
                                <div class="tfxIndusTitle">Construction</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrElectric"><i class="fa-solid fa-bolt"></i></div>
                                <div class="tfxIndusTitle">Electrician</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrClean"><i class="fa-solid fa-broom"></i></div>
                                <div class="tfxIndusTitle">Cleaning</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHvac"><i class="fa-solid fa-fan"></i></div>
                                <div class="tfxIndusTitle">HVAC</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLandscaping"><i class="fa-solid fa-tree"></i></div>
                                <div class="tfxIndusTitle">Landscaping</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPlumber"><i class="fa-solid fa-wrench"></i></div>
                                <div class="tfxIndusTitle">Plumber</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRestaurant"><i class="fa-solid fa-utensils"></i></div>
                                <div class="tfxIndusTitle">Restaurant</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRoofing"><i class="fa-solid fa-house"></i></div>
                                <div class="tfxIndusTitle">Roofing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTrucking"><i class="fa-solid fa-truck"></i></div>
                                <div class="tfxIndusTitle">Trucking</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPest"><i class="fa-solid fa-bug"></i></div>
                                <div class="tfxIndusTitle">Pest Control</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <button class="tfxIndusNav tfxIndusNext" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="tfxIndusDots">
            <span class="tfxIndusDot active" data-index="1"></span>
            <span class="tfxIndusDot" data-index="2"></span>
        </div>
    </div>
</section>

<div class="mlp-containers ptb-60 ">
    <div class="container mlp-container">
        <div class="text-center">
            <span class="crm-subtitle ">Client Review<img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2 class="dd-heading text-center" data-aos="fade-up" data-aos-duration="600">
                Testimonials
            </h2>
        </div>

        <div class="mlp-grid">
            <div class="mlp-card" data-aos="fade-up" data-aos-duration="600">
                <div class="pb-20">
                    <img src="assets\image\home\tclient.webp" alt="">
                </div>
                <h3>Join Us And Transform Your Business With Smart Technology Solutions</h3>
                <p>Drive more growth and achieve success with innovative technology solutions.</p>
            </div>


            <div class="mlp-card mlp-testimonial-card" data-aos="fade-up" data-aos-duration="600">
                <div class="mlp-testimonial-box">
                    <div class="mlp-testimonial-track" id="testimonialTrack">

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t1.webp">
                            <p>Technofra delivered our website on time with excellent design and smooth functionality.
                            </p>
                            <p><img src="assets\image\clogos\4.png" alt="" class="clogo"></p>
                        </div>

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t2.webp">
                            <p>Their team provided great support and helped us grow our business digitally.</p>
                            <p><img src="assets\image\clogos\6.png" alt="" class="clogo"></p>
                        </div>

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t3.webp">
                            <p>We are very happy with the app development service and professional approach.</p>
                            <p> <img src="assets\image\clogos\1.png" alt="" class="clogo"></p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="mlp-card" data-aos="fade-up" data-aos-duration="600">
                <div class="clc-wrapper">
                    <div class="clc-circle-box">
                        <div class="clc-ring clc-ring-outer">
                            <div class="clc-logo clc-o1"><img src="assets/image/clogos/1.png"></div>
                            <div class="clc-logo clc-o2"><img src="assets/image/clogos/2.png"></div>
                            <div class="clc-logo clc-o3"><img src="assets/image/clogos/3.png"></div>
                            <div class="clc-logo clc-o4"><img src="assets/image/clogos/4.png"></div>
                            <div class="clc-logo clc-o5"><img src="assets/image/clogos/5.png"></div>
                            <div class="clc-logo clc-o6"><img src="assets/image/clogos/6.png"></div>
                            <div class="clc-logo clc-o7"><img src="assets/image/clogos/17.png"></div>
                            <div class="clc-logo clc-o8"><img src="assets/image/clogos/18.png"></div>
                        </div>


                        <div class="clc-ring clc-ring-middle">
                            <div class="clc-logo clc-m1"><img src="assets/image/clogos/7.png"></div>
                            <div class="clc-logo clc-m2"><img src="assets/image/clogos/8.png"></div>
                            <div class="clc-logo clc-m3"><img src="assets/image/clogos/9.png"></div>
                            <div class="clc-logo clc-m4"><img src="assets/image/clogos/10.png"></div>
                            <div class="clc-logo clc-m5"><img src="assets/image/clogos/11.png"></div>
                            <div class="clc-logo clc-m6"><img src="assets/image/clogos/12.png"></div>
                        </div>


                        <div class="clc-ring clc-ring-inner">
                            <div class="clc-logo clc-i1"><img src="assets/image/clogos/13.png"></div>
                            <div class="clc-logo clc-i2"><img src="assets/image/clogos/14.png"></div>
                            <div class="clc-logo clc-i3"><img src="assets/image/clogos/15.png"></div>
                            <div class="clc-logo clc-i4"><img src="assets/image/clogos/16.png"></div>
                        </div>

                        <div class="clc-center"></div>

                    </div>
                    <h3 style="text-align:center;margin-top:20px;">
                        Serving Clients With Excellence
                    </h3>
                </div>
            </div>
        </div>


    </div>
</div>


<section class="faq-section tfx-faq-section ptb-60">
    <div class="container tfx-faq-shell">
        <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="600">
            <span class="crm-subtitle">FAQ<img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="tfx-faq-grid">
            <div class="tfx-faq-column accordion" id="faqColumnLeft" data-aos="fade-right" data-aos-duration="700">
                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-left-1">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-left-collapse-1" aria-expanded="false"
                            aria-controls="faq-left-collapse-1">
                            <span class="tfx-faq-icon"><i class="fa-solid fa-layer-group"></i></span>
                            <span class="tfx-faq-question">What services does Technofra provide?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-left-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-left-1"
                        data-bs-parent="#faqColumnLeft">
                        <div class="tfx-faq-answer">
                            Technofra provides a wide range of digital solutions including website design and
                            development, mobile app development, branding, digital marketing, domain and hosting
                            services, E-Commerce Websites, Social Media Marketing and IT infrastructure solutions.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-left-2">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-left-collapse-2" aria-expanded="false"
                            aria-controls="faq-left-collapse-2">
                            <span class="tfx-faq-icon orange"><i class="fa-solid fa-pen-ruler"></i></span>
                            <span class="tfx-faq-question">Do you provide custom website design?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-left-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-left-2"
                        data-bs-parent="#faqColumnLeft">
                        <div class="tfx-faq-answer">
                            Yes, we create fully customized website designs tailored to your brand, business goals, and
                            target audience to ensure a unique and professional online presence.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-left-3">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-left-collapse-3" aria-expanded="false"
                            aria-controls="faq-left-collapse-3">
                            <span class="tfx-faq-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <span class="tfx-faq-question">Do you develop mobile applications?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-left-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-left-3"
                        data-bs-parent="#faqColumnLeft">
                        <div class="tfx-faq-answer">
                            Yes, Technofra develops mobile applications for both Android and iOS platforms, helping
                            businesses reach customers through mobile devices.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-left-4">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-left-collapse-4" aria-expanded="false"
                            aria-controls="faq-left-collapse-4">
                            <span class="tfx-faq-icon orange"><i class="fa-solid fa-server"></i></span>
                            <span class="tfx-faq-question">Do you offer domain registration and hosting services?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-left-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-left-4"
                        data-bs-parent="#faqColumnLeft">
                        <div class="tfx-faq-answer">
                            Yes, we provide domain registration, secure web hosting, SSL certificates, and professional
                            business email services.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-left-5">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-left-collapse-5" aria-expanded="false"
                            aria-controls="faq-left-collapse-5">
                            <span class="tfx-faq-icon"><i class="fa-solid fa-arrows-rotate"></i></span>
                            <span class="tfx-faq-question">Can you redesign my existing website?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-left-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-left-5"
                        data-bs-parent="#faqColumnLeft">
                        <div class="tfx-faq-answer">
                            Absolutely. If your current website is outdated or not performing well, we can redesign it
                            with a modern design, improved performance, and better user experience.
                        </div>
                    </div>
                </div>
            </div>

            <div class="tfx-faq-column accordion" id="faqColumnRight" data-aos="fade-left" data-aos-duration="700">
                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-right-1">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-right-collapse-1" aria-expanded="false"
                            aria-controls="faq-right-collapse-1">
                            <span class="tfx-faq-icon orange"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                            <span class="tfx-faq-question">Will my website be mobile-friendly and SEO optimized?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-right-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-right-1"
                        data-bs-parent="#faqColumnRight">
                        <div class="tfx-faq-answer">
                            Yes, all our websites are responsive, fast-loading, and built with SEO best practices to
                            ensure better performance and rankings.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-right-2">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-right-collapse-2" aria-expanded="false"
                            aria-controls="faq-right-collapse-2">
                            <span class="tfx-faq-icon"><i class="fa-solid fa-building"></i></span>
                            <span class="tfx-faq-question">What industries do you work with?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-right-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-right-2"
                        data-bs-parent="#faqColumnRight">
                        <div class="tfx-faq-answer">
                            We work with startups, businesses, and enterprises across various industries such as
                            e-commerce, education, corporate, and service-based sectors.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-right-3">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-right-collapse-3" aria-expanded="false"
                            aria-controls="faq-right-collapse-3">
                            <span class="tfx-faq-icon orange"><i class="fa-solid fa-credit-card"></i></span>
                            <span class="tfx-faq-question">Do you provide payment gateway and API integrations?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-right-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-right-3"
                        data-bs-parent="#faqColumnRight">
                        <div class="tfx-faq-answer">
                            Yes, we integrate secure payment gateways and APIs such as WhatsApp, email, and OTP systems
                            to streamline your business operations.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-right-4">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-right-collapse-4" aria-expanded="false"
                            aria-controls="faq-right-collapse-4">
                            <span class="tfx-faq-icon"><i class="fa-solid fa-shield-halved"></i></span>
                            <span class="tfx-faq-question">Is my data and project information secure?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-right-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-right-4"
                        data-bs-parent="#faqColumnRight">
                        <div class="tfx-faq-answer">
                            Yes, we follow strict confidentiality and security practices to ensure your data and project
                            details remain protected.
                        </div>
                    </div>
                </div>

                <div class="tfx-faq-item accordion-item">
                    <h3 class="accordion-header" id="faq-right-5">
                        <button class="tfx-faq-trigger collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-right-collapse-5" aria-expanded="false"
                            aria-controls="faq-right-collapse-5">
                            <span class="tfx-faq-icon orange"><i class="fa-solid fa-medal"></i></span>
                            <span class="tfx-faq-question">Why should I choose Technofra?</span>
                            <span class="tfx-faq-plus" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-right-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-right-5"
                        data-bs-parent="#faqColumnRight">
                        <div class="tfx-faq-answer">
                            Technofra combines expertise, customized solutions, and a client-first approach to deliver
                            high-quality digital products that drive real business results.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog10 ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center" data-aos="fade-up" data-aos-duration="600">
                <div class=" crm-title">
                    <span class="crm-subtitle ">Blog & News <img src="assets/image/arrow-red.png" alt="arrow"></span>
                    <h2>
                        See Our Latest Blog & News
                    </h2>

                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="home-blog-slider" data-aos="fade-up" data-aos-duration="600">
            <div class="swiper home-blog-swiper" id="homeBlogSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog01.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 3, 2024</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "The Complete Guide to App Development: From Idea to Launch"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog02.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">October 13, 2024</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "CodeCraft: Crafting the Web - Insights, Tips, and Tutorials for Modern Web
                                        Development"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="#" class="link-with-icon text-decoration-none">Read
                                    More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="home-blog-controls">
                <!-- <button class="home-blog-nav home-blog-prev" type="button" aria-label="Previous blogs">
                    <i class="fas fa-arrow-left"></i>
                </button> -->
                <div class="home-blog-pagination"></div>
                <!-- <button class="home-blog-nav home-blog-next" type="button" aria-label="Next blogs">
                    <i class="fas fa-arrow-right"></i>
                </button> -->
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const scrollContainers = document.querySelectorAll("#infiniteScroll--left");

    if (!scrollContainers.length) {
        return;
    }

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

<script>
const counters = document.querySelectorAll('.counter');

const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    let count = 0;
    const speed = 200;
    const increment = target / speed;

    const updateCount = () => {
        if (count < target) {
            count += increment;
            counter.innerText = Math.ceil(count) + "+";
            requestAnimationFrame(updateCount);
        } else {
            counter.innerText = target + "+";
        }
    };

    updateCount();
};

// Trigger when section is visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            startCounting(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5
});

counters.forEach(counter => {
    observer.observe(counter);
});
</script>
<script>
const tfFaqItems = document.querySelectorAll(".tf-faq-item");

tfFaqItems.forEach(item => {
    item.querySelector(".tf-faq-question").addEventListener("click", () => {

        tfFaqItems.forEach(el => {
            if (el !== item) {
                el.classList.remove("active");
                el.querySelector(".tf-faq-icon").textContent = "+";
            }
        });

        item.classList.toggle("active");

        const icon = item.querySelector(".tf-faq-icon");
        icon.textContent = item.classList.contains("active") ? "−" : "+";
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const counters = document.querySelectorAll(".mlp-counter");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                const counter = entry.target;
                const target = parseInt(counter.getAttribute("data-target"));
                const suffix = counter.getAttribute("data-suffix") || "";
                let count = 0;
                const increment = target / 80;

                function updateCounter() {
                    count += increment;

                    if (count < target) {
                        counter.innerText = Math.ceil(count) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + suffix;
                    }
                }

                updateCounter();
                observer.unobserve(counter); // ek baar hi chalega
            }
        });
    }, {
        threshold: 0.6
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});
</script>



<script>
/* ONE TESTIMONIAL AT A TIME - SMOOTH/SEAMLESS LOOP */
const track = document.getElementById("testimonialTrack");
const testimonialCard = document.querySelector(".mlp-testimonial-card");
const realSlides = track ? Array.from(track.querySelectorAll(".mlp-testimonial-item")) : [];
const intervalMs = 1800;
const transitionMs = 500;
let timer = null;
let index = 0;
let isAnimating = false;
let isHovered = false;

function stopSlider() {
    if (timer) {
        clearInterval(timer);
        timer = null;
    }
}

function applyPosition(withTransition = true) {
    if (!track) return;
    track.style.transition = withTransition ? `transform ${transitionMs}ms ease` : "none";
    track.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    if (!track || realSlides.length <= 1 || isAnimating) return;
    isAnimating = true;
    index += 1;
    applyPosition(true);
}

function startSlider() {
    if (!track || realSlides.length <= 1 || isHovered || document.hidden) return;
    stopSlider();
    timer = setInterval(nextSlide, intervalMs);
}

function pauseSlider() {
    if (!track || realSlides.length <= 1) return;
    isHovered = true;
    stopSlider();
}

function resumeSlider() {
    if (!track || realSlides.length <= 1) return;
    isHovered = false;
    startSlider();
}

if (track && realSlides.length) {
    if (realSlides.length > 1) {
        const firstClone = realSlides[0].cloneNode(true);
        firstClone.setAttribute("aria-hidden", "true");
        track.appendChild(firstClone);
    }

    applyPosition(false);
    startSlider();

    track.addEventListener("transitionend", () => {
        if (realSlides.length <= 1) return;

        if (index === realSlides.length) {
            index = 0;
            applyPosition(false);
        }

        requestAnimationFrame(() => {
            isAnimating = false;
        });
    });

    window.addEventListener("resize", () => {
        applyPosition(false);
    });

    if (testimonialCard) {
        testimonialCard.addEventListener("mouseenter", pauseSlider);
        testimonialCard.addEventListener("mouseleave", resumeSlider);
    }

    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            stopSlider();
        } else if (!isHovered) {
            startSlider();
        }
    });
}

/* STATS COUNT-UP */
const countEls = Array.from(document.querySelectorAll(".mlp-count"));
const statsWrap = document.querySelector(".mlp-stats");
let hasCounted = false;

function formatCount(value) {
    return value.toLocaleString("en-US");
}

function runCountUp() {
    if (hasCounted || !countEls.length) return;
    hasCounted = true;

    countEls.forEach((el) => {
        const target = Number(el.dataset.target || 0);
        const suffix = el.dataset.suffix || "";
        const duration = 1400;
        const start = performance.now();

        function tick(now) {
            const progress = Math.min((now - start) / duration, 1);
            const current = Math.round(target * progress);
            el.textContent = `${formatCount(current)}${suffix}`;
            if (progress < 1) requestAnimationFrame(tick);
        }

        requestAnimationFrame(tick);
    });
}

if (statsWrap) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    runCountUp();
                    observer.disconnect();
                }
            });
        }, {
            threshold: 0.35
        }
    );
    observer.observe(statsWrap);
} else {
    runCountUp();
}
</script>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const homeBlogSwiperElement = document.getElementById("homeBlogSwiper");

if (homeBlogSwiperElement && typeof Swiper !== "undefined") {
    const totalBlogSlides = homeBlogSwiperElement.querySelectorAll(".swiper-slide").length;

    new Swiper(homeBlogSwiperElement, {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 24,
        speed: 900,
        rewind: totalBlogSlides > 3,
        watchOverflow: true,
        autoplay: totalBlogSlides > 3 ? {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        } : false,
        pagination: {
            el: ".home-blog-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".home-blog-next",
            prevEl: ".home-blog-prev"
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            992: {
                slidesPerView: 3,
                slidesPerGroup: 3
            }
        }
    });
}
</script>

<script>
const rnHeroSlides = document.querySelectorAll(".rnHeroSlide");
const rnHeroNext = document.querySelector(".rnHeroNext");
const rnHeroPrev = document.querySelector(".rnHeroPrev");
const rnHeroTabs = document.querySelectorAll(".rnHeroTabItem");

let rnHeroIndex = 0;
let rnHeroAutoSlide;

function rnHeroPauseAllVideos() {
    rnHeroSlides.forEach((slide) => {
        const video = slide.querySelector("video");
        if (video) {
            video.pause();
            video.currentTime = 0;
        }
    });
}

function rnHeroPlayActiveVideo() {
    const activeVideo = rnHeroSlides[rnHeroIndex].querySelector("video");
    if (activeVideo) {
        activeVideo.play().catch(() => {});
    }
}

function rnHeroShowSlide(i) {
    rnHeroSlides[rnHeroIndex].classList.remove("rnHeroActive");
    rnHeroTabs[rnHeroIndex].classList.remove("rnHeroActive");

    rnHeroIndex = i;

    rnHeroSlides[rnHeroIndex].classList.add("rnHeroActive");
    rnHeroTabs[rnHeroIndex].classList.add("rnHeroActive");

    rnHeroPauseAllVideos();
    rnHeroPlayActiveVideo();
}

function rnHeroNextSlide() {
    let i = rnHeroIndex + 1;
    if (i >= rnHeroSlides.length) i = 0;
    rnHeroShowSlide(i);
}

function rnHeroPrevSlide() {
    let i = rnHeroIndex - 1;
    if (i < 0) i = rnHeroSlides.length - 1;
    rnHeroShowSlide(i);
}

function rnHeroStartAutoSlide() {
    rnHeroAutoSlide = setInterval(rnHeroNextSlide, 6000);
}

function rnHeroResetAutoSlide() {
    clearInterval(rnHeroAutoSlide);
    rnHeroStartAutoSlide();
}

rnHeroTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const slideIndex = Number(tab.getAttribute("data-slide"));
        rnHeroShowSlide(slideIndex);
        rnHeroResetAutoSlide();
    });
});

rnHeroNext.addEventListener("click", () => {
    rnHeroNextSlide();
    rnHeroResetAutoSlide();
});

rnHeroPrev.addEventListener("click", () => {
    rnHeroPrevSlide();
    rnHeroResetAutoSlide();
});

document.querySelectorAll(".rnCenterSwiperWrap .single-logo").forEach((logo) => {
    logo.addEventListener("click", function(e) {
        e.preventDefault();

        const link = this.getAttribute("data-link");
        if (link && link !== "#") {
            window.location.href = link;
        }
    });
});

rnHeroShowSlide(0);
rnHeroStartAutoSlide();
</script>


<script>
(function() {
    const monthLabel = document.getElementById("monthLabel");
    const calendarGrid = document.getElementById("calendarGrid");
    const selectedDateText = document.getElementById("selectedDateText");
    const selectedTimeText = document.getElementById("selectedTimeText");
    const prevMonth = document.getElementById("prevMonth");
    const nextMonth = document.getElementById("nextMonth");
    const timeTrigger = document.getElementById("timeTrigger");
    const timeDropdown = document.getElementById("timeDropdown");
    const timeGrid = document.getElementById("timeGrid");
    const bookCallBtn = document.getElementById("bookCallBtn");
    const bookCallModal = document.getElementById("bookCallModal");
    const bookCallClose = document.getElementById("bookCallClose");
    const modalSelectedDate = document.getElementById("modalSelectedDate");
    const modalSelectedTime = document.getElementById("modalSelectedTime");
    const modalSelectedLocalTime = document.getElementById("modalSelectedLocalTime");
    const bookCallCountryCode = document.getElementById("bookCallCountryCode");
    const bookCallPhone = document.getElementById("bookCallPhone");
    const bookingDateInput = document.getElementById("bookingDateInput");
    const bookingTimeInput = document.getElementById("bookingTimeInput");
    const userTimezoneInput = document.getElementById("userTimezoneInput");
    const selectedLocalTimeNote = document.getElementById("selectedLocalTimeNote");
    const viewerTimezoneNote = document.getElementById("viewerTimezoneNote");

    const istTimezone = "Asia/Kolkata";
    const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone || "Local Time";
    const now = new Date();
    let viewYear = now.getFullYear();
    let viewMonth = now.getMonth();
    let selectedDate = null;
    let selectedTime = null;
    let bookedSlots = [];
    const countryCodes = [{
            name: "Afghanistan",
            code: "+93"
        },
        {
            name: "Albania",
            code: "+355"
        },
        {
            name: "Algeria",
            code: "+213"
        },
        {
            name: "Andorra",
            code: "+376"
        },
        {
            name: "Angola",
            code: "+244"
        },
        {
            name: "Antigua and Barbuda",
            code: "+1-268"
        },
        {
            name: "Argentina",
            code: "+54"
        },
        {
            name: "Armenia",
            code: "+374"
        },
        {
            name: "Australia",
            code: "+61"
        },
        {
            name: "Austria",
            code: "+43"
        },
        {
            name: "Azerbaijan",
            code: "+994"
        },
        {
            name: "Bahamas",
            code: "+1-242"
        },
        {
            name: "Bahrain",
            code: "+973"
        },
        {
            name: "Bangladesh",
            code: "+880"
        },
        {
            name: "Barbados",
            code: "+1-246"
        },
        {
            name: "Belarus",
            code: "+375"
        },
        {
            name: "Belgium",
            code: "+32"
        },
        {
            name: "Belize",
            code: "+501"
        },
        {
            name: "Benin",
            code: "+229"
        },
        {
            name: "Bhutan",
            code: "+975"
        },
        {
            name: "Bolivia",
            code: "+591"
        },
        {
            name: "Bosnia and Herzegovina",
            code: "+387"
        },
        {
            name: "Botswana",
            code: "+267"
        },
        {
            name: "Brazil",
            code: "+55"
        },
        {
            name: "Brunei",
            code: "+673"
        },
        {
            name: "Bulgaria",
            code: "+359"
        },
        {
            name: "Burkina Faso",
            code: "+226"
        },
        {
            name: "Burundi",
            code: "+257"
        },
        {
            name: "Cambodia",
            code: "+855"
        },
        {
            name: "Cameroon",
            code: "+237"
        },
        {
            name: "Canada",
            code: "+1"
        },
        {
            name: "Cape Verde",
            code: "+238"
        },
        {
            name: "Central African Republic",
            code: "+236"
        },
        {
            name: "Chad",
            code: "+235"
        },
        {
            name: "Chile",
            code: "+56"
        },
        {
            name: "China",
            code: "+86"
        },
        {
            name: "Colombia",
            code: "+57"
        },
        {
            name: "Comoros",
            code: "+269"
        },
        {
            name: "Congo",
            code: "+242"
        },
        {
            name: "Costa Rica",
            code: "+506"
        },
        {
            name: "Croatia",
            code: "+385"
        },
        {
            name: "Cuba",
            code: "+53"
        },
        {
            name: "Cyprus",
            code: "+357"
        },
        {
            name: "Czech Republic",
            code: "+420"
        },
        {
            name: "Denmark",
            code: "+45"
        },
        {
            name: "Djibouti",
            code: "+253"
        },
        {
            name: "Dominica",
            code: "+1-767"
        },
        {
            name: "Dominican Republic",
            code: "+1-809"
        },
        {
            name: "Ecuador",
            code: "+593"
        },
        {
            name: "Egypt",
            code: "+20"
        },
        {
            name: "El Salvador",
            code: "+503"
        },
        {
            name: "Equatorial Guinea",
            code: "+240"
        },
        {
            name: "Eritrea",
            code: "+291"
        },
        {
            name: "Estonia",
            code: "+372"
        },
        {
            name: "Eswatini",
            code: "+268"
        },
        {
            name: "Ethiopia",
            code: "+251"
        },
        {
            name: "Fiji",
            code: "+679"
        },
        {
            name: "Finland",
            code: "+358"
        },
        {
            name: "France",
            code: "+33"
        },
        {
            name: "Gabon",
            code: "+241"
        },
        {
            name: "Gambia",
            code: "+220"
        },
        {
            name: "Georgia",
            code: "+995"
        },
        {
            name: "Germany",
            code: "+49"
        },
        {
            name: "Ghana",
            code: "+233"
        },
        {
            name: "Greece",
            code: "+30"
        },
        {
            name: "Grenada",
            code: "+1-473"
        },
        {
            name: "Guatemala",
            code: "+502"
        },
        {
            name: "Guinea",
            code: "+224"
        },
        {
            name: "Guinea-Bissau",
            code: "+245"
        },
        {
            name: "Guyana",
            code: "+592"
        },
        {
            name: "Haiti",
            code: "+509"
        },
        {
            name: "Honduras",
            code: "+504"
        },
        {
            name: "Hungary",
            code: "+36"
        },
        {
            name: "Iceland",
            code: "+354"
        },
        {
            name: "India",
            code: "+91"
        },
        {
            name: "Indonesia",
            code: "+62"
        },
        {
            name: "Iran",
            code: "+98"
        },
        {
            name: "Iraq",
            code: "+964"
        },
        {
            name: "Ireland",
            code: "+353"
        },
        {
            name: "Israel",
            code: "+972"
        },
        {
            name: "Italy",
            code: "+39"
        },
        {
            name: "Jamaica",
            code: "+1-876"
        },
        {
            name: "Japan",
            code: "+81"
        },
        {
            name: "Jordan",
            code: "+962"
        },
        {
            name: "Kazakhstan",
            code: "+7"
        },
        {
            name: "Kenya",
            code: "+254"
        },
        {
            name: "Kiribati",
            code: "+686"
        },
        {
            name: "Kuwait",
            code: "+965"
        },
        {
            name: "Kyrgyzstan",
            code: "+996"
        },
        {
            name: "Laos",
            code: "+856"
        },
        {
            name: "Latvia",
            code: "+371"
        },
        {
            name: "Lebanon",
            code: "+961"
        },
        {
            name: "Lesotho",
            code: "+266"
        },
        {
            name: "Liberia",
            code: "+231"
        },
        {
            name: "Libya",
            code: "+218"
        },
        {
            name: "Liechtenstein",
            code: "+423"
        },
        {
            name: "Lithuania",
            code: "+370"
        },
        {
            name: "Luxembourg",
            code: "+352"
        },
        {
            name: "Madagascar",
            code: "+261"
        },
        {
            name: "Malawi",
            code: "+265"
        },
        {
            name: "Malaysia",
            code: "+60"
        },
        {
            name: "Maldives",
            code: "+960"
        },
        {
            name: "Mali",
            code: "+223"
        },
        {
            name: "Malta",
            code: "+356"
        },
        {
            name: "Marshall Islands",
            code: "+692"
        },
        {
            name: "Mauritania",
            code: "+222"
        },
        {
            name: "Mauritius",
            code: "+230"
        },
        {
            name: "Mexico",
            code: "+52"
        },
        {
            name: "Micronesia",
            code: "+691"
        },
        {
            name: "Moldova",
            code: "+373"
        },
        {
            name: "Monaco",
            code: "+377"
        },
        {
            name: "Mongolia",
            code: "+976"
        },
        {
            name: "Montenegro",
            code: "+382"
        },
        {
            name: "Morocco",
            code: "+212"
        },
        {
            name: "Mozambique",
            code: "+258"
        },
        {
            name: "Myanmar",
            code: "+95"
        },
        {
            name: "Namibia",
            code: "+264"
        },
        {
            name: "Nauru",
            code: "+674"
        },
        {
            name: "Nepal",
            code: "+977"
        },
        {
            name: "Netherlands",
            code: "+31"
        },
        {
            name: "New Zealand",
            code: "+64"
        },
        {
            name: "Nicaragua",
            code: "+505"
        },
        {
            name: "Niger",
            code: "+227"
        },
        {
            name: "Nigeria",
            code: "+234"
        },
        {
            name: "North Korea",
            code: "+850"
        },
        {
            name: "North Macedonia",
            code: "+389"
        },
        {
            name: "Norway",
            code: "+47"
        },
        {
            name: "Oman",
            code: "+968"
        },
        {
            name: "Pakistan",
            code: "+92"
        },
        {
            name: "Palau",
            code: "+680"
        },
        {
            name: "Palestine",
            code: "+970"
        },
        {
            name: "Panama",
            code: "+507"
        },
        {
            name: "Papua New Guinea",
            code: "+675"
        },
        {
            name: "Paraguay",
            code: "+595"
        },
        {
            name: "Peru",
            code: "+51"
        },
        {
            name: "Philippines",
            code: "+63"
        },
        {
            name: "Poland",
            code: "+48"
        },
        {
            name: "Portugal",
            code: "+351"
        },
        {
            name: "Qatar",
            code: "+974"
        },
        {
            name: "Romania",
            code: "+40"
        },
        {
            name: "Russia",
            code: "+7"
        },
        {
            name: "Rwanda",
            code: "+250"
        },
        {
            name: "Saint Kitts and Nevis",
            code: "+1-869"
        },
        {
            name: "Saint Lucia",
            code: "+1-758"
        },
        {
            name: "Saint Vincent and the Grenadines",
            code: "+1-784"
        },
        {
            name: "Samoa",
            code: "+685"
        },
        {
            name: "San Marino",
            code: "+378"
        },
        {
            name: "Sao Tome and Principe",
            code: "+239"
        },
        {
            name: "Saudi Arabia",
            code: "+966"
        },
        {
            name: "Senegal",
            code: "+221"
        },
        {
            name: "Serbia",
            code: "+381"
        },
        {
            name: "Seychelles",
            code: "+248"
        },
        {
            name: "Sierra Leone",
            code: "+232"
        },
        {
            name: "Singapore",
            code: "+65"
        },
        {
            name: "Slovakia",
            code: "+421"
        },
        {
            name: "Slovenia",
            code: "+386"
        },
        {
            name: "Solomon Islands",
            code: "+677"
        },
        {
            name: "Somalia",
            code: "+252"
        },
        {
            name: "South Africa",
            code: "+27"
        },
        {
            name: "South Korea",
            code: "+82"
        },
        {
            name: "South Sudan",
            code: "+211"
        },
        {
            name: "Spain",
            code: "+34"
        },
        {
            name: "Sri Lanka",
            code: "+94"
        },
        {
            name: "Sudan",
            code: "+249"
        },
        {
            name: "Suriname",
            code: "+597"
        },
        {
            name: "Sweden",
            code: "+46"
        },
        {
            name: "Switzerland",
            code: "+41"
        },
        {
            name: "Syria",
            code: "+963"
        },
        {
            name: "Taiwan",
            code: "+886"
        },
        {
            name: "Tajikistan",
            code: "+992"
        },
        {
            name: "Tanzania",
            code: "+255"
        },
        {
            name: "Thailand",
            code: "+66"
        },
        {
            name: "Timor-Leste",
            code: "+670"
        },
        {
            name: "Togo",
            code: "+228"
        },
        {
            name: "Tonga",
            code: "+676"
        },
        {
            name: "Trinidad and Tobago",
            code: "+1-868"
        },
        {
            name: "Tunisia",
            code: "+216"
        },
        {
            name: "Turkey",
            code: "+90"
        },
        {
            name: "Turkmenistan",
            code: "+993"
        },
        {
            name: "Tuvalu",
            code: "+688"
        },
        {
            name: "Uganda",
            code: "+256"
        },
        {
            name: "Ukraine",
            code: "+380"
        },
        {
            name: "United Arab Emirates",
            code: "+971"
        },
        {
            name: "United Kingdom",
            code: "+44"
        },
        {
            name: "United States",
            code: "+1"
        },
        {
            name: "Uruguay",
            code: "+598"
        },
        {
            name: "Uzbekistan",
            code: "+998"
        },
        {
            name: "Vanuatu",
            code: "+678"
        },
        {
            name: "Vatican City",
            code: "+379"
        },
        {
            name: "Venezuela",
            code: "+58"
        },
        {
            name: "Vietnam",
            code: "+84"
        },
        {
            name: "Yemen",
            code: "+967"
        },
        {
            name: "Zambia",
            code: "+260"
        },
        {
            name: "Zimbabwe",
            code: "+263"
        }
    ];

    function normalizeDate(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    }

    function populateCountryCodes() {
        if (!bookCallCountryCode) {
            return;
        }

        bookCallCountryCode.innerHTML = "";

        countryCodes.forEach((country) => {
            const option = document.createElement("option");
            option.value = country.code;
            option.textContent = country.code;
            option.title = `${country.name} (${country.code})`;
            option.setAttribute("aria-label", `${country.name} (${country.code})`);

            if (country.name === "India") {
                option.selected = true;
            }

            bookCallCountryCode.appendChild(option);
        });
    }

    function sameDay(a, b) {
        return (
            a &&
            b &&
            a.getDate() === b.getDate() &&
            a.getMonth() === b.getMonth() &&
            a.getFullYear() === b.getFullYear()
        );
    }

    function formatDate(date) {
        return date.toLocaleDateString("en-US", {
            weekday: "short",
            day: "numeric",
            month: "short",
            year: "numeric",
        });
    }

    function formatTime24(value) {
        return value;
    }

    function getZonedDateParts(date, timezone) {
        const parts = new Intl.DateTimeFormat("en-CA", {
            timeZone: timezone,
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            hour12: false,
        }).formatToParts(date);

        const values = {};
        parts.forEach((part) => {
            if (part.type !== "literal") {
                values[part.type] = part.value;
            }
        });

        return {
            year: Number(values.year),
            month: Number(values.month),
            day: Number(values.day),
            hour: Number(values.hour),
            minute: Number(values.minute),
        };
    }

    function getIstNowParts() {
        return getZonedDateParts(new Date(), istTimezone);
    }

    function getIstToday() {
        const istNow = getIstNowParts();
        return new Date(istNow.year, istNow.month - 1, istNow.day);
    }

    function getTimezoneShortLabel(timezone, date) {
        const parts = new Intl.DateTimeFormat("en-US", {
            timeZone: timezone,
            timeZoneName: "short",
        }).formatToParts(date);

        const timezonePart = parts.find((part) => part.type === "timeZoneName");
        return timezonePart ? timezonePart.value : timezone;
    }

    function createIstDate(date, timeValue) {
        const [year, month, day] = getDateKey(date).split("-").map(Number);
        const [hours, minutes] = timeValue.split(":").map(Number);
        const utcDate = new Date(Date.UTC(year, month - 1, day, hours - 5, minutes - 30));
        return utcDate;
    }

    function formatTimeInTimezone(date, timezone) {
        return new Intl.DateTimeFormat("en-US", {
            timeZone: timezone,
            hour: "numeric",
            minute: "2-digit",
            hour12: true,
        }).format(date);
    }

    function formatDateTimeInTimezone(date, timezone) {
        return new Intl.DateTimeFormat("en-US", {
            timeZone: timezone,
            weekday: "short",
            day: "numeric",
            month: "short",
            year: "numeric",
            hour: "numeric",
            minute: "2-digit",
            hour12: true,
        }).format(date);
    }

    function getLocalTimeSummary(date, timeValue) {
        if (!date || !timeValue) {
            return "Not selected";
        }

        const slotDate = createIstDate(date, timeValue);
        return `${formatDateTimeInTimezone(slotDate, userTimezone)} (${getTimezoneShortLabel(userTimezone, slotDate)})`;
    }

    function getTimeOptionLabel(date, timeValue, isBooked) {
        const istDate = createIstDate(date, timeValue);
        const istLabel = `${formatTimeInTimezone(istDate, istTimezone)} IST`;
        const localLabel = `${formatTimeInTimezone(istDate, userTimezone)} ${getTimezoneShortLabel(userTimezone, istDate)}`;
        const bookedText = isBooked ? " - Already Booked" : "";
        return `${istLabel} / ${localLabel}${bookedText}`;
    }

    function getDateKey(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const day = String(date.getDate()).padStart(2, "0");
        return `${year}-${month}-${day}`;
    }

    function openModal() {
        bookCallModal.classList.add("show");
        bookCallModal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        bookCallModal.classList.remove("show");
        bookCallModal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function updateBookingSummary() {
        modalSelectedDate.textContent = selectedDate ? formatDate(selectedDate) : "Not selected";
        modalSelectedTime.textContent = selectedTime ? `${formatTime24(selectedTime)} IST` : "Not selected";
        modalSelectedLocalTime.textContent = getLocalTimeSummary(selectedDate, selectedTime);
        bookingDateInput.value = selectedDate ? getDateKey(selectedDate) : "";
        bookingTimeInput.value = selectedTime || "";
        userTimezoneInput.value = userTimezone;

        if (!selectedDate || !selectedTime) {
            selectedLocalTimeNote.textContent = "";
            return;
        }

        selectedLocalTimeNote.innerHTML = `<strong>Your local time:</strong> ${getLocalTimeSummary(selectedDate, selectedTime)}`;
    }

    async function fetchBookedSlots(dateKey) {
        bookedSlots = [];

        try {
            const response = await fetch(`get-booked-slots.php?date=${encodeURIComponent(dateKey)}`, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            });
            const data = await response.json();

            if (data && data.success && Array.isArray(data.slots)) {
                bookedSlots = data.slots;
            }
        } catch (error) {
            bookedSlots = [];
        }
    }

    function renderTimeSlots() {
        timeGrid.innerHTML = "";

        if (!selectedDate) {
            return;
        }

        const istToday = getIstToday();
        const istNow = getIstNowParts();
        const selectedIsToday = selectedDate && sameDay(selectedDate, istToday);
        const currentHour = istNow.hour;
        const currentMinute = istNow.minute;

        for (let hour = 0; hour < 24; hour++) {
            const option = document.createElement("button");
            const hourValue = String(hour).padStart(2, "0");
            const timeValue = `${hourValue}:00`;
            const isPastTime = selectedIsToday && (hour < currentHour || (hour === currentHour && currentMinute >
                0));
            const isBooked = bookedSlots.includes(timeValue);

            option.type = "button";
            option.className = "eep-time-option";
            option.textContent = getTimeOptionLabel(selectedDate, timeValue, isBooked);
            option.dataset.timeValue = timeValue;

            if (selectedTime === timeValue) {
                option.classList.add("active");
            }

            if (isPastTime || isBooked) {
                option.disabled = true;
            }

            option.addEventListener("click", () => {
                if (option.disabled) {
                    return;
                }

                selectedTime = timeValue;
                selectedTimeText.textContent = `${formatTime24(selectedTime)} IST`;
                timeDropdown.classList.remove("show");
                updateBookingSummary();
                renderTimeSlots();
            });

            timeGrid.appendChild(option);
        }
    }

    function renderCalendar() {
        const istToday = getIstToday();
        const firstDay = new Date(viewYear, viewMonth, 1);
        const lastDate = new Date(viewYear, viewMonth + 1, 0).getDate();
        const startDay = firstDay.getDay();

        monthLabel.textContent = firstDay.toLocaleDateString("en-US", {
            month: "long",
            year: "numeric",
        });

        calendarGrid.innerHTML = "";

        for (let i = 0; i < startDay; i++) {
            const empty = document.createElement("div");
            empty.className = "eep-calendar-empty";
            calendarGrid.appendChild(empty);
        }

        for (let day = 1; day <= lastDate; day++) {
            const btn = document.createElement("button");
            const thisDate = new Date(viewYear, viewMonth, day);
            const normalizedDate = normalizeDate(thisDate);
            const isToday = sameDay(thisDate, istToday);
            const isSelected = sameDay(thisDate, selectedDate);
            const isPastDate = normalizedDate < istToday;
            const isSunday = thisDate.getDay() === 0;

            btn.textContent = day;
            btn.type = "button";
            btn.className = "eep-calendar-day";

            if (isToday) btn.classList.add("eep-is-today");
            if (isSelected) btn.classList.add("eep-is-selected");
            if (isPastDate || isSunday) btn.disabled = true;

            btn.addEventListener("click", async () => {
                if (isPastDate || isSunday) {
                    return;
                }

                selectedDate = thisDate;
                selectedDateText.textContent = formatDate(thisDate);

                timeTrigger.classList.remove("disabled");
                timeDropdown.classList.remove("show");

                selectedTime = null;
                selectedTimeText.textContent = "Select Time";
                await fetchBookedSlots(getDateKey(thisDate));
                updateBookingSummary();
                renderTimeSlots();

                renderCalendar();
            });

            calendarGrid.appendChild(btn);
        }
    }

    prevMonth.addEventListener("click", () => {
        const istToday = getIstToday();
        const previousMonth = new Date(viewYear, viewMonth - 1, 1);
        if (previousMonth < new Date(istToday.getFullYear(), istToday.getMonth(), 1)) {
            return;
        }

        viewMonth--;
        if (viewMonth < 0) {
            viewMonth = 11;
            viewYear--;
        }
        renderCalendar();
    });

    nextMonth.addEventListener("click", () => {
        viewMonth++;
        if (viewMonth > 11) {
            viewMonth = 0;
            viewYear++;
        }
        renderCalendar();
    });

    timeTrigger.addEventListener("click", () => {
        if (!selectedDate) return;
        renderTimeSlots();
        timeDropdown.classList.toggle("show");
    });

    document.addEventListener("click", (e) => {
        if (
            !timeTrigger.contains(e.target) &&
            !timeDropdown.contains(e.target)
        ) {
            timeDropdown.classList.remove("show");
        }
    });

    bookCallBtn.addEventListener("click", function(e) {
        e.preventDefault();

        if (!selectedDate || !selectedTime) {
            alert("Please select a date and time first.");
            return;
        }

        if (bookedSlots.includes(selectedTime)) {
            alert("This time slot is already booked. Please select another time.");
            selectedTime = null;
            selectedTimeText.textContent = "Select Time";
            updateBookingSummary();
            renderTimeSlots();
            return;
        }

        updateBookingSummary();
        openModal();
    });

    document.querySelector(".eep-book-form").addEventListener("submit", function() {
        const rawPhone = bookCallPhone.value.trim();
        const selectedCode = bookCallCountryCode.value.trim();

        if (rawPhone !== "" && selectedCode !== "" && !rawPhone.startsWith("+")) {
            bookCallPhone.value = `${selectedCode} ${rawPhone}`;
        }
    });

    bookCallClose.addEventListener("click", closeModal);
    bookCallModal.addEventListener("click", (e) => {
        if (e.target === bookCallModal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && bookCallModal.classList.contains("show")) {
            closeModal();
        }
    });

    populateCountryCodes();
    viewerTimezoneNote.textContent = userTimezone === istTimezone ? "." : ` Your local timezone: ${userTimezone}.`;
    updateBookingSummary();
    renderTimeSlots();
    renderCalendar();
})();
</script>
<?php include 'footer.php'; ?>
