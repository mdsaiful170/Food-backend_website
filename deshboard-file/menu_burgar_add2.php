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
$name = $_POST['name'];
$price = $_POST['price'];


$sql = "insert into menu_burgartable(image,sub_title,name,price)values( '$filename','$sub_title','$name', '$price')";

$result = $connection->query($sql);

header('location:./menu_burgar_add.php');

move_uploaded_file($tamper, $folder);





?>