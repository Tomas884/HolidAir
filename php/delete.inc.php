<?php

if (isset($_POST["delete"])) {
	
	$username = $_POST["uid"];
	$password = $_POST["password"];
	$repeatpassword = $_POST["confirmPassword"];
	
	require_once 'dbhandler.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputDelete($username, $password, $repeatpassword) !== false) {
		header("location: ../deleteAcc.html?error=emptyinput");
		exit();
	}
	
	deleteUser($conn, $username, $password);
	
} else {
	header("location: ../deleteAcc.html");
	exit();
}

?>