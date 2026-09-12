<?php
// corporate_desk.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}
?>
<style>
  .corporate-desk-wrapper {
    background: var(--card-bg);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    padding: 45px 35px;
    max-width: 950px;
    margin: 0 auto;
    border: 1px solid var(--border-color);
  }

  .corporate-badge {
    display: inline-block;
    background: #e0f2fe;
    color: var(--primary);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
  }

  .desk-intro-text {
    font-size: 1.02rem;
    color: var(--text-main);
    line-height: 1.8;
    text-align: center;
    max-width: 820px;
    margin: 0 auto 30px auto;
  }

  /* 3 Action Channels */
  .corporate-desk-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 22px;
    margin-top: 25px;
  }

  .corporate-card {
    background: var(--bg-page);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 28px 22px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .corporate-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
    border-color: var(--primary);
  }

  .corporate-card .card-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: 0 auto 16px auto;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
  }

  .corporate-card h3 {
    font-size: 1.2rem;
    color: var(--dark);
    margin-bottom: 8px;
  }

  .corporate-card p {
    font-size: 0.9rem;
    color: var(--text-muted);
    margin-bottom: 22px;
    line-height: 1.6;
  }

  .action-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    min-height: 46px;
    border-radius: 8px;
    font-size: 14.5px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
  }

  .card-call .card-icon { background: #e0f2fe; color: var(--primary); }
  .card-call .action-link { background: var(--primary); color: #fff; }
  .card-call .action-link:hover { background: var(--primary-dark); }

  .card-email .card-icon { background: #f1f5f9; color: var(--dark); }
  .card-email .action-link { background: var(--dark); color: #fff; }
  .card-email .action-link:hover { background: #1e293b; }

  .card-wa .card-icon { background: #dcfce7; color: #16a34a; }
  .card-wa .action-link { background: #16a34a; color: #fff; }
  .card-wa .action-link:hover { background: #15803d; }

  /* Explanatory Features Box */
  .corporate-features-panel {
    background: #f8fafc;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 30px;
    margin-top: 35px;
  }

  .corporate-features-panel h4 {
    font-size: 1.15rem;
    color: var(--dark);
    margin-bottom: 15px;
    text-align: center;
  }

  .features-bullet-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 18px;
    margin-top: 20px;
  }

  .feature-point {
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .feature-point i {
    color: var(--primary);
    font-size: 18px;
    margin-top: 3px;
    flex-shrink: 0;
  }

  .feature-point div strong {
    display: block;
    font-size: 0.95rem;
    color: var(--dark);
    margin-bottom: 3px;
  }

  .feature-point div p {
    font-size: 0.88rem;
    color: var(--text-muted);
    line-height: 1.5;
    margin: 0;
  }

  /* Workflow Steps */
  .process-steps-bar {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid var(--border-color);
    text-align: center;
  }

  .step-box {
    padding: 10px;
  }

  .step-box .step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--primary);
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 8px auto;
  }

  .step-box h5 {
    font-size: 0.95rem;
    color: var(--dark);
    margin-bottom: 4px;
  }

  .step-box p {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin: 0;
  }

  @media (max-width: 768px) {
    .corporate-desk-wrapper {
      padding: 25px 16px;
    }
    .corporate-features-panel {
      padding: 20px 15px;
    }
  }
</style>

<div class="corporate-desk-wrapper">
  <!-- Section Header with Explanatory Narrative -->
  <div class="section-header" style="margin-bottom: 12px;">
    <span class="corporate-badge">Direct Reservation Desk</span>
    <h2>Connect With Our Travel Desk</h2>
    <p>Fast-track coordination for Corporate Off-sites, Verified Cab Fleets, and Custom Family Tours</p>
  </div>

  <p class="desk-intro-text">
    Whether you are an HR manager planning an annual corporate conference, an admin team needing trusted executive cabs, or a family organizing a leisure vacation, our dedicated desk ensures instant responses without messy online forms. Reach out directly through your preferred channel:
  </p>

  <!-- 3 Dedicated Communication Channels -->
  <div class="corporate-desk-grid">
    <!-- Direct Calling Line -->
    <div class="corporate-card card-call">
      <div>
        <div class="card-icon"><i class="fa-solid fa-phone"></i></div>
        <h3>Direct Calling</h3>
        <p>Speak immediately with an on-duty travel specialist for urgent fleet allocations, airport pickups, or real-time package quotes.</p>
      </div>
      <a href="tel:<?php echo AGENCY_PHONE; ?>" class="action-link">
        <i class="fa-solid fa-phone-volume"></i> <?php echo AGENCY_PHONE; ?>
      </a>
    </div>

    <!-- Official Corporate Email / RFP -->
    <div class="corporate-card card-email">
      <div>
        <div class="card-icon"><i class="fa-solid fa-envelope"></i></div>
        <h3>Formal RFPs & Quotes</h3>
        <p>Send company tender RFPs, employee rosters, multi-city route requirements, and vendor onboarding documentation.</p>
      </div>
      <a href="mailto:<?php echo AGENCY_EMAIL; ?>?subject=Corporate%20Travel%20Quotation%20Request" class="action-link">
        <i class="fa-solid fa-paper-plane"></i> Send Official Email
      </a>
    </div>

    <!-- WhatsApp Business Desk -->
    <div class="corporate-card card-wa">
      <div>
        <div class="card-icon"><i class="fa-brands fa-whatsapp"></i></div>
        <h3>Priority WhatsApp</h3>
        <p>Receive comprehensive PDF itineraries, vehicle fleet photographs, driver details, and hotel options right on your phone.</p>
      </div>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20we%20want%20to%20inquire%20about%20a%20travel%20requirement." 
         target="_blank" 
         rel="noopener noreferrer" 
         class="action-link">
        <i class="fa-brands fa-whatsapp"></i> Chat On WhatsApp
      </a>
    </div>
  </div>

  <!-- How It Works (Simple 3-Step Process) -->
  <div class="process-steps-bar">
    <div class="step-box">
      <div class="step-number">1</div>
      <h5>Share Requirements</h5>
      <p>Tell us your group count, dates, and destination over call, email, or WhatsApp.</p>
    </div>
    <div class="step-box">
      <div class="step-number">2</div>
      <h5>Receive Custom Quote</h5>
      <p>Get a detailed itinerary, transparent pricing, and vehicle details within hours.</p>
    </div>
    <div class="step-box">
      <div class="step-number">3</div>
      <h5>Seamless Execution</h5>
      <p>Experience on-time pickups, pre-booked resorts, and managed on-ground travel.</p>
    </div>
    <div class="step-box">
      <div class="step-number">4</div>
      <h5>Single Point of Contact</h5>
      <p>Assigned senior account manager handling your itinerary from arrival to departure.</p>
    </div>
    <div class="step-box">
      <div class="step-number">5</div>
      <h5>24/7 Support</h5>
      <p>Instant breakdown replacements, driver coordination, and continuous route support.</p>
    </div>
  </div>
</div>