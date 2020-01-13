<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE vendor 
SET name = ?, phone= ?,password=?
WHERE id= ?";

$bind = $db->prepare($query);
$bind->bind_param('sisi', $_GET['name'], $_GET['phone'],$_GET['password'], $_GET['id']);
$bind->execute();

echo 'Vendor Updated!'
?>
