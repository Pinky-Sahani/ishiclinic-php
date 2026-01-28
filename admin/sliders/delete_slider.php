<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

// Check ID
if (!isset($_GET['id'])) {
    die("Slider ID is missing");
}

$id = $_GET['id'];

// Call delete function
deleteSlider($conn, $id);
