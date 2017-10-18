<?php
include 'db.php';
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$confirm_pass=$_POST['confirm_password'];
$hash_pass=md5($pass);
$sql="INSERT INTO user(username,password,email) VALUES('$username','$hash_pass','$email');
mysql_query($sql);
header('Location:../login form purple.html');
?>
