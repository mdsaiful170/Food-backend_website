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
$icon = $_POST['icon'];
$time = $_POST['time'];
$date = $_POST['date'];
$content = $_POST['content'];

$sql = "update gallery_owltable set `image`='$filename' , `title`='$title',  `icon`='$icon', `time`='$time' , `date`='$date', `content`='$content' where id='$id'";


$result = $connection->query($sql);

header('location:./home_deshboard.php');

move_uploaded_file($tamper, $folder);





?>