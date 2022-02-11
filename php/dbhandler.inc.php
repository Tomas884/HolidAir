<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "holidair";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection Unsuccessful: " . mysqli_connect_error());
}

?>