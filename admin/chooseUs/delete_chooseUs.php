<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../controllers/delete.php');

if (isset($_GET['id'])) {
    deleteChooseUs($conn, $_GET['id']);
}
