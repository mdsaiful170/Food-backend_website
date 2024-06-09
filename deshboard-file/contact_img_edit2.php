<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);


$filename = $_FILES['image']['name'];

$tamper = $_FILES['image']['tmp_name'];

$folder = '../uploaded_img/' . $filename;

$id = $_POST['id'];



$sql = "update contact_imagetable set `image`='$filename'  where id='$id'";

$result=$connection->query($sql);


header('location:./contatimg_deshboard.php');

move_uploaded_file($tamper, $folder);




?>