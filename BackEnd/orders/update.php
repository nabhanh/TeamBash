<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "UPDATE orders
SET pid = ?, price= ?,qty=?,vid=?
WHERE id= ?";

$bind = $db->prepare($query);
$bind->bind_param('iiiii', $_GET['pid'], $_GET['price'], $_GET['qty'], $_GET['vid'], $_GET['id']);
$bind->execute();

echo 'Orders Updated!'
?>
