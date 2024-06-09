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
$name = $_POST['name'];
$content = $_POST['content'];
$icon = $_POST['icon'];


$sql = "update about_reviewstable set `image`='$filename' , `name`='$name', `content`='$content', `icon`='$icon'   where id='$id'";

$result=$connection->query($sql);


header('location:./about_deshboard.php');

move_uploaded_file($tamper, $folder);




?>