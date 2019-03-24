<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Date testing</title>
</head>
<body>
 <?php

	// Get the submitted date

	$subDate = $_GET['day'];
	$today = getdate();
	
	/** A more elegant way of choosing cases
	 */	
	
	switch($subDate) {

		case 1:
		case 21:
		case 31:
			$dateSuffix = "st";
			break;

		case 2:
		case 22:
			$dateSuffix = "nd";
			break;

		case 3:
			$dateSuffix = "rd";
			break;

		default:
			$dateSuffix = "th";
	}

	echo "<P>Today (might be) ",$today['weekday']," ",$today['month'],
" ",$subDate,"<sup>$dateSuffix</sup>, ",$today['year']," </p>";


	?>
</body>
</html>