<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';
$connection = mysqli_connect($hostname, $username, $password, $dbname);


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select*from user_table1 where `email`='$email' && `password`='$password' ";

// $result = mysqli_query($connection, $sql) or die(mysql_errno());
$result = $connection->query($sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    header('location:/food-website/home.php');


} else {
   
    $_SESSION['msg'] = 'password incurrect';
    header('location:/food-website/login.php');
}