<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);


$id = $_GET['id'];

$sql = "delete from menu_caketable where id='$id'";

$result = $connection->query($sql);

header('location:./menu_deshboard.php');
?>