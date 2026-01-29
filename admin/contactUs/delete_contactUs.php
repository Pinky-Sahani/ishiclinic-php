<?php
require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

// if (isset($_GET['id'])) {
//     deleteContactMessage($conn, $_GET['id']);
// }
if (!isset($_GET['id'])) {
    redirectWithToast('manage_contactUs.php', 'error', 'ID is missing');
}

$id = (int) $_GET['id'];

/* Call delete function */
$isDeleted = deleteContactMessage($conn, $id);

if ($isDeleted) {
    redirectWithToast('manage_contactUs.php', 'success', 'Item deleted successfully');
} else {
    redirectWithToast('manage_contactUs.php', 'error', 'Delete failed');
}

?>
