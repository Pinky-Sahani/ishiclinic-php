<?php
session_start();
session_unset();
session_destroy();

header("Location: /ishiclinic/login.php");
exit;
