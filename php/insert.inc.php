<?php
//Disallows users to directly access php contents via url link if html form is not properly filled
if (isset($_POST["signupButton"])) {

$clientName = $_POST['clientName'];
$clientSurname = $_POST['clientSurname'];
$dobDay = $_POST['dobDay'];
$dobMonth = $_POST['dobMonth'];
$dobYear = $_POST['dobYear'];
$gender = $_POST['gender'];
$countries = $_POST['countries'];
$clientAddress = $_POST['clientAddress'];
$clientEmail = $_POST['clientEmail'];
$phoneNo = $_POST['phoneNo'];
$username = $_POST['uid'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

require_once 'dbhandler.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($clientName, $clientSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $clientAddress, $clientEmail, $phoneNo, $username, $password, $repeatpassword) !== false) {
	header("location: ../signup.html?error=emptyinput");
	exit();
    }
	
	if (invalidClientEmail($clientEmail) !== false) {
	header("location: ../signup.html?error=invalid_clientEmail");
	exit();
    }
	
	if (invalidUid($username) !== false) {
	header("location: ../signup.html?error=invalid_username");
	exit();
    }
	
	
	
	if (passwordMatch($password, $repeatpassword) !== false) {
		header("location: ../signup.html?error=passwords_does_not_match");
		exit();
	}
	
	if (uidExists($conn, $username, $clientEmail) !== false) {
		header("location: ../signup.html?error=email_is_already_taken");
		exit();
	}
	

	
	//longer password requirement
	//Symbols, numbers, upper and lower case required for the stronger password 
	
	createUser($conn, $clientName, $clientSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $clientAddress, $clientEmail, $phoneNo, $username, $password);
	
		

	
} else {
	header("location: ../signup.html");
	exit();
}

//i = integer
//s = string
//d = double
//b = blob
?>
