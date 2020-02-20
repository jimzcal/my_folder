<?php
	if(isset($_POST['data1']) && isset($_POST['data2']))
	{
		$set1 = explode(',', $_POST['data1']);
		$set2 = explode(',', $_POST['data2']);
		$final = array_diff($set1, $set2);

		echo "<h1>Result: ".implode(',', $final)."</h1>";
	}
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
	<title></title>
</head>
<body style="background-color: #ccffff">
	<form action="subtract.php" method="post">
		<div class="my-form">
			<h3>Supply every textfield with set of data separated by comma (,)</h3>
			<label>First Input</label><br>
			<input type="text" name="data1" style="width: 300px;">
			<br><br>

			<label>Second Input</label><br>
			<input type="text" name="data2" style="width: 300px;">

			<br><br>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
</body>
</html>