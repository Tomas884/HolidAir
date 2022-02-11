/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateForm() {
		var x = document.forms["loginform"]["uid"].value;
		if (x == "") {
		   alert("Email is required");
		   return false;
		   }
                var x = document.forms["loginform"]["password"].value;
		if (x == "") {
		   alert("Password is required");
		   return false;
		   }
        
		}

