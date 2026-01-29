<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* 🚫 Kill browser cache completely */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: no-store, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

/* 🔐 Auth check */
if (!isset($_SESSION['id'])) {
    header("Location: /ishiclinic/login.php");
    exit;
}


// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'master') {
//     header("Location: /ishiclinic/login.php");
//     exit;
// }