<?php

$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'qureyweb');

$user = $_POST['user'];
// $email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `contact` (`name`,`message`) VALUES ('$user','$message')";

mysqli_query($conn,$query);

?>