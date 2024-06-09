<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);


$id = $_POST['id'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$link = $_POST['link'];


$sql = "update gallery_table set  `title`='$title', `subtitle`='$subtitle', `link`='$link' where id='$id'";

$result=$connection->query($sql);


header('location:./home_deshboard.php');

move_uploaded_file($tamper, $folder);




?>