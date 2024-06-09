<?php
// include 'connect.php';

session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food_db';


$connection = mysqli_connect($hostname, $username, $password, $dbname);

$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$sendtext= $_POST['sendtext'];

$sql= "insert into contact_msgtable(name,email,number,sendtext)values('$name', '$email', '$number', '$sendtext')";

$result=$connection->query($sql);

$_SESSION['msg3']='message send successfully';

header('location:/food-website/contact.php');

?>

