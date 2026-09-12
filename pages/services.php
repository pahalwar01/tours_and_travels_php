<?php
// pages/services.php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <title>About Us & Services - <?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
  <style>
    /* Content Enhancement Styles */
    .about-lead-box {
      background: var(--card-bg);
      border-radius: var(--radius);
      padding: 40px;
      margin-bottom: 50px;
      border: 1px solid var(--border-color);
      box-shadow: var(--shadow);
    }
    .about-lead-box h2 {
      font-size: 2.1rem;
      color: var(--dark);
      margin-bottom: 18px;
      line-height: 1.3;
    }
    .about-lead-box p {
      font-size: 1.05rem;
      color: var(--text-main);
      margin-bottom: 16px;
      line-height: 1.8;
      text-align: justify;
    }
    .stats-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 30px;
      padding-top: 25px;
      border-top: 1px solid var(--border-color);
      text-align: center;
    }
    .stat-item h3 {
      font-size: 2.2rem;
      color: var(--primary);
      margin-bottom: 4px;
      font-weight: 800;
    }
    .stat-item p {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin: 0;
      text-align: center;
      font-weight: 600;
    }
    .detailed-service-item {
      background: var(--card-bg);
      border-radius: var(--radius);
      padding: 30px;
      border: 1px solid var(--border-color);
      box-shadow: var(--shadow);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .detailed-service-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    }
    .detailed-service-item .service-header-wrap {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 16px;
    }
    .detailed-service-item .icon-box {
      margin: 0;
      flex-shrink: 0;
    }
    .detailed-service-item h3 {
      font-size: 1.25rem;
      color: var(--dark);
      margin: 0;
    }
    .detailed-service-item p {
      color: var(--text-muted);
      font-size: 0.96rem;
      line-height: 1.7;
      margin-bottom: 15px;
    }
    .detailed-service-item ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .detailed-service-item ul li {
      position: relative;
      padding-left: 22px;
      margin-bottom: 8px;
      font-size: 0.9rem;
      color: var(--text-main);
    }
    .detailed-service-item ul li::before {
      content: "✔";
      position: absolute;
      left: 0;
      color: var(--primary);
      font-weight: bold;
    }
    .why-choose-banner {
      background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
      color: #ffffff;
      border-radius: var(--radius);
      padding: 40px 30px;
      margin-top: 50px;
      text-align: center;
    }
    .why-choose-banner h2 {
      font-size: 2rem;
      margin-bottom: 12px;
      color: #facc15;
    }
    .why-choose-banner p {
      max-width: 800px;
      margin: 0 auto 25px auto;
      font-size: 1.05rem;
      line-height: 1.7;
      color: #e2e8f0;
    }
    @media (max-width: 768px) {
      .about-lead-box {
        padding: 24px 18px;
      }
      .about-lead-box h2 {
        font-size: 1.6rem;
      }
      .detailed-service-item {
        padding: 22px 16px;
      }
    }
  </style>
