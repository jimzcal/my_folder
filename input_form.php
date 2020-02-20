<?php
	include('db_connect.php');

	$sql = "SELECT * FROM profile";

	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body style="background-color: #ccffff">
	<form action="action.php" method="post">
		<div style="width: 30%; margin-right: auto; margin-left: auto; margin-top: 10%; border: solid 2px gray; padding: 10px; background-color: #fff">
			<h3>APPLICATION FORM</h3>
			<label>Name</label><br>
			<input type="text" name="name" placeholder="Juan Dela N. Cruz Jr">
			<br><br>
			<label>Address</label>
			<input type="text" name="address" placeholder="Block 9, Unit A3, Visayas Avenue, Quezon City" style="width: 400px;">
			<br><br>
			<label>Birthdate</label><br>
			<input type="date" name="bdate">
			<br><br>
			<input type="submit" name="sumbit" value="Save">
		</div>
	</form>
	<br><br>
	<table style="width: 60%; margin-left: auto; margin-right: auto; background-color: #fff;">
		<tr>
			<td colspan="5"></td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Birthdate</th>
			<th colspan="2">Action</th>

		</tr>
		<?php if($result->num_rows > 0) : ?>
			<?php while($row = $result->fetch_assoc()) : ?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['address'] ?></td>
					<td><?= $row['bdate'] ?></td>
					<td style="width: 10px;"><a href="update_form.php?id=<?= $row['id']; ?>">Update</a></td>
					<td style="width: 10px;"><a href="delete_action.php?id=<?= $row['id']; ?>">Delete</a></td>
				</tr>
			<?php endwhile ?>
		<?php endif ?>
	</table>
</body>
</html>