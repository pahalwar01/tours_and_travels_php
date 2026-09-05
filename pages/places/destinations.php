<?php
// pages/places/destinations.php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>Top Destinations - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="section-header">
      <h2>Explore Popular Destinations</h2>
      <p>Discover the most scenic holiday and corporate getaways in India</p>
    </div>

    <div class="dest-grid">
      <a href="manali.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2021/02/19/14/38/mountain-6030438_1280.jpg" alt="Manali" loading="lazy">
        <h3>Manali</h3>
      </a>
      <a href="goa.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2017/05/30/05/46/goa-2355885_1280.jpg" alt="Goa" loading="lazy">
        <h3>Goa</h3>
      </a>
      <a href="jaipur.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Jaipur" loading="lazy">
        <h3>Jaipur</h3>
      </a>
      <a href="rishikesh.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Rishikesh" loading="lazy">
        <h3>Rishikesh</h3>
      </a>
      <a href="agra.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2023/03/26/20/48/tajmahal-7879103_640.jpg" alt="Agra" loading="lazy">
        <h3>Agra</h3>
      </a>
      <a href="uttrakhand.php" class="dest-card">
        <img src="https://cdn.pixabay.com/photo/2022/04/25/05/46/lord-shiva-7155120_1280.jpg" alt="Uttarakhand" loading="lazy">
        <h3>Uttarakhand</h3>
      </a>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>