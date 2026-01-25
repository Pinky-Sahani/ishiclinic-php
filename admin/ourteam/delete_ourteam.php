<?php
session_start();
// print_r($_SESSION);
$email = $_SESSION['email'] ?? '';
$role = $_SESSION['role'] ?? '';
if (empty($email)) {
    header("Location: /ishiclinic/login.php");
    exit;
}
require_once('../../connect.php');
require_once('../controllers/delete.php');

// Check ID
if (!isset($_GET['id'])) {
    die("Team ID is missing");
}

$id = $_GET['id'];

// Call delete function
deleteTeam($conn, $id);

