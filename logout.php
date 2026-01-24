<?php
session_start();
session_destroy();
header("Location: /ishiclinic/login.php");
exit;
