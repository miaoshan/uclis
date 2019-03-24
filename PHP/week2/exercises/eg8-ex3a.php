<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Leap year testing</title>

 <?php
 
 
	function isLeapYear($year) {

		if ($year%400 == 0) {
			$isLeap = true;
		} elseif ($year%100 == 0) {
			$isLeap = false;
		} elseif ($year%4 == 0) {
			$isLeap = true;
		} else {
			$isLeap = false;
		}

		return $isLeap;
		
	}
  ?>
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

		if (isLeapYear($i)) {
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
