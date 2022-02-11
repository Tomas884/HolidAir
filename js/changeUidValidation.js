function validateForm() {
	
	var x = document.forms["changeUidForm"]["uid"].value;
	if (x == "") {
		alert("Please enter old username which was used to create an account");
		return false;
	}
	var x = document.forms["changeUidForm"]["newUid"].value;
	if (x == "") {
		alert("Please enter new username to replace old username");
		return false;
	}
	var x = document.forms["changeUidForm"]["pwd"].value;
	if (x == "") {
		alert("Please enter the password");
		return false;
	}
	
}