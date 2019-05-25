
<?php
$servername = "localhost";
$username = "userdemo_arduino_button";
$password = "userdemo__button";
$dbname = "demo_arduino"; //Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {         //mysqli_connect_errno()
	 die("Connection failed: " . $conn->connect_error);
	} 

$sql = sprintf("SELECT Value FROM testsensor_button ORDER BY ID DESC LIMIT 1 ");//select Time, Value field(s) respectively from SQL DB Table

//execute query
$result = $conn->query($sql);//$result=mysqli_query($con,$sql)


//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data. Just print the data not in json format or anything. 
print implode(" ",$row);
?> 

 