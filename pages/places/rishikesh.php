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
  <title>Rishikesh Adventure & Retreat - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
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
      background: #ccfbf1;
      color: #0f766e;
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
        <span class="place-badge">Yoga Capital</span>
        <span class="place-badge">White Water Rafting</span>
        <span class="place-badge">Riverside Luxury Camping</span>
      </div>

      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 10px;">Rishikesh - Yoga City of India</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
        Resting at the foothills of the Garhwal Himalayas where the sacred Ganga emerges into the plains, Rishikesh offers spiritual resonance and adventure sports. From white-water rafting and cliff jumping to yoga retreats and the evening Ganga Aarti, this is the prime weekend retreat for corporate teams and adventurous families.
      </p>

      <div class="quick-meta-grid">
        <div class="meta-box">
          <i class="fa-solid fa-clock"></i>
          <strong>Duration</strong>
          <span>Plans Available</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-person-swimming"></i>
          <strong>Adventure</strong>
          <span>Grade III/IV Rafting, Zipline</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-calendar-check"></i>
          <strong>Best Season</strong>
          <span>Sept - June (Rafting Active)</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-car"></i>
          <strong>Transit</strong>
          <span>5-6 Hrs Drive from Delhi NCR</span>
        </div>
      </div>

      <h3 style="font-size: 1.3rem; color: var(--dark); margin-bottom: 12px;">Visual Highlights</h3>
      <div class="gallery-row">
        <img src="https://cdn.pixabay.com/photo/2018/05/01/14/34/india-3365741_1280.jpg" alt="Rishikesh Ghats" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Temple" loading="lazy">
        <img src="https://images.unsplash.com/photo-1724432191302-6133b34c7105?w=500&auto=format&fit=crop" alt="Ram Jhula Bridge" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2020/01/16/08/17/rishikesh-4769868_640.jpg" alt="Ganga River" loading="lazy">
      </div>

      <h3 style="font-size: 1.5rem; color: var(--dark); margin: 35px 0 18px 0;">Major Attractions Covered</h3>
      
      <div class="sight-item">
        <h3>Shivpuri & Marine Drive Rafting</h3>
        <p>Experience 16 km or 26 km of white-water rapids (including Three Blind Mice, Crossfire, and Roller Coaster) with cliff jumping and body surfing.</p>
      </div>
      <div class="sight-item">
        <h3>Triveni Ghat & Parmarth Niketan Ganga Aarti</h3>
        <p>Witness the evening Maha Aarti where priests chant hymns and floating brass lamps illuminate the sacred river.</p>
      </div>
      <div class="sight-item">
        <h3>Ram Jhula, Laxman Jhula & Beatles Ashram</h3>
        <p>Cross the iconic suspension bridges and explore the Beatles Ashram (Chaurasi Kutia) adorned with murals and meditation caves.</p>
      </div>
      <div class="sight-item">
        <h3>Neelkanth Mahadev Temple & Patna Waterfall</h3>
        <p>A mountain pilgrimage dedicated to Lord Shiva situated amid dense valleys, paired with a trek to the limestone caves of Patna Waterfall.</p>
      </div>

      <div class="itinerary-section">
        <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 20px;">Planned Itinerary (Delhi to Rishikesh)</h3>

        <div class="itinerary-card">
          <h4>Day 1: Delhi NCR to Rishikesh Drive & Riverside Camp Check-in</h4>
          <p>Early morning departure from Delhi NCR in private AC cab / Tempo Traveller. Check-in to luxury riverside camp in Shivpuri/Mohanchatti. Enjoy volleyball, swimming pool, evening bonfire with music, and barbecue snacks.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 2: White Water Rafting, Cliff Jump & Evening Ganga Aarti</h4>
          <p>Gear up for 16 km river rafting from Shivpuri down to NIM Beach with certified river guides. In the evening, visit Parmarth Niketan or Triveni Ghat for the serene Ganga Aarti.</p>
        </div>

        <div class="itinerary-card" style="border-left-color: transparent;">
          <h4>Day 3: Sunrise Trek, Cafe Hopping & Return to Delhi</h4>
          <p>Morning walk to Patna Waterfall or visit Little Buddha Cafe in Tapovan overlooking the river. Check out and journey back to Delhi NCR with arrival by late evening.</p>
        </div>
      </div>

      <div class="package-perks-grid">
        <div class="perks-box perks-in">
          <h4><i class="fa-solid fa-circle-check" style="color: #16a34a;"></i> What's Included</h4>
          <ul>
            <li>Delhi NCR to Rishikesh round-trip transit in private AC cab/coach</li>
            <li>Stay in luxury AC alpine cottage / riverside resort</li>
            <li>All meals included (2 Breakfasts, 2 Lunches, 2 Dinners with evening snacks)</li>
            <li>Evening bonfire, music, and camp recreation activities</li>
          </ul>
        </div>

        <div class="perks-box perks-out">
          <h4><i class="fa-solid fa-circle-xmark" style="color: #dc2626;"></i> What's Excluded</h4>
          <ul>
            <li>Extreme adventures like Bungee Jumping, Giant Swing, and Flying Fox</li>
            <li>Entry ticket to Beatles Ashram</li>
            <li>Personal camera fees, extra snacks, and packaged drinks</li>
          </ul>
        </div>
      </div>

      <div class="booking-cta-strip">
        <h3>Book Your Rishikesh Group Camp with TMN Travels</h3>
        <p>Custom packages built for corporate team-building, college reunions, and family retreats.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 26px; background: #ffffff; color: var(--dark); text-decoration: none;">
            <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20I%20want%20to%20know%20about%20the%20Rishikesh%20Tour%20Package." 
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