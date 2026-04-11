<?php include 'header.php'; ?>
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
</style>
<?php include 'navbar.php'; ?>
<section class="cyber-store-product">
    <div class="store-bg-header" style="background: url('assets/image/contact-banner.png')no-repeat center center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="section-heading text-center mb-5">
                        <h1 class="display-5 fw-bold text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-contact-section-space">
    <div class="container">
        <div class="text-center">
            <div class="about-company-subtitle">
                <span>Contact Info</span>
                <img src="assets/image/arrow-red.png" alt="Arrow">
            </div>
            <h2 class="tf-contact-section-heading">
                Contact &amp; Join Together
            </h2>
        </div>

        <p class="tf-contact-section-copy">
            Stay connected with us! Reach out for inquiries, collaborations, or support—we're here to help. Let’s join
            forces and create something amazing together!
        </p>

        <div class="tf-contact-info-cards">
            <article class="tf-contact-info-card">
                <div class="tf-contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="tf-contact-info-label">Location..</div>
                <div class="tf-contact-info-title">Visit Us At</div>
                <div class="tf-contact-meta">
                    <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                        400067. Maharashtra - INDIA.</p>
                </div>
            </article>

            <article class="tf-contact-info-card">
                <div class="tf-contact-info-icon"><i class="fa-solid fa-phone-volume"></i></div>
                <div class="tf-contact-info-label">24*7 Service..</div>
                <div class="tf-contact-info-title">Call Us On</div>
                <div class="tf-contact-meta">
                    <a href="tel:+918080803374">Sales : +91 8080 80 3374</a>
                    <a href="tel:+918080803375">Sales : +91 8080 80 3375</a>
                    <a href="tel:+918080621003">Support : +91 8080 62 1003</a>
                    <a href="tel:+918080721003">Support : +91 8080 72 1003</a>
                </div>
            </article>

            <article class="tf-contact-info-card">
                <div class="tf-contact-info-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                <div class="tf-contact-info-label">Drop a line..</div>
                <div class="tf-contact-info-title">Mail Address</div>
                <div class="tf-contact-meta">
                    <a href="mailto:info@technofra.com">info@technofra.com</a>
                    <a href="mailto:support@technofra.com">support@technofra.com</a>
                </div>
            </article>

            <article class="tf-contact-info-card">
                <div class="tf-contact-info-icon"><i class="fa-solid fa-clock"></i></div>
                <div class="tf-contact-info-label">Office hours..</div>
                <div class="tf-contact-info-title">Opening Time</div>
                <div class="tf-contact-meta">
                    <p>Mon - Sat : 9am - 6pm</p>
                    <p>Sunday (Closed)</p>
                </div>
            </article>
        </div>

        <div class="tf-contact-wrap">
            <aside class="tf-contact-chat-card">
                <div class="tf-contact-chat-icon"><i class="fa-regular fa-headset"></i></div>
                <h3>Chat With Live !</h3>
                <p>
                    Live chat enables real-time communication, allowing users to get instant help and interactive support anytime.

                </p>
                <button class="tf-contact-chat-btn">LET'S CHAT</button>
            </aside>

            <div class="tf-contact-agent-box">
                <img class="tf-contact-agent-image" src="assets/image/home/cong.png" alt="Support representative" />
            </div>

            <section class="tf-contact-form-area">
                <div class="tf-contact-section-tag">Contact Us</div>
                <h2>Reach &amp; Get In Touch With Us !</h2>

                <form class="tf-contact-form">
                    <input type="text" placeholder="Your Name*" />
                    <input type="email" placeholder="Your Email*" />
                    <input type="tel" placeholder="Your number*" />
                    <input type="text" placeholder="Your Subject*" />
                    <textarea placeholder="Enter message*"></textarea>
                </form>
                <div class="col-sm-8 mt-20">
                    <div class="form-group">
                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>
                    </div>
                </div>

                <button class="tf-contact-submit-btn">SEND MESSAGE</button>
            </section>
        </div>
    </div>

    <div class="tf-contact-map-wrap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3767.817656548082!2d72.834758!3d19.203165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6ca84bfbc29%3A0xc30408ca949bffb8!2sTechnofra%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20Agency%20in%20Mumbai!5e0!3m2!1sen!2sus!4v1732790645015!5m2!1sen!2sus"
            width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const header = document.querySelector(".calendar-header h1");

    let currentDate = new Date();

    // Function to update the month and year heading
    function updateHeader(date) {
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        header.textContent = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;
    }

    // Event Listeners for navigation
    prevButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateHeader(currentDate);
    });

    nextButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateHeader(currentDate);
    });

    // Initial render
    updateHeader(currentDate);
});
</script>

<?php include 'footer.php'; ?>