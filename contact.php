<?php
session_start();

$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);

include 'header.php';
?>
<title>Contact Technofra – Let’s Build Something Amazing</title>
<meta property="og:title" content="Contact Technofra – Let’s Build Something Amazing  ">
<meta property="og:description"
    content="Have a project in mind? Get in touch with Technofra for expert web design, development, and digital marketing solutions.">
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

<style>
/* General Calendar Container */
.calendar-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 12px;

}

.calendar-content {}

.calendar-wrapper {
    width: 300px;
    height: 280px;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
}

.calendar-content {
    background: #fff;
    padding: 20px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    width: 300px;
    text-align: center;
    position: absolute;
    bottom: -20%;
    transition: all 0.4s ease-in-out;
    border-radius: 10px;
}

/* 🎯 Hover Effect - Move Upwards */
.calendar-wrapper:hover .calendar-content {
    bottom: 0;
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
}

/* Calendar Title */
.calendar-title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Calendar Header */
.calendar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 16px;
    font-weight: bold;
    color: #444;
}

/* Navigation Arrows */
.prev,
.next {
    cursor: pointer;
    font-size: 16px;

    transition: 0.3s;
}

.prev:hover,
.next:hover {

    transform: scale(1.2);
}

/* Calendar Grid */
.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
    margin-top: 10px;
}

/* Day Names (SUN, MON, etc.) */
.day-name {
    font-size: 12px;
    font-weight: bold;
    color: #555 !important;
    text-align: center;
    padding: 8px 0;
}

/* Calendar Days */
.calendar-day {
    padding: 12px;
    text-align: center;
    font-size: 12px;
    border-radius: 6px;
    font-weight: bold;
    color: #ababab !important;
}


/* Schedule Button */
.schedule-btn {
    margin: 20px 60px;
    display: flex;
    justify-content: center;
    z-index: 1;


}

.fa-3x {
    font-size: 40px !important;
}

.schedule-btn:hover {

    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 480px) {
    .calendar-wrapper {
        width: 90%;
        height: 240px;
    }

    .calendar-content {
        width: 100%;
    }
}

.dp-f-a {
    display: flex;
    align-items: center !important;
}

.dp-flex {
    display: flex;
    justify-content: space-between;

}

