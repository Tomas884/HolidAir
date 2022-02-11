<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: Renting: VW Golf 8 GTI</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <center>
	<body>
	<br />
	<header></header>
	<div id="headerText">
	<p>Renting: VW Golf 8 GTI</p>
	</div>
	<br />
	<div id="bookingArea"></div>
	<div id="carRentFormArea">
	<div id="carPickUpDropOffHeading"><h2>Select Dates and Times for Pick up and Drop off:</h2></div>
	<div id="carPickUpDateLbl"><label>Pick Up Date:</label></div>
	<div id="carPickupCalendar"><input type="date" name="pickupCalendar" value="dd-mm-yyyy"></div>
	<div id="carPickupTimeLbl"><label>Pick Up Time:</label></div>
	<div id="carPickUpTimeHourOption">
	<select name="pickupTimeHours" id="pickUpHours" onchange="checkforblank()">
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
	<div id="carPickUpTimeMinutes">
	<select name="pickupTimeMinutes" id="pickUpMinutes" onchange="checkforblank()">
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
	<div id="pickUpTimeAmPmOption">
	<select name="amPmTime" id="amOrPm" onchange="checkforblank()">
	<option select hidden value="">AM/PM</option>
	<option value="am">AM</option>
	<option value="pm">PM</option>
	</select></div>
	<div id="carDropOffDateLbl"><label>Drop Off Date:</label></div>
	<div id="carDropOffCalendar"><input type="date" name="dropOffCalendar" value="dd-mm-yyyy"></div>
	<div id="carDropOffTimeLbl"><label>Drop Off Time:</label></div>
	<div id="carDropOffTimeHoursOptions">
	<select name="dropOffTimeHours" id="dropOffHours" onchange="checkforblank()">
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
	<div id="carDropOffTimeMinutesOptions">
	<select name="dropOffTimeMinutes" id="dropOffMinutes" onchange="checkforblank()">
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
	<div id="dropOffTimeAmPmOption">
	<select name="dropOffTimeAmPm" id="dropOffAmPm" onchange="checkforblank()">
	<option select hidden value="">AM/PM</option>
	<option value="am">AM</option>
	<option value="pm">PM</option>
	</select></div>
	<div id="carPickUpDropOffLocationOptions">
	<select name="carPickUpDropOffLocations" id="pickUpDropOffLocations" onchange="checkforblank()">
	<option select hidden value="">Choose Pick up and Drop Off Location</option>
	<option value="usanycairport">USA: New York City JFK Airport</option>
	<option value="italyveniceairport">Italy: Venice Marco Polo Airport</option>
	<option value="egyptairport">Egypt: Cairo International Airport</option>
	<option value="uklondonairport">UK: London Heathrow Airport</option>
	<option value="usalosangelesairport">USA: Los Angeles LAX International Airport</option>
	<option value="usamiamiairport">USA: Miami International Airport</option>
	<option value="spainbarcelonaairport">Spain: Josep Tarradellas Barcelona-El Prat Airport</option>
	<option value="greeceairport">Greece: Athens International Airport</option>
	<option value="franceparisairport">France: Paris Charles de Gaulle Airport</option>
	<option value="brazilriodejaneiroairport">Brazil: Rio de Janeiro Galeão International Airport</option>
	<option value="italyromeairport">Italy: Rome Leonardo da Vinci–Fiumicino Airport</option>
	<option value="usasanfranciscoairport">USA: San Francisco International Airport</option>
	</select></div>
	<div id="rentNowBtn"><button type="submit" name="rentNow">Rent Now</button></div>
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