<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: My Account Details</title>
		<link href="css/myAccDetailsStyle.css" rel="stylesheet" type="text/css"/>
<center>
<body>
<br/>
   <header>
   <div id="wrapperText">
   <p>My Account Details</p>
   </div>
     </header>
	 <br/>
	 <div id="myAccDetailsArea"></div>
	 <div id="myAccDetails">
	 
	 <?php
	 include 'php/dbhandler.inc.php';
	 include 'php/functions.inc.php';
	 
	 echo "<b>Name:</b>" . $_SESSION["username"] . "<br><br>";
     echo "<b>Surname:</b>" . $_SESSION["usersurname"] . "<br><br>";
     echo "<b>Day of Birth:</b>" . $_SESSION["dayofbirth"] . "<br><br>";
     echo "<b>Month Of Birth:</b>" . $_SESSION["monthofbirth"] . "<br><br>";
     echo "<b>Year Of Birth:</b>" . $_SESSION["yearofbirth"] . "<br><br>";
     echo "<b>Gender:</b>" . $_SESSION["usergender"] . "<br><br>";
     echo "<b>Country:</b>" . $_SESSION["country"] . "<br><br>";
     echo "<b>Address:</b>" . $_SESSION["useraddress"] . "<br><br>";
     echo "<b>Email:</b>" . $_SESSION["useremail"] . "<br><br>";
     echo "<b>Phone:</b>" . $_SESSION["userphoneno"] . "<br><br>";
     echo "<b>Username:</b>" . $_SESSION["useruid"] . "<br><br>";
     echo "<b>Password:</b>" . $_SESSION["userpwd"] . "<br><br>";	 
	 ?>
	
	 </div>
	 <br/>
	 <footer></footer>
	 <div id="copyrightText">
	 <p>© 2020-2021 HolidAir: Website Developed By Tomas Grabauskas</p>
	 </div>
</head>

     </center>
   </body>
</html>