<?php
// config.php
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_httponly' => true,
        'cookie_secure'   => isset($_SERVER['HTTPS']),
        'cookie_samesite' => 'Strict',
    ]);
}

// डायरेक्ट एक्सेस प्रोटेक्शन टोकन
define('SECURE_ACCESS', true);

// रूट पाथ और ग्लोबल वेरिएबल्स
define('ROOT_PATH', __DIR__);
define('AGENCY_NAME', "TMN's Tour & Travels");
define('AGENCY_PHONE', "+91 98765 43210");
define('AGENCY_EMAIL', "travelagency@email.com");
define('WHATSAPP_NUMBER', "917503629170");

// HTTP Security Headers
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; font-src 'self' https://cdnjs.cloudflare.com; img-src 'self' data: https://images.unsplash.com https://cdn.pixabay.com; form-action https://formsubmit.co;");