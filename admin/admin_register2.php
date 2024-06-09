<?php

session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "insert into admin_table(username,password)values('$username', '$password')";

$result = $connection->query($sql);
$_SESSION['msg'] = 'register successfully';
header('location:../admin_register.php');
?>