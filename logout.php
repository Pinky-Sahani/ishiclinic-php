<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION = [];          // important
session_unset();
session_destroy();

/* Kill cache on logout page too */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

header("Location: /ishiclinic/login.php");
exit;
