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
$price = $_POST['price'];

$sql = "update menu_dishtable set `image`='$filename' , `title`='$title',  `price`='$price', `sub_title`='$sub_title' where id='$id'";

$result = $connection->query($sql);

header('location:./menu_deshboard.php');

move_uploaded_file($tamper, $folder);





?>