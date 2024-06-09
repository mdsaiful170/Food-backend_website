<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);


$icon = $_POST['icon'];
$title = $_POST['title'];

$sql = "insert into footter_table(title,icon)values( '$title', '$icon')";

$result = $connection->query($sql);

header('location:./home_fottercontact_add.php');

move_uploaded_file($tamper, $folder);





?>