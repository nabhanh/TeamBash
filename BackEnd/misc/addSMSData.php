<?php
include '../login.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = $_POST['text'];
$str="";

$productArray = explode(",",$text);

for($i = 0; $i < count($productArray); $i++){
    $productText =  explode(" ",$productArray[$i]);

    for($j = 0; $j < count($productText); $j+=3){
        $str.="('".$productText[$j]."','".$productText[$j+1]."','".$productText[$j+2]."', 1, 1),";
    }
}

$query = "INSERT INTO product (name , quantity, price, fid, status) VALUES ";
$query.=substr($str, 0, -1);
error_log($query);
mysqli_query($db, $query);

echo 'OK';
?>
