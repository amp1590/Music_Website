<?php
session_start();
    if(session_destroy())
	{
		 setcookie('username', "", time()-3600);
	     header("Location:homepage.php");
	}
?>