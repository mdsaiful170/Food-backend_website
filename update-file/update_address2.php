<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$flat_no = $_POST['flat_no'];
$area = $_POST['area'];
$city_name = $_POST['city_name'];
$pin_code = $_POST['pin_code'];


$sql="update address_table set flat_no='$flat_no', area='$area', city_name='$city_name', pin_code='$pin_code' ";

$result = $connection->query($sql);

header('location:/food-website/update_addres.php');

?>

