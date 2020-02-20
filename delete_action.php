<?php
 include('db_connect.php');

 $id = $_GET['id'];

 if(isset($_GET['id']))
 {
 	$sql = "DELETE FROM profile WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    echo "<h1 style='color: green'>Data was Successfully deleted</h1><br><br>";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }

 else{
 	echo "<div style='margin-left: auto; margin-right: auto; margin-top: 10px; color: red;'><h1>Cannot find the data.</h1></div>";
 }

 ?>

<br>
<button onclick="location.href='input_form.php'">Back to List</button>