<?php
session_start();
include 'db.php';
$username=$_POST['username'];
$pass=md5($_POST['password']);
$sql="SELECT user_id FROM user WHERE (username='$username' OR email='$username') AND password='$pass'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result){
if($row['user_id']){
$_SESSION['user_id']=$row['user_id'];
header('LOCATION:../homepage.php');
die();
}
}
header('LOCATION:../login form purple.php?login_error=yes ');


?>