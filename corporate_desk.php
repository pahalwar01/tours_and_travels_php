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
    padding: 40px 30px;
    max-width: 850px;
    margin: 0 auto;
    border: 1px solid var(--border-color);
  }

  .corporate-desk-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .corporate-card {
    background: var(--bg-page);
    border: 1px solid var(--border-color);
    border-radius: 10px;
    padding: 24px 20px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .corporate-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.06);
    border-color: var(--primary);
  }

  .corporate-card .card-icon {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    margin: 0 auto 15px auto;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
  }

  .corporate-card h3 {
    font-size: 1.15rem;
    color: var(--dark);
    margin-bottom: 6px;
  }

  .corporate-card p {
    font-size: 0.88rem;
    color: var(--text-muted);
    margin-bottom: 20px;
    line-height: 1.4;
  }

  .action-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    min-height: 44px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
  }

  /* Specific Card Variants */
  .card-call .card-icon { background: #e0f2fe; color: var(--primary); }
  .card-call .action-link { background: var(--primary); color: #fff; }
  .card-call .action-link:hover { background: var(--primary-dark); }

  .card-email .card-icon { background: #f1f5f9; color: var(--dark); }
  .card-email .action-link { background: var(--dark); color: #fff; }
  .card-email .action-link:hover { background: #1e293b; }

  .card-wa .card-icon { background: #dcfce7; color: #16a34a; }
  .card-wa .action-link { background: #16a34a; color: #fff; }
  .card-wa .action-link:hover { background: #15803d; }

  .corporate-badge {
    display: inline-block;
    background: #e0f2fe;
    color: var(--primary);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 10px;
  }
</style>

<div class="corporate-desk-wrapper">
  <div class="section-header" style="margin-bottom: 10px;">
    <h2>Contact Our Travel Desk</h2>
    <p>Direct priority support for Employee Off-sites, Corporate Cab fleets, and Group Outbounds</p>
  </div>

  <div class="corporate-desk-grid">
    <!-- Direct Phone Line -->
    <div class="corporate-card card-call">
      <div>
        <div class="card-icon"><i class="fa-solid fa-phone"></i></div>
        <h3>Direct Line</h3>
        <p>Immediate assistance for urgent bookings & transport requests</p>
      </div>
      <a href="tel:<?php echo AGENCY_PHONE; ?>" class="action-link">
        <i class="fa-solid fa-phone-volume"></i> <?php echo AGENCY_PHONE; ?>
      </a>
    </div>

    <!-- Official RFP / Quotation Email -->
    <div class="corporate-card card-email">
      <div>
        <div class="card-icon"><i class="fa-solid fa-envelope"></i></div>
        <h3>Corporate RFPs</h3>
        <p>Send formal requirements, invoices, and customized quotation RFPs</p>
      </div>
      <a href="mailto:<?php echo AGENCY_EMAIL; ?>?subject=Corporate%20Travel%20Inquiry" class="action-link">
        <i class="fa-solid fa-paper-plane"></i> Send Email
      </a>
    </div>

    <!-- Priority WhatsApp Line -->
    <div class="corporate-card card-wa">
      <div>
        <div class="card-icon"><i class="fa-brands fa-whatsapp"></i></div>
        <h3>Priority WhatsApp</h3>
        <p>Instant itinerary PDFs, vehicle photos, and quick manager chat</p>
      </div>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20TMN%20Travels,%20we%20have%20a%20corporate%20travel%20requirement." 
         target="_blank" 
         rel="noopener noreferrer" 
         class="action-link">
        <i class="fa-brands fa-whatsapp"></i> Chat Direct
      </a>
    </div>
  </div>

<!--  
  <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-around; flex-wrap: wrap; gap: 15px; font-size: 13px; color: var(--text-muted);">
    <span><i class="fa-solid fa-shield-halved" style="color: var(--primary); margin-right: 5px;"></i> GST Compliant Invoicing</span>
    <span><i class="fa-solid fa-file-contract" style="color: var(--primary); margin-right: 5px;"></i> Annual Vendor Contracts</span>
    <span><i class="fa-solid fa-clock" style="color: var(--primary); margin-right: 5px;"></i> 24/7 Dedicated Account Manager</span>
  </div>-->
</div>