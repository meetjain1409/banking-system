<?php
//$servername = "localhost";
//$username = "users";
//$password = "";
//$database = "test"; 
// Create connection
    $conn = mysqli_connect('localhost', 'root', '','test');



	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>