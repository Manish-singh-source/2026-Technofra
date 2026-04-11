<?php include 'header.php';?>
<style>
 

 
.wrap {     
    margin: 36px auto;
    padding: 28px;
    border-radius: 14px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.02));
    box-shadow: 0 10px 30px rgba(2, 6, 23, 0.6)
}

 

.logo {
    width: 72px;
    height: 72px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #07212a
}



.meta {
    margin-left: auto;
    text-align: right
}

.pill {
    display: inline-block;
    padding: 6px 10px;
    border-radius: 999px;
    background: var(--glass);
    font-size: 13px;
    color: var(--muted);
    margin-left: 6px
}


.grid {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 20px;
    margin-top: 18px
}

.card {
    background: rgba(255, 255, 255, 0.015);
    padding: 18px;
    border-radius: 12px
}


h2 {
    margin: 0 0 10px 0;
    font-size: 16px
}

p.lead {
    color: var(--muted);
    margin-top: 6px
}

.card ul {
    margin: 8px 0 16px 18px
}

li {
    margin: 8px 0
}

.card ul li{
    list-style: disc;
}

.skills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px
}

.skill {
    background: rgba(255, 255, 255, 0.03);
    padding: 8px 10px;
    border-radius: 8px;
    font-size: 13px;  
    
}


.actions {
    display: flex;
    gap: 10px;
    margin-top: 12px
}
 
.aside .card-title {
    display: flex;
    align-items: center;
    justify-content: space-between
}

.location {
    font-size: 14px;
    color: var(--muted)
}


.benefits li {
    margin: 6px 0
}


footer {
    margin-top: 20px;
    text-align: center;
    color: var(--muted);
    font-size: 13px
}


/* modal */
.modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(2, 8, 23, 0.6);
    display: none;
    align-items: center;
    justify-content: center
}

.modal {
    background: #071422;
    padding: 20px;
    border-radius: 12px;
    min-width: 320px;
    box-shadow: 0 8px 30px rgba(2, 6, 23, 0.8)
}

.modal h3 {
    margin: 0 0 8px 0
}

label {
    display: block;
    font-size: 13px;
    margin: 8px 0 6px;
    color: var(--muted)
}

input,
textarea,
select {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.03);
    background: transparent;
    color: inherit;
    font-size: 14px
}

textarea {
    min-height: 100px
}


.toast {
    position: fixed;
    right: 20px;
    bottom: 20px;
    background: #05121a;
    padding: 12px 16px;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.6);
    display: none
}

.mt-100{
    margin-top: 150px;
}

