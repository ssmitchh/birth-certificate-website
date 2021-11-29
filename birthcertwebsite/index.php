<!DOCTYPE html>
<html>

<head>
	<title>Barry's Boutique Birth Certificates</title>
	<meta charset="utf-8">

	<link href="style.css" rel="stylesheet" type="text/css" />



	<?php
	include 'function.php';
	include 'form.php';
	?>


</head>

<body>
<!-- 
<marquee>
<div  class ="best">
	The BEST Boutique New Zealand Government Issued Birth Certificates
	<div>
	<marquee> -->



<div class="sticker" id="sticker">
	<img  class = "flag"  src="new-zealand-flag.gif" height="120px">

	</div>
	


	<div class="mainDiv">


		<div class="one">

			<div class="options">


				<div class="topleft option">
					<img class="mcd " id="mcd" src="mcdbirthcert.png" height="250px">
					
					<img class="expand-button mcd" id="expand-mcd" src="https://img.icons8.com/external-prettycons-lineal-prettycons/100/000000/external-expand-orientation-prettycons-lineal-prettycons.png" height="150px">
					<!-- <p> McDonalads </P> -->
				</div>

				<div class="topright option">
					<img class="m10 " id="m10" src="m10birthcert.png" height="250px">
					<img class="expand-button m10" id="expand-m10" src="https://img.icons8.com/external-prettycons-lineal-prettycons/100/000000/external-expand-orientation-prettycons-lineal-prettycons.png" height="150px">
				</div>

				<div class="bottomright option" id = "bc-container">
					<img class="bc" id="bc" src="Birth-certificate-standard.jpg" height="250px"></img>
					<img class="upload-button bc" id="upload-bc" src="https://img.icons8.com/ios/50/000000/upload--v1.png"/>
					
				</div>

				<div class="bottomleft option">
					<img class="hk" id="hk" src="hkbirthcert.png" height="250px">
					<img class="expand-button hk" id="expand-hk" src="https://img.icons8.com/external-prettycons-lineal-prettycons/100/000000/external-expand-orientation-prettycons-lineal-prettycons.png" height="150px">
					<!-- <p> Hello Kitty </p> -->
				</div>




			</div>

		</div>

		<div class="popup mcd hidden" id="big-mcd">
			<div class="big">
				<img class="mcd" id="mcd" src="mcdbirthcert.png" height="670px">
				<div>
					<img class="close-button" id="close-mcd" src="close.png" height="200px">
				</div>
			</div>

		</div>

		<div class="popup m10 hidden" id="big-m10">
			<div class="big">
				<img class="m10" id="m10" src="m10birthcert.png" height="670px">
				<div>
					<img class="close-button" id="close-m10" src="close.png" height="50px">
				</div>
			</div>
		</div>

		<div class="popup hk hidden" id="big-hk">
			<div class="big">
				<img class="hk" id="hk" src="hkbirthcert.png" height="670px">
				<div>
					<img class="close-button" id="close-hk" src="close.png" height="50px">
				</div>

			</div>
		</div>

		<div class="popup hidden" id="upload-popup">
			<div class="upload" id="upload">
				Customise your birth certificate! <br> <br>
				<input type = "file" id="image_input" accept="image/png, image/jpg">
				<img class="close-button" id="close-upload" src="close.png" height="50px">
				<div id="display_image"></div>
				<br>
				<button class ="button" id = "uploaded"> Upload </button>

			</div>


		</div>


		<script src="function.js"></script>


		<div class="two">

			
				<form id = "details-form" action="form.php" method="post">

					Fill out the information as it appears on your birth certificate <br>
<br>
					<!-- child -->
					Child <br>
					<input  id="firstName" type="text" name="firstName" placeholder="First/Given Name(s)" required />
					<input  id="surname" type="text" name="surname" placeholder="Surname/Family Name(s)" required /> <br>
					<input  id="firstNameAtBirth" type="text" name="firstNameAtBirth" placeholder="First/Given Name(s) at birth"  />
					<input  id="surnameAtBirth" type="text" name="surnameAtBirth" placeholder="Surname/Family Name(s) at birth"  /> <br>
					<input  id="sex" type="text" name="sex" placeholder="Sex" required /> <br>
					<input  id="stillBirth" type="text" name="stillBirth" placeholder="Still birth/Multiple birth"  /> <br>
					<input  id="dob" type="text" name="dob" placeholder="Date of Birth" required />
					<input  id="pob" type="text" name="pob" placeholder="Place of Birth" required /> <br>
					<input  id="nzcitizen" type="text" name="nzcitizen" placeholder="NZ Citizen by birth" /> <br>
					<input  id="namechange" type="text" name="namechange" placeholder="Name changes" /> <br>

					<!-- mother -->
					Mother <br>
					<input  id="mfirstName" type="text" name="mfirstName" placeholder="First/Given Name(s)" required />
					<input  id="msurname" type="text" name="msurname" placeholder="Surname/Family Name(s)" required /> <br>
					<input  id="mfirstNameAtBirth" type="text" name="mfirstNameAtBirth" placeholder="First/Given Name(s) at birth"  />
					<input  id="msurnameAtBirth" type="text" name="msurnameAtBirth" placeholder="Surname/Family Name(s) at birth"  /> <br>
					<input  id="mdob" type="text" name="mdob" placeholder="Date of Birth" required />
					<input  id="mpob" type="text" name="mpob" placeholder="Place of Birth" required /> <br>

					<!-- father -->
					Father <br>
					<input  id="dfirstName" type="text" name="dfirstName" placeholder="First/Given Name(s)" required />
					<input  id="dsurname" type="text" name="dsurname" placeholder="Surname/Family Name(s)" required /> <br>
					<input  id="dfirstNameAtBirth" type="text" name="dfirstNameAtBirth" placeholder="First/Given Name(s) at birth"  />
					<input  id="dsurnameAtBirth" type="text" name="dsurnameAtBirth" placeholder="Surname/Family Name(s) at birth"  /> <br>
					<input  id="ddob" type="text" name="ddob" placeholder="Date of Birth" required />
					<input  id="dpob" type="text" name="dpob" placeholder="Place of Birth" required /> <br>

					<input type="hidden" id = "imgSrc" name="imgSrc" value="XXXXXXX" />
					
					<br>
					<input  id="regNum" type="number" name="regNum" placeholder="Registration Number" required />
					<br>
					<br>


					<input type="button" name="btnsubmit" value="Send" onclick="myFunction()"/>
				</form>

		</div>


	</div>

	

	<?= footer() ?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>





</html>