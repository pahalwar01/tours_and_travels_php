<?php
// pages/places/goa.php
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
  <title>Goa Beach Getaway - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="place-content">
      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 12px;">Goa - Pearl of the Orient</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 25px;">
        Renowned for its golden beaches, vibrant beach shacks, Portuguese colonial heritage, and water sports, Goa provides the ideal destination for both relaxing family vacations and energetic group retreats.
      </p>

      <div class="gallery-row">
        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=500&auto=format&fit=crop" alt="Goa Beach" loading="lazy">
        <img src="https://images.unsplash.com/photo-1642922835816-e2ac68db5c42?w=500&auto=format&fit=crop" alt="Palm Trees" loading="lazy">
        <img src="https://images.unsplash.com/photo-1582972236019-ea4af5ffe587?w=500&auto=format&fit=crop" alt="Sunset in Goa" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2021/02/03/10/54/se-cathedral-5977488_640.jpg" alt="Se Cathedral" loading="lazy">
      </div>

      <h2 style="font-size: 1.6rem; color: var(--dark); margin: 30px 0 20px 0;">Famous Sights in Goa</h2>

      <div class="sight-item">
        <h3>Calangute & Candolim Beaches</h3>
        <p>The center of coastal activity in North Goa, offering parasailing, jet skiing, and oceanfront dining shacks.</p>
      </div>
      <div class="sight-item">
        <h3>Fort Aguada</h3>
        <p>A 17th-century Portuguese coastal fortress featuring a historic lighthouse and views of the Arabian Sea.</p>
      </div>
      <div class="sight-item">
        <h3>Se Cathedral & Basilica of Bom Jesus</h3>
        <p>UNESCO World Heritage monuments in Old Goa showcasing classical Portuguese-Manueline architecture.</p>
      </div>
      <div class="sight-item">
        <h3>Dudhsagar Waterfalls</h3>
        <p>A tiered waterfall cascading inside Bhagwan Mahaveer Sanctuary, popular for jungle jeep safaris.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>