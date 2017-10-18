<?php 

	if (isset($_POST['submit'])) {
		
	$name = $_POST['username'];
	$password = $_POST['password'];
	$mail = $_POST['email'];
	if($name && $password){
	$connection=mysqli_connect('localhost','root','','music');
	
	$query = "INSERT INTO user(username,email,password) VALUES('$name','$mail','$password')";

	$result = mysqli_query($connection,$query);
	 header("Location:log.php");

	}

	}

 ?>



<!DOCTYPE HTML>
<html>
<script type="text/javascript">
 document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z]).{7,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.username.value == "") {
        alert("Error: Username cannot be blank!");
        this.username.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.password.value != "" && this.password.value == this.confirm_password.value) {
        if(!checkPassword(this.password.value)) {
          alert("The password you have entered is not valid!");
          this.password.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.password.focus();
        e.preventDefault();
        return;
      }
      alert("Both username and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var passwordInput = document.getElementById("field_password");
      passwordInput.setCustomValidity(passwordInput.title);

      var confirm_passwordInput = document.getElementById("field_confirm_password");

      // input key handlers

      usernameInput.addEventListener("keyup", function() {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      passwordInput.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? passwordInput.title : "");
        if(this.checkValidity()) {
          confirm_passwordInput.pattern = this.value;
          confirm_passwordInput.setCustomValidity(confirm_passwordInput.title);
        } else {
          confirm_passwordInput.pattern = this.pattern;
          confirm_passwordInput.setCustomValidity("");
        }
      }, false);

      confirm_passwordInput.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? confirm_passwordInput.title : "");
      }, false);

    }

  }, false);

</script>
  
<head>
<title>Registration | MusicCascade</title>
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
		<h1>Sign Up Form</h1>
		 		
	</div>
		<form action="reg.php" method="POST" onsubmit="return checkForm(this);">
      <li><input id="field_username" title="Username must not be blank and contain only letters, numbers and underscores." type="text" name="username" value=""  placeholder="Username" required pattern="\w+"></li>
      <li><input type="text" name="email" value="" placeholder="Email" required></li>
      <li><input id="field_password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" name="password" value="" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z]).{7,}"></li>
      <li><input id="field_confirm_password" title="Please enter the same Password as above." type="password" name="confirm_password" value="" placeholder="Confirm Password" required pattern="(?=.*\d)(?=.*[a-z]).{7,}"></li>
        <label>
        </label>
      </p>
      <div class="clear"> </div>
			<div class="Sign Up">
				<input type="submit" name="submit" value="Sign up" >
						  <div class="clear">  </div>	
						  
			</div>
    </form>
		</div>
<br>
  <pre><h1 style="color:white">Note:Passwords must contain at least 7 characters,
     including lowercase and numbers.</style></h1></pre>		
	</div>
	</div>
	<div class="clear"> </div>
</body>
</html>