</head>
<body>

  <!-- Header & Centered Navbar -->
  <?php include ROOT_PATH . '/header.php'; ?>
  <?php include ROOT_PATH . '/navbar.php'; ?>

  <main class="container">

    <!-- Section 1: About Us / Company Experience Narrative -->
    <section class="about-lead-box">
      <h2>Two Decades of Travel Excellence, Trust & Flawless Execution</h2>
      <p>
        At <strong><?php echo htmlspecialchars(AGENCY_NAME, ENT_QUOTES, 'UTF-8'); ?></strong>, we are more than just a travel agency; we are your dedicated logistics and travel management partners with over <strong>20+ years of operational experience</strong>. Over the last two decades, our core specialization has been in orchestrating large-scale corporate trips, executive business delegations, company annual off-sites, and customized luxury getaways for families across India.
      </p>
      <p>
        Our journey began with a mission to eliminate uncertainty from travel planning. Whether it is coordinating  corporate summit or planning a relaxed, multi-generation family vacation in the hills, our team handles every minute detail with utmost precision. From curated hotel and luxury resort tie-ups to end-to-end transport—covering everything from local intra-city employee pick-ups to multi-day outstation road expeditions—we deliver reliable, secure, and memorable journeys.
      </p>

      <!-- Key Achievement Stats 
      <div class="stats-row">
        <div class="stat-item">
          <h3>20+</h3>
          <p>Years of Industry Experience</p>
        </div>
        <div class="stat-item">
          <h3>10,000+</h3>
          <p>Successful Trips Managed</p>
        </div>
        <div class="stat-item">
          <h3>500+</h3>
          <p>Corporate Clients & Groups</p>
        </div>
        <div class="stat-item">
          <h3>100%</h3>
          <p>Safe & Verified Fleet</p>
        </div>
      </div>-->
    </section>

    <!-- Section 2: Detailed Services Grid -->
    <div class="section-header">
      <h2>Comprehensive Travel & Logistics Services</h2>
      <p>Seamless execution for corporate events, leisure tours, accommodations, and road mobility</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
      
      <!-- Service 1: Corporate Travel Management -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-briefcase"></i></div>
            <h3>Corporate Travel & MICE</h3>
          </div>
          <p>
            With 20+ years of corporate handling, we manage end-to-end logistics for business delegations, executive board retreats, annual corporate meetings, and reward trips.
          </p>
          <ul>
            <li>Conference, summit, and meeting venue reservations</li>
            <li>GST-compliant consolidated corporate billing</li>
            <li>Dedicated on-site travel coordinators for smooth management</li>
            <li>Priority flight ticketing and fast VIP arrangements</li>
          </ul>
        </div>
      </div>

      <!-- Service 2: Customized Family & Group Tours -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-people-roof"></i></div>
            <h3>Custom Family Vacations</h3>
          </div>
          <p>
            We design thoughtful, comfortable, and tailored holiday packages for families, couples, and groups of friends to India's top tourist destinations.
          </p>
          <ul>
            <li>Child- and senior-citizen friendly personalized itineraries</li>
            <li>Sightseeing tours in Himachal, Uttarakhand, Rajasthan & Goa</li>
            <li>Flexible pacing with handpicked cultural and leisure activities</li>
            <li>24/7 telephonic assistance throughout the travel duration</li>
          </ul>
        </div>
      </div>

      <!-- Service 3: Hotel & Resort Bookings -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-hotel"></i></div>
            <h3>Hotels, Resorts & Heritage Stays</h3>
          </div>
          <p>
            Enjoy preferred corporate and group tariffs through our verified hospitality network spanning luxury 5-star properties, boutique resorts, and business hotels.
          </p>
          <ul>
            <li>Verified inventory across budget, deluxe, and luxury categories</li>
            <li>Special meal arrangements (buffets, banquets, custom catering)</li>
            <li>Early check-in / late check-out priority support</li>
            <li>Pre-vetted hygiene, security, and amenities verification</li>
          </ul>
        </div>
      </div>

      <!-- Service 4: Local Conveyance & Cab Services -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-car"></i></div>
            <h3>Local Conveyance & Transfers</h3>
          </div>
          <p>
            Prompt intra-city conveyance solutions for local corporate meetings, employee transfers, airport pick-and-drops, and full-day city sightseeing.
          </p>
          <ul>
            <li>Airport and railway station transfers with zero wait times</li>
            <li>Executive sedans (Dzire, Etios) & premium cabs (Innova Crysta)</li>
            <li>Uniformed, verified, and route-trained chauffeurs</li>
            <li>Hourly and full-day dedicated city rental packages</li>
          </ul>
        </div>
      </div>

      <!-- Service 5: Outstation Travel & Fleet Management -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-van-shuttle"></i></div>
            <h3>Outstation Cabs & Luxury Buses</h3>
          </div>
          <p>
            For inter-state trips and long-distance travel, we provide well-maintained vehicles equipped for high-altitude hill journeys and express highways.
          </p>
          <ul>
            <li>Luxury 12 to 26-seater Tempo Travellers with pushback seats</li>
            <li>Air-conditioned Volvo, BharatBenz, and deluxe group coaches</li>
            <li>Commercial all-India tourist permits with complete documentation</li>
            <li>Strict vehicle maintenance and cleanliness protocols</li>
          </ul>
        </div>
      </div>

      <!-- Service 6: Flight Ticketing & Itinerary Brokering -->
      <div class="detailed-service-item">
        <div>
          <div class="service-header-wrap">
            <div class="icon-box"><i class="fa-solid fa-plane-departure"></i></div>
            <h3>Air Ticketing & Group Flights</h3>
          </div>
          <p>
            Skip the hassle of complex flight searches. We provide competitive group fares, flexible rescheduling, and rapid ticket issuance for domestic destinations.
          </p>
          <ul>
            <li>Special group block bookings with leading domestic airlines</li>
            <li>Prompt boarding pass management and web check-in support</li>
            <li>Hassle-free cancellation and immediate rebooking handling</li>
            <li>Transparent pricing with clear tax and baggage breakdowns</li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Section 3: Professional Commitment Banner -->
    <section class="why-choose-banner">
      <h2>Partner with Delhi & NCR's Trusted Travel Specialists</h2>
      <p>
        Whether you are planning a corporate conference for your enterprise or a peaceful vacation for your loved ones, our 20+ years of ground expertise guarantees dependable execution, punctuality, and complete peace of mind.
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:<?php echo AGENCY_PHONE; ?>" class="btn-submit" style="width: auto; padding: 12px 28px; background: #ffffff; color: var(--dark); text-decoration: none;">
          <i class="fa-solid fa-phone"></i> Call: <?php echo AGENCY_PHONE; ?>
        </a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener noreferrer" class="btn-submit" style="width: auto; padding: 12px 28px; background: #25D366; color: #ffffff; text-decoration: none;">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <?php include ROOT_PATH . '/footer.php'; ?>

</body>
</html>