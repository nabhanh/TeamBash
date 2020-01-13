<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$user = 'root';
//$password = 'Ciddharth2_';
$password = '';
$port = 8889;
$database = 'online_store';

$db = mysqli_connect($host, $user, $password, $database);
?>
