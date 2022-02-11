<?php

if (isset($_POST["changeUid"])) {
	
    $uid = $_POST['uid'];
    $newUid = $_POST['newUid'];	
    $pwd = $_POST['pwd'];
	
	require_once 'dbhandler.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputChangeUid($uid, $newUid, $pwd) !== false) {
		header("location: ../changeUid.html?error=emptyinput");
		exit();
	}
	changeUid($conn, $uid, $newUid, $pwd);
} else {
	header("location: ../changeUid.html");
	exit();
}

?>