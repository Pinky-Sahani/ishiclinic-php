<?php


require_once('../helpers/auth_check.php');
require_once('../helpers/toast.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

if (!isset($_GET['id'])) {
    redirectWithToast(
        'manage_slider.php',
        'error',
        'Slider ID missing'
    );
    exit;
}

$id = (int) $_GET['id'];

$result = deleteSlider($conn, $id);

if ($result) {
    redirectWithToast(
        'manage_slider.php',
        'success',
        'Slider deleted successfully'
    );
} else {
    redirectWithToast(
        'manage_slider.php',
        'error',
        'Slider delete failed'
    );
}
exit;











// require_once('../helpers/auth_check.php');
// require_once('../../connect.php');
// require_once('../controllers/delete.php');

// // Check ID
// if (!isset($_GET['id'])) {
//     die("Slider ID is missing");
// }

// $id = $_GET['id'];

// // Call delete function
// deleteSlider($conn, $id);
