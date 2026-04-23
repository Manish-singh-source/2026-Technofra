<?php
session_start();

$defaultFormData = [
  'name' => '',
  'contact' => '',
  'email' => '',
  'company' => '',
  'website' => '',
  'message' => '',
];

$formNotice = $_SESSION['webapp_form_notice'] ?? null;
$formData = array_merge($defaultFormData, $_SESSION['webapp_form_data'] ?? []);

unset($_SESSION['webapp_form_notice'], $_SESSION['webapp_form_data']);
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/image/favicon.png" type="image/png" sizes="16x16">
  <title>Website Design & Development Company in Mumbai, India | Technofra</title>
  <meta name="description"
    content="Premium Web Development, iOS/Android Apps, E-commerce Solutions. Custom Code. Guaranteed Results.">
  <meta property="og:title" content="Website Design & App Development Company | Technofra">
  <meta property="og:description" content="Custom websites, mobile apps, e-commerce and SaaS platforms built for growth.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://technofra.com/webapp.php">
  <meta property="og:image" content="https://technofra.com/logo-black.png">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-189WWHXLSS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-189WWHXLSS');
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --ink: #183153;
      --ink-soft: #f3f8fd;
      --cream: #fffdf8;
      --cream-dark: #edf6fd;
      --gold: #1c9cc5;
      --gold-light: #f7b97f;
      --electric: #44a4e0;
      --electric-dim: rgba(68, 164, 224, 0.18);
      --white: #ffffff;
      --muted: #9098a2;
      --card-bg: rgba(255, 255, 255, 0.82);
      --border: rgba(68, 164, 224, 0.16);
    }

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', sans-serif;
      background:
        radial-gradient(circle at top left, rgba(68, 164, 224, 0.14), transparent 34%),
        radial-gradient(circle at top right, rgba(244, 164, 98, 0.14), transparent 30%),
        linear-gradient(180deg, #fdfefe 0%, #f6fbff 48%, #fffaf3 100%);
      color: var(--ink);
      overflow-x: hidden;
      cursor: none;
    }

    /* CUSTOM CURSOR */
    .cursor {
      width: 12px;
      height: 12px;
      background: var(--gold);
      border-radius: 50%;
      position: fixed;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 99999;
      transition: transform 0.1s ease;
      mix-blend-mode: difference;
    }

    .cursor-ring {
      width: 40px;
      height: 40px;
      border: 1.5px solid var(--gold);
      border-radius: 50%;
      position: fixed;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 99998;
      transition: all 0.2s ease;
      opacity: 0.5;
    }

    /* NOISE OVERLAY */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 9999;
      opacity: 0.6;
    }

    /* ============== HEADER ============== */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      padding: 20px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.88);
      box-shadow: 0 12px 30px rgba(24, 49, 83, 0.08);
      backdrop-filter: blur(20px);
    }

    .logo-text {
      font-family: 'Inter', sans-serif;
      font-size: 32px;
      letter-spacing: 3px;
      color: var(--white);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      flex-shrink: 1;
      min-width: 0;
    }

    .logo-text img {
      display: block;
      width: 200px;
      max-width: 100%;
      height: auto;
    }

    .logo-text span {
      color: var(--gold);
    }

    .nav-links {
      display: flex;
      gap: 40px;
      list-style: none;
    }

    .nav-links a {
      color: #2f5379;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--ink);
    }

    .header-cta {
      background: transparent;
      border: 1px solid var(--gold);
      color: var(--gold);
      padding: 12px 28px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
    }

    .header-cta::before {
      content: '';
      position: absolute;
      inset: 0;
      background: var(--gold);
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }

    .header-cta:hover::before {
      transform: translateX(0);
    }

    .header-cta span {
      position: relative;
      z-index: 1;
    }

    .header-cta:hover span {
      color: var(--ink);
    }

    /* ============== HERO ============== */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
      padding: 140px 60px 80px;
      color: var(--white);
      background:
        linear-gradient(135deg, rgba(13, 70, 122, 0.96) 0%, rgba(24, 49, 83, 0.94) 55%, rgba(68, 164, 224, 0.9) 100%);
    }

    /* Animated gradient blobs */
    .blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.12;
      animation: blobFloat 12s ease-in-out infinite;
    }

    .blob-1 {
      width: 700px;
      height: 700px;
      background: radial-gradient(circle, #f4a462, #368ec8);
      top: -200px;
      left: -200px;
      animation-delay: 0s;
    }

    .blob-2 {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, #44a4e0, #0b467a);
      bottom: -100px;
      right: 0;
      animation-delay: -6s;
    }

    @keyframes blobFloat {

      0%,
      100% {
        transform: translate(0, 0) scale(1);
      }

      33% {
        transform: translate(30px, -50px) scale(1.05);
      }

      66% {
        transform: translate(-20px, 20px) scale(0.95);
      }
    }

    /* Grid lines bg */
    .hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
      background-size: 80px 80px;
      pointer-events: none;
    }

    .hero-inner {
      position: relative;
      z-index: 2;
      max-width: 1300px;
      margin: 0 auto;
      width: 100%;
      display: grid;
      grid-template-columns: 1fr 420px;
      gap: 80px;
      align-items: center;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      border: 1px solid rgba(123, 179, 239, 0.35);
      background: rgba(68, 164, 224, 0.12);
      color: var(--gold);
      padding: 8px 20px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 30px;
    }

    .badge-dot {
      width: 6px;
      height: 6px;
      background: var(--gold);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
        transform: scale(1);
      }

      50% {
        opacity: 0.5;
        transform: scale(0.8);
      }
    }

    .hero-title {
      font-family: 'Inter', sans-serif;
      font-size: clamp(56px, 6.5vw, 96px);
      line-height: 0.95;
      letter-spacing: 2px;
      margin-bottom: 30px;
    }

    .hero-title .line-accent {
      color: var(--gold);
    }

    .hero-title .line-outline {
      -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
      color: transparent;
    }

    .hero-desc {
      font-size: 17px;
      color: var(--muted);
      line-height: 1.8;
      max-width: 500px;
      margin-bottom: 45px;
      font-weight: 300;
    }

    .hero-pills {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 50px;
    }

    .pill {
      border: 1px solid var(--border);
      color: rgba(255, 255, 255, 0.84);
      padding: 8px 18px;
      font-size: 13px;
      border-radius: 50px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .pill i {
      color: var(--gold);
      font-size: 11px;
    }

    .hero-buttons {
      display: flex;
      gap: 16px;
      align-items: center;
    }

    .btn-gold {
      background: var(--gold);
      color: var(--ink);
      padding: 16px 36px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      text-decoration: none;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
    }

    .btn-gold:hover {
      background: var(--gold-light);
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(68, 164, 224, 0.28);
    }

    .btn-ghost {
      color: var(--white);
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      opacity: 0.7;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.9);
      transition: opacity 0.3s;
      padding:14px 36px;
    }

    .btn-ghost:hover {
      opacity: 1;
    }

    .btn-ghost i {
      font-size: 12px;
    }

    .btn-ghost .fa-phone,
    .services-cta-secondary .fa-phone,
    .btn-outline .fa-phone {
      display: inline-block;
      transform-origin: 50% 70%;
      animation: phoneRing 1.4s ease-in-out infinite;
    }

    @keyframes phoneRing {
      0%,
      100% {
        transform: rotate(0deg);
      }

      10%,
      30%,
      50% {
        transform: rotate(-15deg);
      }

      20%,
      40%,
      60% {
        transform: rotate(15deg);
      }

      70% {
        transform: rotate(0deg);
      }
    }

    /* Hero Stats */
    .hero-stats {
      display: flex;
      gap: 0;
      margin-top: 60px;
      border-top: 1px solid var(--border);
      padding-top: 40px;
    }

    .stat {
      flex: 1;
      padding-right: 40px;
      border-right: 1px solid var(--border);
    }

    .stat:last-child {
      border-right: none;
      padding-right: 0;
      padding-left: 40px;
    }

    .stat:first-child {
      padding-left: 0;
    }

    .stat-num {
      font-family: 'Inter', sans-serif;
      font-size: 52px;
      color: var(--gold);
      line-height: 1;
      margin-bottom: 6px;
    }

    .stat-label {
      font-size: 13px;
      color: var(--muted);
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* RIGHT SIDE - FORM */
    .hero-form-wrap {
      position: relative;
      scroll-margin-top: 120px;
    }

    .form-card {
      background: rgba(255, 255, 255, 0.14);
      border: 1px solid var(--border);
      backdrop-filter: blur(20px);
      padding: 40px 20px;
      position: relative;
      box-shadow: 0 30px 80px rgba(8, 23, 46, 0.22);
    }

    .form-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--gold), var(--electric), var(--gold));
    }

    .form-card-title {
      font-family: 'Inter', sans-serif;
      font-size: 26px;
      color: var(--white);
      margin-bottom: 6px;
    }

    .form-card-sub {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.82);
      margin-bottom: 28px;
    }

    .urgency-pill {
      background: rgba(68, 164, 224, 0.12);
      border: 1px solid rgba(123, 179, 239, 0.32);
      color: var(--gold);
      padding: 10px 16px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1px;
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 24px;
    }

    .urgency-pill i {
      font-size: 11px;
    }

    .slot-count {
      background: var(--gold);
      color: var(--ink);
      font-weight: 800;
      padding: 2px 8px;
      font-size: 13px;
      margin-left: auto;
    }

    .f-group {
      margin-bottom: 16px;
    }

    .f-group label {
      display: block;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.78);
      margin-bottom: 8px;
    }

    .f-group input,
    .f-group select,
    .f-group textarea {
      width: 100%;
      background: rgba(255, 255, 255, 0.96);
      border: 1px solid var(--border);
      color: var(--ink);
      padding: 13px 16px;
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      transition: border-color 0.3s, background 0.3s;
      outline: none;
      -webkit-appearance: none;
    }

    .f-group input::placeholder,
    .f-group textarea::placeholder {
      color: #6b7f95;
      opacity: 1;
    }

    .f-group select {
      color: var(--ink);
    }

    .f-group select option {
      background: var(--white);
      color: var(--ink);
    }

    .f-group input:focus,
    .f-group select:focus,
    .f-group textarea:focus {
      border-color: var(--gold);
      background: var(--white);
      box-shadow: 0 0 0 4px rgba(68, 164, 224, 0.12);
    }

    .f-group textarea {
      min-height: 80px;
      resize: vertical;
    }

    .f-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .submit-btn {
      width: 100%;
      background: var(--gold);
      color: var(--ink);
      border: none;
      padding: 17px;
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      font-weight: 800;
      letter-spacing: 2px;
      text-transform: uppercase;
      cursor: none;
      transition: all 0.3s;
      margin-top: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .submit-btn:hover {
      background: var(--gold-light);
      box-shadow: 0 10px 30px rgba(68, 164, 224, 0.32);
    }

    .form-trust {
      display: flex;
      gap: 16px;
      justify-content: center;
      margin-top: 16px;
      flex-wrap: wrap;
    }

    .form-trust span {
      font-size: 11px;
      color: var(--muted);
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .form-trust i {
      color: var(--gold);
    }

    .form-hidden-field {
      position: absolute;
      left: -9999px;
      width: 1px;
      height: 1px;
      overflow: hidden;
    }

    .form-popup {
      position: fixed;
      top: 24px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 9999;
      width: min(92vw, 520px);
      animation: popupDrop 0.45s ease both;
    }

    .form-popup-card {
      position: relative;
      display: flex;
      gap: 14px;
      align-items: flex-start;
      padding: 18px 48px 18px 18px;
      background: var(--white);
      border: 1px solid rgba(24, 49, 83, 0.12);
      box-shadow: 0 20px 45px rgba(24, 49, 83, 0.18);
    }

    .form-popup.success .form-popup-card {
      border-left: 5px solid #1f9d55;
    }

    .form-popup.error .form-popup-card {
      border-left: 5px solid #d64545;
    }

    .form-popup-icon {
      width: 36px;
      height: 36px;
      display: grid;
      place-items: center;
      flex: 0 0 36px;
      color: var(--white);
      background: #1f9d55;
      border-radius: 50%;
    }

    .form-popup.error .form-popup-icon {
      background: #d64545;
    }

    .form-popup-content h3 {
      margin: 0 0 5px;
      color: var(--ink);
      font-size: 16px;
      line-height: 1.3;
    }

    .form-popup-content p {
      margin: 0;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.55;
    }

    .form-popup-close {
      position: absolute;
      top: 10px;
      right: 14px;
      border: 0;
      background: transparent;
      color: var(--muted);
      font-size: 24px;
      line-height: 1;
      cursor: pointer;
    }

    @keyframes popupDrop {
      from {
        opacity: 0;
        transform: translate(-50%, -12px);
      }

      to {
        opacity: 1;
        transform: translate(-50%, 0);
      }
    }

    /* ============== MARQUEE ============== */
    .marquee-section {
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      padding: 18px 0;
      overflow: hidden;
      background: rgba(255, 255, 255, 0.72);
    }

    .marquee-track {
      display: flex;
      gap: 60px;
      animation: marquee 25s linear infinite;
      width: max-content;
    }

    @keyframes marquee {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .marquee-item {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--muted);
      white-space: nowrap;
    }

    .marquee-item i {
      color: var(--gold);
    }

    /* ============== SERVICES ============== */
    .section {
      padding: 60px 60px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .section-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .section-label::before {
      content: '';
      width: 30px;
      height: 1px;
      background: var(--gold);
    }

    .section-title {
      font-family: 'Inter', sans-serif;
      font-size: clamp(48px, 5vw, 72px);
      line-height: 1;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }

    .section-title .accent {
      color: var(--gold);
    }

    .section-desc {
    font-size: 17px;
    color: #5a6f89;
    max-width: 500px;
    line-height: 1.7;
    font-weight: 300;
}

    .section-head {
      margin-bottom: 50px;
    }

    /* Services Grid */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: var(--border);
      border: 1px solid var(--border);
      box-shadow: 0 22px 55px rgba(24, 49, 83, 0.08);
    }

    .service-item {
      background: rgba(255, 255, 255, 0.92);
      padding: 50px 40px;
      position: relative;
      overflow: hidden;
      transition: background 0.4s;
      cursor: none;
    }

    .service-item::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--gold);
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .service-item:hover {
      background: #f4faff;
    }

    .service-item:hover::before {
      transform: scaleX(1);
    }

  .service-num {
    font-family: 'Inter', sans-serif;
    font-size: 60px;
    color: rgb(24 49 83 / 22%);
    line-height: 1;
    margin-bottom: 20px;
}
    .service-icon-wrap {
      width: 56px;
      height: 56px;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 24px;
      transition: border-color 0.3s, background 0.3s;
    }

    .service-item:hover .service-icon-wrap {
      border-color: var(--gold);
      background: rgba(68, 164, 224, 0.12);
    }

    .service-icon-wrap i {
      color: var(--gold);
      font-size: 22px;
    }

    .service-item h3 {
      font-family: 'Inter', sans-serif;
      font-size: 22px;
      margin-bottom: 14px;
      transition: color 0.3s;
    }

    .service-item p {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.8;
      font-weight: 300;
    }

    .service-arrow {
      position: absolute;
      top: 40px;
      right: 40px;
      color: var(--muted);
      font-size: 14px;
      opacity: 0;
      transform: translate(-5px, 5px);
      transition: all 0.3s;
    }

    .service-item:hover .service-arrow {
      opacity: 1;
      transform: translate(0, 0);
      color: var(--gold);
    }

    /* Services CTA */
    .services-cta-section {
      padding: 50px 60px;
      color: var(--white);
      background:
        radial-gradient(circle at 20% 20%, rgba(68, 164, 224, 0.32), transparent 32%),
        radial-gradient(circle at 82% 25%, rgba(247, 185, 127, 0.18), transparent 30%),
        linear-gradient(135deg, #183153 0%, #0b467a 48%, #1c9cc5 100%);
      position: relative;
      overflow: hidden;
    }

    .services-cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
      background-size: 72px 72px;
      pointer-events: none;
    }

    .services-cta-inner {
      max-width: 1120px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .services-cta-title {
      font-family: 'Inter', sans-serif;
      font-size: clamp(36px, 4.2vw, 64px);
      line-height: 1.08;
      letter-spacing: 0;
      margin-bottom: 28px;
      color: var(--white);
    }

    .services-cta-text {
      max-width: 880px;
      margin: 0 auto 42px;
      color: rgba(255, 255, 255, 0.86);
      font-size: clamp(16px, 1.6vw, 21px);
      line-height: 1.55;
      font-weight: 600;
    }

    .services-cta-actions {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 18px;
      flex-wrap: wrap;
    }

    .services-cta-primary,
    .services-cta-secondary {
      min-height: 58px;
      padding: 0 34px;
      /* border-radius: 999px; */
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 15px;
      font-weight: 800;
      text-decoration: none;
      transition: transform 0.3s, box-shadow 0.3s, background 0.3s, color 0.3s;
    }

    .services-cta-primary {
      background: #1c9cc5;
      color: #183153;
      border: 2px solid #1c9cc5;
      box-shadow: 0 18px 40px rgba(68, 164, 224, 0.24);
    }

    .services-cta-primary:hover {
      background: var(--gold-light);
      border-color: var(--gold-light);
      color: var(--ink);
      transform: translateY(-2px);
      box-shadow: 0 24px 50px rgba(8, 23, 46, 0.22);
    }

    .services-cta-secondary {
      background: transparent;
      color: var(--white);
      border: 2px solid rgba(255, 255, 255, 0.9);
    }

    .services-cta-secondary:hover {
      background: var(--white);
      color: var(--ink);
      transform: translateY(-2px);
    }

    /* ============== WHY US ============== */
    .why-section {
      padding: 60px 60px;
      background: linear-gradient(180deg, #ffffff 0%, #f3f8fd 100%);
      position: relative;
      overflow: hidden;
    }

    .why-inner {
      max-width: 1300px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 100px;
      align-items: start;
    }

    .why-left {
      position: sticky;
      top: 140px;
    }

    .big-number {
      font-family: 'Inter', sans-serif;
      font-size: 200px;
      line-height: 1;
      color: rgba(24, 49, 83, 0.05);
      position: absolute;
      top: -20px;
      left: -20px;
      pointer-events: none;
    }

    .why-features {
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .why-feature {
      padding: 32px 0;
      border-bottom: 1px solid var(--border);
      display: flex;
      gap: 24px;
      align-items: flex-start;
      transition: all 0.3s;
    }

    .why-feature:first-child {
      padding-top: 0;
    }

    .why-feature:hover {
      padding-left: 10px;
    }

    .wf-icon {
      width: 44px;
      height: 44px;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: border-color 0.3s;
    }

    .why-feature:hover .wf-icon {
      border-color: var(--gold);
    }

    .wf-icon i {
      color: var(--gold);
      font-size: 16px;
    }

    .wf-text h4 {
      font-size: 17px;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .wf-text p {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.7;
      font-weight: 300;
    }

    /* ============== TECH ============== */
    .tech-section {
      padding: 100px 60px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .tech-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .tech-tag {
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.76);
      padding: 14px 24px;
      font-size: 14px;
      font-weight: 500;
      color: var(--ink);
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s;
      cursor: none;
    }

    .tech-tag i,
    .tech-tag .icon-img {
      font-size: 18px;
      color: var(--gold);
      width: 18px;
      height: 18px;
      object-fit: contain;
    }

    .tech-tag:hover {
      border-color: var(--gold);
      color: var(--ink);
      background: rgba(68, 164, 224, 0.08);
    }

    /* ============== PORTFOLIO ============== */
    .portfolio-section {
      padding: 60px 60px;
      background: linear-gradient(135deg, #183153 0%, #0b467a 100%);
      color: var(--white);
    }

    .portfolio-inner {
      max-width: 1300px;
      margin: 0 auto;
    }

    .portfolio-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .portfolio-card {
      position: relative;
      overflow: hidden;
      cursor: none;
    }

    .portfolio-card:first-child {
      grid-row: span 2;
    }

    .p-visual {
      height: 100%;
      min-height: 280px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .p-visual-1 {
      background: linear-gradient(135deg, #368ec8 0%, #0b467a 100%);
    }

    .p-visual-2 {
      background: linear-gradient(135deg, #44a4e0 0%, #1e3a5f 100%);
    }

    .p-visual-3 {
      background: linear-gradient(135deg, #f4a462 0%, #14558a 100%);
    }

    .p-icon {
      font-size: 80px;
      opacity: 0.15;
      color: var(--white);
    }

    .p-badge {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--gold);
    }

    .p-content {
      padding: 32px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid var(--border);
      border-top: none;
    }

    .p-tags {
      display: flex;
      gap: 8px;
      margin-bottom: 14px;
      flex-wrap: wrap;
    }

    .p-tag {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--gold);
      background: rgba(68, 164, 224, 0.12);
      padding: 4px 10px;
    }

    .p-content h3 {
      font-family: 'Inter', sans-serif;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .p-content p {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.7;
      font-weight: 300;
    }

    /* ============== INDUSTRIES ============== */
    .industries-section {
      padding: 60px 0;
      color: var(--white);
      background:
        radial-gradient(circle at 16% 14%, rgba(68, 164, 224, 0.24), transparent 32%),
        radial-gradient(circle at 88% 20%, rgba(247, 185, 127, 0.14), transparent 30%),
        linear-gradient(135deg, #183153 0%, #1f3155 48%, #0b467a 100%);
      position: relative;
      overflow: hidden;
    }

    .industries-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
      background-size: 82px 82px;
      pointer-events: none;
    }

    .industries-inner {
      position: relative;
      z-index: 1;
    }

    .industries-head {
      max-width: 1300px;
      margin: 0 auto 54px;
      padding: 0 60px;
      text-align: center;
    }

    .industries-label {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      color: var(--gold-light);
      font-size: 15px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .industries-label::after {
      content: '';
      width: 34px;
      height: 14px;
      border-top: 3px solid #28b36d;
      border-right: 3px solid #28b36d;
      border-radius: 50%;
      transform: rotate(12deg);
    }

    .industries-title {
      font-family: 'Inter', sans-serif;
      font-size: clamp(38px, 4vw, 56px);
      line-height: 1.08;
      letter-spacing: 0;
      color: var(--white);
    }

    .industries-marquee-shell {
      display: flex;
      flex-direction: column;
      gap: 24px;
      overflow: hidden;
      -webkit-mask-image: linear-gradient(90deg, transparent, #000 9%, #000 91%, transparent);
      mask-image: linear-gradient(90deg, transparent, #000 9%, #000 91%, transparent);
    }

    .industry-logo-row {
      overflow: hidden;
    }

    .industry-logo-track {
      display: flex;
      width: max-content;
      gap: 22px;
      animation: industryLogoScroll 42s linear infinite;
      will-change: transform;
    }

    .industry-logo-row.reverse .industry-logo-track {
      animation-direction: reverse;
      animation-duration: 46s;
    }

    .industries-marquee-shell:hover .industry-logo-track {
      animation-play-state: paused;
    }

    @keyframes industryLogoScroll {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(calc(-50% - 11px));
      }
    }

    .industry-logo-card {
      width: 104px;
      min-height: 83px;
      flex: 0 0 171px;
      padding: 10px 10px;
      background: rgba(255, 255, 255, 0.96);
      color: var(--ink);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      box-shadow: 0 18px 36px rgba(7, 20, 40, 0.18);
      transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
      cursor: none;
    }

    .industry-logo-card:hover {
      transform: translateY(-6px);
      border-color: rgba(68, 164, 224, 0.6);
      box-shadow: 0 24px 44px rgba(7, 20, 40, 0.26);
    }

    .industry-logo-icon {
      font-size: 34px;
      line-height: 1;
      margin-bottom: 12px;
    }

    .industry-logo-title {
      color: #2d3f56;
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      line-height: 1.35;
    }

    .industry-green {
      color: #247a36;
    }

    .industry-red {
      color: #d83a3a;
    }

    .industry-blue {
      color: #283fa3;
    }

    .industry-sky {
      color: #0288d1;
    }

    .industry-orange {
      color: #ef7a00;
    }

    .industry-pink {
      color: #b91762;
    }

    .industry-purple {
      color: #7130b4;
    }

    .industry-slate {
      color: #455a64;
    }

    @media (prefers-reduced-motion: reduce) {
      .industry-logo-track {
        animation: none;
        flex-wrap: wrap;
        justify-content: center;
      }
    }

    @media (hover: none), (pointer: coarse) {
      body {
        cursor: auto;
      }

      .cursor,
      .cursor-ring {
        display: none;
      }
    }

    /* ============== RESULTS ============== */
    .results-section {
      padding: 60px 60px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .results-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      border: 1px solid var(--border);
      margin-top: 70px;
      background: rgba(255, 255, 255, 0.84);
      box-shadow: 0 22px 55px rgba(24, 49, 83, 0.08);
    }

    .result-item {
      padding: 45px 30px;
      border-right: 1px solid var(--border);
      position: relative;
      overflow: hidden;
      transition: background 0.4s;
    }

    .result-item:last-child {
      border-right: none;
    }

    .result-item:hover {
      background: rgba(68, 164, 224, 0.06);
    }

    .result-item::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 0;
      background: var(--gold);
      transition: height 0.4s ease;
    }

    .result-item:hover::after {
      height: 100%;
    }

    .r-num {
      font-family: 'Inter', sans-serif;
      font-size: 80px;
      color: var(--gold);
      line-height: 1;
      margin-bottom: 10px;
    }

    .r-label {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--ink);
    }

    .r-desc {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.7;
      font-weight: 300;
    }

    /* ============== TESTIMONIALS ============== */
    .testimonials-section {
      padding: 60px 60px;
      background: linear-gradient(180deg, #f3f8fd 0%, #fffdf8 100%);
    }

    .testimonials-inner {
      max-width: 1300px;
      margin: 0 auto;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-top: 70px;
    }

    .testimonial-card {
      background: rgba(255, 255, 255, 0.92);
      border: 1px solid var(--border);
      padding: 40px;
      position: relative;
      transition: border-color 0.3s;
      box-shadow: 0 18px 40px rgba(24, 49, 83, 0.08);
    }

    .testimonial-card:hover {
      border-color: rgba(123, 179, 239, 0.35);
    }

    .quote-mark {
      font-family: 'Inter', sans-serif;
      font-size: 80px;
      color: var(--gold);
      line-height: 0.5;
      margin-bottom: 20px;
      opacity: 0.4;
    }

    .t-stars {
      color: var(--gold);
      font-size: 12px;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }

    .t-text {
      font-size: 15px;
      line-height: 1.8;
      color: var(--ink);
      font-weight: 300;
      margin-bottom: 30px;
      font-style: italic;
    }

    .t-author {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .t-avatar {
      width: 48px;
      height: 48px;
      background: linear-gradient(135deg, var(--gold), var(--electric));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 16px;
      color: var(--ink);
    }

    .t-name {
      font-size: 15px;
      font-weight: 600;
    }

    .t-role {
      font-size: 12px;
      color: var(--muted);
      margin-top: 2px;
    }

    /* ============== FAQ ============== */
    .faq-section {
      padding: 60px 60px;
      max-width: 1300px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 100px;
      align-items: start;
    }

    .faq-left {
      position: sticky;
      top: 140px;
    }

    .faq-list {
      margin-top: 0;
    }

    .faq-item {
      border-bottom: 1px solid var(--border);
      overflow: hidden;
    }

    .faq-question {
      padding: 24px 0;
      font-size: 16px;
      font-weight: 500;
      cursor: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      transition: color 0.3s;
    }
    .form-trust p{      
    font-size: 12px;
    }

    .faq-question:hover {
      color: var(--gold);
    }

    .faq-question.open {
      color: var(--gold);
    }

    .faq-question .fq-icon {
      width: 28px;
      height: 28px;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 12px;
      transition: all 0.3s;
    }

    .faq-question.open .fq-icon {
      background: var(--gold);
      border-color: var(--gold);
      color: var(--ink);
    }

    .faq-answer {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.8;
      font-weight: 300;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s;
    }

    .faq-answer.open {
      max-height: 300px;
      padding-bottom: 24px;
    }

    /* ============== FINAL CTA ============== */
    .final-cta-section {
      padding: 80px 60px;
      position: relative;
      overflow: hidden;
      text-align: center;
      background: linear-gradient(180deg, #fffaf3 0%, #eef7fd 100%);
    }

    .final-cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at center, rgba(68, 164, 224, 0.12) 0%, transparent 70%);
    }

    .final-cta-inner {
      position: relative;
      z-index: 1;
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-big-title {
      font-family: 'Inter', sans-serif;
      font-size: clamp(60px, 8vw, 110px);
      line-height: 0.95;
      letter-spacing: 3px;
      margin-bottom: 30px;
    }

    .cta-big-title .accent {
      color: var(--gold);
    }

    .cta-sub {
      font-size: 18px;
      color: var(--muted);
      font-weight: 300;
      margin-bottom: 50px;
      line-height: 1.7;
    }

    .cta-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
    }

    .btn-outline {
      border: 1px solid rgba(24, 49, 83, 0.18);
      color: var(--ink);
      padding: 16px 36px;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s;
    }

    .btn-outline:hover {
      border-color: var(--electric);
      color: var(--electric);
      background: rgba(255, 255, 255, 0.6);
    }

    /* ============== FOOTER ============== */
    .footer {
      border-top: 1px solid var(--border);
      padding: 80px 60px 40px;
      background: linear-gradient(135deg, #16324f 0%, #0b467a 100%);
      color: var(--white);
    }

    .footer-inner {
      max-width: 1300px;
      margin: 0 auto;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1fr;
      gap: 60px;
      margin-bottom: 60px;
    }

    .footer-brand-name {
      font-family: 'Inter', sans-serif;
      font-size: 40px;
      letter-spacing: 3px;
      color: var(--white);
      margin-bottom: 16px;
    }

    .footer-brand-name span {
      color: var(--gold);
    }

    .footer-brand-desc {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.8;
      font-weight: 300;
    }

    .footer-col h5 {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 20px;
    }

    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .footer-links a {
      font-size: 14px;
      color: var(--muted);
      text-decoration: none;
      transition: color 0.3s;
      font-weight: 300;
    }

    .footer-links a:hover {
      color: var(--white);
    }

    .footer-contact p {
      font-size: 14px;
      color: var(--muted);
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 300;
    }

    .footer-contact p a {
      color: #8499b3;
      text-decoration: none;
    }

    .footer-contact i {
      color: var(--gold);
      width: 14px;
    }

    .footer-bottom {
      border-top: 1px solid var(--border);
      padding-top: 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .footer-bottom p {
      font-size: 13px;
      color: var(--muted);
    }

    /* LIVE BADGE */
    .live-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid rgba(16, 185, 129, 0.2);
      color: #10b981;
      padding: 6px 14px;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .live-dot2 {
      width: 6px;
      height: 6px;
      background: #10b981;
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    /* STICKY MOBILE CTA */
    .sticky-mobile {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(135deg, var(--electric) 0%, #0b467a 100%);
      padding: 16px;
      text-align: center;
      z-index: 998;
    }

    .sticky-mobile a {
      color: var(--white);
      text-decoration: none;
      font-weight: 800;
      font-size: 15px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* ANIMATIONS */
    .fade-up {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
      .header {
        padding: 16px 24px;
      }

      .nav-links {
        display: none;
      }

      .hero {
        padding: 100px 20px 60px;
      }

      .hero-inner {
        grid-template-columns: 1fr;
        gap: 60px;
      }

      .hero-form-wrap {
        max-width: 500px;
        scroll-margin-top: 112px;
      }

      .section {
        padding: 40px 20px;
      }

      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .services-cta-section {
        padding: 82px 30px;
      }

      .why-section {
        padding: 40px 20px;
      }

      .why-inner {
        grid-template-columns: 1fr;
        gap: 60px;
      }

      .why-left {
        position: static;
      }

      .tech-section {
        padding: 40px 20px;
      }

      .portfolio-section {
        padding: 40px 20px;
      }

      .portfolio-grid {
        grid-template-columns: 1fr;
      }

      .portfolio-card:first-child {
        grid-row: span 1;
      }

      .industries-section {
        padding: 86px 0;
      }

      .industries-head {
        padding: 0 30px;
      }

      .results-section {
        padding: 40px 20px;
      }

      .results-row {
        grid-template-columns: 1fr;
      }

      .result-item {
        border-right: none;
        border-bottom: 1px solid var(--border);
      }

      .result-item:last-child {
        border-bottom: none;
      }

      .testimonials-section {
        padding: 40px 20px;
      }

      .testimonials-grid {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        overscroll-behavior-x: contain;
        scroll-snap-type: x mandatory;
        scroll-padding: 0 20px;
        margin: 44px -20px 0;
        padding: 0 20px 16px;
        -webkit-overflow-scrolling: touch;
      }

      .testimonials-grid::-webkit-scrollbar {
        display: none;
      }

      .testimonials-grid {
        scrollbar-width: none;
      }

      .testimonial-card {
        flex: 0 0 86%;
        scroll-snap-align: start;
        padding: 32px 24px;
      }

      .faq-section {
        padding: 40px 20px;
        grid-template-columns: 1fr;
        gap: 50px;
      }

      .faq-left {
        position: static;
      }

      .final-cta-section {
        padding: 40px 20px;
      }

      .footer {
        padding: 60px 30px 30px;
      }

      .footer-top {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
      }
    }

    @media (max-width: 640px) {
      .header {
        padding: 10px 14px;
        gap: 10px;
        flex-wrap: nowrap;
      }

      .logo-text img {
        width: 177px !important;
      }

      .header-cta {
        padding: 9px 12px;
        font-size: 11px;
        letter-spacing: 0.8px;
        white-space: nowrap;
        flex-shrink: 0;
        border-radius: 999px;
      }

      .hero-title {
        font-size: 56px;
      }

      .hero-form-wrap {
        scroll-margin-top: 92px;
      }

      .services-grid {
        grid-template-columns: 1fr;
      }

      .services-cta-section {
        padding: 66px 20px;
      }

      .services-cta-title {
        font-size: 34px;
        margin-bottom: 20px;
      }

      .services-cta-text {
        margin-bottom: 30px;
        font-size: 16px;
      }

      .services-cta-actions {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 12px;
        flex-wrap: wrap;
      }

      .services-cta-primary,
      .services-cta-secondary {
        width: 100%;
        max-width: 330px;
        min-height: 54px;
        padding: 0 22px;
        font-size: 14px;
      }

      .industries-section {
        padding: 70px 0;
      }

      .industries-head {
        padding: 0 20px;
        margin-bottom: 34px;
      }

      .industries-label {
        font-size: 14px;
      }

      .industries-title {
        font-size: 34px;
      }

      .industries-marquee-shell {
        gap: 14px;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 5%, #000 95%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 5%, #000 95%, transparent);
      }

      .industry-logo-track {
        gap: 14px;
        animation-duration: 34s;
      }

      .industry-logo-row.reverse .industry-logo-track {
        animation-duration: 38s;
      }

      .industry-logo-card {
        width: 148px;
        min-height: 90px;
        flex-basis: 138px;
        padding: 8px 8px;
      }

      .industry-logo-icon {
        font-size: 28px;
        margin-bottom: 10px;
      }

      .industry-logo-title {
        font-size: 13px;
      }

      .hero-stats {
        gap: 0;
        margin-top: 36px;
        padding-top: 20px;
      }

      .stat {
        border-right: 1px solid var(--border);
        border-bottom: none;
        padding: 0 10px;
        text-align: center;
      }

      .stat:first-child {
        padding-left: 0;
      }

      .stat:last-child {
        border-right: none;
        padding: 0 0 0 10px;
      }

      .stat-num {
        font-size: 34px;
      }

      .stat-label {
        font-size: 10px;
        letter-spacing: 0.6px;
      }

      .footer-top {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 30px 18px;
      }

      .footer-top > div:nth-child(1),
      .footer-top > .footer-col:nth-child(2) {
        grid-column: 1 / -1;
      }

      .footer-contact p,
      .footer-links a {
        font-size: 12px;
        line-height: 1.5;
      }

      .footer-col h5 {
        font-size: 10px;
        letter-spacing: 1.2px;
        margin-bottom: 14px;
      }

      .cta-buttons {
        flex-direction: column;
      }

      .sticky-mobile {
        display: block;
      }

      body {
        padding-bottom: 60px;
      }
    }

    @media (max-width:480px) {
      .hero-pills {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
      }

      .hero-pills .pill {
        width: 100%;
        justify-content: center;
        padding: 9px 10px;
        font-size: 12px;
        text-align: center;
      }

      .hero-buttons {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        flex-direction: column;
      }

      .r-num {
        font-size: 70px;
      }

      .section-title,
      .cta-big-title {
        font-size: 42px;
      }

      .services-cta-inner {
        text-align: left;
      }

    }
  </style>
</head>

<body>
  <?php if ($formNotice): ?>
    <div class="form-popup <?php echo htmlspecialchars($formNotice['status'], ENT_QUOTES, 'UTF-8'); ?>" id="formPopup">
      <div class="form-popup-card">
        <div class="form-popup-icon">
          <i class="fas <?php echo $formNotice['status'] === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation'; ?>"></i>
        </div>
        <div class="form-popup-content">
          <h3><?php echo htmlspecialchars($formNotice['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($formNotice['message'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <button type="button" class="form-popup-close" aria-label="Close popup" onclick="document.getElementById('formPopup').style.display='none'">&times;</button>
      </div>
    </div>
  <?php endif; ?>

  <!-- Custom Cursor -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-ring" id="cursorRing"></div>

  <!-- HEADER -->
  <header class="header container">
    <a href="#" class="logo-text"><img src="https://technofra.com/logo-black.png" alt="Technofra"></a>
    <!-- <nav>
      <ul class="nav-links">
        <li><a href="#services">Services</a></li>
        <li><a href="#about">Why Us</a></li>
        <li><a href="#work">Industries</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>
    </nav> -->
    <a href="#contact" class="header-cta"><span>Get Free Quote</span></a>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="hero-inner">
      <!-- LEFT -->
      <div class="hero-left">
        <div class="hero-badge">
          <!-- <div class="badge-dot"></div> -->
          #1 Premium Web Development for Growing Businesses
        </div>

        <h1 class="hero-title">
          WE BUILD<br>
          <span class="line-accent">DIGITAL</span><br>
          <span class="line-outline">EMPIRES</span>
        </h1>

        <p class="hero-desc">
          We help startups and businesses worldwide build fast, scalable websites and apps that increase conversions and
          revenue.
        </p>

        <div class="hero-pills">
          <div class="pill"><i class="fas fa-check"></i> 100% Custom Code</div>
          <div class="pill"><i class="fas fa-check"></i> 500+ Projects</div>
          <div class="pill"><i class="fas fa-check"></i> 24/7 Support</div>
          <!-- <div class="pill"><i class="fas fa-check"></i> Source Code Yours</div> -->
        </div>

        <div class="hero-buttons">
          <a href="#contact" class="btn-gold">Start Your Project</a>
          <a href="tel:+918080803374" class="btn-ghost"><i class="fas fa-phone"></i> CALL NOW</a>
        </div>

        <div class="hero-stats">
          <div class="stat">
            <div class="stat-num" data-count="2100" data-suffix="+">0+</div>
            <div class="stat-label">Projects Done</div>
          </div>
          <div class="stat">
            <div class="stat-num" data-count="1550" data-suffix="+">0+</div>
            <div class="stat-label">Satisfaction</div>
          </div>
          <div class="stat">
            <div class="stat-num" data-count="14" data-suffix="+">0+</div>
            <div class="stat-label">Years of Experience</div>
          </div>
        </div>
      </div>

      <!-- RIGHT: FORM -->
      <div class="hero-form-wrap" id="contact">
        <div class="form-card">
          <h2 class="form-card-title">Free Consultation</h2>
          <p class="form-card-sub">Tell us your vision we'll make it real.</p>

          <!-- <div class="urgency-pill">
            <i class="fas fa-bolt"></i>
            Limited Free Slots Today
            <div class="slot-count" id="slotCount">03</div>
          </div> -->

          <form id="leadForm" action="webapp-handler.php" method="POST">
            <div class="form-hidden-field" aria-hidden="true">
              <label for="hidden_field">Leave this field empty</label>
              <input type="text" id="hidden_field" name="hidden_field" tabindex="-1" autocomplete="off">
            </div>
            <div class="f-row">
              <div class="f-group">
                <label>Full Name *</label>
                <input type="text" name="name" placeholder="   Doe" value="<?php echo htmlspecialchars($formData['name'], ENT_QUOTES, 'UTF-8'); ?>" required>
              </div>
              <div class="f-group">
                <label>Phone *</label>
                <input type="tel" name="contact" placeholder="+91 00000 00000" value="<?php echo htmlspecialchars($formData['contact'], ENT_QUOTES, 'UTF-8'); ?>" required>
              </div>
            </div>

            <div class="f-group">
              <label>Email Address *</label>
              <input type="email" name="email" placeholder="you@company.com" value="<?php echo htmlspecialchars($formData['email'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="f-row">
              <div class="f-group">
                <label>Company Name *</label>
                <input type="text" name="company" placeholder="Company Name" value="<?php echo htmlspecialchars($formData['company'], ENT_QUOTES, 'UTF-8'); ?>" required>
              </div>
              <div class="f-group">
                <label>Website (Optional)</label>
                <input type="url" name="website" placeholder="https://www.example.com" value="<?php echo htmlspecialchars($formData['website'], ENT_QUOTES, 'UTF-8'); ?>">
              </div>
            </div>


            <div class="f-group">
              <label>Project Brief</label>
              <textarea name="message" placeholder="Tell us about your project..."><?php echo htmlspecialchars($formData['message'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <div class="col-12">
              <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF">
              </div>
            </div>

            <button type="submit" class="submit-btn">
              <i class="fas fa-rocket"></i> Get Your Free Strategy Call
            </button>
          </form>

          <div class="form-trust">
            <p ><i class="fas fa-lock"></i> Your information is 100% secure and confidential</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <div class="marquee-section">
    <div class="marquee-track">
      <div class="marquee-item"><i class="fas fa-diamond"></i> Web Development</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> Mobile Apps</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> E-commerce</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> UI/UX Design</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> SaaS Platforms</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> 24/7 Support</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> Web Development</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> Mobile Apps</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> E-commerce</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> UI/UX Design</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> SaaS Platforms</div>
      <div class="marquee-item"><i class="fas fa-diamond"></i> 24/7 Support</div>
    </div>
  </div>

  <!-- SERVICES -->
  <section id="services">
    <div class="section">
      <div class="section-head fade-up">
        <div class="section-label">Our Services</div>
        <h2 class="section-title">WHAT WE <span class="accent">BUILD</span></h2>
        <p class="section-desc">End-to-end digital solutions from first pixel to final deployment.</p>
      </div>

      <div class="services-grid fade-up">
        <div class="service-item">
          <div class="service-num">01</div>
          <div class="service-icon-wrap"><i class="fas fa-laptop-code"></i></div>
          <h3>Custom Website Development</h3>
          <p>Responsive, blazing-fast websites built from scratch. Corporate to complex web apps, tailored precisely to
            your business.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
        <div class="service-item">
          <div class="service-num">02</div>
          <div class="service-icon-wrap"><i class="fas fa-mobile-alt"></i></div>
          <h3>Mobile App Development</h3>
          <p>Native iOS & Android apps. Flutter, React Native, or native code we build apps that users love and
            businesses grow with.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
        <div class="service-item">
          <div class="service-num">03</div>
          <div class="service-icon-wrap"><i class="fas fa-shopping-cart"></i></div>
          <h3>E-commerce Solutions</h3>
          <p>Conversion-optimized stores with secure payments. Shopify, WooCommerce, or custom we maximize your
            revenue.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
        <div class="service-item">
          <div class="service-num">04</div>
          <div class="service-icon-wrap"><i class="fas fa-paint-brush"></i></div>
          <h3>UI/UX Design</h3>
          <p>Beautiful, intuitive interfaces that convert. User-centered design with prototyping, testing, and
            pixel-perfect delivery.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
        <div class="service-item">
          <div class="service-num">05</div>
          <div class="service-icon-wrap"><i class="fas fa-cogs"></i></div>
          <h3>Web Applications & SaaS</h3>
          <p>Scalable SaaS platforms, CRM/ERP systems. Full-stack development with React, Node.js, Python built for
            scale.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
        <div class="service-item">
          <div class="service-num">06</div>
          <div class="service-icon-wrap"><i class="fas fa-tools"></i></div>
          <h3>Maintenance & Support</h3>
          <p>24/7 monitoring, security patches, regular updates. Keep your digital assets running flawlessly.</p>
          <div class="service-arrow"><i class="fas fa-arrow-up-right"></i></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES CTA -->
  <section class="services-cta-section">
    <div class="services-cta-inner fade-up">
      <h2 class="section-title">BUILD A WEBSITE THAT ACTUALLY <span class="accent">WORKS</span> </h2>
      <p class="services-cta-text">Your website should bring you customers, not just visitors.
        Join 500+ businesses across India start your free consultation today.</p>
      <div class="services-cta-actions">
        <a href="#contact" class="services-cta-primary">GET FREE STRATEGY CALL</a>
        <a href="tel:+918080803374" class="services-cta-secondary"><i class="fas fa-phone"></i> CALL NOW</a>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section id="about" class="why-section">
    <div class="why-inner" style="max-width:1300px;margin:0 auto;">
      <div class="why-left fade-up">
        <div class="section-label">Why Technofra</div>
        <h2 class="section-title">THE <span class="accent">DIFFERENCE</span><br>IS IN THE<br>DETAILS</h2>
        <p class="section-desc" style="margin-top:20px;">
          We've spent years obsessing over what separates good digital products from exceptional ones. Here's what we
          bring.
        </p>
        
      </div>
      <div class="why-features fade-up">
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-code"></i></div>
          <div class="wf-text">
            <h4>Clean, Scalable Architecture</h4>
            <p>Maintainable, well-documented code with no shortcuts or technical debt. Built to scale as your business
              grows.</p>
          </div>
        </div>
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-mobile-alt"></i></div>
          <div class="wf-text">
            <h4>Mobile-First by Default</h4>
            <p>Every project is built mobile-first, ensuring perfect performance across all screen sizes smartphone to
              4K desktop.</p>
          </div>
        </div>
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-tachometer-alt"></i></div>
          <div class="wf-text">
            <h4>Performance Obsessed</h4>
            <p>Lightning load times, SEO-ready structure, optimized assets. Your Core Web Vitals will thank you.</p>
          </div>
        </div>
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-shield-alt"></i></div>
          <div class="wf-text">
            <h4>Enterprise-Grade Security</h4>
            <p>SSL, encryption, secure auth, regular security audits. We protect your users and your reputation.</p>
          </div>
        </div>
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-file-contract"></i></div>
          <div class="wf-text">
            <h4>100% Source Code Ownership</h4>
            <p>You own every line of code, every asset, every file. No lock-ins, no hidden clauses. Total freedom.</p>
          </div>
        </div>
        <div class="why-feature">
          <div class="wf-icon"><i class="fas fa-headset"></i></div>
          <div class="wf-text">
            <h4>6 Months Free Support</h4>
            <p>Bug fixes, minor updates, and round-the-clock support included for 6 months post-launch. Always in your
              corner.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- INDUSTRIES -->
  <section id="work" class="industries-section">
    <div class="industries-inner fade-up">
      <div class="industries-head">
        <h2 class="section-title">INDUSTRIES WE <span class="accent">SERVE</span> </h2>
      </div>

      <div class="industries-marquee-shell" aria-label="Industries Technofra serves">
        <div class="industry-logo-row">
          <div class="industry-logo-track">
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-laptop-code"></i></div>
              <div class="industry-logo-title">IT Services</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-user-gear"></i></div>
              <div class="industry-logo-title">Auto Repair</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-helmet-safety"></i></div>
              <div class="industry-logo-title">Construction</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-bolt"></i></div>
              <div class="industry-logo-title">Electrician</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-green"><i class="fas fa-broom"></i></div>
              <div class="industry-logo-title">Cleaning</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-fan"></i></div>
              <div class="industry-logo-title">HVAC</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-green"><i class="fas fa-tree"></i></div>
              <div class="industry-logo-title">Landscaping</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-wrench"></i></div>
              <div class="industry-logo-title">Plumber</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-red"><i class="fas fa-utensils"></i></div>
              <div class="industry-logo-title">Restaurant</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-house"></i></div>
              <div class="industry-logo-title">Roofing</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-truck"></i></div>
              <div class="industry-logo-title">Trucking</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-shield-virus"></i></div>
              <div class="industry-logo-title">Pest Control</div>
            </div>

            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-laptop-code"></i></div>
              <div class="industry-logo-title">IT Services</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-user-gear"></i></div>
              <div class="industry-logo-title">Auto Repair</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-helmet-safety"></i></div>
              <div class="industry-logo-title">Construction</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-bolt"></i></div>
              <div class="industry-logo-title">Electrician</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-green"><i class="fas fa-broom"></i></div>
              <div class="industry-logo-title">Cleaning</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-fan"></i></div>
              <div class="industry-logo-title">HVAC</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-green"><i class="fas fa-tree"></i></div>
              <div class="industry-logo-title">Landscaping</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-wrench"></i></div>
              <div class="industry-logo-title">Plumber</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-red"><i class="fas fa-utensils"></i></div>
              <div class="industry-logo-title">Restaurant</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-house"></i></div>
              <div class="industry-logo-title">Roofing</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-truck"></i></div>
              <div class="industry-logo-title">Trucking</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-shield-virus"></i></div>
              <div class="industry-logo-title">Pest Control</div>
            </div>
          </div>
        </div>

        <div class="industry-logo-row reverse">
          <div class="industry-logo-track">
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-green"><i class="fas fa-building"></i></div>
              <div class="industry-logo-title">Real Estate</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-red"><i class="fas fa-stethoscope"></i></div>
              <div class="industry-logo-title">Healthcare</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-graduation-cap"></i></div>
              <div class="industry-logo-title">Education</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-green"><i class="fas fa-money-bill-trend-up"></i></div>
              <div class="industry-logo-title">Finance</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-plane-departure"></i></div>
              <div class="industry-logo-title">Travel</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-boxes-stacked"></i></div>
              <div class="industry-logo-title">Logistics</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-pink"><i class="fas fa-scissors"></i></div>
              <div class="industry-logo-title">Beauty & Salon</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-green"><i class="fas fa-dumbbell"></i></div>
              <div class="industry-logo-title">Fitness & Gym</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-purple"><i class="fas fa-calendar-days"></i></div>
              <div class="industry-logo-title">Event Management</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-store"></i></div>
              <div class="industry-logo-title">Retail</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-industry"></i></div>
              <div class="industry-logo-title">Manufacturing</div>
            </div>
            <div class="industry-logo-card">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-scale-balanced"></i></div>
              <div class="industry-logo-title">Attorney</div>
            </div>

            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-green"><i class="fas fa-building"></i></div>
              <div class="industry-logo-title">Real Estate</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-red"><i class="fas fa-stethoscope"></i></div>
              <div class="industry-logo-title">Healthcare</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-blue"><i class="fas fa-graduation-cap"></i></div>
              <div class="industry-logo-title">Education</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-green"><i class="fas fa-money-bill-trend-up"></i></div>
              <div class="industry-logo-title">Finance</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-sky"><i class="fas fa-plane-departure"></i></div>
              <div class="industry-logo-title">Travel</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-boxes-stacked"></i></div>
              <div class="industry-logo-title">Logistics</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-pink"><i class="fas fa-scissors"></i></div>
              <div class="industry-logo-title">Beauty & Salon</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-green"><i class="fas fa-dumbbell"></i></div>
              <div class="industry-logo-title">Fitness & Gym</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-purple"><i class="fas fa-calendar-days"></i></div>
              <div class="industry-logo-title">Event Management</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-orange"><i class="fas fa-store"></i></div>
              <div class="industry-logo-title">Retail</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-industry"></i></div>
              <div class="industry-logo-title">Manufacturing</div>
            </div>
            <div class="industry-logo-card" aria-hidden="true">
              <div class="industry-logo-icon industry-slate"><i class="fas fa-scale-balanced"></i></div>
              <div class="industry-logo-title">Attorney</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RESULTS -->
  <section class="results-section">
    <div class="section-head fade-up">
      <div class="section-label">Results</div>
      <h2 class="section-title">REAL RESULTS WE’VE <span class="accent">DELIVERED</span></h2>
      <p class="section-desc">Proven results that help our clients grow faster all over India.</p>
    </div>
    <div class="results-row fade-up">
      <div class="result-item">
        <div class="r-num">40%</div>
        <div class="r-label">Faster Load Times</div>
        <div class="r-desc">Average performance improvement compared to clients' previous solutions.</div>
      </div>
      <div class="result-item">
        <div class="r-num">3X</div>
        <div class="r-label">Conversion Increase</div>
        <div class="r-desc">Average uplift in conversion rates after our UI/UX redesigns.</div>
      </div>
      <div class="result-item">
        <div class="r-num">99.9%</div>
        <div class="r-label">Uptime Guaranteed</div>
        <div class="r-desc">Server reliability with our managed hosting and maintenance packages.</div>
      </div>
    </div>
  </section>
  <section class="services-cta-section">
    <div class="services-cta-inner fade-up">
      <h2 class="section-title">BUILD A WEBSITE THAT ACTUALLY <span class="accent">WORKS</span> </h2>
      <p class="services-cta-text">Your website should bring you customers, not just visitors.
        Join 500+ businesses across India start your free consultation today.</p>
      <div class="services-cta-actions">
        <a href="#contact" class="services-cta-primary">GET FREE STRATEGY CALL</a>
        <a href="tel:+918080803374" class="services-cta-secondary"><i class="fas fa-phone"></i> CALL NOW</a>
      </div>
    </div>
  </section>
  <!-- TESTIMONIALS -->
  <section class="testimonials-section">
    <div class="testimonials-inner">
      <div class="section-head fade-up">
        <div class="section-label">Client Stories</div>
        <h2 class="section-title">WHAT CLIENTS <span class="accent">SAY</span></h2>
      </div>
      <div class="testimonials-grid fade-up">
        <div class="testimonial-card">
          <div class="quote-mark">"</div>
          <div class="t-stars">★★★★★</div>
          <p class="t-text">Technofra built our e-commerce platform from scratch. The site loads in under 2 seconds and
            our sales have increased by 200%. Incredibly professional team.</p>
          <div class="t-author">
            <div class="t-avatar">RK</div>
            <div>
              <div class="t-name">Rahul Kumar</div>
              <div class="t-role">Founder, ShopEase India</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="quote-mark">"</div>
          <div class="t-stars">★★★★★</div>
          <p class="t-text">The mobile app they built has completely streamlined our logistics operations. Real-time
            tracking, automated notifications exactly what we envisioned.</p>
          <div class="t-author">
            <div class="t-avatar">PS</div>
            <div>
              <div class="t-name">Priya Sharma</div>
              <div class="t-role">CTO, FastTrack Logistics</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="quote-mark">"</div>
          <div class="t-stars">★★★★★</div>
          <p class="t-text">From design to deployment, the team was exceptional. They understood our vision and
            delivered a website that perfectly represents our brand. 10/10.</p>
          <div class="t-author">
            <div class="t-avatar">AM</div>
            <div>
              <div class="t-name">Amit Malhotra</div>
              <div class="t-role">Director, InnovateTech</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="faq-section">
    <div class="faq-left fade-up">
      <div class="section-label">FAQ</div>
      <h2 class="section-title">GOT <span class="accent">QUESTIONS?</span></h2>
      <p class="section-desc" style="margin-top:20px;">Everything you need to know before we get started together.</p>
      <a href="#contact" class="btn-gold" style="display:inline-block;margin-top:40px;text-decoration:none;">Start Your
        Project</a>
    </div>
    <div class="faq-list fade-up">
      <div class="faq-item">
        <div class="faq-question open">
          <span>How long does it take to build a website?</span>
          <div class="fq-icon"><i class="fas fa-minus"></i></div>
        </div>
        <div class="faq-answer open">A standard business website takes 2–4 weeks. Complex e-commerce or web apps may
          take 6–12 weeks. Mobile apps typically require 8–16 weeks depending on features. We provide exact timelines
          during consultation.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>Do you provide hosting and domain services?</span>
          <div class="fq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-answer">Yes! We offer complete hosting with 99.9% uptime, SSL certificates, and regular backups.
          We also help with domain purchase and configuration. Hosting packages start at ₹2,999/year.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>Will I own the source code?</span>
          <div class="fq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-answer">Absolutely. Once the project is complete and final payment is made, you own 100% of the
          source code, designs, and assets. Full documentation included. No lock-ins, no hidden clauses.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>What technologies do you use?</span>
          <div class="fq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-answer">React, Next.js, Node.js, Python, Flutter, React Native, AWS, and more. We choose the
          ideal tech stack based on your specific requirements and future scalability needs.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>Do you offer maintenance after launch?</span>
          <div class="fq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-answer">Yes 6 months of free bug fixes and support after launch. We also offer ongoing
          maintenance packages for updates, security patches, and feature additions. 24/7 support available.</div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="final-cta-section">
    <div class="final-cta-inner fade-up">
      <h2 class="cta-big-title">LET'S BUILD<br><span class="accent">SOMETHING</span><br>GREAT</h2>
      <p class="cta-sub">500+ businesses trusted us with their digital transformation. Join them free consultation, no
        obligations.</p>
      <div class="cta-buttons">
        <a href="#contact" class="btn-gold">GET FREE STRATEGY CALL</a>
        <a href="tel:+918080803374" class="btn-outline"><i class="fas fa-phone"></i> CALL NOW</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-top">
        <div>
          <div class="footer-brand-name"> <a href="#" class="logo-text"><img src="https://technofra.com/logo.png"
                alt="Technofra"></a></div>
          <p class="footer-brand-desc">Your trusted technology partner for custom websites, mobile apps, and scalable
            digital products built for growth.</p>
        </div>
        <div class="footer-col">
          <h5>Services</h5>
          <div class="footer-links">
            <a href="#">Website Development</a>
            <a href="#">App Development</a>
            <a href="#">E-Commerce Development</a>
            <a href="#">Branding</a>
            <a href="#">Digital Marketing</a>
            <a href="#">Social Media Marketing</a>
          </div>
        </div>
        <div class="footer-col footer-contact">
          <h5>Contact</h5>
          <p><a href="tel:+91 80808 03374"> <i class="fas fa-phone"></i> &nbsp;&nbsp;+91 80808 03374</a></p>
          <p><a href="mailto:info@technofra.com"> <i class="fas fa-envelope"></i> &nbsp;&nbsp;info@technofra.com</a></p>
          <p><i class="fas fa-map-marker-alt"></i> Mumbai, India</p>
          <p><i class="fas fa-clock"></i> Mon–Sat, 9AM–6PM</p>
        </div>
        <div class="footer-col">
          <h5>Working Hours</h5>
          <div class="footer-links">
            <a href="#">Monday – Saturday</a>
            <a href="#">9:00 AM – 6:00 PM</a>
            <a href="#" style="margin-top:12px;">Privacy Policy</a>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 Technofra. All rights reserved.</p>
        <p style="color:var(--gold);font-size:12px;letter-spacing:1px;">BUILT WITH PRECISION. DELIVERED WITH PRIDE.</p>
      </div>
    </div>
  </footer>

  <!-- STICKY MOBILE -->
  <div class="sticky-mobile">
    <a href="#contact"><i class="fas fa-rocket"></i> Get Free Consultation</a>
  </div>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <?php if ($formNotice && ($formNotice['status'] ?? '') === 'success'): ?>
    <script>
      window.dataLayer = window.dataLayer || [];
      window.gtag = window.gtag || function() {
        dataLayer.push(arguments);
      };
      gtag('event', 'generate_lead', {
        event_category: 'Lead',
        event_label: 'webapp_form',
        value: 1
      });
    </script>
  <?php endif; ?>
  <script>
    // Custom Cursor
    const cursor = document.getElementById('cursor');
    const cursorRing = document.getElementById('cursorRing');
    let mouseX = 0, mouseY = 0, ringX = 0, ringY = 0;

    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX; mouseY = e.clientY;
      cursor.style.left = mouseX - 6 + 'px';
      cursor.style.top = mouseY - 6 + 'px';
    });

    function animateRing() {
      ringX += (mouseX - ringX - 20) * 0.12;
      ringY += (mouseY - ringY - 20) * 0.12;
      cursorRing.style.left = ringX + 'px';
      cursorRing.style.top = ringY + 'px';
      requestAnimationFrame(animateRing);
    }
    animateRing();

    document.querySelectorAll('a, button, .service-item, .industry-logo-card, .faq-question').forEach(el => {
      el.addEventListener('mouseenter', () => {
        cursor.style.transform = 'scale(2)';
        cursorRing.style.transform = 'scale(1.5)';
      });
      el.addEventListener('mouseleave', () => {
        cursor.style.transform = 'scale(1)';
        cursorRing.style.transform = 'scale(1)';
      });
    });

    const leadForm = document.getElementById('leadForm');
    if (leadForm) {
      leadForm.addEventListener('submit', () => {
        const submitButton = leadForm.querySelector('.submit-btn');
        if (submitButton) {
          submitButton.disabled = true;
          submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        }
      });
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        e.preventDefault();
        const hash = a.getAttribute('href');
        if (!hash || hash === '#') return;

        const target = document.querySelector(hash);
        if (!target) return;

        const header = document.querySelector('.header');
        const headerHeight = header ? header.offsetHeight : 0;
        const extraGap = window.matchMedia('(max-width: 1100px)').matches ? 32 : 18;
        const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - extraGap;

        window.scrollTo({
          top: Math.max(targetTop, 0),
          behavior: 'smooth'
        });
      });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(q => {
      q.addEventListener('click', () => {
        const item = q.parentElement;
        const answer = item.querySelector('.faq-answer');
        const icon = q.querySelector('.fq-icon i');
        const isOpen = q.classList.contains('open');

        document.querySelectorAll('.faq-question').forEach(oq => {
          oq.classList.remove('open');
          oq.parentElement.querySelector('.faq-answer').classList.remove('open');
          const oi = oq.querySelector('.fq-icon i');
          oi.className = 'fas fa-plus';
        });

        if (!isOpen) {
          q.classList.add('open');
          answer.classList.add('open');
          icon.className = 'fas fa-minus';
        }
      });
    });

    // Scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add('visible'), i * 80);
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // Hero stats count-up
    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
      const countStats = () => {
        heroStats.querySelectorAll('.stat-num').forEach(stat => {
          const target = Number(stat.dataset.count || 0);
          const suffix = stat.dataset.suffix || '';
          const duration = 1800;
          const startTime = performance.now();

          const updateCount = (now) => {
            const progress = Math.min((now - startTime) / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            stat.textContent = Math.round(target * easedProgress).toLocaleString('en-IN') + suffix;

            if (progress < 1) {
              requestAnimationFrame(updateCount);
            }
          };

          requestAnimationFrame(updateCount);
        });
      };

      const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            countStats();
            statsObserver.disconnect();
          }
        });
      }, { threshold: 0.35 });

      statsObserver.observe(heroStats);
    }

    // Slot countdown
    let slots = 3;
    const slotEl = document.getElementById('slotCount');
    if (slotEl) {
      setInterval(() => {
        if (slots > 1) {
          slots--;
          slotEl.textContent = '0' + slots;
          slotEl.style.transform = 'scale(1.3)';
          setTimeout(() => slotEl.style.transform = 'scale(1)', 200);
        }
      }, 18000);
    }

    // Mobile testimonials auto scroll
    const testimonialsGrid = document.querySelector('.testimonials-grid');
    if (testimonialsGrid) {
      let testimonialsAutoScroll;
      const startTestimonialsAutoScroll = () => {
        if (!window.matchMedia('(max-width: 1100px)').matches) {
          clearInterval(testimonialsAutoScroll);
          testimonialsGrid.scrollLeft = 0;
          return;
        }

        clearInterval(testimonialsAutoScroll);
        testimonialsAutoScroll = setInterval(() => {
          const firstCard = testimonialsGrid.querySelector('.testimonial-card');
          if (!firstCard) return;

          const gap = parseFloat(getComputedStyle(testimonialsGrid).gap) || 16;
          const step = firstCard.offsetWidth + gap;
          const maxScroll = testimonialsGrid.scrollWidth - testimonialsGrid.clientWidth - 4;

          if (testimonialsGrid.scrollLeft >= maxScroll) {
            testimonialsGrid.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            testimonialsGrid.scrollBy({ left: step, behavior: 'smooth' });
          }
        }, 3500);
      };

      testimonialsGrid.addEventListener('touchstart', () => clearInterval(testimonialsAutoScroll), { passive: true });
      testimonialsGrid.addEventListener('touchend', startTestimonialsAutoScroll, { passive: true });
      testimonialsGrid.addEventListener('mouseenter', () => clearInterval(testimonialsAutoScroll));
      testimonialsGrid.addEventListener('mouseleave', startTestimonialsAutoScroll);
      window.addEventListener('resize', startTestimonialsAutoScroll);
      startTestimonialsAutoScroll();
    }
  </script>
</body>

</html>
