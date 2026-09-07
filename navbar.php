<?php
// navbar.php

// वर्तमान फ़ाइल की लोकेशन चेक करना
$isPlace = strpos($_SERVER['PHP_SELF'], '/places/') !== false;
$isPage  = strpos($_SERVER['PHP_SELF'], '/pages/') !== false && !$isPlace;

$homeLink     = $isPlace ? "../../index.php" : ($isPage ? "../index.php" : "index.php");
$servicesLink = $isPlace ? "../services.php" : ($isPage ? "services.php" : "pages/services.php");
$destLink     = $isPlace ? "destinations.php" : ($isPage ? "places/destinations.php" : "pages/places/destinations.php");
$contactLink  = $isPlace ? "../contactus.php" : ($isPage ? "contactus.php" : "pages/contactus.php");
?>
<style>
  .site-nav {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    position: sticky;
    top: 0;
    z-index: 99999;
    width: 100%;
  }
  .nav-inner {
    max-width: 1140px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 12px 20px;
    position: relative;
  }
  .nav-links {
    display: flex;
    gap: 28px;
    align-items: center;
  }
  .nav-links a {
    color: #0f172a;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    transition: color 0.2s ease;
  }
  .nav-links a:hover {
    color: #0284c7;
  }
  .nav-toggle-btn {
    display: none;
    background: transparent;
    border: none;
    font-size: 24px;
    color: #0f172a;
    cursor: pointer;
    padding: 6px 10px;
  }
  @media (max-width: 768px) {
    .nav-inner {
      justify-content: flex-end !important;
    }
    .nav-toggle-btn {
      display: block !important;
    }
    .nav-links {
      display: none;
      flex-direction: column !important;
      position: absolute !important;
      top: 100% !important;
      left: 0 !important;
      width: 100% !important;
      background: #ffffff !important;
      padding: 18px 0 !important;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.15) !important;
      gap: 14px !important;
      text-align: center !important;
    }
    .nav-links.show-menu {
      display: flex !important;
    }
    .nav-links a {
      padding: 10px 0 !important;
      display: block !important;
      font-size: 16px !important;
    }
  }
</style>

<nav class="site-nav">
  <div class="nav-inner">
    <button type="button" class="nav-toggle-btn" id="mobileMenuBtn" onclick="toggleMobileMenu()" aria-label="Toggle navigation menu" aria-expanded="false">
      <i class="fa-solid fa-bars" id="menuToggleIcon"></i>
    </button>

    <div class="nav-links" id="navLinksMenu">
      <a href="<?php echo $homeLink; ?>" onclick="closeMobileMenu()">Home</a>
      <a href="<?php echo $servicesLink; ?>" onclick="closeMobileMenu()">Services</a>
      <a href="<?php echo $destLink; ?>" onclick="closeMobileMenu()">Destinations</a>
      <a href="<?php echo $contactLink; ?>" onclick="closeMobileMenu()">Contact Us</a>
    </div>
  </div>
</nav>

<script>
  function toggleMobileMenu() {
    var navMenu = document.getElementById('navLinksMenu');
    var icon = document.getElementById('menuToggleIcon');
    var btn = document.getElementById('mobileMenuBtn');
    
    if (navMenu.classList.contains('show-menu')) {
      navMenu.classList.remove('show-menu');
      btn.setAttribute('aria-expanded', 'false');
      if (icon) icon.className = 'fa-solid fa-bars';
    } else {
      navMenu.classList.add('show-menu');
      btn.setAttribute('aria-expanded', 'true');
      if (icon) icon.className = 'fa-solid fa-xmark';
    }
  }

  function closeMobileMenu() {
    if (window.innerWidth <= 768) {
      var navMenu = document.getElementById('navLinksMenu');
      var icon = document.getElementById('menuToggleIcon');
      var btn = document.getElementById('mobileMenuBtn');
      if (navMenu) navMenu.classList.remove('show-menu');
      if (btn) btn.setAttribute('aria-expanded', 'false');
      if (icon) icon.className = 'fa-solid fa-bars';
    }
  }
</script>