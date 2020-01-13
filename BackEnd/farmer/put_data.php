<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "INSERT INTO farmer ( name, location, phone, password ) VALUES ( ?, ?, ?, ?)";

$bind = $db->prepare($query);
$bind->bind_param('ssis', $_GET['name'], $_GET['location'], $_GET['phone'], $_GET['password']);
$bind->execute();

echo 'farmer Added!'
?>
