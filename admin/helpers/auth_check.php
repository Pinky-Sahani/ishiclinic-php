<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Prevent browser caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");

// Authorization check
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'master') {
    header("Location: /ishiclinic/login.php");
    exit;
}
