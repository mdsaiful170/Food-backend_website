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
$price = $_POST['price'];

$sql = "insert into home_productstable(image,sub_title,title,price)values( '$filename','$sub_title','$title', '$price')";

$result = $connection->query($sql);

header('location:./home_letest_dishes_add.php');

move_uploaded_file($tamper, $folder);





?>