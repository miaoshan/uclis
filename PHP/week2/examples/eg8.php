<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Date testing</title>
</head>
<body>
 <?php

	// Get the submitted date

	$myMin = $_GET['min'];
	$myMax = $_GET['max'];
	$output = "";
	
		for ($i=$myMin;$i<=$myMax;$i++) {
	
			$div2 = false;
			$div3 = false;
			$div5 = false;
	
			if ($i%2 == 0) {
				$div2 = true;
			}

			if ($i%3 == 0) {
				$div3 = true;
			}

			if ($i%5 == 0) {
				$div5 = true;
			}

			if ($div2 || $div3 || $div5) {
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
