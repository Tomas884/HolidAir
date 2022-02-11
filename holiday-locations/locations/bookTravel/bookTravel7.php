<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: Booking To Spain: Barcelona</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <center>
	<body>
	<br />
	<header></header>
	<div id="headerText">
	<p>Booking: Ticket To Spain: Barcelona</p>
	</div>
	<br />
	<div id="bookingArea"></div>
	<div id="departReturnDatesArea">
	       <div id="departCalendarLbl"><label>Depart Date:</label></div>
		   <input type="date" id="departCalendar" value="dd-mm-yyyy">
	       <div id="returnCalendarLbl"><label>Return Date:</label></div>
    	   <input type="date" id="returnCalendar" value="dd-mm-yyyy">
           <div id="departReturnHeading"><h2>Select Departure and Return Dates:</h2></div>
		   <div id="radioBtns">
		   <label>With Return:</label>
		   <input id="withReturn" name="radioBtn" type="radio" value="Return">
		   <label>One Way:</label>
		   <input id="oneWay" name="radioBtn" type="radio" value="OneWay">
		   </div>
		   <div id="passengersHeading"><h2>Passengers:</h2></div>
		   <div id="adultPassangersLbl"><label>Adults:</label></div>
		   <div id="childrenPassangersLbl"><label>Children:</label></div>
           <div id="adultsNumbSelect">
		   <select name="adultNumber" id="numberOfAdults" onchange="checkforblank()">
		   <option selected hidden value="">Select</option>
		   <option value="none">none</option>
		   <option value="1">1</option>
		   <option value="2">2</option>
		   <option value="3">3</option>
		   <option value="4">4</option>
		   <option value="5">5</option>
		   <option value="6">6</option>
		   <option value="7">7</option>
		   <option value="8">8</option>
		   </select></div>
           <div id="childrenNumbSelect">
		   <select name="childrenNumber" id="numberOfChildren" onchange="checkforBlank()">
		   <option selected hidden value="">Select</option>
		   <option value="none">none</option>
		   <option value="1">1</option>
		   <option value="2">2</option>
		   <option value="3">3</option>
		   <option value="4">4</option>
		   <option value="5">5</option>
		   <option value="6">6</option>
		   <option value="7">7</option>
		   <option value="8">8</option>
		   </select></div>
           <div id="bookNowBtn"><button type="submit" name="bookNow">Book Now</button></div>		   
	</div>
	<br />
	<footer></footer>
	<div id="copyrightText">
	<p>© 2020-2021 HolidAir: Website Developed By Tomas Grabauskas</p>
	</div>
	</head>
	</center>
	</body>
</html>