<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);


$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];


$sql = "update about_table set `image`='$filename' , `title`='$title', `content`='$content'   where id='$id'";

$result=$connection->query($sql);


header('location:./about_deshboard.php');

move_uploaded_file($tamper, $folder);




?>