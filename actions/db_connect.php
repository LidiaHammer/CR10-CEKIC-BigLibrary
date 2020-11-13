<?php 
	$hostName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "CR10-CEKIC-BigLibrary";

	$conn = mysqli_connect($hostName, $userName, $password, $dbName);

	if (!$conn) {
		echo "error";
	}
?>