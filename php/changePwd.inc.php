<?php

if (isset($_POST["changePwd"])) {
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$newPwd = $_POST['newPwd'];
	$rptNewPwd = $_POST['rptNewPwd'];
	
	require_once 'dbhandler.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputChangePwd($uid, $pwd, $newPwd, $rptNewPwd) !== false) {
		header("location: ../changePwd.html?error=emptyinput");
		exit();
	}
	changePwd($conn, $uid, $pwd, $newPwd);
} else {
	header("location: ../changePwd.html");
	exit();
}

?>