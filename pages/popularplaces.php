<?php
// pages/popularplaces.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}

$prefix = file_exists('pages/places') ? 'pages/places/' : 'places/';
?>
<div style="width: 100%; text-align: center;">
    <h2 style="font-size: 2rem; color: var(--dark); margin-bottom: 8px; font-weight: 700;">Popular Places to Visit</h2>
    <p style="color: var(--text-muted); margin-bottom: 30px;">Explore India's most loved travel getaways</p>
    
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        
        <a href="<?php echo $prefix; ?>manali.php" class="dest-card" style="width: 190px;">
          <img src="https://cdn.pixabay.com/photo/2021/02/19/14/38/mountain-6030438_1280.jpg" alt="Manali" loading="lazy" style="height: 130px;">
          <div style="padding: 12px; font-weight: 600; color: var(--dark);">Manali</div>
        </a>

        <a href="<?php echo $prefix; ?>uttrakhand.php" class="dest-card" style="width: 190px;">
          <img src="https://cdn.pixabay.com/photo/2022/04/25/05/46/lord-shiva-7155120_1280.jpg" alt="Uttarakhand" loading="lazy" style="height: 130px;">
          <div style="padding: 12px; font-weight: 600; color: var(--dark);">Uttarakhand</div>
        </a>

        <a href="<?php echo $prefix; ?>jaipur.php" class="dest-card" style="width: 190px;">
          <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Jaipur" loading="lazy" style="height: 130px;">
          <div style="padding: 12px; font-weight: 600; color: var(--dark);">Jaipur</div>
        </a>

        <a href="<?php echo $prefix; ?>rishikesh.php" class="dest-card" style="width: 190px;">
          <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Rishikesh" loading="lazy" style="height: 130px;">
          <div style="padding: 12px; font-weight: 600; color: var(--dark);">Rishikesh</div>
        </a>

        <a href="<?php echo $prefix; ?>agra.php" class="dest-card" style="width: 190px;">
          <img src="https://cdn.pixabay.com/photo/2023/03/26/20/48/tajmahal-7879103_640.jpg" alt="Agra" loading="lazy" style="height: 130px;">
          <div style="padding: 12px; font-weight: 600; color: var(--dark);">Agra</div>
        </a>

    </div>
</div>