.dpposition-absolute {
    position: absolute !important;

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

.contact-booking-card .eep-calendar-card {
    width: 100%;
}

.contact-booking-card {
    max-width: auto;
}

.contact-booking-card .eep-calendar-box {
    padding: 14px;
}

.contact-booking-card .eep-calendar-title {
    font-size: 24px;
}

.contact-booking-card .eep-calendar-sub {
    font-size: 14px;
}

.contact-booking-card .eep-calendar-info {
    display: flex;
    flex-direction: row;
    gap: 10px;
    margin-top: 14px;
    align-items: stretch;
}

.contact-booking-card .eep-picker-field {
    flex: 1 1 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.contact-booking-card .eep-picker-label {
    padding-left: 4px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #667085;
}

.contact-booking-card .eep-time-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 6px;
    max-height: 220px;
    overflow-y: auto;
    padding-right: 4px;
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
}

.contact-booking-card .eep-selected-date,
.contact-booking-card .eep-time-trigger {
    min-height: 58px;
    padding: 12px 14px;
    border-radius: 16px;
    width: 100%;
    border: 1px solid #d7deea;
    background: #ffffff;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-booking-card .eep-selected-date {
    position: relative;
}

.contact-booking-card .eep-time-trigger {
    justify-content: space-between;
    transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.contact-booking-card .eep-time-trigger:not(.disabled):hover,
.contact-booking-card .eep-time-trigger:not(.disabled):focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.contact-booking-card .eep-time-trigger.disabled {
    background: #f8fafc;
    border-color: #e4e7ec;
    box-shadow: none;
}

.contact-booking-card .eep-time-main {
    min-width: 0;
    flex: 1 1 auto;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-booking-card .eep-trigger-arrow {
    color: #667085;
    font-size: 12px;
}

.contact-booking-card .eep-selected-date-text,
.contact-booking-card .eep-time-text {
    min-width: 0;
    font-size: 14px;
    font-weight: 600;
    color: #101828;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.contact-booking-card .eep-pill-icon {
    width: 34px;
    height: 34px;
    border-radius: 12px;
    flex: 0 0 34px;
    background: linear-gradient(135deg, #ecfdf3, #dcfce7);
    color: #15803d;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.contact-booking-card .eep-time-picker-wrap {
    position: relative;
}

.contact-booking-card .eep-time-dropdown {
    width: 100%;
    margin-top: 8px;
    border: 1px solid #d7deea;
    border-radius: 16px;
    background: #ffffff;
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.14);
    overflow: hidden;
}

.contact-booking-card .eep-time-grid::-webkit-scrollbar {
    width: 6px;
}

.contact-booking-card .eep-time-grid::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 999px;
}

.contact-booking-card .eep-time-grid::-webkit-scrollbar-track {
    background: transparent;
}

.contact-booking-card .eep-calendar-week {
    gap: 4px;
    font-size: 10px;
}

.contact-booking-card .eep-calendar-grid {
    gap: 4px;
}

.contact-booking-card .eep-calendar-empty,
.contact-booking-card .eep-calendar-day {
    height: 34px;
}

.contact-booking-card .eep-calendar-day {
    border-radius: 10px;
    font-size: 12px;
}

.contact-booking-card .eep-calendar-nav {
    margin-bottom: 12px;
}

.contact-booking-card .eep-month-label {
    font-size: 15px;
}

.contact-booking-card .eep-cal-btn {
    width: 34px;
    height: 34px;
}

.contact-booking-card .eep-time-option {
    padding: 10px 8px;
    font-size: 11px;
    border-radius: 12px;
}

.contact-booking-card .eep-calendar-actions {
    grid-template-columns: 1fr;
    gap: 10px;
    margin-top: 12px;
}

.contact-booking-card .eep-calendar-actions .eep-btn-green {
    width: 100%;
    justify-content: center;
    padding: 13px 14px;
    font-size: 14px;
    border-radius: 14px;
}

.contact-booking-copy {
    
}

.contact-booking-illustration {
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-booking-illustration img {
    max-width: 443px;
    object-fit: contain;
    object-position: center top;
    position: static !important;
}

.contact-form-card .contact-form-actions {
    row-gap: 14px;
}

.contact-form-card .contact-submit-wrap,
.contact-form-card .contact-captcha-wrap {
    width: 100%;
    flex: 0 0 100%;
    max-width: 100%;
    margin-top: 0;
}

.contact-form-card .contact-submit-wrap .finbiz-btn {
    width: 100%;
    text-align: center;
}

.contact-form-card .contact-captcha-box {
    width: 100%;
    min-height: 78px;
    overflow: hidden;
    display: flex;
    justify-content: flex-start;
}

.contact-form-card .g-recaptcha {
    max-width: 100%;
}

@media (max-width: 991px) {
    .contact-booking-card {
        margin-bottom: 30px;
    }

    .contact-booking-card .eep-calendar-info {
        flex-direction: column;
    }

    .contact-booking-copy {
        margin-bottom: 22px;
    }

    .contact-booking-illustration {
        display: none;
    }

    .contact-form-card .contact-captcha-box {
        justify-content: flex-start;
    }
}

@media only screen and (min-width: 1030px) and (max-width: 1366px) {
    .contact-booking-copy h2 {
        font-size: 34px;
        line-height: 1.15;
    }

    .contact-booking-copy p {
        font-size: 14px;
    }

    .contact-booking-card {
        max-width: 330px;
    }

    .contact-booking-card .eep-calendar-box {
        padding: 12px;
    }

    .contact-booking-card .eep-month-label {
        font-size: 14px;
    }

    .contact-booking-card .eep-calendar-week {
        font-size: 9px;
    }

    .contact-booking-card .eep-calendar-empty,
    .contact-booking-card .eep-calendar-day {
        height: 31px;
    }

    .contact-booking-card .eep-calendar-day {
        font-size: 11px;
    }

    .contact-booking-card .eep-selected-date,
    .contact-booking-card .eep-time-trigger {
        padding: 10px;
        width: 100%;
    }

    .contact-booking-card .eep-selected-date-text,
    .contact-booking-card .eep-time-text {
        font-size: 12px;
    }

    .contact-booking-card .eep-time-option {
        padding: 8px 7px;
        font-size: 10px;
    }

    .contact-booking-card .eep-calendar-actions .eep-btn-green {
        padding: 11px 12px;
        font-size: 13px;
    }
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

    .eep-phone-group {
        grid-template-columns: 1fr;
    }

    .contact-form-card {
        padding: 28px 20px !important;
    }

    .contact-form-card .contact-submit-wrap,
    .contact-form-card .contact-captcha-wrap {
        width: 100%;
    }

    .contact-form-card .contact-captcha-box {
        min-height: 68px;
    }

    .contact-form-card .g-recaptcha {
        transform: scale(0.88);
        transform-origin: left top;
    }
}
a:hover, .btn-link:hover {
    color: #000000;
    text-decoration: none;
}
</style>
<?php include 'navbar.php'; ?>

<?php if ($bookCallStatus): ?>
<div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>

<div class="hero9" style="background-image: url(assets/image/home/contactusban.webp);">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-9 text-center">
                <div class="main-heading">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Contact Us</span>
                    <h1 class="tg-element-title">Technofra loves to hear from you reach out with any questions,
                        feedback, or inquiries.</h1>
                    <div class="space30"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-promo bg-light-subtle ptb-60">
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-6 crm-title col-md-10 pb-20">
                <div class="section-heading text-center section-heading">
                    <span class="crm-subtitle ">Contact Info <img src="assets/image/arrow-red.png" alt="Contact Technofra, Contact Web Development Company in Mumbai, Get in Touch Digital Agency, Contact Digital Marketing Agency, IT Company Contact Mumbai"></span>
                    <h2 class="mt-2">
                        Contact & Join Together
                    </h2>
                    <p class="mt-2">
                        Stay connected with us! Reach out for inquiries, collaborations, or support—we're here to help.
                        Let’s join forces and create something amazing together!
                    </p>
                </div>
            </div>
        </div> -->
        <div class="row justify-content-center">
            <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - INDIA.
                        </p>
                    </div>

                </div>
            </div>
            <!-- <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - USA
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - UK
                        </p>
                    </div>

                </div>
            </div>
        </div> 
        <div class="row justify-content-center pt-40">-->
            <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-phone fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">24/7 Services</p>
                            <h5 class="mb-0 mt-1">Call Us At</h5>
                        </div>
                    </div>

                    <div class="contact-promo-info mb-4 mt-4 ">
                        <div class="dp-flex">
                            <p><span class=" h6">Sales : </span></p>
                            <p> <a href="tel:+918080803374" class="gray"> +91 8080 80 3374</a><br> <a
                                    href="tel:+918080803375" class="gray">+91 8080 80 3375</a></p>
                        </div>
                        <div class="dp-flex">
                            <p><span class=" h6">Support : </span></p>
                            <p> <a href="tel:+918080621003" class="gray"> +91 8080 62 1003</a><br> <a
                                    href="tel:+918080721003" class="gray">+91 8080 72 1003</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-envelope fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Drop a Line</p>
                            <h5 class="mb-0 mt-1">Email Address</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <div class="dp-flex">

                        </div>
                        <p> <a href="mailto:info@technofra.com" class="gray"> info@technofra.com</a> <br> <a
                                href="mailto: support@technofra.com" class="gray"> support@technofra.com</a></p>
                        <!-- <p></span> <a href="mailto: support@technofra.com" class="gray"> support@technofra.com</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-clock fa-3x text-primary"></span>

                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Office Hours </p>
                            <h5 class="mb-0 mt-1">Opening Time</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <div class="contact-promo-info mb-4">
                            <p>Mon - Sat : 10am - 7pm</p>
                            <p>Sunday (Closed)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="integration-section pt-60" id="contactForm">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5">
                <div class="contact-booking-copy">
                    <h2>
                        Let's Start Your
                    </h2>

                    <h2 style="font-weight: 200;">
                        Growth Journey
                    </h2>
                    <p class="pb-2">Have questions or ideas to discuss?
                        Reach out to us now</p>
                </div>
                <div class="contact-booking-card">
                    <div class="eep-calendar-card">
                        
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
                            <div class="eep-picker-field">
                                <span class="eep-picker-label">Select Date</span>
                                <div id="selectedDatePill" class="eep-selected-date">
                                    <span class="eep-pill-icon">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </span>
                                    <span id="selectedDateText" class="eep-selected-date-text">Select date</span>
                                </div>
                            </div>

                            <div class="eep-picker-field">
                                <span class="eep-picker-label">Select Time</span>
                                <div class="eep-time-picker-wrap">
                                    <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                                        <span class="eep-time-main">
                                            <span class="eep-pill-icon">
                                                <i class="fa-solid fa-clock"></i>
                                            </span>
                                            <span id="selectedTimeText" class="eep-time-text">Select time</span>
                                        </span>
                                        <span class="eep-trigger-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </span>
                                    </button>

                                    <div id="timeDropdown" class="eep-time-dropdown">
                                        <div id="timeGrid" class="eep-time-grid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="eep-timezone-note">
                            <strong>All slots are scheduled in IST</strong>
                            <span id="viewerTimezoneNote"></span>
                            <div id="selectedLocalTimeNote" class="eep-local-time-note"></div>
                        </div>

                        <div class="eep-calendar-actions text-center">
                            <a href="#book-call" class="eep-btn-green" id="bookCallBtn">
                                <i class="fa-solid fa-calendar-plus"></i>
                                Book A Call With Us
                            </a>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-lg-3">
                <div class="contact-booking-illustration">
                    <img src="assets/image/contact-gril.png" alt="Request Website Development Quote, Contact IT Services Company, Business Contact Information, Web Development Company Contact"
                        class="img-fluid ma-contact-img pe-none z-n1 d-none d-lg-block">
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="register-wrap contact-form-card p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate mb-30"
                    data-aos="fade-up" data-aos-delay="150">
                    <form action="send" method="POST" >
                        <h3 class="mb-3 fw-medium">Contact Us</h3>

                        <div class="row contact-form-actions">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">First Name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="fname" class="form-control" required=""
                                        placeholder="First Name" aria-label="First Name">
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">Last Name <span class="text-danger"> *</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name"
                                        aria-label="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="contact" class="form-control" required=""
                                        placeholder="Phone" aria-label="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger"> *</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" required=""
                                        placeholder="Email" aria-label="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="yourMessage" class="mb-1">Message <span class="text-danger"></span></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" name="massage" placeholder="Message"
                                        style="height: 80px"></textarea>
                                </div>
                            </div>
                            <div class="col-12 contact-captcha-wrap">
                                <div class="form-group">
                                    <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                                    <div class="col-12 contact-captcha-box">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 contact-submit-wrap">
                                <button type="submit" class="finbiz-btn">Submit</button>
                            </div>

                        </div>

                    </form>
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
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4" required></textarea>
            </div>

            <button type="submit" class="eep-book-submit">Submit Booking</button>
        </form>
    </div>
</div>

<!-- <div class="contact-map-page">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3767.817656548082!2d72.834758!3d19.203165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6ca84bfbc29%3A0xc30408ca949bffb8!2sTechnofra%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20Agency%20in%20Mumbai!5e0!3m2!1sen!2sus!4v1732790645015!5m2!1sen!2sus"
        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
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

    if (
        !monthLabel || !calendarGrid || !selectedDateText || !selectedTimeText ||
        !prevMonth || !nextMonth || !timeTrigger || !timeDropdown || !timeGrid ||
        !bookCallBtn || !bookCallModal || !bookCallClose || !modalSelectedDate ||
        !modalSelectedTime || !modalSelectedLocalTime || !bookCallCountryCode ||
        !bookCallPhone || !bookingDateInput || !bookingTimeInput || !userTimezoneInput ||
        !selectedLocalTimeNote || !viewerTimezoneNote
    ) {
        return;
    }

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
        return new Date(Date.UTC(year, month - 1, day, hours - 5, minutes - 30));
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
            const isPastTime = selectedIsToday && (hour < currentHour || (hour === currentHour && currentMinute > 0));
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
