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

	$dateSuffix = "th";

	if ($mday == 1) {
		$dateSuffix = "st";
	}

	if ($mday == 2) {
		$dateSuffix = "nd";
	}

	if ($mday == 2) {
		$dateSuffix = "rd";
	}

	echo "<P>Today is ",$today['weekday']," ",$today['month'],
" ",$today['mday'],"<sup>$dateSuffix</sup>, ",$today['year']," </p>";
