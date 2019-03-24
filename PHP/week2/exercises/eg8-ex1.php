<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Divisibility of numbers - exercise 1</title>
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

		/*
		 * For each value in turn, start by assuming it is not divisible by any of our test values
		 */

		$div2 = false;
		$div3 = false;
		$div5 = false;
		$div7 = false; // Adding another value to test
	
		if ($i%2 == 0) {
			$div2 = true;
		}

		if ($i%3 == 0) {
			$div3 = true;
		}

		if ($i%5 == 0) {
			$div5 = true;
		}

		if ($i%7 == 0) {
			$div7 = true;
		}

		if ($div2 || $div3 || $div5 || $div7) {
			$output .= "<li>$i is divisible by:";
			
			if ($div2) {
				$output .= " 2";
			}

			if ($div3) {
				$output .= " 3";
			}

			if ($div5) {
				$output .= " 5";
			}

			if ($div7) {
				$output .= " 7";
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
