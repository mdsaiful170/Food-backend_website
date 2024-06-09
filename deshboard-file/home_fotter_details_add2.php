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
$sub = $_POST['sub_title_2'];

$sql = "insert into footter_detalistable(image,sub_title,title,sub_title_2)values( '$filename','$sub_title','$title', '$sub')";

$result = $connection->query($sql);

header('location:./home_fotter_details_add.php');

move_uploaded_file($tamper, $folder);





?>