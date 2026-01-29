<?php
require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

// Check ID
// if (!isset($_GET['id'])) {
//     die("Therapy ID is missing");
// }

// $id = (int) $_GET['id'];

// // Call delete function
// deleteTherapy($conn, $id);
$id = (int) $_GET['id'];

/* Call delete function */
$isDeleted = deleteTherapy($conn, $id);

if ($isDeleted) {
    redirectWithToast('manage_therapy.php', 'success', 'Item deleted successfully');
} else {
    redirectWithToast('manage_therapy.php', 'error', 'Delete failed');
}
?>