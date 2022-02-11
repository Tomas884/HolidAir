/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateForm() {
   var x = document.forms["deleteAccForm"]["uid"].value;
	if (x == "") {
	alert("Please enter your Email address");
		return false;
	}
	
	var x = document.forms["deleteAccForm"]["password"].value;
	if (x == "") {
	alert("Please enter the Password");
		return false;
	}
	
	var x = document.forms["deleteAccForm"]["confirmPassword"].value;
	if (x == "") {
		alert("Please Re-type your password");
		return false;
		}
}

