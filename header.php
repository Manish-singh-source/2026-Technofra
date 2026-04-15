<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
    <?php $deferMainCss = $deferMainCss ?? false; ?>
    <?php $deferCustomCss = $deferCustomCss ?? false; ?>
    <?php $loadCustomCss = $loadCustomCss ?? true; ?>
    <?php $loadMagnificCss = $loadMagnificCss ?? true; ?>
    <?php $loadNiceSelectCss = $loadNiceSelectCss ?? true; ?>
    <?php $loadSlickCss = $loadSlickCss ?? true; ?>
    <?php $loadOwlCss = $loadOwlCss ?? true; ?>
    <?php $loadLegacyThemeCss = $loadLegacyThemeCss ?? true; ?>
    <?php
    $skipAutoCanonical = $skipAutoCanonical ?? false;
    $canonicalBaseUrl = 'https://technofra.com';
    $canonicalScript = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php', '.php');
    $canonicalPath = $canonicalScript === 'index' ? '/' : '/' . rawurlencode($canonicalScript);
    $canonicalUrl = $canonicalBaseUrl . $canonicalPath;
    ?>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (!$skipAutoCanonical): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    
    <link rel="icon" href="assets/image/favicon.png" type="image/png" sizes="16x16">
    <link rel="preload" href="assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/flaticon_quiety.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;family=Lily+Script+One&amp;family=Open+Sans:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Poppins:wght@400;500;600;700;800&amp;display=swap"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;family=Lily+Script+One&amp;family=Open+Sans:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Poppins:wght@400;500;600;700;800&amp;display=swap">
    </noscript>

    <!--build:css-->
    <?php if ($deferMainCss): ?>
    <link rel="preload" as="style" href="assets/css/main.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/main.css"></noscript>
    <?php else: ?>
    <link rel="stylesheet" href="assets/css/main.css">
    <?php endif; ?>
    <!-- endbuild -->
    <!--custom css start-->
    <?php if ($loadCustomCss && $deferCustomCss): ?>
    <link rel="preload" as="style" href="assets/css/custom.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/custom.css"></noscript>
    <?php elseif ($loadCustomCss): ?>
    <link rel="stylesheet" href="assets/css/custom.css">
    <?php endif; ?>
    <!--custom css end-->
    <?php if ($loadMagnificCss): ?>
    <link rel="preload" as="style" href="assets_01/css/magnific-popup.css"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets_01/css/magnific-popup.css"></noscript>
    <?php endif; ?>
    <?php if ($loadNiceSelectCss): ?>
    <link rel="preload" as="style" href="assets_01/css/nice-select.css"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets_01/css/nice-select.css"></noscript>
    <?php endif; ?>
    <?php if ($loadSlickCss): ?>
    <link rel="preload" as="style" href="assets_01/css/slick-slider.css"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets_01/css/slick-slider.css"></noscript>
    <?php endif; ?>
    <?php if ($loadOwlCss): ?>
    <link rel="preload" as="style" href="assets_01/css/owl.carousel.min.css"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets_01/css/owl.carousel.min.css"></noscript>
    <?php endif; ?>
    <?php if ($loadLegacyThemeCss): ?>
    <link rel="preload" as="style" href="assets_01/css/main.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets_01/css/main.css"></noscript>
    <?php endif; ?>


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Technofra",
  "alternateName": "Web Presence & Branding",
  "url": "https://technofra.com/",
  "logo": "https://technofra.com/assets/image/icons/technofra_logo_White.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "8080803374/75",
    "contactType": "technical support",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi","Marathi"]
  },
  "sameAs": [
    "https://www.facebook.com/Technofra",
    "https://www.instagram.com/technofra.company/",
    "https://www.linkedin.com/company/technofra",
    "https://in.pinterest.com/technofra_/",
    "https://www.youtube.com/@technofra",
    "https://technofra.com/"
  ]
}
</script>
