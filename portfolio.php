<?php include 'header.php'; ?>
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

<title>Our Work | Technofra Portfolio – Web, App & Digital Projects</title>
<meta property="og:title" content="Our Work | Technofra Portfolio – Web, App & Digital Projects">
<meta property="og:description" content="Explore Technofra’s portfolio showcasing our work in web design, app development, branding, and digital marketing. See how we bring ideas to life!">

<link rel="canonical" href="https://technofra.com/shopify-website-development.php">
<style>
    .manish {
        padding: 15px;
        background-color: #1f2022;
        border-radius: 20px;
    }

    [data-bs-theme=dark] .aih-portfolio-area .qty-portfolio__arrow {
        border-color: #1f2022;
    }

    .qty-portfolio:hover .qty-portfolio__arrow-link {
        background-color: #00a4d2;
    }

    .ratio-4x3 {
        --bs-aspect-ratio: 65%;
    }

    .object-fit-cover {
        object-fit: fill !important;
    }

    .qty-portfolio__body {
        padding-top: 1.5rem;
        display: flex;
        justify-content: space-between;
    }

    .link-with-icon {
        padding: 7px 19px;
        border: 1px solid;
        border-radius: 30px;
        display: inline-block;
        font-size: 15px;
        font-family: var(--bs-font-monospace);
        font-weight: 500;
        color: var(--body-color);
    }

    .manish1::before {
        content: '';
        display: inline-block;
        width: 8px;
        /* Circle size */
        height: 8px;
        /* Circle size */
        background-color: #737373;
        /* Circle color */
        border-radius: 50%;
        /* Makes it a circle */
        margin-right: 10px;
        /* Space between circle and text */
        vertical-align: middle;
        /* Aligns the circle with text */
    }

    .ico:hover img {
        filter: blur(1px);
    }

    .new {
        position: absolute;
        top: 50px;
        right: 15px;
        background-color: #38d1fe;
        color: #0b3466;
        border-top-left-radius: 15px;
        font-size: 13px;
        z-index: 1;
        border-bottom-left-radius: 15px;
        font-weight: 500;
        padding: 9px 24px;
    }

    .ico:hover .but {
        cursor: pointer;
        background-color: #00d2ff;
        color: #000;
    }

    .rot {
        display: inline-block;
        transform: rotate(-48deg);
        transition: transform 0.3s ease;
    }

    .headi {
        font-family: "Inter", Sans-serif;
        font-size: 7.4vw;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1.2em;
        letter-spacing: -7px;
        color: #FFFFFF;
    }

    .hero-36 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* Adjust as needed */
    }

    .headi1 {
        font-family: "Inter", Sans-serif;
        font-size: 7.4vw;
        font-weight: 400;
        text-transform: uppercase;
        line-height: 1.2em;
        letter-spacing: -7px;
        color: #FFFFFF;
        overflow: hidden;
        max-width: 100%;
        text-align: center;
    }

    .hero-36 {
        position: relative;
    }

    .custom-text {
        position: absolute;
        top: 46%;
        right: 13%;
        transform: translate(-50%, -50%);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 22px;
        font-weight: 400;
        text-transform: none;
        line-height: 1.4em;
        letter-spacing: normal;
    }

    @media (min-width: 360px) and (max-width: 576px) {
        .headi {
            font-family: "Inter", Sans-serif;
            font-size: 9.4vw;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.2em;
            letter-spacing: 1px;
            color: #FFFFFF;
        }

        .custom-text {
            position: absolute;
            top: 102%;
            right: -19%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 22px;
            font-weight: 400;
            text-transform: none;
            line-height: 1.4em;
            letter-spacing: normal;
        }

        .hero-36 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 46vh;
        }

        .headi1 {
            font-family: "Inter", Sans-serif;
            font-size: 9.4vw;
            font-weight: 400;
            text-transform: uppercase;
            line-height: 1.2em;
            letter-spacing: -1px;
            color: #FFFFFF;
            white-space: nowrap;
            overflow: hidden;
            max-width: 100%;
            text-align: center;
        }

        .fs-24 {
            font-size: 15px;
        }
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        .custom-text {
            position: absolute;
            top: 53%;
            right: 6%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 22px;
            font-weight: 400;
            text-transform: none;
            line-height: 1.4em;
            letter-spacing: normal;
        }
    }

    /* Button styling */
    .hover-button {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease;
    }

    /* Show button on hover */
    .qty-portfolio:hover .hover-button {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
    }

    /* Smooth hover transition for the image */
    .qty-portfolio__img img {
        transition: transform 0.4s ease;
    }

    .qty-portfolio:hover .qty-portfolio__img img {
        transform: scale(1.1);
        /* Slight zoom effect */
    }

    .link-with-icon {
        padding: 7px 19px;
        border: 0px solid;
        border-radius: 30px;
        display: inline-block;
        font-size: 15px;
        font-family: var(--bs-font-monospace);
        font-weight: 500;
        color: var(--body-color);
    }

    .qty-portfolio__img:hover img {
        /* transition: transform 0.4s ease; */
        opacity: 0.6;
        transition-duration: 0.5s;
    }

    .portdot {
        background-color: #5a5a5a;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        display: block;
        margin: 3px;
    }

    .aih-color-two {
        color: #ffffff;
    }
   
