<?php
// pages/contactus.php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <title>Contact Us - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="contact-wrapper">
      <div class="section-header">
        <h2>Get In Touch</h2>
        <p>Send your queries and our travel experts will respond shortly</p>
      </div>

      <form action="https://formsubmit.co/pahalwar@gmail.com" method="POST" autocomplete="on">
        <!-- Anti-Spam Honeypot -->
        <input type="text" name="_honey" class="antispam-trap" tabindex="-1" autocomplete="off">
        <input type="hidden" name="_captcha" value="true">
        <input type="hidden" name="_template" value="table">

        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Your Full Name" maxlength="60" pattern="[a-zA-Z\s]+" title="Letters and spaces only" required>
        </div>
        <div class="form-group">
          <input type="tel" name="phone" class="form-control" placeholder="Mobile Number" maxlength="15" pattern="[0-9+-\s]{8,15}" title="Enter a valid phone number" required>
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" rows="5" placeholder="Share your destination, dates, and group size..." maxlength="1000" required></textarea>
        </div>
        <button type="submit" class="btn-submit">Send Message</button>
      </form>
    </div>

    <!-- About Section Card -->
    <div class="place-content" style="margin-top: 35px; text-align: center;">
      <h3 style="color: var(--dark); margin-bottom: 10px; font-size: 1.3rem;">About <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></h3>
      <p style="color: var(--text-muted); font-size: 0.95rem;">
        With over 20 years of expertise, we offer personalized travel solutions, seamless trip planning, and reliable on-trip support. Our commitment is to provide hassle-free journeys, competitive pricing, and exceptional service across India.
      </p>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>