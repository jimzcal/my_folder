<?php
 include('db_connect.php');

 $id = $_POST['id'];

 if(isset($_POST['name']) && $_POST['address'] && $_POST['bdate'])
 {
 	$sql = "UPDATE profile SET name='$_POST[name]', address='$_POST[address]', bdate='$_POST[bdate]' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    echo "<h1 style='color: green'>Updated Record was successfully saved</h1><br><br>";

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