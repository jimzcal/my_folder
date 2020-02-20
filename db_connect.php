<?php
	$conn = new mysqli("localhost","root","","exam_db");

	// Check connection
	if ($conn->connect_errno) {
	  echo "Failed to connect to MySQL: " . $con -> connect_error;
	  exit();
	}
?> 