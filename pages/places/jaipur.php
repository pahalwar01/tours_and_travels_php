<?php
// pages/places/jaipur.php
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
  <title>Jaipur Royal Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Jaipur - The Pink City</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Rajasthan’s capital stands famous for its distinct pink-hued stone architecture, royal palaces, hill forts, and artisan bazaars, reflecting deep Rajput history.
      </p>

      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Hawa Mahal" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2023/07/17/05/38/jaipur-8131863_640.jpg" alt="Amer View" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2015/01/07/11/44/india-591377_640.jpg" alt="City Palace" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2018/03/20/20/05/gaitore-ki-chhatriyan-3244463_640.jpg" alt="Gaitore" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights in Jaipur</h2>

      <div class="sight-item">
        <h3>Hawa Mahal (Palace of Winds)</h3>
        <p>Built in 1799 with red and pink sandstone, featuring 953 carved windows (jharokhas) crafted for royal women to view city processions.</p>
      </div>
      <div class="sight-item">
        <h3>City Palace & Jantar Mantar</h3>
        <p>A royal museum complex alongside the world’s largest stone astronomical observatory built by Sawai Jai Singh II.</p>
      </div>
      <div class="sight-item">
        <h3>Nahargarh & Amber Fort</h3>
        <p>Hilltop fortresses perched over the Aravalli range offering defensive history and views across Jaipur.</p>
      </div>
      <div class="sight-item">
        <h3>Jal Mahal</h3>
        <p>A Rajput-style water palace situated inside Man Sagar Lake against the backdrop of the hills.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>