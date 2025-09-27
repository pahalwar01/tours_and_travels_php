<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>Agra</title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://plus.unsplash.com/premium_photo-1700244449064-ea9d8af9e951?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1hbmFsaSUyMDRrfGVufDB8fDB8fHww') center/cover fixed no-repeat;
        color:#333;}
    /* Top Contact Bar */
    .topbar {
      background:#007bff;
      color:white;
      padding:8px 20px;
      display:flex;
      justify-content:space-between;
      align-items:center;
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
    
    /* Sections */
    section { padding:40px; text-align:center; color: black; }
    .contact-form { max-width:500px; margin:auto; }
    input, textarea { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
    button { padding:10px 20px; background:#007bff; color:white; border:none; border-radius:5px; cursor:pointer; }
    footer { background:rgba(0,0,0,0.5); 
            color:white; 
            padding:20px; 
            text-align:center; 
            border-radius:10px;  }
    .social-icons a {
      color:white;
      margin:0 10px;
      font-size:20px;
      text-decoration:none;
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
        <h2 style="margin-top: -30px; font-size: 30px;">Agra - City of the Taj</h2>
        <hr style="margin-top: -16px;">
        <p style="text-align: justify; margin: 20px; font-size: 18px;">
            Agra – The City of the Global Symbol of Love – Home to the world-famous Taj Mahal, this historic city on the banks of the Yamuna River is a timeless symbol of love and Mughal grandeur. Agra also attracts countless visitors with its other UNESCO World Heritage Sites, including the majestic Agra Fort and the splendid Mughal city of Fatehpur Sikri, along with many other remarkable monuments that showcase its rich architectural and cultural heritage.
        </p><br>
        <hr style="margin-top: -16px;">
                <div>
                    <marquee behavior="scroll" direction="left" scrollamount="15">
                        <img src="https://cdn.pixabay.com/photo/2019/03/12/20/19/india-4051753_640.jpg" alt="agra-1" style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2019/04/10/17/51/agra-4117671_640.jpg" alt="agra-2"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2014/06/29/20/08/agra-fort-379686_640.jpg" alt="agra-3"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1697644297524-ee2e2e098f37?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8RmF0ZWhwdXIlMjBTaWtyaXxlbnwwfHwwfHx8MA%3D%3D" alt="agra-4"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://astonishingindia.net/wp-content/uploads/2011/11/p5210234.jpg?w=1024" alt="agra-5"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://plus.unsplash.com/premium_photo-1721587040154-4b56d8111c6b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8U3VyJTIwU2Fyb3ZhciUyMEJpcmQlMjBTYW5jdHVhcnl8ZW58MHx8MHx8fDA%3D" alt="agra-6"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                    </marquee>
                </div><br><br>
                <hr style="margin-top: -16px;">
                <h2 class="paragraph-header" style="font-size: 22px;"><u>Famous sights to visit at Agra</u></h2>
                <br>
                <div>
                    <ul class="places-to-visit" contextmenu="sopts" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
                        <li><b><u>The Taj Mahal</u></b></li>
                        <p>
                            One of the Seven Wonders of the World and a UNESCO World Heritage Site, the Taj Mahal is an enduring symbol of love. Built in the 17th century by Mughal Emperor Shah Jahan in memory of his beloved wife Mumtaz Mahal, this breathtaking white marble mausoleum stands gracefully on the banks of the Yamuna River. Renowned for its symmetrical Mughal architecture, intricate inlay work, and the way its marble glows under changing daylight, the Taj Mahal is a timeless masterpiece that draws millions of visitors from around the globe.
                        </p>
                        <li><b><u>Agra Fort</u></b></li>
                        <p>
                            Agra Fort is a magnificent 16th-century fortress built by Emperor Akbar in red sandstone. Enclosed within massive walls, this grand complex houses exquisite palaces, audience halls, and beautiful mosques. Notable structures include the Jahangir Mahal, Diwan-i-Khas, Diwan-i-Aam, and the Musamman Burj, where Shah Jahan is believed to have spent his final days gazing at the Taj Mahal. Agra Fort stands as a symbol of the Mughal Empire’s architectural brilliance and rich history.
                        </p>
                        <li><b><u>Fatehpur Sikri</u></b></li>
                        <p>
                            This place is 36 K.M. from Agra, Fatehpur Sikri is a magnificent 16th-century city built by Mughal Emperor Akbar as his imperial capital. Constructed primarily in red sandstone, it showcases a unique blend of Persian and Indian architectural styles. Key highlights include the Buland Darwaza, one of the tallest gateways in the world; the stunning Jama Masjid; Panch Mahal; and the Tomb of Salim Chishti, revered as a sacred Sufi shrine.
                        </p>
                        <li><b><u>Itmad-ud-Daulah's Tomb</u></b></li>
                        <p>
                            Often called the “Baby Taj”, this exquisite mausoleum is regarded as a draft of the Taj Mahal. Built between 1622 and 1628 by Nur Jahan, the wife of Mughal Emperor Jahangir, in memory of her father Mirza Ghiyas Beg (Itmad-ud-Daulah), it is the first Mughal monument in India constructed entirely of white marble.
                        </p>
                        <li><b><u>Mehtab Bagh</u></b></li>
                        <p>
                            Located directly across the Yamuna River from the Taj Mahal, Mehtab Bagh is a beautifully laid-out Mughal garden offering one of the most stunning and unobstructed views of the Taj, especially at sunset. Originally built by Emperor Babur and later renovated by Shah Jahan, the garden features symmetrical pathways, fountains, and lush greenery. Known as the “Moonlight Garden,” Mehtab Bagh provides a serene and romantic setting, making it a favorite spot for photographers and visitors seeking a perfect Taj Mahal backdrop.
                        </p>
                        <li><b><u>Akbar's Tomb</u></b></li>
                        <p>
                            Located in Sikandra, a suburb of Agra, this is the final resting place of the Mughal emperor Akbar. The tomb is an impressive blend of Islamic, Hindu, and Persian architectural styles, reflecting Akbar's policy of religious tolerance. The complex is surrounded by beautiful gardens and features intricate carvings and inlay work, making it a significant historical and architectural landmark.
                        </p>
                        <li><b><u>Sur Sarovar Bird Sanctuary</u></b></li>
                        <p>
                            Also known as Keetham Lake, this picturesque sanctuary is a haven for nature lovers and birdwatchers. Spread around a tranquil, horseshoe-shaped lake, it is home to over 165 species of resident and migratory birds, including pelicans, herons, and kingfishers. The sanctuary also houses the Sloth Bear Rescue Center, where rescued bears are rehabilitated. Offering serene boat rides and scenic walking trails, Sur Sarovar provides a refreshing escape into nature just a short drive from Agra’s bustling city center.
                        </p>
                    </ul>
                </div>

    </div>

  </section>

<!-- footer start -->
 <?php include '../../footer.php'; ?>
<!-- footer end -->
</body>
</html>