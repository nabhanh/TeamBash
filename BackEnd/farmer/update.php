<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE farmer
SET name = ?, location= ?,phone=?,password=?
WHERE id= ?";

$bind = $db->prepare($query);
$bind->bind_param('ssisi', $_GET['name'], $_GET['location'], $_GET['phone'], $_GET['password'], $_GET['id']);
$bind->execute();

echo 'Farmer Updated!'
?>
