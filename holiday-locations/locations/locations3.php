<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: Egypt</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<center>
		<body>
		<br/>
		<header></header>
		<div id="headerTxt">
		<p>Egypt</p>
		</div>
		<br/>
		<div id="locationsArea"></div>
		<div id="locationImage">
		<img border="1" id="locationsImgs" alt="Egypt" src="css/egypt/2102521.jpg" width="500" height="300">
		</div>
		<div id="myModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="locImg01">
		<div id="caption"></div>
		</div>
		<div id="locationDescription">
		<div id="descriptionTxt">Description:</div>
		
		</div>
		<div id="gallery1">
		<img border="1" id="locationsImgs2" alt="Egypt" src="css/egypt/3-days-in-cairo-egypt-itinerary-header-2.jpg" width="200" height="100">
		</div>
		<div id="gallery2">
		<img border="1" id="locationsImgs3" alt="Egypt" src="css/egypt/cairo.jpg" width="200" height="100">
		</div>
		<div id="gallery3">
		<img border="1" id="locationsImgs4" alt="Egypt" src="css/egypt/303316.jpg" width="200" height="100">
		</div>
		<div id="gallery4">
		<img border="1" id="locationsImgs5" alt="Egypt" src="css/egypt/da080eac6f8eb63450184115b1587f4d.jpg" width="200" height="100">
		</div>
		<div id="gallery5">
		<img border="1" id="locationsImgs6" alt="Egypt" src="css/egypt/64866.jpg" width="200" height="100">
		</div>
		<div id="gallery6">
		<img border="1" id="locationsImgs7" alt="Egypt" src="css/egypt/Egypt-2019-455_feat.jpg" width="200" height="100">
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
			echo ("<button onclick=\"location.href='bookTravel/bookTravel3.php'\">Book Ticket</button>");
		} else {
			echo "<button type='submit' name='bookTicketNotLoggedIn'>Book Ticket</button>";
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
		   
		   var img = document.getElementById("locationsImgs");
		   var img2 = document.getElementById("locationsImgs2");
		   var img3 = document.getElementById("locationsImgs3");
		   var img4 = document.getElementById("locationsImgs4");
		   var img5 = document.getElementById("locationsImgs5");
		   var img6 = document.getElementById("locationsImgs6");
		   var img7 = document.getElementById("locationsImgs7");
		   var modalLocationImg = document.getElementById("locImg01");
		   var captionText = document.getElementById("caption");
		   
		   img.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img2.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img3.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img4.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img5.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img6.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   img7.onclick = function() {
			   
			   modal.style.display = "block";
			   modalLocationImg.src = this.src;
			   captionText.innerHTML = this.alt;
			   
		   }
		   
		   var span = document.getElementsByClassName("close")[0];
		   
		   span.onclick = function() {
			   modal.style.display = "none";
		   }
		   
		</script>
		
		</body>
        </center> 
   </head>
</html>