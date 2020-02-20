<?php
 include('db_connect.php');

 if(isset($_POST['name']) && $_POST['address'] && $_POST['bdate'])
 {
 	$sql = "INSERT INTO profile (name, address, bdate)
	VALUES ('$_POST[name]', '$_POST[address]', '$_POST[bdate]')";

	if ($conn->query($sql) === TRUE) {
	    echo "<h1 style='color: green'>New record created successfully</h1><br><br>";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }

 else{
 	echo "<div style='margin-left: auto; margin-right: auto; margin-top: 10px; color: red;'><h1>Please supply the correct Data.</h1></div>";
 }

 ?>

<br>
<button onclick="location.href='input_form.php'">Back to List</button>