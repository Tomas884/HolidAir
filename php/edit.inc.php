<?php

if (isset($_POST["editProfile"])) {
	
	$updName = $_POST['updName'];
    $updSurname = $_POST['updSurname'];
    $dobDay = $_POST['dobDay'];
    $dobMonth = $_POST['dobMonth'];
    $dobYear = $_POST['dobYear'];
	$gender = $_POST['gender'];
    $countries = $_POST['countries'];
    $updAddress = $_POST['updAddress'];
    $updEmail = $_POST['updEmail'];
    $updPhoneNo = $_POST['updPhoneNo'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
	
	require_once 'dbhandler.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputEditAcc($updName, $updSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $updAddress, $updEmail, $updPhoneNo, $uid, $pwd) !== false) {
		header("location: ../editAcc.html?error=emptyinput");
		exit();
	}
	
	editAccount($conn, $updName, $updSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $updAddress, $updEmail, $updPhoneNo, $uid, $pwd);
		
} else {
	headr("location: ../editAcc.html");
	exit();
}

?>