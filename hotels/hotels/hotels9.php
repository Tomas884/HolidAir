<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: France: Citadines Saint-Germain-des-Prés Paris</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
   </head>
       <center>
	   <body>
	   <br/>
	   <header></header>
	   <div id="headerTxt">
	   <p>France: Citadines Saint-Germain-des-Prés Paris</p>
	   </div>
	   <br/>
	   <div id="hotelsArea">
	   
	   </div>
	   <div id="hotelImage">
	   <img border="1" id="hotelImages" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/239424439.jpg" 
	   width="500" height="300">
	   </div>
	   <div id="myModal" class="modal">
	   <span class="close">&times;</span>
	   <img class="modal-content" id="hotelImg">
	   <div id="caption"></div>
	   </div>
	   <div id="hotelDescription">
	   <div id="descriptionTxt">Description:</div>
	   </div>
	   <div id="gallery1">
	   <img border="1" id="hotelImages2" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/292978627.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="gallery2">
	   <img border="1" id="hotelImages3" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/16356418.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="gallery3">
	   <img border="1" id="hotelImages4" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/133234959.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="gallery4">
	   <img border="1" id="hotelImages5" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/292067719.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="gallery5">
	   <img border="1" id="hotelImages6" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/16356387.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="gallery6">
	   <img border="1" id="hotelImages7" alt="Citadines Saint-Germain-des-Prés Paris" src="css/citadines-saint-germain-des-Prés Paris/292979554.jpg" 
	   width="200" height="100">
	   </div>
	   <div id="button1">
		<?php
		if (isset($_SESSION["userid"])) {
			echo "<button type='submit' name='addToInterestListLoggedIn'>Add to Interest List</button>"; 
		} else {
			echo "<button type='submit' name='addToInterestListNonLoggedIn'>Add to Interest List</button>"; 
			
		}
		?>
		</div>
		<div id="button2">
		<?php
		if (isset($_SESSION["userid"])) {
			echo ("<button onclick=\"location.href='bookHotel/bookHotel9.php'\">Book Hotel</button>");
		} else {
			echo "<button type='submit' name='bookHotelNotLoggedIn'>Book Hotel</button>";
		}
		?>
		</div>
	   <br/>
	   <footer></footer>
	   <div id="copyrightTxt">
	   <p>© 2020-2021 HolidAir: Website Developed By Tomas Grabauskas</p>
	   </div>
	   
	   <script>
	   var modal = document.getElementById("myModal");
	   var img = document.getElementById("hotelImages");
	   var img2 = document.getElementById("hotelImages2");
	   var img3 = document.getElementById("hotelImages3");
	   var img4 = document.getElementById("hotelImages4");
	   var img5 = document.getElementById("hotelImages5");
	   var img6 = document.getElementById("hotelImages6");
	   var img7 = document.getElementById("hotelImages7");
	   var modalHotelImgs = document.getElementById("hotelImg");
	   var captionText = document.getElementById("caption");
	   
	   img.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img2.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img3.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img4.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img5.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img6.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   img7.onclick = function() {
		   modal.style.display = "block";
		   modalHotelImgs.src = this.src;
		   captionText.innerHTML = this.alt;
	   }
	   
	   var span = document.getElementsByClassName("close")[0];
	   
	   span.onclick = function() {
		   modal.style.display = "none";
	   }
	   </script>
	   
	   </body>
	   </center>

</html>