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
    die("Therapy ID is missing");
}

$id = (int) $_GET['id'];

// Call delete function
deleteTherapy($conn, $id);
?>