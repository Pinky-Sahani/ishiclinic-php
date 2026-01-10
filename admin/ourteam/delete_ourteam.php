<?php
require_once('../../connect.php');
require_once('../controllers/delete.php');

// Check ID
if (!isset($_GET['id'])) {
    die("Team ID is missing");
}

$id = $_GET['id'];

// Call delete function
deleteTeam($conn, $id);

