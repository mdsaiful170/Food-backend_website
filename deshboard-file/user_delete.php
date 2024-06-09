<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);


$id = $_GET['id'];

$sql = "delete from user_table1 where id='$id'";

$result = $connection->query($sql);

header('location:./user_deshboard.php');
?>