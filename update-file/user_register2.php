<?php

session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';
$connection = mysqli_connect($hostname, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$con_password = $_POST['con_password'];


$sql = "insert into user_table1(name,email,number,password,con_password)values('$name', '$email', '$number', '$password', '$con_password')";

$result = $connection->query($sql);

$_SESSION['msg'] = 'register successfully';

header('location:/food-website/user_register.php');

?>