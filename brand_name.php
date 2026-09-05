<?php
// brand_name.php
if (!defined('SECURE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    exit("Direct access forbidden.");
}

echo htmlspecialchars("TMN's Travel Agency", ENT_QUOTES, 'UTF-8');