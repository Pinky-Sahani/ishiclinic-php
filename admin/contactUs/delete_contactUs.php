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

if (isset($_GET['id'])) {
    deleteContactMessage($conn, $_GET['id']);
}

?>
