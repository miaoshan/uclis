<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>2012 Storm data</title>
 <link rel="stylesheet" href="generic.css">
<?php
// Include our data file
include('wk3-data1.php');
include('eg11-logic.php');
?>
 
 </head>
<body>
<h1>2012 Hurricane season</h1>

<table>
<tr>
 <thead>
 <th>Storm name</th>
 <th>Storm category</th>
 <th>Max wind speed (kph)</th>
 <th>Min pressure (mbar)</th>
</tr>
</thead>

<tbody>
 <?php
	echo $tableTxt;
?>
</tbody>

</table>



</body>
</html>
