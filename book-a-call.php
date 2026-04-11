<?php
$bookCallSettings = array_merge([
    'section_classes' => 'bac-section ptb-100 position-relative z-1',
    'section_id' => null,
    'background_image' => 'assets/image/websitedevlopment/contact-bg.webp',
    'image_src' => 'assets/image/websitedevlopment/contact-man.webp',
    'image_alt' => 'Book a call illustration',
    'image_classes' => 'img-fluid bac-image position-absolute pe-none z-n1 d-none d-lg-block',
    'eyebrow' => 'Contact Us',
    'title' => 'Need a Project Discussion?',
    'phone_label' => 'Call Us at:',
    'phone_number' => '+91 8080 80 3374',
    'benefits_title' => 'Your Benefits:',
    'benefit_box_classes' => 'bac-benefits dp-r-10 p-3 rounded-4 border',
    'row_classes' => 'row justify-content-between g-4',
    'left_col_classes' => 'col-lg-6 col-xl-5',
    'right_col_classes' => 'col-lg-6 col-xl-5',
    'card_shell_classes' => 'bac-card-shell bg-white shadow-sm px-4 py-5 rounded-3',
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
], isset($bookCallSettings) && is_array($bookCallSettings) ? $bookCallSettings : []);

$bookCallStatus = null;
if (session_status() === PHP_SESSION_ACTIVE) {
    $bookCallStatus = $_SESSION['book_call_status'] ?? null;
    unset($_SESSION['book_call_status']);
}

if (!defined('BOOK_A_CALL_COMPONENT_STYLES')) {
    define('BOOK_A_CALL_COMPONENT_STYLES', true);
    ?>
<style>
.bac-status-alert {
    max-width: 1180px;
    margin: 24px auto 0;
    padding: 14px 18px;
    border-radius: 14px;
    font-size: 15px;
    line-height: 1.5;
}

.bac-status-alert.success {
    background: #eaf8ef;
    border: 1px solid #b8e2c3;
    color: #146c2e;
}
a:hover, .btn-link:hover {
    color: #000000;
    text-decoration: none;
}
.bac-status-alert.error {
    background: #fff1f1;
    border: 1px solid #f0b9b9;
    color: #9c1d1d;
}

.bac-section {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.bac-image {
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    max-height: 92%;
}

.bac-card-shell {
    width: 100%;
    max-width: 430px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    inset: auto;
}

.bac-card-shell .eep-calendar-card {
    width: 100%;
}

.bac-card-shell .eep-calendar-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 12px;
}

.bac-card-shell .eep-calendar-title-row {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
}

.bac-card-shell .eep-calendar-title {
    margin: 0;
    font-size: 24px;
    white-space: nowrap;
}

.bac-card-shell .eep-calendar-sub {
    font-size: 13px;
}

.bac-card-shell .eep-calendar-box {
    background: #f9fbfc;
    border: 1px solid #eef2f6;
    border-radius: 26px;
    padding: 12px;
}

.bac-card-shell .eep-calendar-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 12px;
}

.bac-card-shell .eep-cal-btn {
    width: 42px;
    height: 42px;
    border: none;
    border-radius: 14px;
    background: #ffffff;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.05);
    cursor: pointer;
    font-size: 18px;
    color: #495066;
    transition: 0.2s ease;
}

.bac-card-shell .eep-cal-btn:hover {
    transform: translateY(-1px);
}

.bac-card-shell .eep-month-label {
    font-size: 16px;
}

.bac-card-shell .eep-calendar-week {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 4px;
    font-size: 10px;
    text-align: center;
    font-weight: 600;
    color: #9aa3b2;
}

.bac-card-shell .eep-calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 4px;
}

.bac-card-shell .eep-calendar-empty,
.bac-card-shell .eep-calendar-day {
    height: 34px;
}

.bac-card-shell .eep-calendar-day {
    border: 1px solid #edf1f5;
    background: #ffffff;
    color: #2f3750;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.bac-card-shell .eep-calendar-day:hover {
    background: #f5f8fb;
}

.bac-card-shell .eep-calendar-day.eep-is-today {
    background: #eefaf3;
    color: #2d7d5d;
    font-weight: 700;
}

.bac-card-shell .eep-calendar-day.eep-is-selected {
    border: none;
    background: #5ccf91;
    color: #ffffff;
    font-weight: 700;
    box-shadow: 0 10px 20px rgba(92, 207, 145, 0.28);
}

.bac-card-shell .eep-calendar-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 12px;
}

