<?php
// pages/places/rishikesh.php
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
  <title>Rishikesh Spiritual Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Rishikesh - Yoga City of India</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Known globally as the Yoga Capital of the World, Rishikesh rests along the Ganga River, combining ashram spiritual retreats, evening Ganga Aarti ceremonies, and white-water rafting adventures.
      </p>

      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2018/05/01/14/34/india-3365741_1280.jpg" alt="Rishikesh Ghats" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Temple" loading="lazy">
        <img src="https://images.unsplash.com/photo-1724432191302-6133b34c7105?w=500&auto=format&fit=crop" alt="Ram Jhula Bridge" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2020/01/16/08/17/rishikesh-4769868_640.jpg" alt="Ganga River" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights in Rishikesh</h2>

      <div class="sight-item">
        <h3>Triveni Ghat</h3>
        <p>The central holy bathing ghat known for the evening Maha Aarti where floating earthen lamps light up the sacred river.</p>
      </div>
      <div class="sight-item">
        <h3>Ram Jhula & Laxman Jhula</h3>
        <p>Iconic suspension pedestrian bridges connecting ashrams, vibrant markets, and riverside meditation spaces.</p>
      </div>
      <div class="sight-item">
        <h3>The Beatles Ashram (Chaurasi Kutia)</h3>
        <p>Historic retreat famous for the Beatles' 1968 visit, now maintained with expressive murals and peaceful nature trails.</p>
      </div>
      <div class="sight-item">
        <h3>Neelkanth Mahadev Temple</h3>
        <p>Set 32 km from Rishikesh amid mountain valleys, dedicated to Lord Shiva and linked to the Samudra Manthan legend.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>