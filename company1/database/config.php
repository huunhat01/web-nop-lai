<?php
		$severname = "localhost";
		$username = "root";
		$password = "";
		$database = "company";
	
		$con = new mysqli($severname, $username, $password, $database);
		mysqli_query($con, $database);
?>
