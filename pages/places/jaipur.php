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
  <title>Jaipur Heritage Tour - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
  <style>
    .destination-hero-card {
      background: var(--card-bg);
      border-radius: var(--radius);
      padding: 35px;
      border: 1px solid var(--border-color);
      box-shadow: var(--shadow);
      margin-bottom: 30px;
    }
    .place-badge-group {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 15px;
    }
    .place-badge {
      background: #fef3c7;
      color: #b45309;
      font-size: 12px;
      font-weight: 700;
      padding: 5px 12px;
      border-radius: 20px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .quick-meta-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 15px;
      margin: 25px 0;
      padding: 20px;
      background: var(--bg-page);
      border-radius: 10px;
      border: 1px solid var(--border-color);
    }
    .meta-box { text-align: center; }
    .meta-box i { font-size: 20px; color: var(--primary); margin-bottom: 6px; }
    .meta-box strong { display: block; font-size: 0.95rem; color: var(--dark); }
    .meta-box span { font-size: 0.85rem; color: var(--text-muted); }
    
    .itinerary-card {
      border-left: 3px solid var(--primary);
      padding: 0 0 25px 20px;
      position: relative;
    }
    .itinerary-card::before {
      content: "";
      position: absolute;
      left: -9px;
      top: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background: var(--primary);
      border: 3px solid #ffffff;
      box-shadow: 0 0 0 2px var(--primary);
    }
    .itinerary-card h4 { font-size: 1.15rem; color: var(--dark); margin-bottom: 6px; }
    .itinerary-card p { font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin: 0; }

    .package-perks-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .perks-box {
      background: var(--bg-page);
      border: 1px solid var(--border-color);
      border-radius: 10px;
      padding: 24px;
    }
    .perks-box h4 {
      font-size: 1.1rem;
      color: var(--dark);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .perks-box ul { list-style: none; padding: 0; margin: 0; }
    .perks-box ul li {
      position: relative;
      padding-left: 24px;
      margin-bottom: 10px;
      font-size: 0.9rem;
      color: var(--text-main);
    }
    .perks-in ul li::before { content: "✔"; position: absolute; left: 0; color: #16a34a; font-weight: bold; }
    .perks-out ul li::before { content: "✖"; position: absolute; left: 0; color: #dc2626; font-weight: bold; }

    .booking-cta-strip {
      background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
      color: #ffffff;
      border-radius: var(--radius);
      padding: 35px 25px;
      margin-top: 40px;
      text-align: center;
    }
    .booking-cta-strip h3 { font-size: 1.8rem; color: #facc15; margin-bottom: 8px; }
    .booking-cta-strip p { max-width: 650px; margin: 0 auto 20px auto; font-size: 0.98rem; color: #cbd5e1; }
    @media (max-width: 768px) {
      .destination-hero-card { padding: 22px 16px; }
      .quick-meta-grid { grid-template-columns: repeat(2, 1fr); }
    }
  </style>
</head>
<body>

  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="destination-hero-card">
      <div class="place-badge-group">
        <span class="place-badge">Royal Heritage</span>
        <span class="place-badge">Golden Triangle</span>
        <span class="place-badge">Delhi NCR Weekend Getaway</span>
      </div>

      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 10px;">Jaipur - The Pink City</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
        The vibrant capital of Rajasthan, famously known as the Pink City, is a world-class showcase of Rajput royalty, formidable hill fortresses, intricately carved palaces, and bustling cultural bazaars. Situated just a 4-hour expressway drive from Delhi NCR, it is the top choice for executive off-sites and memorable family weekends.
      </p>

      <div class="quick-meta-grid">
        <div class="meta-box">
          <i class="fa-solid fa-clock"></i>
          <strong>Duration</strong>
          <span>Plans Available</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-landmark-dome"></i>
          <strong>Theme</strong>
          <span>Forts, Royal Palaces & Culture</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-calendar-check"></i>
          <strong>Best Season</strong>
          <span>September - March</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-car"></i>
          <strong>Transit</strong>
          <span>Delhi-Mumbai Expressway</span>
        </div>
      </div>

      <h3 style="font-size: 1.3rem; color: var(--dark); margin-bottom: 12px;">Visual Highlights</h3>
      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Hawa Mahal" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2023/07/17/05/38/jaipur-8131863_640.jpg" alt="Amer View" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2015/01/07/11/44/india-591377_640.jpg" alt="City Palace" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2018/03/20/20/05/gaitore-ki-chhatriyan-3244463_640.jpg" alt="Gaitore" loading="lazy">
      </div>

      <h3 style="font-size: 1.5rem; color: var(--dark); margin: 35px 0 18px 0;">Major Attractions Covered</h3>
      
      <div class="sight-item">
        <h3>Amer Fort (Amber Palace) & Sheesh Mahal</h3>
        <p>A hilltop fortress overlooking Maota Lake, famous for its grand courtyards and the dazzling mirror palace (Sheesh Mahal).</p>
      </div>
      <div class="sight-item">
        <h3>Hawa Mahal & City Palace</h3>
        <p>The iconic 5-storey pink sandstone façade with 953 jharokhas, coupled with the royal museum preserving Rajput armor and royal attire.</p>
      </div>
      <div class="sight-item">
        <h3>Nahargarh & Jaigarh Forts</h3>
        <p>Perched high on the Aravalli range, providing sunset views of Jaipur and housing the world's largest cannon on wheels (Jaivana).</p>
      </div>
      <div class="sight-item">
        <h3>Jal Mahal & Chokhi Dhani Ethnic Resort</h3>
        <p>Admire the floating palace on Man Sagar Lake, followed by an evening experiencing authentic Rajasthani folk dances, music, and royal thali dining at Chokhi Dhani.</p>
      </div>

      <div class="itinerary-section">
        <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 20px;">Planned Itinerary (Delhi to Jaipur)</h3>

        <div class="itinerary-card">
          <h4>Day 1: Delhi NCR to Jaipur Drive & Evening City Walk</h4>
          <p>Morning pickup in luxury AC Dzire/Innova Crysta or Tempo Traveller via the Delhi-Mumbai Expressway. Arrive in Jaipur, check-in to heritage hotel, and visit Birla Mandir and Albert Hall Museum illuminated at night.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 2: Royal Forts, Palaces & Rajasthani Folk Dinner</h4>
          <p>Morning excursion to Amer Fort (optional elephant ride or jeep transfer). Photo-stop at Jal Mahal, followed by guided exploration of City Palace and Jantar Mantar. Evening cultural feast at Chokhi Dhani.</p>
        </div>

        <div class="itinerary-card" style="border-left-color: transparent;">
          <h4>Day 3: Hawa Mahal, Bazaars & Return Drive to Delhi</h4>
          <p>Morning visit to Hawa Mahal for iconic pictures. Free time for traditional handicraft and jewelry shopping at Johari and Bapu Bazaars. Post-lunch return drive to Delhi NCR.</p>
        </div>
      </div>

      <div class="package-perks-grid">
        <div class="perks-box perks-in">
          <h4><i class="fa-solid fa-circle-check" style="color: #16a34a;"></i> What's Included</h4>
          <ul>
            <li>Round-trip Delhi NCR to Jaipur transport in dedicated private AC cab</li>
            <li>Accommodation in 3-star/4-star heritage property</li>
            <li>Daily traditional buffet breakfast</li>
          </ul>
        </div>

        <div class="perks-box perks-out">
          <h4><i class="fa-solid fa-circle-xmark" style="color: #dc2626;"></i> What's Excluded</h4>
          <ul>
            <li>Monuments entrance tickets and licensed guide camera fees</li>
            <li>Elephant ride / Jeep charges at Amer Fort</li>
            <li>Personal tips, shopping expenses, and extra meals</li>
          </ul>
        </div>
      </div>

      <div class="booking-cta-strip">
        <h3>Book Your Royal Jaipur Holiday with TMN Travels</h3>
        <p>Reliable cabs, curated heritage properties, and corporate conference spaces tailored to your team size.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 26px; background: #ffffff; color: var(--dark); text-decoration: none;">
            <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20I%20want%20to%20know%20more%20about%20the%20Jaipur%20Heritage%20Tour." 
             target="_blank" 
             rel="noopener noreferrer" 
             class="btn-submit" 
             style="width: auto; padding: 12px 26px; background: #25D366; color: #ffffff; text-decoration: none;">
            <i class="fa-brands fa-whatsapp"></i> Get Custom Quote on WhatsApp
          </a>
        </div>
      </div>

    </div>
  </main>

  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>
