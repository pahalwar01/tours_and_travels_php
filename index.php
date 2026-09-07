<?php
// index.php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <title>TMN Travels - Best Travel Agency in Delhi NCR</title>
</head>
<body>

  <!-- 1. Header -->
  <?php include ROOT_PATH . '/header.php'; ?>

  <!-- 2. Responsive Navbar -->
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <!-- 3. Services Section -->
  <section class="container" id="services">
    <div class="section-header">
      <h2>Services We Offer</h2>
      <p>Tailored travel solutions for families, groups, and enterprises</p>
    </div>
    <div class="card-grid">
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-mountain-sun"></i></div>
        <h3>Tour Packages</h3>
        <p>Customized holiday itineraries crafted for families, couples, and friends.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-briefcase"></i></div>
        <h3>Corporate Travel</h3>
        <p>End-to-end management for meetings, conferences, and executive hotels.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-users"></i></div>
        <h3>Group Off-sites</h3>
        <p>Fun and productive off-site team excursions and large group getaways.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-van-shuttle"></i></div>
        <h3>Cabs & Buses</h3>
        <p>Verified AC cabs, tempo travellers, and luxury Volvo buses on rent.</p>
      </div>
    </div>
  </section>

  <!-- 4. Popular Places Component -->
  <?php 
    $popularPlaces = ROOT_PATH . '/pages/popularplaces.php';
    if (file_exists($popularPlaces)) {
        echo '<section style="background: #ffffff; padding: 40px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); width: 100%;">';
        echo '<div class="container" style="padding-top: 0; padding-bottom: 0;">';
        include $popularPlaces;
        echo '</div>';
        echo '</section>';
    }
  ?>

  <!-- 5. Why Choose Us Section -->
  <section class="container">
    <div class="section-header">
      <h2>Why Choose Us</h2>
      <p>Why We Are the Trusted Travel Agency in Delhi & NCR</p>
    </div>
    <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-award"></i></div>
        <h3>20+ Years Experience in Corporate Travel</h3>
        <p>Proven excellence in organizing corporate & family trip planning.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-hand-holding-dollar"></i></div>
        <h3>Competitive Pricing</h3>
        <p>Best rates guaranteed with zero hidden fees or surprise charges.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-headset"></i></div>
        <h3>One Contact For All Support</h3>
        <p>Dedicated travel expert standing by for all your on-trip requirements.</p>
      </div>
    </div>
  </section>

  <!-- 6. Contact Us Form -->

    <main class="container">
      <?php include ROOT_PATH . '/corporate_desk.php'; ?>
    </main>

  <!-- 7. Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>