<?php
// index.php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <title><?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?> - Corporate Travel & Tour Specialists in Delhi NCR</title>
  
  <style>
    /* Landing Page Visual Highlights */
    .landing-hero {
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.88), rgba(2, 132, 199, 0.75)), 
                  url('https://cdn.pixabay.com/photo/2017/01/20/00/30/maldives-1993704_1280.jpg') center/cover no-repeat;
      padding: 70px 20px 80px 20px;
      color: #ffffff;
      text-align: center;
      position: relative;
    }
    .landing-hero .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 6px 18px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: 700;
      color: #facc15;
      letter-spacing: 0.5px;
      margin-bottom: 20px;
      border: 1px solid rgba(250, 204, 21, 0.3);
    }
    .landing-hero h1 {
      font-size: 2.8rem;
      font-weight: 800;
      line-height: 1.25;
      max-width: 900px;
      margin: 0 auto 16px auto;
    }
    .landing-hero p {
      font-size: 1.15rem;
      color: #e2e8f0;
      max-width: 750px;
      margin: 0 auto 30px auto;
      line-height: 1.7;
    }
    .hero-btn-group {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }
    .btn-hero {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 13px 28px;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 700;
      text-decoration: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .btn-hero:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .btn-primary-hero {
      background: #0284c7;
      color: #ffffff;
    }
    .btn-wa-hero {
      background: #25D366;
      color: #ffffff;
    }

    /* Trust Stats Strip */
    .trust-strip {
      background: #ffffff;
      border-bottom: 1px solid var(--border-color);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
      margin-top: -30px;
      border-radius: 12px;
      max-width: 1050px;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      z-index: 10;
      padding: 25px 20px;
    }
    .trust-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      text-align: center;
    }
    .trust-item h3 {
      font-size: 2rem;
      color: var(--primary);
      font-weight: 800;
      margin-bottom: 4px;
    }
    .trust-item p {
      font-size: 0.88rem;
      color: var(--text-muted);
      font-weight: 600;
      margin: 0;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Fleet Showcase Grid */
    .fleet-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 22px;
    }
    .fleet-card {
      background: var(--card-bg);
      border: 1px solid var(--border-color);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 25px 20px;
      text-align: center;
      transition: transform 0.2s ease;
    }
    .fleet-card:hover {
      transform: translateY(-4px);
    }
    .fleet-card .fleet-icon {
      width: 55px;
      height: 55px;
      background: #e0f2fe;
      color: var(--primary);
      border-radius: 50%;
      margin: 0 auto 15px auto;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }
    .fleet-card h4 {
      font-size: 1.15rem;
      color: var(--dark);
      margin-bottom: 8px;
    }
    .fleet-card p {
      font-size: 0.9rem;
      color: var(--text-muted);
      line-height: 1.5;
    }

    /* Testimonials Strip */
    .testimonial-card {
      background: #ffffff;
      border-left: 4px solid var(--primary);
      padding: 24px;
      border-radius: 8px;
      box-shadow: var(--shadow);
      border: 1px solid var(--border-color);
    }
    .testimonial-card p {
      font-style: italic;
      color: var(--text-main);
      margin-bottom: 14px;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .client-info {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .client-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: var(--primary);
    }
    .client-details h5 {
      font-size: 0.95rem;
      margin: 0;
      color: var(--dark);
    }
    .client-details span {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    @media (max-width: 768px) {
      .landing-hero {
        padding: 50px 15px 60px 15px;
      }
      .landing-hero h1 {
        font-size: 1.9rem;
      }
      .landing-hero p {
        font-size: 1rem;
      }
      .trust-strip {
        margin-top: -20px;
        padding: 20px 15px;
      }
      .trust-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
      }
    }
  </style>
</head>
<body>

  <!-- 1. Header & Centered Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <!-- 2. Dynamic Landing Hero Section -->
  <section class="landing-hero">
    <h1>Flawless Corporate Off-Sites, Luxury Fleets & Family Getaways</h1>
    <p>
      Trusted by leading enterprises, corporate leaders, and families across Delhi & NCR for end-to-end travel management, reliable outstation fleets, and verified resort experiences.
    </p>
    <div class="hero-btn-group">
      <a href="#contact" class="btn-hero btn-primary-hero">
        <i class="fa-solid fa-headset"></i> Connect Corporate Desk
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20we%20want%20to%20plan%20a%20trip." 
         target="_blank" 
         rel="noopener noreferrer" 
         class="btn-hero btn-wa-hero">
        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
      </a>
    </div>
  </section>

  <!-- 3. Trust Statistics Strip 
  <div class="container" style="padding-top: 0; padding-bottom: 0;">
    <div class="trust-strip">
      <div class="trust-grid">
        <div class="trust-item">
          <h3>20+</h3>
          <p>Years Experience</p>
        </div>
        <div class="trust-item">
          <h3>10,000+</h3>
          <p>Successful Trips</p>
        </div>
        <div class="trust-item">
          <h3>500+</h3>
          <p>Corporate Clients</p>
        </div>
        <div class="trust-item">
          <h3>24/7</h3>
          <p>On-Trip Desk Support</p>
        </div>
      </div>
    </div>
  </div>
  -->

  <!-- 4. Core Services Section -->
  <section class="container" id="services">
    <div class="section-header">
      <h2>Tailored Travel Solutions</h2>
      <p>Customized corporate logistics, employee mobility, and premium leisure holidays</p>
    </div>
    <div class="card-grid">
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-briefcase"></i></div>
        <h3>Corporate Off-Sites & MICE</h3>
        <p>End-to-end planning for executive retreats, annual conferences, and team-building off-sites.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-mountain-sun"></i></div>
        <h3>Custom Holiday Packages</h3>
        <p>Tailor-made itineraries for families and private groups across Himachal, Uttarakhand, and Rajasthan.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-hotel"></i></div>
        <h3>Resorts & Conference Stays</h3>
        <p>Pre-negotiated corporate rates at verified luxury resorts, heritage properties, and business hotels.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-van-shuttle"></i></div>
        <h3>Verified Outstation Fleet</h3>
        <p>AC sedans, Innova Crystas, luxury Tempo Travellers, and Volvo buses.</p>
      </div>
    </div>
  </section>

  <!-- 5. Popular Places Component -->
  <?php 
    $popularPlaces = ROOT_PATH . '/pages/popularplaces.php';
    if (file_exists($popularPlaces)) {
        echo '<section style="background: #ffffff; padding: 45px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); width: 100%;">';
        echo '<div class="container" style="padding-top: 0; padding-bottom: 0;">';
        include $popularPlaces;
        echo '</div>';
        echo '</section>';
    }
  ?>

  <!-- 6. Verified Fleet & Mobility Section -->
  <section class="container">
    <div class="section-header">
      <h2>Our Premium Mobility Fleet</h2>
      <p>Clean, certified, and road-ready commercial vehicles for local and outstation transit</p>
    </div>
    <div class="fleet-grid">
      <div class="fleet-card">
        <div class="fleet-icon"><i class="fa-solid fa-car-side"></i></div>
        <h4>Executive Sedans</h4>
        <p>Swift Dzire & Toyota Etios for punctual airport transfers, daily business meetings, and compact family tours.</p>
      </div>
      <div class="fleet-card">
        <div class="fleet-icon"><i class="fa-solid fa-car"></i></div>
        <h4>Premium MPVs</h4>
        <p>Toyota Innova Crysta for executive VIP delegations, long-distance highway comfort, and hill travel.</p>
      </div>
      <div class="fleet-card">
        <div class="fleet-icon"><i class="fa-solid fa-bus-simple"></i></div>
        <h4>Luxury Tempo Travellers</h4>
        <p>12, 16, 20 & 26-seater pushback tempo travellers equipped with charging ports and high-roof luggage setups.</p>
      </div>
      <div class="fleet-card">
        <div class="fleet-icon"><i class="fa-solid fa-van-shuttle"></i></div>
        <h4>Luxury Volvo Coaches</h4>
        <p>35 to 45-seater deluxe AC air-suspension coaches for large corporate off-sites and interstate group transit.</p>
      </div>
    </div>
  </section>

  <!-- 7. Why Choose Us Section -->
  <section class="container" style="padding-top: 0;">
    <div class="section-header">
      <h2>The TMN Travels Advantage</h2>
      <p>Why Enterprises and Families Rely on Us Year After Year</p>
    </div>
    <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-award"></i></div>
        <h3>20+ Years Ground Experience</h3>
        <p>Decades of field expertise in managing high-volume logistics and VIP corporate travel without execution errors.</p>
      </div>
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-hand-holding-dollar"></i></div>
        <h3>Competitive & Transparent Pricing</h3>
        <p>Clear rate <!--agreements--> with zero surprise driver charges, hidden surcharges, or booking markups.</p>
      </div>
      <!--<div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>GST-Compliant Corporate Billing</h3>
        <p>Single-window consolidated billing with 100% Input Tax Credit (ITC) compliance for accounts teams.</p>
      </div>-->
      <div class="feature-card">
        <div class="icon-wrap"><i class="fa-solid fa-headset"></i></div>
        <h3>Single Point of Contact (SPOC)</h3>
        <p>Dedicated travel manager overseeing vehicle allocation, driver coordination, and on-trip assistance 24/7.</p>
      </div>
    </div>
  </section>

  <!-- 8. Corporate Client Testimonials 
  <section style="background: #ffffff; padding: 50px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container" style="padding-top: 0; padding-bottom: 0;">
      <div class="section-header">
        <h2>What Our Clients Say</h2>
        <p>Trusted feedback from HR executives and corporate group organizers</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <div class="testimonial-card">
          <p>"TMN Travels managed our 180-member annual sales off-site to Rishikesh. The Volvo coordination and camp logistics were punctual and seamless. Highly recommended for corporate events."</p>
          <div class="client-info">
            <div class="client-avatar">RS</div>
            <div class="client-details">
              <h5>Rohit Sharma</h5>
              <span>Admin Head, IT Solutions Noida</span>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <p>"Booked a 4-day Manali family tour with an Innova Crysta. The driver was skilled on mountain roads and the resort selection was top-notch. Clean execution without any hassle."</p>
          <div class="client-info">
            <div class="client-avatar">VK</div>
            <div class="client-details">
              <h5>Vikas Khanna</h5>
              <span>Gurugram</span>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <p>"Reliable vendor for employee outstation transit and executive cab rentals. Clear GST invoicing and very cooperative customer desk."</p>
          <div class="client-info">
            <div class="client-avatar">PM</div>
            <div class="client-details">
              <h5>Pooja Mehta</h5>
              <span>HR Operations, Delhi NCR</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->

  <!-- 9. Dedicated Corporate & Booking Desk Section -->
  <section class="container" id="contact" style="padding-top: 50px;">
    <?php include ROOT_PATH . '/corporate_desk.php'; ?>
  </section>

  <!-- 10. Footer Component -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>