<?php

	require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$distnum = htmlspecialchars($_POST["distnum"]);
		$info = htmlspecialchars($_POST["updateContent"]);

		// $update = query("SELECT `info`, `date` FROM `data` WHERE `district` = ? ORDER BY `date` DESC", $dis);

		$update = query("INSERT INTO `data` (`district`, `info`, `date`) VALUES (?, ?, ?)", $distnum, $info, date("Y-m-d H:i:s"));

		$location = '/?dist=' . $districtsArray[$distnum] . '&updated=true';
		header('Location: ' . $location);
	}
	else
	{
		header('Location: index.php');
	}

?>