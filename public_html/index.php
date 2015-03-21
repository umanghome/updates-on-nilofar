<?php

require("../includes/config.php");

if (isset($_GET["dist"]))
{
	$dist = strtolower($_GET["dist"]);
	$district = getDistrict($dist);
	// echo $district;

	$updated = isset($_GET["updated"]) ? true : false;

	$getInfo = query("SELECT `info`, `date` FROM `data` WHERE `district` = ? ORDER BY `date` DESC", $district);

	render("district.php", array("district" => $dist, "distnum" => $district, "updated" => $updated, "updates" => $getInfo));
	exit;
}
else
{
	render("index.php");
	exit;
}



?>