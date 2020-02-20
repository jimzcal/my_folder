<?php

	$x = "1234";

	if(ctype_digit($x))
	{
		echo "Given String: ".$x."<br><br>Output: <br><br>";
		echo 'True: String contains only digits';
	}

	else{
		echo "False";
	}
?>