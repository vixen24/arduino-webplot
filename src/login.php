<!--
Author: William Idakwo
  Date: 12-11-2018
 Brief: Displays a login page with two fields.
		If 'username' and 'password' is correct redirect to bargraph.php'

Reference
https://www.w3tweaks.com/php/simple-php-login-and-logout-script-using-php-session-and-database-using-mysql.html
-->
<?php
	error_reporting(0);
	if(isset($_POST['submit'])){	
		$username = admin; 
	    $password = password;
	  if(($username == $_POST['username']) && ($password == $_POST['password'])){
		 session_destroy();
		 session_start();
		 $_SESSION['user_id'] = true;
		 header('Location: index.php');  
	    }
	  else {
	  /*echo '<script language = "javascript">';
		echo 'alert("Bad Credentials, cannot login")'; 
		echo '</script>'; */
		header('Location: login.php'); 
	  }
	}   
?> 
<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type= "text/css" href = "http://localhost/AP/temp&pump/css/myloginpage.css">
</head>
<body>	
		<div class ="main_container">
			<form  method ="post" action ="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete = "off">
			  <div class="imgcontainer">
				<img src="http://localhost/AP/temp&pump/img/admin_setting.png" alt="Avatar" class="avatar">
			  </div>

			  <div class="container">
				<input  type="text"     placeholder="Enter Username" name="username" required>
				<input  type="password" placeholder="Enter Password" name="password" required>
				<button type="btt"   value="submit"               name="submit">Login</button>
				<!--<label>
				  <input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
				-->	
			  </div>

			  <div class="sub_container">
				<button type="button" class="cancelbtn">Cancel</button>
				<!--   <span class="psw">Forgot <a href="#">password?</a></span>-->
				   <span class="psw">Help me &#x1F61E</span>
			  </div>
			  
			</form>
		</div>
</body>
</html>
   