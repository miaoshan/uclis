<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Today's date</title>
</head>
<body>
 <?php
	$today = getdate();
	$mday = $today['mday'];

	/*
	 * A more elegant way of choosing cases
	 */	

	switch($mday) {

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

	echo "<P>Today is ",$today['weekday']," ",$today['month'],
" ",$today['mday'],"<sup>$dateSuffix</sup>, ",$today['year']," </p>";

	?>
</body>
</html>
