<?php

/*
 * Check which columns to include
 */

$includeStormName=false;
$includeStormType=false;
$includeSpeed=false;
$includePressure=false;

if (isset($_GET['stormname']) && $_GET['stormname'] == 1) {
	$includeStormName = true;
}

if (isset($_GET['stormtype']) && $_GET['stormtype'] == 1) {
	$includeStormType = true;
}

if (isset($_GET['speed']) && $_GET['speed'] == 1) {
	$includeSpeed = true;
}

if (isset($_GET['pressure']) && $_GET['pressure'] == 1) {
	$includePressure = true;
}

// Have we included at least one column?

if (!$includeStormName && !$includeStormType && !$includeSpeed && !$includePressure) {
	$tableTxt = "<p>No display columns were selected!</p>";
} else {


	// Check filters
	if (isset($_GET['filterpressure'])) {
		$filterPressure = $_GET['filterpressure'];
	} else {
		$filterPressure = 0;
	}

	if (isset($_GET['filterspeed'])) {
		$filterSpeed = $_GET['filterspeed'];
	} else {
		$filterSpeed = 0;
	}

	$tableTxt = "<table>";
	$tableTxt .= "<thead>";

	if ($includeStormName) {
		$tableTxt .= "<th>Storm name</th>";
	}
		if ($includeStormType) {
			$tableTxt .= "<th>Storm type</th>";
		}
		if ($includeSpeed) {
			$tableTxt .= "<th>Max wind speed (kph)</th>";
		}
		if ($includePressure) {
			$tableTxt .= "<th>Minimum pressure (mbar)</th>";
		}

		$tableTxt .= "</thead>";

		$tableTxt .= "<tbody>";

		
	foreach($myData as $storm) {

		/*
		 * Check whether we are using filters, and whether they apply
		 */
		if ($filterPressure && ($storm['pressure'] >= $filterPressure)) {
			continue;	
		}
		
		if ($filterSpeed && ($storm['speed'] <= $filterSpeed)) {
			continue;	
		}
		 
		$tableTxt .= "<tr>";

		if ($includeStormName) {
			$tableTxt .= "<td>".$storm['name']."</td>";
		}
		if ($includeStormType) {
			$tableTxt .= "<td>".$storm["category"]."</td>";
		}
		if ($includeSpeed) {
			$tableTxt .= "<td class=numeric>".$storm[speed]."</td>";
		}
		if ($includePressure) {
			$tableTxt .= "<td class=numeric>".$storm['pressure']."</td>";
		}
			$tableTxt .= "</tr>";
	}
		$tableTxt .= "</tbody>";
		$tableTxt .= "</table>";
}
?>
