<?php
// footer.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}
?>
<footer class="site-footer">
  <p>&copy; <?php echo date('Y'); ?> <strong><?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></strong>. All rights reserved.</p>
  <p style="margin-top: 8px; font-size: 13px;">
    📍 Delhi NCR, India &nbsp;|&nbsp; 
    📞 <a href="tel:<?php echo AGENCY_PHONE; ?>"><?php echo AGENCY_PHONE; ?></a> &nbsp;|&nbsp; 
    ✉ <a href="mailto:<?php echo AGENCY_EMAIL; ?>"><?php echo AGENCY_EMAIL; ?></a>
  </p>

  <!-- WhatsApp Floating Action -->
  <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" 
     class="whatsapp-float-btn" 
     target="_blank" 
     rel="noopener noreferrer" 
     aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
</footer>