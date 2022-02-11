/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateForm(form) {
    
    var a = document.forms["updateAccForm"]["updName"].value;
    if (a == "") {
        alert("Please enter your Name");
        return false;
    } 
    
    var a = document.forms["updateAccForm"]["updSurname"].value;
    if (a == "") {
        alert("Please enter your Surname");
        return false;
    }
	
	var x = document.forms["updateAccForm"]["dobDay"].value;
	if (x == "") {
		alert("Please select Day of Birth");
		return false;
	}
	
	var x = document.forms["updateAccForm"]["dobMonth"].value;
if (x == "") {
	alert("Please select Month of Birth");
	return false;
}
	
	var x = document.forms["updateAccForm"]["dobYear"].value;
	if (x == "") {
		alert("Please select Year of Birth");
		return false;
	}
	
	if ((form.genderMale.checked == false) && (form.genderFemale.checked == false)) {
		alert("Please select gender");
		return false;
	}
	
	var x = document.forms["updateAccForm"]["countries"].value;
	if (x == "") {
		alert("Please select Country");
		return false;
	}
    
    var a = document.forms["updateAccForm"]["updAddress"].value;
    if (a == "") {
        alert("Please enter your current Address");
        return false;
    }
    
    var a = document.forms["updateAccForm"]["updEmail"].value;
    if (a == "") {
        alert("Please enter your current Email Address");
        return false;
    }
    
    var a = document.forms["updateAccForm"]["updPhoneNo"].value;
    if (a == "") {
        alert("Please enter your current Home or Mobile Number");
        return false;
    }
    
    var a = document.forms["updateAccForm"]["uid"].value;
    if (a == "") {
        alert("Please enter your username");
        return false;
    }
    
    var a = document.forms["updateAccForm"]["pwd"].value;
    if (a == "") {
        alert("Please enter your password");
        return false;
    }
    
}
