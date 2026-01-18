<?php
require_once('../../connect.php');
require_once('../controllers/delete.php');

if (isset($_GET['id'])) {
    deleteContactMessage($conn, $_GET['id']);
}

?>
