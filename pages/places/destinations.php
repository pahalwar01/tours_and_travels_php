<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>Destinations</title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://plus.unsplash.com/premium_photo-1700244449064-ea9d8af9e951?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1hbmFsaSUyMDRrfGVufDB8fDB8fHww') center/cover fixed no-repeat;
        color:#333;}
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


  <section id="destination">

        <!-- Popular Destinations Section -->
    <h2 class="paragraph-header" style="font-size: 22px;"><u>Popular Destinations</u></h2>
      <div style="display: flex; justify-content: center; gap: 24px; flex-wrap: wrap;">
        <a href="manali.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2021/02/19/14/38/mountain-6030438_1280.jpg" alt="Manali" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Manali</b></strong>
            </div>
          </div>
        </a>
        <a href="goa.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2017/05/30/05/46/goa-2355885_1280.jpg" alt="Goa" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Goa</b></strong>
            </div>
          </div>
        </a>
        <a href="jaipur.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Jaipur" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Jaipur</b></strong>
            </div>
          </div>
        </a>
        <a href="rishikesh.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Rishikesh" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Rishikesh</b></strong>
            </div>
          </div>
        </a>
        <a href="agra.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2023/03/26/20/48/tajmahal-7879103_640.jpg" alt="Agra" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Agra</b></strong>
            </div>
          </div>
        </a>
        <a href="uttrakhand.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2022/04/25/05/46/lord-shiva-7155120_1280.jpg" alt="uttrakhand" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Utrakhand</b></strong>
            </div>
          </div>
        </a>
      </div>
      <br><hr>

  </section>

<!--footer start-->

<?php include '../../footer.php'; ?>

</body>
</html>