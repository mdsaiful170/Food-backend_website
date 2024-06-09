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
$content = $_POST['content'];


$sql = "insert into about_stepstable(title,image,content)values('$title','$filename','$content')";

$result = $connection->query($sql);


header('location:././about_steps_add.php');


move_uploaded_file($tamper, $folder);





?>