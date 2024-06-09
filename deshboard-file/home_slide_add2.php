<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;


$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$link = $_POST['link'];

$sql = "insert into home_slidetable(sub_title,title,image,link)values('$sub_title','$title','$filename','$link')";

$result = $connection->query($sql);

header('location:./home_slide_add.php');

move_uploaded_file($tamper, $folder);





?>