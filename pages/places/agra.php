<?php
// pages/places/agra.php
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
  <title>Agra Heritage Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Agra - City of the Taj</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Home to the world-famous Taj Mahal on the banks of the Yamuna, Agra showcases Mughal architectural grandeur with three UNESCO World Heritage Sites including the majestic Agra Fort and imperial Fatehpur Sikri.
      </p>

      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2019/03/12/20/19/india-4051753_640.jpg" alt="Taj Mahal" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2019/04/10/17/51/agra-4117671_640.jpg" alt="Agra View" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2014/06/29/20/08/agra-fort-379686_640.jpg" alt="Agra Fort" loading="lazy">
        <img src="https://images.unsplash.com/photo-1697644297524-ee2e2e098f37?w=500&auto=format&fit=crop" alt="Fatehpur Sikri" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights in Agra</h2>

      <div class="sight-item">
        <h3>The Taj Mahal</h3>
        <p>One of the Seven Wonders of the World, this symmetrical white marble mausoleum stands as the ultimate timeless symbol of love.</p>
      </div>
      <div class="sight-item">
        <h3>Agra Fort</h3>
        <p>A massive 16th-century red sandstone fortress housing Jahangir Mahal, Diwan-i-Khas, and the Musamman Burj.</p>
      </div>
      <div class="sight-item">
        <h3>Fatehpur Sikri</h3>
        <p>Located 36 km from Agra, this preserved Mughal city features the towering Buland Darwaza and the Tomb of Salim Chishti.</p>
      </div>
      <div class="sight-item">
        <h3>Mehtab Bagh</h3>
        <p>A peaceful riverside Mughal garden offering unobstructed sunset views of the Taj Mahal across the Yamuna.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>