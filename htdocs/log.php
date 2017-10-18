<?php
session_start();

    if(isset($_COOKIE['username'])) 
    {
              $_SESSION['username']=$_COOKIE['username'];
                 header('Location: logged.php');
    } 

    if (isset($_SESSION['username'])) 
    {
        header('Location: logged.php'); 
    }
?>

<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='music';
$flag = mysql_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($flag) 
{	
	$db=mysql_select_db($mysql_db);
	if($db)
	{

	}
	else
	{
		echo "not connected with db";
	}
}
else
{
	echo "failed";
}
?>

<?php

	if (isset($_POST['login'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysql_query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
            
        $user=mysql_fetch_array($query);

        $rows = mysql_num_rows($query);

            if ($rows == 1) 
            {
                    $_SESSION['username']=$username;

                     if (isset($_POST['remember_me'])) 
                            {
                                setcookie('username', $username, time()+3600);
                            } 

                    header("location:logged.php");
			
            }
            else 
            {
                //$_SESSION['error']="Error";
                //header("location:index.php");
                echo '<script type="text/javascript">
          window.onload = function () { alert("Username or password is incorrect!!"); }
          </script>';
            }
	}
 ?>
 
<!DOCTYPE HTML>
<html>
<head>
<title>Login | MusicCascade</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Login Form</h1>
		 	
	</div>
		<form method="post" name="contact" action="log.php">
			<li>
				<input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" placeholder="Username"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" placeholder="Password"> <a href="#" class="icon lock"></a>
			</li>
			    <div class="clear"> </div>
			<div class="submit">
				<input type="submit" name="login" value="Sign in" >
						  <div class="clear">  </div>	
						  <p class="remember_me">
        <label>
         <label>
          <input type="checkbox" name="remember_me" id="remember_me"><?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?>
          Keep me logged in
        </label>
        </label>
      </p>
			</div>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
</body>
</html>