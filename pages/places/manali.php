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
  <title>Manali Tour Package - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
  <style>
    /* Manali Detailed Page Enhancements */
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
      background: #e0f2fe;
      color: var(--primary);
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
    .meta-box {
      text-align: center;
    }
    .meta-box i {
      font-size: 20px;
      color: var(--primary);
      margin-bottom: 6px;
    }
    .meta-box strong {
      display: block;
      font-size: 0.95rem;
      color: var(--dark);
    }
    .meta-box span {
      font-size: 0.85rem;
      color: var(--text-muted);
    }
    
    /* Itinerary Timeline */
    .itinerary-section {
      margin-top: 35px;
    }
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
    .itinerary-card h4 {
      font-size: 1.15rem;
      color: var(--dark);
      margin-bottom: 6px;
    }
    .itinerary-card p {
      font-size: 0.92rem;
      color: var(--text-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Inclusions / Exclusions Split */
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
    .perks-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .perks-box ul li {
      position: relative;
      padding-left: 24px;
      margin-bottom: 10px;
      font-size: 0.9rem;
      color: var(--text-main);
    }
    .perks-in ul li::before {
      content: "✔";
      position: absolute;
      left: 0;
      color: #16a34a;
      font-weight: bold;
    }
    .perks-out ul li::before {
      content: "✖";
      position: absolute;
      left: 0;
      color: #dc2626;
      font-weight: bold;
    }

    /* Bottom Sticky / Book Card */
    .booking-cta-strip {
      background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
      color: #ffffff;
      border-radius: var(--radius);
      padding: 35px 25px;
      margin-top: 40px;
      text-align: center;
    }
    .booking-cta-strip h3 {
      font-size: 1.8rem;
      color: #facc15;
      margin-bottom: 8px;
    }
    .booking-cta-strip p {
      max-width: 650px;
      margin: 0 auto 20px auto;
      font-size: 0.98rem;
      color: #cbd5e1;
    }
    @media (max-width: 768px) {
      .destination-hero-card {
        padding: 22px 16px;
      }
      .quick-meta-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>
<body>

  <!-- Header & Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">
    <div class="destination-hero-card">
      <div class="place-badge-group">
        <span class="place-badge">Himachal Pradesh</span>
        <span class="place-badge">Hills & Snow</span>
        <span class="place-badge">Family & Corporate Friendly</span>
      </div>

      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 10px;">Manali - Gem of Himachal</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
        Located at an altitude of 2,050 meters along the banks of the Beas River, Manali is India’s premier hill resort. Famous for towering Himalayan cedar forests, gushing rivers, world-class snow adventure sports at Solang Valley, and scenic mountain cafes, our curated Manali itinerary is crafted for both restful family vacations and high-energy corporate off-sites.
      </p>

      <!-- Quick Tour Highlights -->
      <div class="quick-meta-grid">
        <div class="meta-box">
          <i class="fa-solid fa-clock"></i>
          <strong>Duration</strong>
          <span>Plans Available</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-mountain-sun"></i>
          <strong>Altitude</strong>
          <span>6,726 Feet (2,050 m)</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-calendar-check"></i>
          <strong>Best Season</strong>
          <span>Oct - Jun (Snow: Dec - Feb)</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-car"></i>
          <strong>Transit</strong>
          <span>Delhi NCR Pickup & Drop</span>
        </div>
      </div>

      <!-- Touch Swipable Gallery -->
      <h3 style="font-size: 1.3rem; color: var(--dark); margin-bottom: 12px;">Visual Highlights</h3>
      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2021/10/19/11/52/nature-6723371_640.jpg" alt="Manali Valley" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2020/02/04/19/02/manali-4819132_640.jpg" alt="Snow Peaks" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2016/12/30/23/06/beas-river-1941786_640.jpg" alt="Beas River" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2016/01/16/16/08/mountaineerz-1143552_640.jpg" alt="Trek" loading="lazy">
      </div>

      <!-- Detailed Sights Breakdown -->
      <h3 style="font-size: 1.5rem; color: var(--dark); margin: 35px 0 18px 0;">Major Attractions Covered</h3>
      
      <div class="sight-item">
        <h3>Solang Valley & Atal Tunnel</h3>
        <p>The adventure epicentre of Himachal. Enjoy paragliding, zorbing, quad biking, and ropeway cable cars. Traverse the historic 9.02 km long Atal Tunnel to access the snowscapes of Sissu in Lahaul Valley.</p>
      </div>
      <div class="sight-item">
        <h3>Hadimba Devi Temple & Van Vihar</h3>
        <p>A 16th-century wooden pagoda shrine set amid centuries-old giant deodar cedars. Followed by a quiet walk through Van Vihar along the bank of the Beas.</p>
      </div>
      <div class="sight-item">
        <h3>Old Manali Village & Manu Temple</h3>
        <p>Experience colonial mountain charm, cobbled alleys, artistic riverside cafes, vibrant live acoustic music, and the historic wooden shrine dedicated to Sage Manu.</p>
      </div>
      <div class="sight-item">
        <h3>Jogini Falls & Vashisht Hot Springs</h3>
        <p>A gentle, scenic trek through apple orchards leading to the multi-tier cascading Jogini Falls, followed by a visit to the natural sulfur hot water springs of Vashisht.</p>
      </div>

      <!-- Day-Wise Itinerary Plan -->
      <div class="itinerary-section">
        <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 20px;">Planned Itinerary (Delhi to Delhi)</h3>

        <div class="itinerary-card">
          <h4>Day 1: Departure from Delhi & Scenic Mountain Drive</h4>
          <p>Overnight or early morning pickup from Delhi NCR via luxury AC Volvo or dedicated private cab. Cruise past Chandigarh and Mandi into the Beas Valley. Check-in to resort, welcome drink, and leisure evening at Mall Road.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 2: Solang Valley, Atal Tunnel & Sissu Day Trip</h4>
          <p>Post-breakfast excursion to Solang Valley for snow adventures. Drive through the marvel of Atal Tunnel to witness Sissu Waterfall and Lahaul’s mountain landscapes. Evening campfire at the resort.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 3: Local Heritage, Hadimba Temple & Old Manali Cafes</h4>
          <p>Explore cultural landmarks including Hadimba Temple, Club House, Tibetan Monastery, and the vibrant lanes of Old Manali. Evening free for local shopping of shawls, honey, and dry fruits.</p>
        </div>

        <div class="itinerary-card" style="border-left-color: transparent;">
          <h4>Day 4: Kullu White Water Rafting & Return to Delhi</h4>
          <p>Check out after breakfast. Stop at Kullu for exhilarating river rafting and paragliding sessions. Evening drive back to Delhi NCR with unforgettable mountain memories.</p>
        </div>
      </div>

      <!-- Package Inclusions & Exclusions -->
      <div class="package-perks-grid">
        <div class="perks-box perks-in">
          <h4><i class="fa-solid fa-circle-check" style="color: #16a34a;"></i> What's Included</h4>
          <ul>
            <li>Delhi NCR to Manali round-trip transport in verified AC Cab / Volvo</li>
            <li>Stay in premium 3-star or 4-star mountain resort</li>
            <li>Daily buffet breakfast and multi-cuisine chef-crafted dinners</li>
            <li>Dedicated trip coordinator and 24/7 telephonic assistance</li>
          </ul>
        </div>

        <div class="perks-box perks-out">
          <h4><i class="fa-solid fa-circle-xmark" style="color: #dc2626;"></i> What's Excluded</h4>
          <ul>
            <li>Adventure activity fees (Paragliding, River Rafting, Skiing, ATV rides)</li>
            <li>Entry tickets to monuments, museums, or cable car ropeways</li>
            <li>Personal expenses, laundry, room heaters, and extra beverages</li>
            <li>Travel insurance or emergency medical evacuations</li>
          </ul>
        </div>
      </div>

      <!-- Booking / Corporate Inquiry Action Strip -->
      <div class="booking-cta-strip">
        <h3>Plan Your Manali Getaway with TMN Travels</h3>
        <p>
          Customizable packages available for corporate off-sites, executive groups, couples, and family vacations with guaranteed transparent pricing.
        </p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 26px; background: #ffffff; color: var(--dark); text-decoration: none;">
            <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20I%20want%20to%20know%20more%20about%20the%20Manali%20Tour%20Package." 
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

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>