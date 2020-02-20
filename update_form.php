<?php
	include('db_connect.php');
	$id = $_GET['id'];

	$sql = "SELECT * FROM profile WHERE id=$id";

	$result = $conn->query($sql);
?>

<style type="text/css">
	.my-form{
		width: 30%; 
		margin-right: auto; 
		margin-left: auto; 
		margin-top: 10%; 
		border: solid 2px gray; 
		padding: 10px; 
		background-color: #fff;
	}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body style="background-color: #ccffff">
	<?php while($row = $result->fetch_assoc()) : ?>
		<form action="_update_action.php" method="post">
			<div class="my-form">
				<h3>APPLICATION FORM</h3>

				<input type="hidden" name="id" value="<?= $row['id'] ?>"><br>

				<label>Name</label><br>
				<input type="text" name="name" placeholder="Juan Dela N. Cruz Jr" value="<?= $row['name'] ?>">
				<br><br>
				<label>Address</label>
				<input type="text" name="address" placeholder="Block 9, Unit A3, Visayas Avenue, Quezon City" style="width: 400px;" value="<?= $row['address'] ?>">
				<br><br>
				<label>Birthdate</label><br>
				<input type="date" name="bdate" value="<?= $row['bdate'] ?>">
				<br><br>
				<input type="submit" name="sumbit" value="Save">
			</div>
		</form>
	<?php endwhile ?>
</body>
</html>