<?php
require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

/* CHECK ID */
// if (!isset($_GET['id'])) {
//     die("Feature ID is missing");
// }

// $id = (int) $_GET['id'];

// /* CALL DELETE FUNCTION */
// deleteFeature($conn, $id);
if (!isset($_GET['id'])) {
    redirectWithToast('manage_ourfeatures.php', 'error', 'ID is missing');
}

$id = (int) $_GET['id'];

/* Call delete function */
$isDeleted = deleteFeature($conn, $id);

if ($isDeleted) {
    redirectWithToast('manage_ourfeatures.php', 'success', 'Item deleted successfully');
} else {
    redirectWithToast('manage_ourfeatures.php', 'error', 'Delete failed');
}
