<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir</title>
		<link href="css/indexStyle.css" rel="stylesheet" type="text/css"/>
		<script src="js/indexLoginValidation.js"></script>
		<center>
		<body>
		<br/>
		<div id="wrapper">
		<header>
		
		<div id="wrapperTxt">
		<p>HolidAir</p>
		</div>
		<form name="loginform" action="php/login.inc.php" onsubmit="return validateForm()" method="POST">
		<div id="wrapperComponents">
		
		<?php
		if (isset($_SESSION["userid"])) {
		    
			echo "<a href='accSettingsPage.html' style='text-decoration:none'>My Account</a>";
			echo "<a href='savedInterests.php' style='text-decoration:none'>Intereste List</a>";
			echo "<a href='myBookings.php' style='text-decoration:none'>My Bookings</a>";
			echo "<a href='php/logout.inc.php' style='text-decoration:none'>Sign Out</a>";
			
			
		}
		else {
		    
			echo "<input type='text' id='uid' name='uid' placeholder='Username/Email'>";
			echo "<input type='password' id='password' name='password' placeholder='Password'>";
			echo "<input type='submit' name='submit' value='Log In' onClick='validateForm(this.form)'>";
			echo "<a href='signup.html' style='text-decoration:none'>Sign Up</a>";
			
		}
		?>
		
		
		
		
                
		
                </form>
				</div>
	
	         <?php
			 if (isset($_SESSION["userid"])) {
				 echo "";
				 echo "";
			 }
			 else {
				 echo "<div id='showPwdCheckBox'>
                       <input type='checkbox' onClick='myFunction()'>Show Password    
                       </div>";
				 echo "<div id='wrapperHyperlink'>
		               <a href='pwdRecovery.html' style='text-decoration:none'>Forgot Password</a>
		               </div>";
			 }
			 ?>
	
                
		<script>
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
		</script>
                
		
		</header>
		
		<div id="contentArea"></div>
		
		<div id="aboutHyperlink"><a href="about.html" style="text-decoration:none">About</a></div>
		
		<div id="locations">
		<a href="holiday-locations/holidayPlaces.php">
		<label>Travel Locations:</label>
		<img border="1" alt="location" src="css/aircraft_in_flight_picture_7_168555.jpg" width="250" height="150">
		</div>
		
		<div id="hotels">
		<a href="hotels/hotelsToBook.php">
		<label>Hotels:</label>
		<img border="1" alt="hotels" src="css/aboutslider2-1.jpg" width="250" height="150">
		</div>
		
		<div id="cars">
		<a href="cars-for-rent/carsForRent.php">
		<label>Cars:</label>
		<img border="1" alt="cars" src="css/ez8cynjspgmyqtibgyg3.jpg" width="250" height="150">
		</div>
		
    <br/>
	<div id="copyrightArea"></div>
	<div id="copyrightTxt"><p>© 2020-2021 HolidAir: Website Developed By Tomas Grabauskas</p></div>
	</head>
    <body>
        
        
        </center>
    </body>
</html>
