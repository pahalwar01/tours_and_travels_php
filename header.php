<?php
// header.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}
?>
<!-- Top Contact Bar -->
<div class="site-topbar">
  <div>
    <strong><a href="../../index.php"><i class="fa-solid fa-plane-departure" style="color: var(--primary); margin-right: 6px;"></i><?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></a></strong>
  </div>
  <div>
    <a href="tel:<?php echo AGENCY_PHONE; ?>" style="margin-right: 15px;">
      <i class="fa-solid fa-phone" style="margin-right: 4px;"></i> <?php echo AGENCY_PHONE; ?>
    </a>
    <a href="mailto:<?php echo AGENCY_EMAIL; ?>">
      <i class="fa-solid fa-envelope" style="margin-right: 4px;"></i> <?php echo AGENCY_EMAIL; ?>
    </a>
  </div>
</div>

<!-- Header Hero Banner -->
<header class="site-header-hero">
  <h1><?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></h1>
  <p class="brand-slogan">"Your Journey, Our Responsibility"</p>
  <p class="brand-subtext">Trusted Tours & Travels Agency in Delhi & NCR</p>
</header>