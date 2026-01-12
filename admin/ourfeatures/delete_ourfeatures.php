<?php
require_once('../../connect.php');
require_once('../controllers/delete.php');

/* CHECK ID */
if (!isset($_GET['id'])) {
    die("Feature ID is missing");
}

$id = (int) $_GET['id'];

/* CALL DELETE FUNCTION */
deleteFeature($conn, $id);
