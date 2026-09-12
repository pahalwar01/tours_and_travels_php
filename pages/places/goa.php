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
  <title>Goa Tour Package - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
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
        <span class="place-badge">Coastal Paradise</span>
        <span class="place-badge">Beaches & Water Sports</span>
        <span class="place-badge">Corporate Retreats & Groups</span>
      </div>

      <h2 style="font-size: 2.2rem; color: var(--dark); margin-bottom: 10px;">Goa - Pearl of the Orient</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
        Renowned for its sun-kissed golden shores, vibrant beach shacks, 16th-century Portuguese architecture, and ocean adventures, Goa is India's leading leisure getaway. Our package caters to both high-spirited corporate off-sites seeking seaside team-building and families desiring a relaxing coastal escape.
      </p>

      <div class="quick-meta-grid">
        <div class="meta-box">
          <i class="fa-solid fa-clock"></i>
          <strong>Duration</strong>
          <span>Plans Available</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-umbrella-beach"></i>
          <strong>Vibe</strong>
          <span>Beach, Culture & Nightlife</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-calendar-check"></i>
          <strong>Best Season</strong>
          <span>Oct - April (Pleasant Sea Breeze)</span>
        </div>
        <div class="meta-box">
          <i class="fa-solid fa-plane"></i>
          <strong>Transit</strong>
          <span>Dabolim / Mopa Airport Transfers</span>
        </div>
      </div>

      <h3 style="font-size: 1.3rem; color: var(--dark); margin-bottom: 12px;">Visual Highlights</h3>
      <div class="gallery-row">
        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=500&auto=format&fit=crop" alt="Goa Beach" loading="lazy">
        <img src="https://images.unsplash.com/photo-1642922835816-e2ac68db5c42?w=500&auto=format&fit=crop" alt="Palm Trees" loading="lazy">
        <img src="https://images.unsplash.com/photo-1582972236019-ea4af5ffe587?w=500&auto=format&fit=crop" alt="Sunset in Goa" loading="lazy">
        <img src="https://cdn.pixabay.com/photo/2021/02/03/10/54/se-cathedral-5977488_640.jpg" alt="Se Cathedral" loading="lazy">
      </div>

      <h3 style="font-size: 1.5rem; color: var(--dark); margin: 35px 0 18px 0;">Major Attractions Covered</h3>
      
      <div class="sight-item">
        <h3>Calangute, Baga & Candolim Beaches</h3>
        <p>The lively hub of North Goa with water sports including parasailing, jet-skiing, banana rides, and beachfront dining.</p>
      </div>
      <div class="sight-item">
        <h3>Fort Aguada & Lighthouse</h3>
        <p>A well-preserved 17th-century Portuguese fortress standing proudly over the Arabian Sea, featuring an ancient coastal lighthouse.</p>
      </div>
      <div class="sight-item">
        <h3>Old Goa Heritage Churches</h3>
        <p>Visit UNESCO World Heritage sites including the Basilica of Bom Jesus (relics of St. Francis Xavier) and Se Cathedral.</p>
      </div>
      <div class="sight-item">
        <h3>Mandovi River Sunset Cruise & Dudhsagar Excursions</h3>
        <p>An evening luxury cruise along the Mandovi River with traditional Goan folk performances and optional safaris to Dudhsagar Waterfalls.</p>
      </div>

      <div class="itinerary-section">
        <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 20px;">Planned Itinerary (North & South Goa)</h3>

        <div class="itinerary-card">
          <h4>Day 1: Arrival, Resort Check-in & Evening Beach Walk</h4>
          <p>Pickup from Goa Airport (GOI/GOX) or Madgaon railway station via private AC cab. Transfer to your beach resort, refresh, and spend the evening enjoying beach shacks and sunset at Baga Beach.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 2: North Goa Coastal Sights & Water Sports</h4>
          <p>Full day dedicated to North Goa. Explore Fort Aguada, Sinquerim, Candolim, and Anjuna Beach. Enjoy pre-arranged water adventures and evening shopping at the local markets.</p>
        </div>

        <div class="itinerary-card">
          <h4>Day 3: South Goa Cultural Tour, Old Churches & River Cruise</h4>
          <p>Post-breakfast tour to Old Goa's heritage churches, Mangueshi Temple, and the Latin Quarter (Fontainhas). In the evening, board an exclusive 1-hour sunset cruise on River Mandovi.</p>
        </div>

        <div class="itinerary-card" style="border-left-color: transparent;">
          <h4>Day 4: Leisure Morning & Departure</h4>
          <p>Relax poolside, enjoy a lavish buffet breakfast, and pick up authentic Goan spices, feni, or cashews before your scheduled transfer back to the airport.</p>
        </div>
      </div>

      <div class="package-perks-grid">
        <div class="perks-box perks-in">
          <h4><i class="fa-solid fa-circle-check" style="color: #16a34a;"></i> What's Included</h4>
          <ul>
            <li>Airport / Railway Station pick-and-drop in private AC vehicle</li>
            <li>Accommodation in 3-star or 4-star beach resort with swimming pool</li>
            <li>Daily buffet breakfast at the resort</li>
          </ul>
        </div>

        <div class="perks-box perks-out">
          <h4><i class="fa-solid fa-circle-xmark" style="color: #dc2626;"></i> What's Excluded</h4>
          <ul>
            <li>Direct payment for water sports (jet ski, scuba diving, parasailing)</li>
            <li>Lunches, extra beverages, and personal laundry expenses</li>
            <li>Jeep safari charges for Dudhsagar Falls trip</li>
          </ul>
        </div>
      </div>

      <div class="booking-cta-strip">
        <h3>Plan Your Corporate Off-Site or Beach Holiday</h3>
        <p>Special corporate package discounts, group hotel inventory, and custom team outings available.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 26px; background: #ffffff; color: var(--dark); text-decoration: none;">
            <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20I%20want%20to%20inquire%20about%20the%20Goa%20Tour%20Package." 
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