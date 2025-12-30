<?php
require_once('../../connect.php');

$id = $_GET['id'];

if (!isset($id)) {
    die("ID is missing");
}
$sql = "DELETE FROM therapies WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
header("Location: index.php");
?>