

<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: X-Requested-Width, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

$servername = "localhost";
$username = "userdemo_arduino";
$password = "userdemo_";
$dbname = "demo_arduino";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {         //mysqli_connect_errno()
	 die("Connection failed: " . $conn->connect_error);
	} 

$sql = sprintf("SELECT DISTINCT Time, Value FROM testsensor ORDER BY ID DESC LIMIT 1 ");//select Time, Value field(s) respectively from SQL DB

//execute query
$result = $conn->query($sql);//$result=mysqli_query($con,$sql)

//execute query
//$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//loop through returned data and display data in a table
/*if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Time</th><th>Value</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Time"]. "</td><td> " . $row["Value"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
} */

$conn->close();

//now print the data
print json_encode($data);
?> 


 