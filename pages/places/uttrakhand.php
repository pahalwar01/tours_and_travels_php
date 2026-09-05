<?php
// pages/places/uttrakhand.php
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
  <title>Uttarakhand Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Uttarakhand - Devbhumi (Land of the Gods)</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Uttarakhand is famous for its spiritual sites like the Char Dham pilgrimage (Yamunotri, Gangotri, Kedarnath, and Badrinath), stunning Himalayan vistas, rich wildlife national parks, and popular adventure hubs for river rafting and high-altitude trekking.
      </p>

      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2022/06/05/05/59/mussoorie-7243347_640.jpg" alt="Mussoorie" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2019/08/13/14/35/nature-4403564_640.jpg" alt="Uttarakhand Nature" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2019/07/03/16/05/india-4314909_640.jpg" alt="Himalayas" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2017/09/04/14/27/ranikhet-india-2714252_1280.jpg" alt="Ranikhet" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2018/01/21/09/56/tiger-3096211_640.jpg" alt="Corbett Tiger" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights to Visit</h2>

      <div class="sight-item">
        <h3>Mussoorie</h3>
        <p>Known as the "Queen of the Hills," offering mesmerizing waterfalls, panoramic Doon Valley views, and colonial-era architecture along Mall Road.</p>
      </div>
      <div class="sight-item">
        <h3>Nainital</h3>
        <p>A serene hill station famous for boating on Naini Lake, the ropeway to Snow View Point, and comfortable year-round mountain weather.</p>
      </div>
      <div class="sight-item">
        <h3>Auli</h3>
        <p>India's premier winter skiing destination, featuring snow-clad slopes and views of Mount Nanda Devi.</p>
      </div>
      <div class="sight-item">
        <h3>Jim Corbett National Park</h3>
        <p>India's oldest national park, globally acclaimed for Bengal tiger safaris, elephants, and rich Himalayan flora.</p>
      </div>
      <div class="sight-item">
        <h3>Haridwar</h3>
        <p>One of India's seven sacred cities, world-renowned for the magnificent evening Ganga Aarti at Har Ki Pauri ghat.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>