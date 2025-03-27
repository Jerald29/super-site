<?php
// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Get the base URL
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

// Redirect to dashboard
header("Location: {$baseUrl}/views/dashboard/index.php");
exit();