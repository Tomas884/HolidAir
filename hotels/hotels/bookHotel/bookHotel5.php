<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: Booking The Westin Bonaventure Hotel & Suites, Los Angeles</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <center>
	<body>
	<br />
	<header></header>
	<div id="headerText">
	<p>Booking: The Westin Bonaventure Hotel & Suites, Los Angeles</p>
	</div>
	<br />
	<div id="bookingArea"></div>
	<div id="bookingHotelFormArea">
	<div id="hotelBookingHeading"><h2>Select check in, check out dates and location for car pick up and drop off</h2></div>
	<div id="checkInDateLbl"><label>Check In Date:</label></div>
	<div id="checkOutDateLbl"><label>Check Out Date:</label></div>
	<div id="HolidayCheckInCalendar"><input  type="date" name="checkInCalendar" value="dd-mm-yyyy"></div>
	<div id="HolidayCheckOutCalendar"><input type="date" name="checkOutCalendar" value="dd-mm-yyyy"></div>
	<div id="checkInTimeLbl"><label>Check In Time:</label></div>
	<div id="checkOutTimeLbl"><label>Check Out Time:</label></div>
	<div id="HotelCheckInTimeHoursOptions">
	<select name="checkInTimeHours" id="checkInHours" onchange="checkforblank()">
	<option select hidden value="">Select Hours</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select></div>
	<div id="HotelCheckInTimeMinutesOptions">
	<select name="checkInTimeMinutes" id="checkInMinutes" onchange="checkforblank()">
	<option select hidden value="">Select Minutes</option>
	<option value="00">00</option>
	<option value="05">05</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="35">35</option>
	<option value="40">40</option>
	<option value="45">45</option>
	<option value="50">50</option>
	<option value="55">55</option>
	</select></div>
	<div id="HotelCheckInTimeAmPmOptions">
	<select name="checkInAmPmTime" id="checkInAmOrPm" onchange="checkforblank()">
	<option select hidden value="">AM/PM</option>
	<option value="am">AM</option>
	<option value="pm">PM</option>
	</select></div>
	<div id="HotelCheckOutTimeHoursOptions">
	<select name="checkOutTimeHours" id="checkOutHours" onchange="checkforblank()">
	<option select hidden value="">Select Hours</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select></div>
	<div id="HotelCheckOutTimeMinutesOptions">
	<select name="checkOutTimeMinutes" id="checkOutMinutes" onchange="checkforblank()">
	<option select hidden value="">Select Minutes</option>
	<option value="00">00</div>
	<option value="05">05</div>
	<option value="10">10</div>
	<option value="15">15</div>
	<option value="20">20</div>
	<option value="25">25</div>
	<option value="30">30</div>
	<option value="35">35</div>
	<option value="40">40</div>
	<option value="45">45</div>
	<option value="50">50</div>
	<option value="55">55</div>
	</select></div>
	<div id="HotelCheckOutTimeAmPmOptions">
	<select name="checkOutAmPmTime" id="checkOutAmOrPm" onchange="checkforblank()">
	<option select hidden value="">AM/PM</option>
	<option value="am">AM</option>
	<option value="pm">PM</option>
	</select></div>
	<div id="adultsStayingLbl"><label>Adults:</label></div>
	<div id="childrenStayingLbl"><label>Children:</label></div>
	<div id="adultsNumbSelect">
	<select name="adultsNumber" id="numberOfAdults" onchange="checkforblank()">
	<option select hidden value="">Select</option>
	<option value="none">None</option>
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
	<select name="childrenNumber" id="numberOfChildren" onchange="checkforblank()">
	<option select hidden value="">Select</option>
	<option value="none">None</option>
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