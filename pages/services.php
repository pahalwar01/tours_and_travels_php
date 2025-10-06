<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <title>Services</title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://plus.unsplash.com/premium_photo-1700244449064-ea9d8af9e951?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1hbmFsaSUyMDRrfGVufDB8fDB8fHww') center/cover fixed no-repeat;
        color:#333;}
  </style>
</head>
<body>

  <!--header name and contact details-->
    <?php include '../header.php'; ?>

  <!-- nav bar --> 
  <nav class="navbar" style="background: rgba(0, 0, 0, 0.7); padding: 10px 20px; display: flex; justify-content: center; gap: 20px; position: sticky; top: 0; z-index: 100;">
    <a href="../index.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
    <a href="services.php" style="color: white; text-decoration: none; font-weight: bold;">Services</a>
    <a href="../pages/places/destinations.php" style="color: white; text-decoration: none; font-weight: bold;">Destinations</a>
    <a href="contactus.php" style="color: white; text-decoration: none; font-weight: bold;">Contact Us</a>
  </nav>

  <section id="services-section">

    <h2 style="margin-top: -30px; font-size: 30px;">Our Services</h2>
    <hr style="margin-top: -16px;">
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 20px;">
      <div class="services-text" style="background: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h3>Customized Tour Packages (Family & Company)</h3>
        <p>Specially designed tour packages for families and corporate groups, planned to match your budget and travel preferences.</p>
      </div>
      <div class="services-text"style="background: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h3>Corporate Travel Solutions</h3>
        <p>Professional management for hotel bookings, meetings, and events to ensure your business trips are seamless and stress-free.</p>
      </div>
      <div class="services-text" style="background: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h3>Group Off-site / Trips</h3>
        <p>Perfectly organized group trips and off-site outings for large families or companies, with every detail arranged for maximum comfort.</p>
      </div>
      <div class="services-text" style="background: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h3>Cabs & Luxury Buses Booking</h3>
        <p>Hassle-free booking for all types of cabs and luxury buses, ensuring a safe and comfortable ride for both short and long-distance journeys.</p>
      </div><div class="services-text" style="background: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h3>Flight Booking</h3>
        <p>Quick and affordable flight booking for domestic destinations, so you can travel on time without any inconvenience.</p>
      </div>
    </div><br><br>
    <hr style="margin-top: -16px;">
    <h2 style="font-size: 20px; color: rgba(0, 0, 0, 0.8);">Our goal is to make every travel experience easy, safe, and unforgettable.</h2>

  </section>

<!--footer start-->

<?php include '../footer.php'; ?>

</body>
</html>