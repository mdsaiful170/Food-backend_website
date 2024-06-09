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


$sql = "insert into food_catagorytable(title,image)values('$title','$filename')";

$result = $connection->query($sql);


header('location:././home_foodcatagory_add.php');


move_uploaded_file($tamper, $folder);





?>