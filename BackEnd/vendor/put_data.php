<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "INSERT INTO vendor ( name, phone, password ) VALUES ( ?, ?, ?)";

$bind = $db->prepare($query);
$bind->bind_param('sis', $_GET['name'], $_GET['phone'], $_GET['password']);
$bind->execute();

echo 'vendor Added!'
?>
