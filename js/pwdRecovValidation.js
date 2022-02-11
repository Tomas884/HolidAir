/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateForm() {
    var x = document.forms["pwdRecoveryForm"]["emailAddress"].value;
    if (x == "") {
        alert("Please enter your Email address which you have used to create an account");
        return false;
    }
    var x = document.forms["pwdRecoveryForm"]["newPassword"].value;
    if (x == "") {
        alert("Please enter a New Password");
        return false;
    }
    var x = document.forms["pwdRecoveryForm"]["rptNewPassword"].value;
    if (x == "") {
        alert("Please repeat the New Entered Password");
        return false;
    }
}


