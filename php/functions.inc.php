<?php

function emptyInputSignup($clientName, $clientSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $clientAddress, $clientEmail, $phoneNo, $username, $password, $repeatpassword) {
	$result;
	if (empty($clientName) || empty($clientSurname) || empty($gender) || empty($dobDay) || empty($dobMonth) || empty($dobYear) || empty($countries) || empty($clientAddress) || empty($clientEmail) || empty($phoneNo) || empty($username) || empty($password) || empty($repeatpassword)) {
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}

function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}

function invalidClientEmail($clientEmail) {
	$result;
	if (!filter_var($clientEmail, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}


function passwordMatch($password, $repeatpassword) {
	$result;
	if ($password !== $repeatpassword) {
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $clientEmail) {
	$sql = "SELECT * FROM holidairdb WHERE usersUid = ? OR userEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.html?error=statementfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $clientEmail);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $clientName, $clientSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $clientAddress, $clientEmail, $phoneNo, $username, $password) {
	$sql = "INSERT INTO holidairdb (userName, userSurname, dayOfBirth, monthOfBirth, yearOfBirth, userGender, country, userAddress, userEmail, userPhoneNo, usersUid, userPwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.html?error=statementfailed");
		exit();
	}
	
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	
	
	//mysqli_stmt_bind_param($stmt, "sssisisssis", $clientName, $clientSurname, $gender, $dobDay, $dobMonth, $dobYear, $countries, $clientAddress, $clientEmail, $phoneNo, $password, $repeatpassword);
	mysqli_stmt_bind_param($stmt, "ssisissssiss", $clientName, $clientSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $clientAddress, $clientEmail, $phoneNo, $username, $hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../index.php?error=none");
	exit();
	
}

function emptyInputLogin($username, $password) {
	$result;
	if (empty($username) || empty($password)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $password) {
	$uidExists = uidExists($conn, $username, $username);
	
	if (uidExists === false) {
		header("location: ../index.php?error=wronglogin");
		exit();
	}
	
	$hashedPassword = $uidExists["userPwd"];
	$checkPassword = password_verify($password, $hashedPassword);
	
	if ($checkPassword === false) {
		header("location: ../index.php?error=wronglogin");
		exit();
	}
	else if ($checkPassword === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["userId"];
		$_SESSION["username"] = $uidExists["userName"];
		$_SESSION["usersurname"] = $uidExists["userSurname"];
		$_SESSION["dayofbirth"] = $uidExists["dayOfBirth"];
		$_SESSION["monthofbirth"] = $uidExists["monthOfBirth"];
		$_SESSION["yearofbirth"] = $uidExists["yearOfBirth"];
		$_SESSION["usergender"] = $uidExists["userGender"];
		$_SESSION["country"] = $uidExists["country"];
		$_SESSION["useraddress"] = $uidExists["userAddress"];
		$_SESSION["useremail"] = $uidExists["userEmail"];
		$_SESSION["userphoneno"] = $uidExists["userPhoneNo"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		$_SESSION["userpwd"] = $password;
		
		header("location: ../index.php?success=welcome");
		exit();
	}
}

function emptyInputDelete($username, $password, $repeatpassword) {
	$result;
	if (empty($username) || empty($password) || empty($repeatpassword)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function deleteUser($conn, $username, $password) {
	$uidExists = uidExists($conn, $username, $username);
	
	if ($uidExists === false) {
		header("location: ../deleteAcc.html?error=wrongdata");
		exit();
	}
	
	$hashedPassword = $uidExists["userPwd"];
	$checkPassword = password_verify($password, $hashedPassword);
	
	if ($checkPassword === false) {
		header("location: ../deleteAcc.html?error=wrongdata");
		exit();
	}
	else if ($checkPassword === true) {
		$sql = ("DELETE FROM `holidairdb` WHERE `usersUid` = '$username'");
		$result = mysqli_query($conn, $sql);
		header("location: ../deleteAcc.html?success=accounthasbeendeleted");
		exit();
	}
}

function emptyInputChangePwd($uid, $pwd, $newPwd, $rptNewPwd) {
	$result;
	if (empty($uid) || empty($pwd) || empty($newPwd) || empty($rptNewPwd)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function changePwd($conn, $uid, $pwd, $newPwd) {
	$uidExists = uidExists($conn, $uid, $uid);
	if ($uidExists === false) {
		headr("location: ../changePwd.html?error=wrongdata");
		exit();
	}
	$hashedPassword = $uidExists["userPwd"];
	$checkPassword = password_verify($pwd, $hashedPassword);
	
	if ($checkPassword === false) {
		header("location: ../changePwd.html?error=wrongdata");
		exit();
	}
	else if ($checkPassword === true) {
		$hashedNewPwd = password_hash($newPwd, PASSWORD_DEFAULT);
		$sql = "UPDATE holidairdb SET userPwd = '$hashedNewPwd' WHERE usersUid = '$uid';";
		$result = mysqli_query($conn, $sql);
		header("location: ../changePwd.html?success=passwordchanged");
		exit();
	}
}

function emptyInputChangeUid($uid, $newUid, $pwd) {
	$result;
	if (empty($uid) || empty($newUid) || empty($pwd)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function changeUid($conn, $uid, $newUid, $pwd) {
	$uidExists = uidExists($conn, $uid, $uid);
	
	if ($uidExists === false) {
		header("location: ../changeUid.html?error=wrongdata");
		exit();
	}
	$hashedPassword = $uidExists["userPwd"];
	$checkPassword = password_verify($pwd, $hashedPassword);
	
	if ($checkPassword === false) {
		header("location: ../changeUid.html?error=wrongdata");
		exit();
	}
	else if ($checkPassword === true) {
		$sql = "UPDATE holidairdb SET usersUid = '$newUid' WHERE usersUid = '$uid';";
		$result = mysqli_query($conn, $sql);
		header("location: ../changeUid.html?success=usernamechanged");
		exit();
	}
}

function emptyInputEditAcc($updName, $updSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $updAddress, $updEmail, $updPhoneNo, $uid, $pwd) {
	$result;
	if (empty($updName) || empty($updSurname) || empty($dobDay) || empty($dobMonth) || empty($dobYear) || empty($gender) || empty($countries) || empty($updAddress) || empty($updEmail) || empty($updPhoneNo) || empty($uid) || empty($pwd)) {
	$result = true;	
	} else {
		$result = false;
	}
	return $result;
}

function editAccount($conn, $updName, $updSurname, $dobDay, $dobMonth, $dobYear, $gender, $countries, $updAddress, $updEmail, $updPhoneNo, $uid, $pwd) {
	$uidExists = uidExists($conn, $uid, $uid);
	if ($uidExists === false) {
		header("location: ../editAcc.html?error=wrongdata");
		exit();
	}
	$hashedPassword = $uidExists["userPwd"];
	$checkPassword = password_verify($pwd, $hashedPassword);
	
	if ($checkPassword === false) {
		header("location: ../editAcc.html?error=wrongdata");
		exit();
	}
	else if ($checkPassword === true) {
		$sql = "UPDATE holidairdb SET userName = '$updName', userSurname = '$updSurname', dayOfBirth = '$dobDay', monthOfBirth = '$dobMonth', yearOfBirth = '$dobYear', userGender = '$gender', country = '$countries', userAddress = '$updAddress', userEmail = '$updEmail', userPhoneNo = '$updPhoneNo' WHERE usersUid = '$uid';";
		$result = mysqli_query($conn, $sql);
		header("location: ../editAcc.html?success=accountupdated");
		exit();
	}
}

?>
