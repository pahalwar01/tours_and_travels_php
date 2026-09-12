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
  <title>Uttarakhand Tour Package - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
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
      background: #dbeafe;
      color: #1d4ed8;
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
        <span class="place-badge">Devbhumi</span>
        <span class="place-badge">Hills & Jungle Safari</span>
        <span class="place-badge">Mussoorie & Corbett Circuit</span>
      </div>

      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 10px;">Uttarakhand - Devbhumi (Land of the Gods)</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
        Known reverently as Devbhumi (Land of the Gods), Uttarakhand pairs sacred Himalayan vistas with colonial hill resorts and wildlife sanctuaries. This flagship circuit brings together the cascading falls of Mussoorie (Queen of the Hills) and royal Bengal tiger safaris at Jim Corbett National Park.
      </p>

      <div class="quick-meta-grid">
        <div class="meta-box">
          <i class="fa-solid fa-clock"></i>
          <strong>Duration</strong>
          <span>Plans Available</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-paw"></i>
          <strong>Circuit</strong>
          <span>Mussoorie Hills + Jim Corbett Safari</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-calendar-check"></i>
          <strong>Best Season</strong>
          <span>Year Round (Corbett Safaris: Oct - Jun)</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-van-shuttle"></i>
          <strong>Transit</strong>
          <span>Delhi NCR Pickup & Return</span>
        </div>
      </div>

      <h3 style="font-size: 1.3rem; color: var(--dark); margin-bottom: 12px;">Visual Highlights</h3>
      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2022/06/05/05/59/mussoorie-7243347_640.jpg" alt="Mussoorie" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2019/08/13/14/35/nature-4403564_640.jpg" alt="Uttarakhand Nature" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2019/07/03/16/05/india-4314909_640.jpg" alt="Himalayas" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2017/09/04/14/27/ranikhet-india-2714252_1280.jpg" alt="Ranikhet" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2018/01/21/09/56/tiger-3096211_640.jpg" alt="Corbett Tiger" loading="lazy">
      </div>

      <h3 style="font-size: 1.5rem; color: var(--dark); margin: 35px 0 18px 0;">Major Attractions Covered</h3>
      
      <div class="sight-item">
        <h3>Mussoorie (Queen of the Hills) & Kempty Falls</h3>
        <p>Stroll through colonial Mall Road, take in panoramic views of the Doon Valley from Gun Hill, and relax by the perennial Kempty Falls.</p>
      </div>
      <div class="sight-item">
        <h3>Jim Corbett National Park Jeep Safari</h3>
        <p>Embark on an open 4x4 Gypsy jungle safari through Corbett's Sal forests searching for wild elephants, deer herds, and Bengal tigers.</p>
      </div>
      <div class="sight-item">
        <h3>Nainital Boating & Snow View Point</h3>
        <p>Optional extension featuring serene yacht boating on the tear-drop shaped Naini Lake and ropeway cable car rides overlooking Nanda Devi peaks.</p>
      </div>
      <div class="sight-item">
        <h3>Har Ki Pauri & Haridwar Evening Aarti</h3>
        <p>Experience the chanting, oil lamps, and temple bells at the sacred bathing ghats along the Ganga during evening transit.</p>
      </div>

      <div class="itinerary-section">
        <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 20px;">Planned Itinerary (Delhi - Mussoorie - Corbett)</h3>

        <div class="itinerary-card">
          <h4>Day 1: Delhi NCR to Mussoorie Drive via Dehradun</h4>
          <p>Morning departure in verified AC vehicle. Scenic drive past Meerut and Dehradun ascending into the mountains. Check-in at Mussoorie hill resort. Evening stroll and shopping along Mall Road.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 2: Mussoorie Sightseeing & Mountain Views</h4>
          <p>Post-breakfast excursion to Kempty Falls, Company Garden, and Lal Tibba (highest viewpoint). Afternoon leisure with views across the snow-capped Himalayan ranges.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 3: Scenic Transit to Jim Corbett National Park</h4>
          <p>Scenic mountain descent towards Ramnagar. Check-in to luxury riverside wildlife resort in Corbett. Relax with resort amenities, swimming pool, evening bonfire, and acoustic dinner.</p>
        </div>

        <div class="itinerary-card" style="border-left-color: transparent;">
          <h4>Day 4: Early Morning 4x4 Tiger Safari & Return to Delhi</h4>
          <p>Sunrise open 4x4 Gypsy jungle safari in designated eco-zones (Bijrani/Jhirna/Dhela). Return to resort for brunch, check-out, and return drive to Delhi NCR arriving by night.</p>
        </div>
      </div>

      <div class="package-perks-grid">
        <div class="perks-box perks-in">
          <h4><i class="fa-solid fa-circle-check" style="color: #16a34a;"></i> What's Included</h4>
          <ul>
            <li>Delhi NCR to Uttarakhand round-trip transit in commercial AC fleet</li>
            <li>Stay in luxury resort or 3 or 4-star hotel</li>
            <li>Daily buffet breakfast and dinners at the resorts</li>
          </ul>
        </div>

        <div class="perks-box perks-out">
          <h4><i class="fa-solid fa-circle-xmark" style="color: #dc2626;"></i> What's Excluded</h4>
          <ul>
            <li>Government forest safari permit fees and guide charges at Jim Corbett</li>
            <li>Ropeway cable car tickets and boat rentals at lakes</li>
            <li>Room heaters and personal laundry expenses</li>
          </ul>
        </div>
      </div>

      <div class="booking-cta-strip">
        <h3>Plan Your Uttarakhand Expedition with TMN Travels</h3>
        <p>Reliable commercial drivers trained for Himalayan hill terrain, corporate off-site tie-ups, and flexible group quotes.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 26px; background: #ffffff; color: var(--dark); text-decoration: none;">
            <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20I%20want%20to%20know%20about%20the%20Uttarakhand%20Tour%20Package." 
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