.bac-card-shell .eep-selected-date,
.bac-card-shell .eep-time-trigger {
    width: 100%;
    min-width: 0;
    padding: 10px 11px;
    border-radius: 13px;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.bac-card-shell .eep-selected-date {
    background: #f6faf8;
    color: #2d7d5d;
    border: 1px solid #dff1e8;
}

.bac-card-shell .eep-time-picker-wrap {
    position: relative;
    min-width: 0;
}

.bac-card-shell .eep-time-trigger {
    text-decoration: none;
    background: #f7f9fc;
    color: #2f3750;
    border: 1px solid #eef2f6;
    cursor: pointer;
    text-align: left;
}

.bac-card-shell .eep-time-trigger.disabled {
    opacity: 0.65;
    cursor: not-allowed;
}

.bac-card-shell .eep-pill-icon {
    width: 30px;
    height: 30px;
    border-radius: 9px;
    display: grid;
    place-items: center;
    flex: 0 0 auto;
}

.bac-card-shell .eep-selected-date .eep-pill-icon {
    background: #e7f7ef;
}

.bac-card-shell .eep-time-trigger .eep-pill-icon {
    background: #eef4ff;
}

.bac-card-shell .eep-selected-date-text,
.bac-card-shell .eep-time-text {
    font-size: 12px;
    text-overflow: ellipsis;
}

.bac-card-shell .eep-time-text {
    flex: 1;
}

.bac-card-shell .eep-time-dropdown {
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    width: 100%;
    background: #ffffff;
    border: 1px solid #eef2f6;
    border-radius: 18px;
    padding: 12px;
    max-height: 220px;
    overflow-y: auto;
    overflow-x: hidden;
    box-shadow: 0 18px 35px rgba(20, 28, 45, 0.12);
    display: none;
    z-index: 20;
}

.bac-card-shell .eep-time-dropdown.show {
    display: block;
}

.bac-card-shell .eep-time-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 8px;
}

.bac-card-shell .eep-time-option {
    border: 1px solid #edf1f5;
    background: #fff;
    color: #2f3750;
    border-radius: 12px;
    padding: 8px 7px;
    font-size: 11px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.bac-card-shell .eep-time-option:hover {
    background: #f5f8fb;
}

.bac-card-shell .eep-time-option.active {
    background: #5ccf91;
    color: #fff;
    border-color: #5ccf91;
}

.bac-card-shell .eep-calendar-actions {
    grid-template-columns: 1fr;
    margin-top: 10px;
}

.bac-card-shell .eep-btn-green {
    justify-content: center;
    padding: 12px 12px;
    font-size: 13px;
    border-radius: 13px;
}

.bac-benefits {
    background: rgba(255, 255, 255, 0.25);
}

.bac-book-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(7, 15, 43, 0.72);
}

.bac-book-modal.show {
    display: flex;
}

.bac-book-modal-dialog {
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

.bac-book-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 24px 12px;
}

.bac-book-modal-head h3 {
    margin: 0 0 6px;
    font-size: 28px;
    line-height: 1.2;
    color: #101828;
}

.bac-book-modal-head p {
    margin: 0;
    color: #475467;
}

.bac-book-close {
    border: 0;
    width: 40px;
    height: 40px;
    border-radius: 999px;
    background: #f3f4f6;
    color: #111827;
    font-size: 28px;
    line-height: 1;
}

.bac-book-form {
    padding: 0 24px 24px;
    overflow-y: auto;
}

.bac-book-summary {
    padding: 14px 16px;
    margin-bottom: 18px;
    border-radius: 16px;
    background: #f5f9ff;
    border: 1px solid #dbe7ff;
    color: #12315f;
    font-size: 14px;
}

.bac-book-field {
    margin-bottom: 16px;
}

.bac-book-field label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
}

.bac-book-field input,
.bac-book-field textarea {
    width: 100%;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    outline: none;
    font-family: inherit;
}

.bac-book-field input {
    height: 50px;
}

.bac-book-field textarea {
    min-height: 110px;
    padding: 14px 16px;
    resize: vertical;
}

.bac-book-field input:focus,
.bac-book-field textarea:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.bac-phone-group {
    display: grid;
    grid-template-columns: 110px minmax(0, 1fr);
    gap: 12px;
}

.bac-book-field select {
    width: 100%;
    height: 50px;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    background: #ffffff;
    outline: none;
    font-family: inherit;
}

.bac-book-field select:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.bac-timezone-note {
    margin-top: 12px;
    font-size: 13px;
    line-height: 1.6;
    color: #475467;
}

.bac-timezone-note strong {
    color: #12315f;
}

.bac-local-time-note {
    margin-top: 10px;
    font-size: 13px;
    line-height: 1.6;
    color: #475467;
}

.bac-local-time-note strong {
    color: #12315f;
}

.bac-book-summary-line {
    margin-top: 6px;
}

.bac-book-submit {
    width: 100%;
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #16a34a, #15803d);
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 14px 18px;
}

.bac-card-shell .eep-calendar-day[disabled],
.bac-card-shell .eep-time-option[disabled] {
    opacity: 0.35;
    cursor: not-allowed;
    pointer-events: none;
}

@media (max-width: 1199px) {
    .bac-card-shell {
        max-width: 390px;
    }
}

@media (max-width: 991px) {
    .bac-image {
        display: none !important;
    }
}

