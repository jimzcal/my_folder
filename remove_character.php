<?php

	$string = "bureau";
	$char = "s";

	if(strlen($char) > 1)
	{
		echo "Oops! Given Char is not a Character.";
	}
	else
	{
		echo "Given String: ".$string;
		echo "<br><br>Given Char to be removed: ".$char;

		echo "<br><br>Output: ";
		echo str_replace(strtolower($char), "", strtolower($string));
	}

	
?>