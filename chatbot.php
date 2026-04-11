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
<style>
    @media (min-width: 1025px) and (max-width: 1280px) {
        .pd {
            font-size: 10px;
        }
    }
    .pd {
        cursor: pointer;
        padding: 10px 15px !important;
    }

    .sc-feedback-card {
        padding: 40px 24px 0px 24px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .lis {
    display: flex !important;
    align-items: flex-end !important;
    /* justify-content: space-between !important; */
    gap: 15px;
}

    @media (max-width:480px) {
        .lis {
            display: block !important;

        }

    }

    .b-r {
        border-radius: 10px;
    }

    .bg-cl {
        background-color: #003366;
    }

    .bg-card {
        background: linear-gradient(180deg, rgba(202, 222, 168, 0.43) 12.86%, rgba(11, 139, 109, 0.43) 100%);
        border-radius: 5px !important;
    }

    .bg-card {
        background: #b9d4f0 !important;
        border-radius: 10px !important;
    }

    .br-6 {
        border-radius: 6px;
    }
</style>
<?php include 'navbar.php'; ?>

<section class="hero-section pt-120 pb-120 text-white bg-cl bpd"  style="background:
        url('assets/image/api/chat-board-banner.webp')no-repeat
        center center / cover">
    <div class="container">
        <div class="row justify-content-center text-center text-lg-start align-items-center">
            <div class="col-lg-5 col-md-10">
                <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                    <h1 class="fw-bold display-5 text-white" data-aos="fade-up">Empower Your Conversations with Chatbot</h1>
                    <p class="lead" data-aos="fade-up">Discover seamless, intelligent interactions that simplify tasks, answer queries, and elevate your experience.</p>

                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="hero-img-wrap position-relative app-screen-bg mt-5"
                    data-aos="fade-up"
                    data-aos-delay="200">
                 
                    <img src="assets/image/api/chatbot1.webp" alt="hero image"
                        class="img-fluid position-relative z-5">
                </div>
            </div>
        </div>
    </div>
</section>
 

<section class="feature-section pt-80 pb-60">
    <div class="container">
        <div class="row align-items-lg-center justify-content-between">
            <div class="col-lg-6 ">
                <div class="pr-lg-4 position-relative" data-aos="fade-up">
                    <div class="bg-light-subtle text-center rounded-custom  pt-5 px-3 px-lg-5 mx-lg-auto">
                        <img src="assets/image/api/chatbot2.webp" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6   mb-7 mb-lg-0">
                <div class="mb-4" data-aos="fade-up">
                    <h2>The Role of Chatbots in Modern Business</h2>
                    <p>
                        Chatbots automate customer interactions, streamline processes, enhance service efficiency, and provide 24/7 support, driving business growth and satisfaction.</p>
                </div>
                <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up">
                    <li>
                        <span class="d-block mb-4"><i class="fas fa-user fa-2x text-primary"></i></span>
                        <h3 class="h5"> Instant Customer Support</h3>
                        <p>Chatbots provide instant support, addressing customer queries 24/7 and improving satisfaction through quick responses.</p>
                    </li>
                    <li>
                        <span class="d-block mb-4"><i class="fas fa-clock fa-2x text-primary"></i></span>
                        <h3 class="h5">Reducing Operational Costs</h3>
                        <p>Chatbots reduce operational costs by automating routine tasks, minimizing the need for extensive customer support teams.</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="sc-feedback-section pt-60 pb-60 bgc-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="section-title text-center">
                    <h2 class="mb-2 clr-text">Secure and Engage Instantly with Chatbot API Solutions</h2>
                   
                </div>
            </div>
        </div>
        <div class="sc-feedback-slider swiper mt-40">
            <div class="swiper-wrapper">
                <div class="sc-feedback-card swiper-slide bg-white rounded bg-card">
                    <h5 class="sc-heading-color mb-3 mt-4 text-center"> Chatbot Team Inbox</h5>
                    <img src="assets/image/api/chat1.webp" alt="image">
                </div>
                <div class="sc-feedback-card swiper-slide bg-white rounded bg-card">
                    <h5 class="sc-heading-color mb-3 mt-4 text-center"> Chatbot Broadcasting</h5>
                    <img src="assets/image/api/chat2.webp" alt="image">
                </div>
                <div class="sc-feedback-card swiper-slide bg-white rounded bg-card">
                    <h5 class="sc-heading-color mb-3 mt-4 text-center"> Chatbot Commerce</h5>
                    <img src="assets/image/api/chat3.webp" alt="image">
                </div>
                <div class="sc-feedback-card swiper-slide bg-white rounded bg-card">
                    <h5 class="sc-heading-color mb-3 mt-4 text-center"> Chatbot</h5>
                    <img src="assets/image/api/chat4.webp" alt="image">
                </div>
                <div class="sc-feedback-card swiper-slide bg-white rounded bg-card">
                    <h5 class="sc-heading-color mb-3 mt-4 text-center">Authentication & Verification</h5>
                    <img src="assets/image/api/chat5.webp" alt="image">
                </div>

            </div>
        </div>
    </div>
</section>


<section class="app-two-cta ptb-60">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">

            <div class="col-lg-6 col-xl-6 col-md-10">
                <div class="app-two-cta-right px-md-0 pt-5 pt-md-0">
                    <div class="section-heading  ">
                        <h2 class="">
                            Why Businesses Should Adopt WhatsApp Chatbot Services
                        </h2>
                        <p class="mt-5">
                            WhatsApp chatbots offer businesses an efficient way to enhance customer interactions. By automating responses and providing instant support, businesses can engage customers 24/7 without the need for human intervention. This leads to improved efficiency, reduced operational costs, and faster service delivery. Furthermore, chatbots can assist with transactions, personalized services, and routine inquiries, helping businesses stay competitive and meet the growing demands of customers. As messaging platforms like WhatsApp dominate communication, adopting chatbot services has become essential for businesses to stay ahead in the market.</p>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="  position-relative text-center pe-5">
                    <img src="assets/image/api/chatbot6.webp" alt="feature image" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-icon pt-60 pb-60 bgc-background ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading text-center heading10 section-heading">
                    <h4 class="heading-4  clr-text">
                        Chatbot Features and Functionalities
                    </h4>
                 
                    <p>
                        Chatbots are equipped with various features that enhance their ability to assist users effectively and efficiently.
                    </p>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 p-0">

                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                    <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe1.png" alt="service icon" width="65"
                            height="65" />
                    </div>
                    <div class="service-info-wrap">
                        <h3 class="h5 ">Natural Processing </h3>
                        <p>
                            Chatbots use NLP to interpret user messages, ensuring accurate and context-aware responses in conversations.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe6.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5 ">Forms and Data Collection</h3>
                        <p>
                            Forms enable chatbots to collect detailed information, ensuring smooth data entry and validation for users.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                    <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe3.png" alt="service icon" width="65" height="65" />
                    </div>

                    <div class="service-info-wrap">
                        <h3 class="h5 ">External  Integration</h3>
                        <p>
                            By integrating with services like weather or payment gateways, chatbots provide real-time information and functionality.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center border-end">
                    <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe4.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5 ">Multilingual Support</h3>
                        <p>
                            Multilingual support allows chatbots to engage a global audience, adapting to multiple languages for effective communication.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center border-end">
                    <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe5.png" alt="service icon" width="65"
                            height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5 ">Rich Media Support </h3>
                        <p>
                            Rich media support boosts user engagement by sharing images, videos, and interactive buttons within the chat interface.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center">
                  
                    <div class="service-icon icon-center">
                        <img src="assets/image/icons/chfe2.png" alt="service icon" width="65"
                            height="65" />
                    </div>
                    <div class="service-info-wrap">
                        <h3 class="h5 ">Conversational Flow Management</h3>
                        <p>
                            Conversational flow management allows the chatbot to engage users through coherent, multi-step dialogues, improving interaction quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-section pt-60 pb-60  ">
    <div class="container">
        <div class="row align-items-lg-center justify-content-between">
            <div class="col-lg-6 ">
                <div class=" position-relative text-center pe-5">
                    <img src="assets/image/api/chatbot5.webp" alt="feature image" class="img-fluid b-r" />
                </div>
            </div>
            <div class="col-lg-6   mb-7 mb-lg-0">
                <div class="mb-4" data-aos="fade-up">
                    <h2>Chatbots with a Personal Touch</h2>
                    <p>
                        Chatbots can create a more human-like experience by adapting to user needs, ensuring meaningful and engaging interactions.</p>
                </div>
                <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up">
                    <li>
                        <span class="d-block mb-4"><i class="fas fa-user fa-2x text-primary"></i></span>
                        <h3 class="h5">Personalized Responses</h3>
                        <p>Chatbots can customize their replies based on user preferences, past interactions, and behaviors.</p>
                    </li>
                    <li>
                        <span class="d-block mb-4"><i class="fas fa-clock fa-2x text-primary"></i></span>
                        <h3 class="h5">Adaptive Tone and Language</h3>
                        <p>Chatbots can adjust their tone, formality, and language based on user demographics or sentiment.</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>



 

<!--faq section start-->
<section class="faq-section ptb-60">
    <div class="container">
      
        <div class="row justify-content-between">
        <div class="section-heading text-center">
                    <h2>Frequently Asked Questions</h2>
                </div>
            <div class="col-lg-12">
                <div class="accordion-faq-content-wrap">
                    <div id="faq-accordion-1">
                        <div class="accordion faq-accordion my-5" id="accordionExample-2">
                            <div class="accordion-item border border-2 active">
                                <h5 class="accordion-header" id="faq-2-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-1" aria-expanded="true">
                                        What is a chatbot?
                                    </button>
                                </h5>
                                <div id="collapse-2-1" class="accordion-collapse collapse " aria-labelledby="faq-2-1" data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        A chatbot is an AI-powered tool that can simulate conversation with users through text or voice. It is used for customer support, lead generation, answering queries, and automating repetitive tasks.</div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-2" aria-expanded="false">
                                        How does a chatbot work?
                                    </button>
                                </h5>
                                <div id="collapse-2-2" class="accordion-collapse collapse" aria-labelledby="faq-2-2" data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Chatbots use natural language processing (NLP) and machine learning to understand user queries and provide relevant responses. They can be rule-based (predefined answers) or AI-based (learning from interactions). </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-3" aria-expanded="false">
                                        What are the benefits of using a chatbot?
                                    </button>
                                </h5>
                                <div id="collapse-2-3" class="accordion-collapse collapse" aria-labelledby="faq-2-3" data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Some key benefits include 24/7 availability, quick response time, reducing human workload, handling multiple inquiries simultaneously, and improving user experience. </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-4" aria-expanded="false">
                                        Can a chatbot be integrated into my website or app?
                                    </button>
                                </h5>
                                <div id="collapse-2-4" class="accordion-collapse collapse" aria-labelledby="faq-2-4" data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, chatbots can be easily integrated into websites, mobile apps, social media platforms, and messaging apps such as WhatsApp, Facebook Messenger, or Slack. </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-5" aria-expanded="false">
                                        Do I need coding skills to set up a chatbot?
                                    </button>
                                </h5>
                                <div id="collapse-2-5" class="accordion-collapse collapse" aria-labelledby="faq-2-5" data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Many chatbot platforms offer no-code or low-code solutions that allow users to set up a chatbot without any technical expertise. However, custom development may require coding skills.
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
<!--faq section end-->
<section class="feature-section-two pt-80 pb-60 bgc-background">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading" data-aos="fade-up">

                    <h2>Enhance Security and Engagement with Chatbot API</h2>
                    <p>
                        Improve security and user engagement by leveraging a Chatbot API, providing personalized experiences and safeguarding your platform with advanced features.</p>
                    <ul class="list-unstyled mt-5 lis">

                        <li class="d-flex align-items-start mb-4">
                            <a href="tel:+918080803374" target="_blank" class="btn btn-outline-info rounded-5 pd" contenteditable="false" style="cursor: pointer;"> <i class="fa-light fa-phone-volume"></i> +91 8080 80 3374
                            </a>
                        </li>
                        <li class="d-flex align-items-start mb-4"><a href="mailto:info@technofra.com" target="_blank" class="btn btn-outline-info rounded-5 pd" contenteditable="false" style="cursor: pointer;">
                                <i class="fa-light fa fa-envelope"></i> info@technofra.com
                            </a>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <a href="https://wa.me/8080803375" target="_blank" class="btn btn-outline-info rounded-5 pd" contenteditable="false" style="cursor: pointer;">
                                <i class="fa-light fa fa-whatsapp" style="font-size: 20px;"></i> Chat On WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 mv-pt">
                <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">

                    <img src="assets/image/api/enq.webp" alt="feature image" class="img-fluid rounded-custom"
                        data-aos="fade-up">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>