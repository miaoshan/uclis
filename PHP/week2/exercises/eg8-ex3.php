<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Leap year testing</title>
</head>
<body>
 <?php

    /*
	 * Example to check whether a set of numbers are divisible by various test values
     *
	 * Numbers are divisible if the leave a remainder of zero when divided by the test value
	 */
 
	// Get the submitted date

	$myMin = $_GET['min'];
	$myMax = $_GET['max'];

	$output = "";

	/*
	 * Loop from min value to max value
	 */
	
	
	for ($i=$myMin;$i<=$myMax;$i++) {

		$isLeapYear = false;

		if ($i%4 == 0 && ($i%100 != 0 || $i%400 == 0)) {
			$isLeapYear = true;
			$output .= "<li>$i is a leap year";
		} else {
			$output .= "<li>$i is not a leap year";
		}

	}

	if ($output != "") {
		echo "<ul>";
		echo $output;
		echo "</ul>";
	}
	
	?>
</body>
</html>
