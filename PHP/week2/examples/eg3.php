<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Today's date</title>
</head>
<body>
	<?php $today = getdate();
	echo "<p> Today is ",$today['weekday'], " ", $today['month'], " ", $today['mday'], ",",$today['year'], " </p>";
	?>
</body>
</html>