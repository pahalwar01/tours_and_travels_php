<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>Jaipur</title>
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
        <h2 style="margin-top: -30px; font-size: 30px;">Jaipur - The Pink City</h2>
        <hr style="margin-top: -16px;">
        <p style="text-align: justify; margin: 20px; font-size: 18px;">
            Jaipur – The Pink City – Rajasthan’s vibrant capital, famed for its striking pink-hued architecture, grand palaces, and bustling bazaars. Known for landmarks like the Hawa Mahal, City Palace, and Amber Fort, Jaipur beautifully blends royal heritage with colorful culture.
        </p><br>
        <hr style="margin-top: -16px;">
                <div>
                    <marquee behavior="scroll" direction="left" scrollamount="15">
                        <img src="https://cdn.pixabay.com/photo/2023/07/17/05/38/jaipur-8131863_640.jpg" alt="jaipur-1" style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_640.jpg" alt="jaipur-2"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2015/01/07/11/44/india-591377_640.jpg" alt="jaipur-3"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2018/03/20/20/05/gaitore-ki-chhatriyan-3244463_640.jpg" alt="jaipur-4"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2022/12/02/17/37/indian-man-7631365_640.jpg" alt="jaipur-5"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1649073868642-bcbbd06239d8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGphaXB1cnxlbnwwfHwwfHx8MA%3D%3D" alt="jaipur-6"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                    </marquee>
                </div><br><br>
                <hr style="margin-top: -16px;">
                <h2 class="paragraph-header" style="font-size: 22px;"><u>Famous sights to visit at Jaipur</u></h2>
                <br>
                <div>
                    <ul class="places-to-visit" contextmenu="sopts" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
                        <li><b><u>Hawa Mahal (Palace of Winds)</u></b></li>
                        <p>Built in 1799, this five-story architectural marvel was designed for the royal ladies to observe street festivals without being seen. Its striking honeycomb-like façade, crafted from red and pink sandstone, features 953 intricately carved jharokhas (windows), making it one of Jaipur’s most iconic landmarks.</p>
                        <li><b><u>City Palace</u></b></li>
                        <p>Located in the old part of Jaipur, the City Palace complex was built by Maharaja Sawai Jai Singh II and remains the residence of the city's royal family. It is a blend of Mughal and Rajput styles and contains museums, gardens, and beautiful doorways.</p>
                        <li><b><u>Nahargarh Fort</u></b></li>
                        <p>Perched on a ridge of the Aravalli Hills, this historic fort offers sweeping panoramic views of Jaipur, especially enchanting at sunset. Showcasing exquisite Indo-European architecture, it houses a palace with 12 identical boudoirs, each built for one of the queens, reflecting the grandeur of royal life.</p>
                        <li><b><u>Jal Mahal</u></b></li>
                        <p>This captivating palace appears to float in the middle of Man Sagar Lake. While access to the palace's interior is restricted, its beautiful facade and serene setting with the Nahargarh Hills in the background make it a popular spot for photographs. </p>
                        <li><b><u>Jantar Mantar</u></b></li>
                        <p>Jantar Mantar is a UNESCO World Heritage Site and one of the most fascinating scientific landmarks of India. Built between 1724 and 1734 by Maharaja Sawai Jai Singh II, it is an open-air astronomical observatory that reflects the scientific and architectural genius of the era.</p>
                        <li><b><u>Birla Mandir</u></b></li>
                        <p>This breathtaking, pure white marble temple is dedicated to Lord Vishnu and Goddess Lakshmi. Located at the base of Moti Dungari Hill, its tranquil atmosphere and stunning architecture make it a popular attraction for both devotees and tourists. </p>
                        <li><b><u>Panna Meena ka Kund</u></b></li>
                        <p>This unique stepwell near Amber Fort was once used to provide water for domestic and agricultural use. Its symmetrical design and intricate stairways make it a fascinating place to visit and photograph.</p>
                        <li><b><u>Markets of the Old City (Johari Bazaar, Bapu Bazaar)</u></b></li>
                        <p>Perfect for shopping traditional jewelry, textiles, and handicrafts.</p>
                    </ul>
                </div>

    </div>

  </section>

<!-- footer section-->
  <?php include '../../footer.php'; ?>

</body>
</html>