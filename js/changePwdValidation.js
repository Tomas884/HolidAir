function validateForm() {
	
	var x = document.forms["changePwdForm"]["uid"].value;
	if (x == "") {
		alert("Please enter valid username");
		return false;
	}
	
	var x = document.forms["changePwdForm"]["pwd"].value;
	if (x == "") {
		alert("Please enter old password which was used to create account");
		return false;
	}
	
	var x = document.forms["changePwdForm"]["newPwd"].value;
	if (x == "") {
		alert("Please enter new password to replace the old password");
		return false;
	}
	
	var x = document.forms["changePwdForm"]["rptPwd"].value;
	if (x == "") {
		alert("Please repeat the new password for confirmation");
		return false;
	}
}
