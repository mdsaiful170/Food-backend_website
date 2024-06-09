<?php

session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select*from admin_table where username='$username' && password='$password'";

$result = $connection->query($sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    header('location:../deshboard.php');
} else {
    $_SESSION['msg'] = 'password incurrect';
    header('location:../admin.php');

}


?>