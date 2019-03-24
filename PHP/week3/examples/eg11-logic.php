<?php

$tableTxt = "";
foreach($myData as $storm) {
	$tableTxt .= "<tr>";
	$tableTxt .= "<td>".$storm['name']."</td>";
	$tableTxt .= "<td>".$storm["category"]."</td>";
	$tableTxt .= "<td class=numeric>".$storm[speed]."</td>";
	$tableTxt .= "<td class=numeric>".$storm['pressure']."</td>";
	$tableTxt .= "</tr>";
}

?>