@media (max-width: 576px) {
    .bac-card-shell {
        max-width: 100%;
    }
    .bac-section {
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;
}

    .bac-card-shell .eep-calendar-title {
        font-size: 22px;
        white-space: normal;
    }

    .bac-card-shell .eep-calendar-title-row {
        flex-wrap: wrap;
    }

    .bac-card-shell .eep-calendar-info {
        grid-template-columns: 1fr;
    }

    .bac-book-modal {
        padding: 12px;
        align-items: flex-start;
    }

    .bac-book-modal-dialog {
        border-radius: 18px;
        max-height: calc(100vh - 24px);
    }

    .bac-book-modal-head {
        padding: 20px 20px 12px;
    }

    .bac-book-modal-head h3 {
        font-size: 22px;
    }

    .bac-book-form {
        padding: 0 20px 20px;
    }

    .bac-phone-group {
        grid-template-columns: 1fr;
    }
}
</style>
<?php
}
?>

<?php if ($bookCallStatus): ?>
<div class="bac-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>

<section
    class="<?php echo htmlspecialchars($bookCallSettings['section_classes']); ?>"
    <?php if (!empty($bookCallSettings['section_id'])): ?>id="<?php echo htmlspecialchars($bookCallSettings['section_id']); ?>"<?php endif; ?>
    style="background-image: url('<?php echo htmlspecialchars($bookCallSettings['background_image']); ?>');">
    <img src="<?php echo htmlspecialchars($bookCallSettings['image_src']); ?>"
        alt="<?php echo htmlspecialchars($bookCallSettings['image_alt']); ?>"
        class="<?php echo htmlspecialchars($bookCallSettings['image_classes']); ?>">
    <div class="container">
        <div class="<?php echo htmlspecialchars($bookCallSettings['row_classes']); ?>">
            <div class="<?php echo htmlspecialchars($bookCallSettings['left_col_classes']); ?>">
                <div class="d-inline-block py-1 rounded-pill border mb-3">
                    <p class="ma-warning-text fw-bold mb-0"><?php echo htmlspecialchars($bookCallSettings['eyebrow']); ?></p>
                </div>
                <h2 class="ail-title text-white fs-48 fw-600 mb-4"><?php echo htmlspecialchars($bookCallSettings['title']); ?></h2>
                <p class="text-white fs-24 fw-medium mb-5">
                    <?php echo htmlspecialchars($bookCallSettings['phone_label']); ?>
                    <?php echo htmlspecialchars($bookCallSettings['phone_number']); ?>
                </p>
                <h6 class="text-white fs-20 fw-medium mb-2"><?php echo htmlspecialchars($bookCallSettings['benefits_title']); ?></h6>
                <div class="<?php echo htmlspecialchars($bookCallSettings['benefit_box_classes']); ?>">
                    <ul class="list-unstyled d-flex flex-wrap list-two-col mb-0">
                        <?php foreach ($bookCallSettings['benefits'] as $benefit): ?>
                        <li class="py-1 text-white"><i class="far fa-check-circle me-2 text-primary"></i><?php echo htmlspecialchars($benefit); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="<?php echo htmlspecialchars($bookCallSettings['right_col_classes']); ?>">
                <div class="<?php echo htmlspecialchars($bookCallSettings['card_shell_classes']); ?>">
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

                        <div class="bac-timezone-note">
                            <strong>All slots are scheduled in IST</strong>
                            <span id="viewerTimezoneNote"></span>
                            <div id="selectedLocalTimeNote" class="bac-local-time-note"></div>
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
        </div>
    </div>
</section>

<div class="bac-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="bac-book-modal-dialog">
        <div class="bac-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="bac-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>

        <form class="bac-book-form" action="book-call-handler" method="post">
            <div class="bac-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <div class="bac-book-summary-line"><strong>Time (IST):</strong> <span id="modalSelectedTime">Not selected</span></div>
                <div class="bac-book-summary-line"><strong>Your Local Time:</strong> <span id="modalSelectedLocalTime">Not selected</span></div>
            </div>

            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">
            <input type="hidden" name="user_timezone" id="userTimezoneInput">

            <div class="bac-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>

            <div class="bac-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>

            <div class="bac-book-field">
                <label for="bookCallPhone">Number</label>
                <div class="bac-phone-group">
                    <select id="bookCallCountryCode" aria-label="Select country code">
                        <option value="+91" selected>India (+91)</option>
                    </select>
                    <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your phone number" pattern="[0-9\\-\\s()]{6,18}" title="Enter a valid phone number." required>
                </div>
            </div>

            <div class="bac-book-field">
                <label for="bookCallAgenda">Meeting Agenda</label>
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4" required></textarea>
            </div>

            <button type="submit" class="bac-book-submit">Submit Booking</button>
        </form>
    </div>
</div>

<?php
if (!defined('BOOK_A_CALL_COMPONENT_SCRIPT')) {
    define('BOOK_A_CALL_COMPONENT_SCRIPT', true);
    ?>
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
        if (!timeTrigger.contains(e.target) && !timeDropdown.contains(e.target)) {
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

    document.querySelector(".bac-book-form").addEventListener("submit", function() {
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
<?php
}
?>
