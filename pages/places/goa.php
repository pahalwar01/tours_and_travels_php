<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>GOA</title>
  <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://images.unsplash.com/photo-1501436513145-30f24e19fcc8?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover fixed no-repeat;
        color:#333;}
        /* Top Contact Bar */
      .topbar {
          background:#007bff;
          color:white;
          padding:8px 20px;
          display:flex;
          justify-content:space-between;
          align-items: center;
          font-size:13px;
      }
      .topbar a { color:white; text-decoration:none; margin-left:0px; } 

      /* Hero Header */
      header::before {
          content:"";
          position:absolute;
          top:0; left:0; right:0; bottom:0;
          background:rgba(0,0,0,0.1); /* dark overlay */
      }
      header .hero-text {
          position:relative;
          z-index:1;
      }
      header h1 { font-size:3rem; color: aqua; margin:0; margin-bottom: -10px; }
      header p { font-size:1.2rem; color: white; }


      footer { background:rgba(0,0,0,0.5); 
              color:white; 
              padding:10px;
              text-align:center; 
              border-radius:10px;}

      /* Sections */
      section { padding:40px; text-align:center; color: black; }
      .contact-form { max-width:500px; margin:auto; }
      input, textarea { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
      button { padding:10px 20px; background:#007bff; color:white; border:none; border-radius:5px; cursor:pointer; }

      .social-icons a {
          color:white;
          margin:0 10px;
          font-size:20px;
          text-decoration:none;
      }

      .hover:hover {
          transform: scale(1.25);
          box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }

      /* WhatsApp Floating Button */
      .whatsapp-float {
          position:fixed;
          bottom:20px;
          right:20px;
          height: 26px;
          background:#25D366;
          color:white;
          border-radius:50%;
          padding:15px;
          font-size:25px;
          box-shadow:0 4px 10px rgba(0,0,0,0.3);
          text-decoration:none;
          z-index:1000;
      }

      .paragraph-header{
          font-weight: bold;
          margin-top: 20px;
          font-size: 22px;
          margin-bottom: 15px;
      }

      .places-to-visit p{
          margin-bottom: 15px;
          margin-top: 5px;
          font-size: 15px;
      }

      .services-text h3{
          color: rgb(0, 255, 233);
      }

      .services-text p{
          color: white;
          font-size: 14px;
          margin-top: -10px;
      }
      @media screen and (max-width: 600px) {
          .brand-name{
              font-size: 18px;
          }
          .brand-slogan{
              font-size: 12px;
          }
          .brand-slogan-lastline{
              font-size: 14px;
          }
          .navbar a {
              font-size: 12px;
          }

          header h1 { font-size:1.3rem; color: aqua; margin:0; margin-bottom: -10px; }
          header p { font-size:1rem; color: white; }

          .topbar {
          background:#007bff;
          color:white;
          padding:8px 10px;
          display:flex;
          justify-content:space-between;
          align-items: center;
          font-size:0.7rem;
          }

          .topbar a { color:white; text-decoration:none; margin-right:0px; font-size: 0.7rem; } 

      }
  </style>
</head>
<body>

  <!--header name and contact details-->

  <?php include '../../header.php'; ?>

<!-- nav bar -->
  <nav class="navbar" style="background: rgba(0, 0, 0, 0.7); padding: 10px 20px; display: flex; justify-content: center; gap: 20px; position: sticky; top: 0; z-index: 100;">
    <a href="../../index.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
    <a href="../services.php" style="color: white; text-decoration: none; font-weight: bold;">Services</a>
    <a href="destinations.php" style="color: white; text-decoration: none; font-weight: bold;">Destinations</a>
    <a href="../contactus.php" style="color: white; text-decoration: none; font-weight: bold;">Contact Us</a>
  </nav>


  <section id="about">

    <div>
        <h2 style="margin-top: -30px; font-size: 30px;">Goa - Pearl of the Orient</h2>
        <hr style="margin-top: -16px;">
        <p style="text-align: justify; margin: 20px; font-size: 18px;">
            Goa, often referred to as the "Pearl of the Orient," is a small state located on the western coast of India. Known for its stunning beaches, vibrant nightlife, and rich cultural heritage, Goa is a popular destination for tourists from around the world. The state boasts a unique blend of Indian and Portuguese influences, evident in its architecture, cuisine, and festivals. Visitors can explore historic churches, indulge in water sports, and savor delicious seafood while enjoying the laid-back atmosphere that Goa is famous for. Whether you're looking for relaxation or adventure, Goa offers something for everyone. 
        </p><br>
        <hr style="margin-top: -16px;">
                <div>
                    <marquee behavior="scroll" direction="left" scrollamount="15">
                        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z29hfGVufDB8fDB8fHww" alt="goa-1" style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1642922835816-e2ac68db5c42?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Z29hfGVufDB8fDB8fHww" alt="goa-2"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1582972236019-ea4af5ffe587?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGdvYXxlbnwwfHwwfHx8MA%3D%3D" alt="goa-3"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1614082242765-7c98ca0f3df3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Z29hJTIwYmVhY2h8ZW58MHx8MHx8fDA%3D" alt="goa-4"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1589428000126-afdd64ae1f3a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fGdvYSUyMGJlYWNofGVufDB8fDB8fHww" alt="goa-5"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2021/02/03/10/54/se-cathedral-5977488_640.jpg" alt="goa-6"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                    </marquee>
                </div><br><br>
                <hr style="margin-top: -16px;">
                <h2 class="paragraph-header" style="font-size: 22px;"><u>Famous sights to visit at Goa</u></h2>
                <br>
                <div>
                    <ul class="places-to-visit" contextmenu="sopts" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
                        <li><b><u>Calangute Beach</u></b></li>
                        <p>Known as the "Queen of Beaches," this is Goa's largest beach, offering a mix of relaxation and water adventures.</p>
                        <li><b><u>Candolim Beach</u></b></li>
                        <p>A tranquil and less crowded alternative to Baga and Calangute, with clean sand and pleasant shacks.</p>
                        <li><b><u>Butterfly Beach</u></b></li>
                        <p>This secluded and pristine paradise is ideal for couples seeking a peaceful and romantic escape.</p>
                        <li><b><u>Se Cathedral</u></b></li>
                        <p>One of the largest churches in Asia, this magnificent 16th-century cathedral in Old Goa is a UNESCO site dedicated to St. Catherine of Alexandria.</p>
                        <li><b><u>Mandovi River Cruises</u></b></li>
                        <p>Enjoy a delightful dinner or lounge boat ride along the scenic Mandovi River, complete with live music, traditional dance performances, and vibrant onboard entertainment for an unforgettable evening.</p>
                        <li><b><u>Fort Aguada</u></b></li>
                        <p>Built by the Portuguese in 1612, this majestic fort offers sweeping views of the Arabian Sea and the confluence of the Mandovi River. It also houses a 19th-century lighthouse and an old jail, making it a must-visit historic landmark.</p>
                        <li><b><u>Shree Mangesh Temple</u></b></li>
                        <p>One of the most significant temples in Goa, this sacred site is dedicated to an incarnation of Lord Shiva. Renowned for its elegant Goan temple architecture and serene surroundings, it offers a peaceful spiritual experience.</p>
                        <li><b><u>Dudhsagar Waterfalls</u></b></li>
                        <p>Meaning “Sea of Milk,” this spectacular four-tiered cascade is among the tallest waterfalls in India. Nestled within the lush Bhagwan Mahaveer Sanctuary and Mollem National Park, it offers a breathtaking sight, especially during the monsoon.</p>
                    </ul>
                </div>

    </div>

  </section>

<!-- footer start -->
<?php include '../../footer.php'; ?>

</body>
</html>