<?php
require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

// Check ID
// if (!isset($_GET['id'])) {
//     die("Team ID is missing");
// }

// $id = $_GET['id'];

// // Call delete function
// deleteTeam($conn, $id);
if (!isset($_GET['id'])) {
    redirectWithToast('manage_ourteam.php', 'error', 'ID is missing');
}

$id = (int) $_GET['id'];

/* Call delete function */
$isDeleted = deleteTeam($conn, $id);

if ($isDeleted) {
    redirectWithToast('manage_ourteam.php', 'success', 'Item deleted successfully');
} else {
    redirectWithToast('manage_ourteam.php', 'error', 'Delete failed');
}

