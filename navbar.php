<?php
// navbar.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}

$isPlace = strpos($_SERVER['PHP_SELF'], '/places/') !== false;
$isPage  = strpos($_SERVER['PHP_SELF'], '/pages/') !== false && !$isPlace;

$homeLink     = $isPlace ? "../../index.php" : ($isPage ? "../index.php" : "index.php");
$servicesLink = $isPlace ? "../services.php" : ($isPage ? "services.php" : "pages/services.php");
$destLink     = $isPlace ? "destinations.php" : ($isPage ? "places/destinations.php" : "pages/places/destinations.php");
$contactLink  = $isPlace ? "../contactus.php" : ($isPage ? "contactus.php" : "pages/contactus.php");
?>
<style>
  /* Menu Centered Layout */
  .site-nav .nav-inner {
    justify-content: center !important;
  }
  .site-nav .nav-links {
    justify-content: center !important;
  }
  @media (max-width: 768px) {
    .site-nav .nav-inner {
      justify-content: flex-end !important; /* मोबाइल में हैमबर्गर बटन राइट साइड रहेगा */
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