/* responsive */
@media (max-width:880px) {
    .grid {
        grid-template-columns: 1fr;
    }

    .meta {
        text-align: left;
        margin-left: auto
    }

    .aside {
        order: -1
    }
}
.custom-flex {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

@media (max-width: 576px) {
    .custom-flex {
        flex-direction: column;   /* stack vertically */
        align-items: flex-start;  /* align left */
        gap: 0.75rem;             /* smaller gap */
    }
}

</style>
<?php include 'navbar.php';?>
<!-- <div class="hero9" style="background-image: url(assets/image/career/carrer-banner.webp);">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-8 text-center">
                <div class="main-heading">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Job Description</span>
                    <h1 class="tg-element-title">Senior Graphic Designer</h1>
                    <div class="space30"></div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="wrap  mt-100" role="main">
    <header class="custom-flex">
        <div class="logo"><img src="assets/image/favicon.png" alt=""></div>
        <div>
            <h1>Senior Graphic Designer</h1>
            <div class="">Lead design projects across branding, campaigns, web & UI — Kandivali (W), Mumbai •
                Full-time</div>
        </div>
        <div class="meta">
            <div class="pill">Location: Kandivali (W), Mumbai-400067</div>
            <div class="pill">Type: Full-time</div>
        </div>
    </header>


    <div class="grid">
        <section class="card main">
            <h2>Job Summary</h2>
            <p class="">The Senior Graphic Designer will lead design projects from concept to execution, ensuring
                creativity, brand consistency, and high-quality output. The role involves collaborating with
                cross-functional teams, mentoring junior designers, and working on diverse projects such as branding,
                marketing campaigns, web design, UI/UX elements, and digital content.</p>


            <h2 class="mt-4">Key Responsibilities</h2>
            <ul>
                <li>Develop and execute creative concepts, graphics, and layouts aligned with company goals and brand
                    identity.</li>
                <li>Design marketing materials including brochures, social media creatives, website graphics,
                    presentations, and advertisements.</li>
                <li>Collaborate with marketing, product, and development teams to deliver cohesive and innovative visual
                    solutions.</li>
                <li>Ensure brand consistency across all design outputs.</li>
                <li>Lead design reviews and provide constructive feedback to the creative team.</li>
                <li>Manage multiple projects with tight deadlines while maintaining attention to detail.</li>
                <li>Stay updated with the latest design trends, tools, and technologies.</li>
                <li>Mentor and guide junior designers, fostering a collaborative and creative work environment.</li>
            </ul>


            <h2>Skills & Qualifications</h2>
            <div class="skills" aria-hidden="false">
                <span class="skill">Bachelor’s degree in Graphic Design / Fine Arts / Visual Communication</span>
                <span class="skill">2+ years experience as a Graphic Designer (senior/lead preferred)</span>
                <span class="skill">Adobe Creative Suite (Photoshop, Illustrator, InDesign, After Effects)</span>
                <span class="skill">CorelDRAW</span>
                <span class="skill">Canva</span>
                <span class="skill">Figma / UI design tools</span>
                <span class="skill">Portfolio with branding & digital campaigns</span>
                <span class="skill">Knowledge of UI/UX principles</span>
                <span class="skill">Excellent communication & leadership</span>
            </div>


            <div class="actions">
                <button class="btn btn-outline-info mob_non tab-non" id="applyBtn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Apply Now</button>
                 
            </div>
               

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Job Application Form</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate">
                  <!-- Job Application Form -->
                  <form action="send2.php" method="post" enctype="multipart/form-data">
                    <div class="container">
                      <div class="row">
                        <!-- Full Name -->
                        <div class="col-lg-6 mb-3 text-start">
                          <label for="name" class="form-label">Full Name*</label>
                          <input type="text" class="form-control ca-two-border" name="fname" id="name" required>
                          <span id="name-error" style="color: red; display: none;">Please enter a valid name (letters only)</span>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label for="email" class="form-label">Email ID*</label>
                          <input type="email" class="form-control ca-two-border" name="email" id="email" required>
                          <span id="email-error" style="color: red; display: none;">Please enter a valid email address</span>
                        </div>

                        <!-- Contact Details -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label for="phone" class="form-label">Contact Details*</label>
                          <input type="tel" class="form-control ca-two-border" name="contact" id="phone" required>
                          <span id="phone-error" style="color: red; display: none;">Please enter a valid phone number (10 digits)</span>
                        </div>

                        <!-- Role -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label for="cars" class="form-label">Roles*</label>
                          <select name="role" id="cars" class="form-control ca-two-border">
                            <option value="Roles">Roles</option>
                            <option value="Web Developer">Web Developer</option>
                            <option value="SEO Specialist">SEO Specialist</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Graphic Designer">Graphic Designer</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="App Developer">App Developer</option>
                          </select>
                        </div>

                        <!-- Experience -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Years of Experience*</label>
                          <input type="text" class="form-control ca-two-border" name="experience" required>
                        </div>

                        <!-- Current CTC -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Current CTC*</label>
                          <input type="text" class="form-control ca-two-border" name="ctc" required>
                        </div>

                        <!-- Expected CTC -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Expected CTC*</label>
                          <input type="text" class="form-control ca-two-border" name="ectc" required>
                        </div>

                        <!-- Location -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Location*</label>
                          <input type="text" class="form-control ca-two-border" name="location" required>
                        </div>

                        <!-- Skills -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Top 3 Skills*</label>
                          <input type="text" class="form-control ca-two-border" name="skill" required>
                        </div>

                        <!-- Notice Period -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Notice Period*</label>
                          <input type="text" class="form-control ca-two-border" name="notice" required>
                        </div>

                        <!-- Referrer Name -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Referrer Name</label>
                          <input type="text" class="form-control ca-two-border" name="rn">
                        </div>

                        <!-- How Did You Hear -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">How did you hear about this job opening?*</label>
                          <select name="refrence" class="form-control ca-two-border">
                            <option value="Please Select">Please Select</option>
                            <option value="Received a call from Technofra HR">Received a call from Technofra HR</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="LinkedIn">LinkedIn</option>
                            <option value="Google">Google</option>
                            <option value="Referred by a Friend">Referred by a Friend</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>

                        <!-- File Upload -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label for="file" class="form-label">Resume / Portfolio (.pdf/.docx only)*</label>
                          <input type="file" class="form-control ca-two-border" id="file" name="file" required>
                        </div>

                        <!-- Portfolio Link -->
                        <div class="col-lg-6 mb-3  text-start">
                          <label class="form-label">Portfolio Link (if any)</label>
                          <input type="text" class="form-control ca-two-border" name="link">
                        </div>
                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                        <div class="col-12">
                          <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12   text-start">
                          <button type="submit" class="mt-3 btn btn-outline-info">Submit Application</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </section>


        <aside class="aside">
            <div class="card">
                <div class="card-title">
                    <strong>Job Details</strong>
                    <span class="pill">Senior</span>
                </div>
                <p class="location">Kandivali (W), Mumbai — 400067</p>
                <hr />
                <h3 style="margin-bottom:6px">Benefits</h3>
                <ul class="benefits">
                    <li>Opportunity to work on impactful and innovative projects.</li>
                    <li>Collaborative and growth-oriented work culture.</li>
                    <li>Competitive salary and performance-based incentives.</li>
                    <li>Professional development and upskilling opportunities.</li>
                </ul>
            </div>


            <!-- <div class="card" style="margin-top:12px">
                <h3>Quick Apply</h3>
                <p class="" style="margin-top:6px">Submit a short message and your portfolio link.</p>
                <div style="margin-top:10px">
                    <input id="quickName" placeholder="Your name" />
                    <input id="quickEmail" placeholder="Email" style="margin-top:8px" />
                    <input id="quickPortfolio" placeholder="Portfolio URL" style="margin-top:8px" />
                    <button class="btn btn-primary" id="quickApply" style="margin-top:10px; width:100%">Send</button>
                </div>
            </div> -->
        </aside>
    </div>
</div>
</div>

<!-- <div class="modal-backdrop" id="modal">
    <div class="modal" role="dialog" aria-modal="true">
        <h3>Apply for Senior Graphic Designer</h3>
        <label for="fullname">Full name</label>
        <input id="fullname" />
        <label for="email">Email</label>
        <input id="email" type="email" />
        <label for="portfolio">Portfolio URL</label>
        <input id="portfolio" />
        <label for="message">Message / Cover note</label>
        <textarea id="message"></textarea>
        <div style="display:flex;gap:8px;margin-top:10px;justify-content:flex-end">
            <button class="btn btn-ghost" id="closeModal">Cancel</button>
            <button class="btn btn-primary" id="submitApp">Submit Application</button>
        </div>
    </div>
</div> -->


<div class="toast" id="toast">Sent — we'll get back to you.</div>



<?php include 'footer.php';?>