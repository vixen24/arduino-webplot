<!--
Author: William Idakwo
  Date: 12-11-2018
 Brief: Displays chart and buttons
 
Reference:
		PHP code
		https://www.johnmorrisonline.com/build-php-login-form-using-sessions/
		https://www.w3schools.com/php/php_sessions.asp

		Arduino code
		https://www.youtube.com/watch?v=2F5iTlPgaV8
		https://www.dyclassroom.com/chartjs/chartjs-how-to-draw-bar-graph-using-data-from-mysql-table-and-php
-->

<!--Checks if user is logged in. If not, redirects user to login.php -->
<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header("Location: login.php");
	}else{	                           //display html page below
?>
<!DOCTYPE>
<html>
		<head>
			<title>BarGraph</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta charset="utf-8">
			<link rel = "stylesheet" type ="text/css" href = "http://localhost/AP/temp&pump/css/myhead.css">
		</head>
		<body>
		    <div>
				<h1>Welcome to Smart Irrigation Machine Portal</h1>
				<form>
					<input class ="logout" type="button" value="Logout" onclick="window.location.href='logout.php'" />
				</form>
			</div>
			<!-- chart area-->
			<div class="chart_container">
				<canvas id="mycanvas"></canvas>
			</div>
			<!-- button -->
			<div  id ="dash">
			 <button id = "r1" type="button" onclick= "mclick()">Manual</button>
			 <button id = "r2" type="button" onclick = "aclick()" >Automatic</button>
			</div>
			<!-- hidden button-->
			<div id="r3" style = "display: none"> 
				<button id = "c" class ="shortpress" type="button" onclick= "cclick()" style= "background-color: #4CAF50;"> Pump 1 </button>
			    <button id = "r" class ="shortpress" type="button" onclick= "rclick()" style= "background-color: #4CAF50;"> Pump 2 </button>
				<button id = "h" class ="shortpress" type="button" onclick= "hclick()" style= "background-color: #4CAF50;"> Pump 3 </button>
			    <button id = "i" class ="shortpress" type="button" onclick= "iclick()" style= "background-color: #4CAF50;"> Pump 4 </button>
			</div>
			<!-- javascript -->
			<script type="text/javascript" src="http://localhost/AP/temp&pump/js/jquery.min.js"></script>
			<script type="text/javascript" src="http://localhost/AP/temp&pump/js/Chart.min.js"></script> 
		    <script type="text/javascript" src="http://localhost/AP/temp&pump/js/app.js"></script>
			<!--function definitions-->
			<script type="text/javascript" src="http://localhost/AP/temp&pump/js/mybody_func.js"></script>
        </body>
</html>
<?php } ?>
