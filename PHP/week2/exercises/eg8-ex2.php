<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Divisible numbers - generalised version</title>
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

	$testDivisors=array(2,3,5,7,9);
	
	/*
	 * Loop from min value to max value
	 */
	
	
	for ($i=$myMin;$i<=$myMax;$i++) {

	
		$results=array();

		for ($j=0;$j<count($testDivisors);$j++) {
			if ($i%$testDivisors[$j] == 0) {
				$results[] = $testDivisors[$j];
			}
		}

		if (count($results) != 0) {
			$output .= "<li> $i is divisible by: "; 
			// loop through $results[] and append values

			for ($j=0;$j<count($results);$j++) {
				if ($j > 0) {
					$output .= ", ";
				}
				$output .= $results[$j];
			}
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