</style>

<?php include 'navbar.php'; ?>

<div class="hero-36">
    <div class="sections__head">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <p class="headi">Creative</p>
                        <p class="headi1">Digital Portfolio</p>
                        <p class="custom-text">Let's Your Professional<br> Business Website Today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Portfolio -->
<div class="aih-portfolio-area bg-black ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-8 col-lg-9">
                <h2 class="aih-title text-white aih-color-two fs-48 fw-400">Our Awesome Portfolio
                </h2>
            </div>

        </div>
    </div>
    <div class="qty-portfolio-section mt-30">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="frizcoolindia" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/Frizschool/main.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="frizcoolindia" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Frizcool India</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="frizcoolindia" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="shivam" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/shivam/shivam.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="shivam" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Shivam Industries</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="shivam" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="texon" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/texon/banner.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="texon" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Texon Corporation</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="texon" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="dynarx" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/dynarx.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="dynarx" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">dynarx</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="dynarx" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="karantelecom" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/karantelecom.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="karantelecom" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Karan Telecom</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="karantelecom" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="sunriseconsultancy" class="qty-portfolio__img-link">
                                <img src="assets\image\casestudy\sunriseconsultancy.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="sunriseconsultancy" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Sunrise Consultancy</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="sunriseconsultancy" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="lifelike" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/lifelike.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="lifelike" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">LifeLike</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="lifelike" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="torshaapharma" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/torshaa.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="torshaapharma" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Torshaa Pharma</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="torshaapharma" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="Jaijagannathpuri" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/jaijagannath.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="Jaijagannathpuri" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Jai Jagannath Charitable Trust</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="Jaijagannathpuri" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="aspirias" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/aspirias.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="aspirias" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Aspirias</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="aspirias" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="wotm" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/wotm.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="wotm" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">WOTM</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="wotm" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="vlegends" class="qty-portfolio__img-link">
                                <img src="assets\image\casestudy\vlegends.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="vlegends" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">VLegends</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="vlegends" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="transhubtech" class="qty-portfolio__img-link">
                                <img src="assets\image\casestudy\transhubtech.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="transhubtech" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">TransHub</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="transhubtech" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="srb-computers" class="qty-portfolio__img-link">
                                <img src="assets\image\casestudy\portfolio.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="srb-computers" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">SRB Computers Private Limited </h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="srb-computers" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="aeritx" class="qty-portfolio__img-link">
                                <img src="assets\image\casestudy\aeritx.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="aeritx" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Aeritx </h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="aeritx" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="yash-tools" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/yashtools.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="yash-tools" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Yash Tools</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="yash-tools" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="chem-pharma" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/chempharma.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="chem-pharma" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Chempharma Jobs</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="chem-pharma" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">

                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="dipuenterprises" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/dipu.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="dipuenterprises" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Dipu Enterprises Pvt. Ltd.</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="dipuenterprises" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="global-ocean" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/globalocean.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="global-ocean" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Global Ocean</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="global-ocean" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="ish" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/ish.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="ish" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">ISH International</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="ish" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="rupalplastic" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/rupalplastic.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="rupalplastic" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Rupal Plastic</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="rupalplastic" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="sanjay-agencies" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/sanjayagencies.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="sanjay-agencies" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Sanjay Agencies</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="sanjay-agencies" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="sukanya" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/sukanya.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="sukanya" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Sukanya India</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="sukanya" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="visitmadhisland" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/visitmadh.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="visitmadhisland" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Visit Madh Island</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="visitmadhisland" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="aakriti-space" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/aakriti.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="aakriti-space" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Aakriti Space</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="aakriti-space" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                                    NEW
                                </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="instacraves" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/Instacraves.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="instacraves" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Instacraves</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="instacraves" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="napoleon" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/naploean.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="napoleon" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Napoleon AC Mumbai</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="napoleon" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="deltacab" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/delta.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="deltacab" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Delta Cab</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="deltacab" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="fragomatrix" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/fragomatrix.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="fragomatrix" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Frago Matrix</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="fragomatrix" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="jpc" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/jpc.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="jpc" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">JPC </h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="jpc" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="spaceage" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/Spacage.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="spaceage" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Spaceage Consultants </h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="spaceage" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="travest" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/trevest-holiday.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="travest" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Travest Holidays</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="travest" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="shreeram-interiors" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/shreeram-interior.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="shreeram-interiors" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Shreeram Interiors</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="shreeram-interiors" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="mehtas-group" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/mehtagroup.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="mehtas-group" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Mehtas Group</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="mehtas-group" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="mateo" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/Mateo.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="mateo" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Mateo Corporate Gifts</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="mateo" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="manvi-interior" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/manvi-interior.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="manvi-interior" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Manvi Interior</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="manvi-interior" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="urcfo" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/urcfo.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="urcfo" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">UR CFO</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="urcfo" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="urban-sports" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/urban-sports.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="urban-sports" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Urban Sports</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="urban-sports" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="viraj-prints" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/viraj-prints.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="viraj-prints" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Viraj Prints</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="viraj-prints" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="vpsons" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/vp&son.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="vpsons" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">V P & SONS</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="vpsons" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="linkpromotions" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/link-promtion.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="linkpromotions" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Link Promotions And Exhibits</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="linkpromotions" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="rnisargfoundation" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/rnisargfoundation.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="rnisargfoundation" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 "> Rnisarg Foundation (NGO) </h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="rnisargfoundation" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="creativeprintinks" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/creative-print-ink.png" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="creativeprintinks" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Creative Print Inks</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="creativeprintinks" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="rajprbha" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/rajprbha.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="rajprbha" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Rajprabha</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="rajprbha" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <div class="new-badge new">
                            NEW
                        </div>
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="finwert" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/finwert.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="finwert" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Finwert</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="finwert" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-30">
                    <div class="qty-portfolio manish ico" style="position: relative; overflow: hidden;">
                        <!-- <div class="new-badge new">
                            NEW
                        </div> -->
                        <div class="d-flex mb-2">
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                            <span class="portdot"></span>
                        </div>
                        <div class="qty-portfolio__img">
                            <a href="shahkatariya" class="qty-portfolio__img-link">
                                <img src="assets/image/casestudy/shahkathariya.webp" alt="image" class="img-fluid">
                            </a>
                        </div>
                        <div class="qty-portfolio__body">
                            <a href="shahkatariya" class="aih-color-two fw-400">
                                <h6 class="aih-color-two fw-400 ">Shah & Kathariya</h6>
                            </a>
                        </div>

                        <div class="hover-button">
                            <a href="shahkatariya" class="link-with-icon text-decoration-none but">
                                View <i class="fas fa-arrow-right rot"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Logo End -->



<?php include 'footer.php'; ?>