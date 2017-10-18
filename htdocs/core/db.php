<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
if(!$con){
echo 'Could not be connected';
die();
} else {
	echo 'Connected';
}
?>