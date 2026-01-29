<?php
require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

// if (isset($_GET['id'])) {
//     deleteChooseUs($conn, $_GET['id']);
// }
if (!isset($_GET['id'])) {
    redirectWithToast('manage_chooseUs.php', 'error', 'ID is missing');
}

$id = (int) $_GET['id'];

/* Call delete function */
$isDeleted = deleteChooseUs($conn, $id);

if ($isDeleted) {
    redirectWithToast('manage_chooseUs.php', 'success', 'Item deleted successfully');
} else {
    redirectWithToast('manage_chooseUs.php', 'error', 'Delete failed');
}