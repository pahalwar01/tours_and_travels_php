<?php
// pages/places/manali.php
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
  <title>Manali Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Manali - Gem of Himachal</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Nestled in the Beas River valley, Manali offers pine forests, alpine rivers, and high mountain passes, making it an ideal choice for leisure holidays and winter snow sports.
      </p>

      <!-- Smooth Touch Swipable Gallery -->
      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2021/10/19/11/52/nature-6723371_640.jpg" alt="Manali Valley" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2020/02/04/19/02/manali-4819132_640.jpg" alt="Snow Peaks" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2016/12/30/23/06/beas-river-1941786_640.jpg" alt="Beas River" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2016/01/16/16/08/mountaineerz-1143552_640.jpg" alt="Trek" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights in Manali</h2>

      <div class="sight-item">
        <h3>Solang Valley & Rohtang Pass</h3>
        <p>The epicenter of adventure activities including paragliding, skiing, zorbing, and mountain landscapes.</p>
      </div>
      <div class="sight-item">
        <h3>Hadimba Devi Temple</h3>
        <p>An ancient 16th-century wooden pagoda temple built inside the Dhungiri cedar forest.</p>
      </div>
      <div class="sight-item">
        <h3>Old Manali & Manu Temple</h3>
        <p>Charming village lanes, riverside cafes, and the traditional shrine dedicated to Sage Manu.</p>
      </div>
      <div class="sight-item">
        <h3>Jogini Waterfalls</h3>
        <p>A scenic short hiking trail starting from Vashisht village through orchards leading to cascading waterfalls.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>