<?php


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

$sql="update user_table1 set name='$name', email='$email', number='$number', password='$password', con_password='$con_password'";

$result = $connection->query($sql);

header('location:/food-website/update_profile.php');

?>

