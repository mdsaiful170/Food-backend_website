<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;

$id=$_POST['id'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$sub = $_POST['sub_title_2'];

$sql = "update footter_detalistable set `image`='$filename' , `title`='$title',  `sub_title`='$sub_title', `sub_title_2`='$sub' where id='$id'";

$result = $connection->query($sql);

header('location:./home_deshboard.php');

move_uploaded_file($tamper, $folder);





?>