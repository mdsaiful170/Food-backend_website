<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$id=$_POST['id'];
$icon = $_POST['icon'];
$title = $_POST['title'];

$sql = "update footter_table set  `title`='$title',  `icon`='$icon' where id='$id'";

$result = $connection->query($sql);

header('location:./home_deshboard.php');

move_uploaded_file($tamper, $folder);





?>