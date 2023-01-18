<?php
	
	ob_start(); //output buffering, when a php page loads, data is sent in pieces to the server. So it wait till it recieves all the data to the server 

	$timezone = date_default_timezone_set("America/Toronto");

	$con =mysqli_connect("localhost","root","Sabari@1947","symphony");

	if(mysqli_connect_errno()){
		echo "Failed to connect ".mysqli_connect_errno();
	}

?>