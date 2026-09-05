<?php
// pages/services.php
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
  <title>Our Travel Services - TMN Travels</title>
</head>
<body>

  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="section-header">
      <h2>Comprehensive Travel Solutions</h2>
      <p>Customized experiences designed for comfort, luxury, and reliability</p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="icon-box"><i class="fa-solid fa-people-roof"></i></div>
        <h3>Customized Tour Packages</h3>
        <p>Tailored tour itineraries crafted specifically for families, couples, and group holidays within your budget.</p>
      </div>

      <div class="service-card">
        <div class="icon-box"><i class="fa-solid fa-briefcase"></i></div>
        <h3>Corporate Travel Solutions</h3>
        <p>End-to-end management of enterprise conferences, executive hotel bookings, and business meetings.</p>
      </div>

      <div class="service-card">
        <div class="icon-box"><i class="fa-solid fa-campground"></i></div>
        <h3>Group Off-site Trips</h3>
        <p>Well-planned retreat excursions and team-building outings designed to provide relaxing experiences for teams.</p>
      </div>

      <div class="service-card">
        <div class="icon-box"><i class="fa-solid fa-van-shuttle"></i></div>
        <h3>Cabs & Luxury Buses</h3>
        <p>Wide selection of certified chauffeurs, luxury AC cabs, Tempo Travellers, and Volvo coaches for smooth transit.</p>
      </div>

      <div class="service-card">
        <div class="icon-box"><i class="fa-solid fa-plane-departure"></i></div>
        <h3>Flight Bookings</h3>
        <p>Hassle-free domestic air ticketing with upfront quotes and zero hidden booking fees.</p>
      </div>
    </div>
  </main>

  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>