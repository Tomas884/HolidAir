/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateForm(form) {
    var x = document.forms["signupform"]["clientName"].value;
    if (x == "") {
        alert("Please enter your First Name");
        return false;
    }
    var x = document.forms["signupform"]["clientSurname"].value;
    if (x == "") {
        alert("Please enter your Surname");
        return false;
    }
    //Validation to only accept people at least of 18 years old 
    
	var a = document.forms["signupform"]["dobDay"].value;
	if (a == "") {
		alert("Please select day of birth");
		return false;
		}
	
	var b = document.forms["signupform"]["dobMonth"].value;
	if (b == "") {
		alert("Please select month of birth");
		return false;
		}
    
	var c = document.forms["signupform"]["dobYear"].value;
	if (c == "") {
		alert("Please select year of birth");
		return false;
		}
	
	if ((form.genderMale.checked == false) && (form.genderFemale.checked == false)) {
	alert("Please select the gender");
		return false;
	}
    
    var x = document.forms["signupform"]["countries"].value;
	if (x == "") {
		alert("Please select the country");
		return false;
		}
    
    var x = document.forms["signupform"]["clientAddress"].value;
    if (x == "") {
        alert("Please enter your living Address");
        return false;repeatpassword
    }
    var x = document.forms["signupform"]["clientEmail"].value;
    if (x == "") {
        alert("Please enter your Email Address");
        return false;
    }
    var x = document.forms["signupform"]["phoneNo"].value;
    if (x == "") {
        alert("Please enter your Home or Mobile Phone Number");
        return false;
    }
	var x = document.forms["signupform"]["uid"].value;
	if (x == "") {
		alert("Please enter username e.g. username77");
		return false;
	}
    var x = document.forms["signupform"]["password"].value;
    if (x == "") {
        alert("Please enter the password");
        return false;
    }
    var x = document.forms["signupform"]["repeatpassword"].value;
    if (x == "") {
        alert("Please re-enter password to ensure the password was entered correctly");
        return false;
    }
    
	if ((form.tickBoxAgreement.checked == false)) {
	alert("You must agree with terms and conditions by clicking on tick box before proceeding with registration");
		return false;
	}
}

//if all text fields are filled in, radio buttons, select options and checkboxes are clicked, then message should appear informing that registration is successful 