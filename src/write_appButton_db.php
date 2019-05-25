<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
    // Prepare variables for database connection
   
    $dbusername = "userdemo_arduino_button";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "userdemo__button";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Create a Connection to your database

    $dbconnect = mysqli_connect("p:".$server, $dbusername, $dbpassword);
    $dbselect = mysqli_select_db($dbconnect, "demo_arduino");

    // Prepare the SQL statement

    $sql = "INSERT INTO testsensor_button (value) VALUES ('".$_GET["value"]."')";    

    //Perform a Query //Execute SQL statement

    mysqli_query($dbconnect, $sql);

?>