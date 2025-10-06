<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>

  <!--header name and contact details-->
    <div class="topbar">
        <div><strong><?php include 'brand_name.php'; ?></strong></div>
            <a>
                📞 +91 9876543210 | ✉ travelagency@email.com
            </a>
    </div>
  <!--header name and contact details end-->

  <header style="background:url('https://cdn.pixabay.com/photo/2020/03/01/00/55/compass-4891499_1280.jpg')
                center/cover no-repeat;  
                height:20vh; 
                color:white; 
                text-align:center; 
                display:flex; 
                flex-direction:column; 
                justify-content:center; 
                position:relative;">
    <h1 class="brand-name" style="color: rgb(250, 255, 0);"><b><?php include 'brand_name.php'; ?></b></h1>
    <p class="brand-slogan"><b>"Your Journey, Our Responsibility"</b></p>
    <p class="brand-slogan-lastline" style="margin-top: -10px;">"Trusted tours and travels company in Delhi & NCR."</p>
  </header>
</body>
</html>
