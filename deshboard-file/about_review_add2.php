<?php

session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;



$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];
$icon = $_POST['icon'];


$sql = "insert into about_reviewstable(name,image,content,icon)values('$name','$filename','$content','$icon')";

$result = $connection->query($sql);


header('location:./about_review_add.php');


move_uploaded_file($tamper, $folder);





?>