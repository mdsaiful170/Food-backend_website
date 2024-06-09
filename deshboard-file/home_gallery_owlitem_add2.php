<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;


$title = $_POST['title'];
$icon = $_POST['icon'];
$time = $_POST['time'];
$date = $_POST['date'];
$content = $_POST['content'];

$sql = "insert into gallery_owltable(image,title,icon,time,date,content)values( '$filename','$title','$icon','$time','$date', '$content')";

$result = $connection->query($sql);

header('location:./home_gallery_owlitem_add.php');

move_uploaded_file($tamper, $folder);





?>