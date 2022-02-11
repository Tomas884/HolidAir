<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HolidAir: Mercedes Benz C-Class 2019</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<center>
		<body>
		<br/>
		<header></header>
		<div id="headerTxt">
		<p>Mercedes Benz C-Class 2019</p>
		</div>
		<br/>
		<div id="carsArea"></div>
		<div id="carImage">
		<img border="1" id="carsImages" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC891A021001.jpg" width="500" height="300">
		</div>
		<div id="myModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="carImage01">
		<div id="caption"></div>
		</div>
		<div id="carDescription">
		<div id="descriptionTxt">Description:</div>
		
		</div>
		<div id="gallery1">
		<img border="1" id="carsImages2" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC891A021002.jpg" width="200" height="100">
		</div>
		<div id="gallery2">
		<img border="1" id="carsImages3" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC891A021003.jpg" width="200" height="100">
		</div>
		<div id="gallery3">
		<img border="1" id="carsImages4" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC892A01350.jpg" width="200" height="100">
		</div>
		<div id="gallery4">
		<img border="1" id="carsImages5" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC891A021044.jpg" width="200" height="100">
		</div>
		<div id="gallery5">
		<img border="1" id="carsImages6" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC892A01351.jpg" width="200" height="100">
		</div>
		<div id="gallery6">
		<img border="1" id="carsImages7" alt="Mercedes Benz C-Class 2019" src="css/mercedes-benz-c-class-2019/USC90MBC891A021025.jpg" width="200" height="100">
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
			echo ("<button onclick=\"location.href='rentCars/rentCars9.php'\">Rent Car</button>");
		} else {
			echo "<button type='submit' name='rentCarNotLoggedIn'>Rent Car</button>";
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
		var modal2 = document.getElementById("myModal2");
		var modal3 = document.getElementById("myModal3");
		var modal4 = document.getElementById("myModal4");
		var modal5 = document.getElementById("myModal5");
		var modal6 = document.getElementById("myModal6");
		var modal7 = document.getElementById("myModal7");
        var img = document.getElementById("carsImages");
		var img2 = document.getElementById("carsImages2");
		var img3 = document.getElementById("carsImages3");
		var img4 = document.getElementById("carsImages4");
		var img5 = document.getElementById("carsImages5");
		var img6 = document.getElementById("carsImages6");
		var img7 = document.getElementById("carsImages7");
        var modalCarImage = document.getElementById("carImage01");
		var modalCarImage2 = document.getElementById("carImage02");
		var modalCarImage3 = document.getElementById("carImage03");
		var modalCarImage4 = document.getElementById("carImage04");
		var modalCarImage5 = document.getElementById("carImage05");
		var modalCarImage6 = document.getElementById("carImage06");
		var modalCarImage7 = document.getElementById("carImage07");
        var captionText = document.getElementById("caption");
        
		img.onclick = function() {
	
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
	
}

img2.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
}

img3.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
}

img4.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
}

img5.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
}

img6.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
	captionText.innerHTML = this.alt;
}

img7.onclick = function(){
	modal.style.display = "block";
	modalCarImage.src = this.src;
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