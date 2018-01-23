<!DOCTYPE html>
<html>
<head>
<title>Dental Polyclinic Smile </title>
<link rel="stylesheet" type="text/css" href="myStile.css">
<meta charset="UTF-8">
</head>


	<?php

session_start();

?>
<body>
	<div id="wrapper">
		<div id="header">
			<img src="logo.jpeg" >
			<h1> Dental Polyclinic-Smile</h1>
			 <?php
	  if(!isset($_SESSION['isLogged']))
      	{ ?>
			<form>
				
			<a href="http://www.youtube.com/" >Login</a>
			<input id="register" type="submit" value="REGISTER">

			</form>

		 </div>
		 <hr>
		 <div id ="content">
		 	<div id="leftSide">
		 	<ul>
		 		<li id="first"> <a href="project.php" >Home</a></li>
		 		<li id="second"> <a href="AboutUs.html" > About us </a></li>
		 		<li id="third"> <a href="Services.html" >Services</a></li>
		 		<li id="fourth"> <a href="doctors.php" > Doctors </a></li>
		 		<li id="fifth"> <a href="#" > Contact us</a></li>
		 	</ul>
		 </div>
		 	<div id="rightSide">
		 		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTc_yOlpLLQMhChgeJVx2VPGI-8I0kSw4yabvXwLsMAzZHFYT1b">
		 	</div>
		 </div>
<hr>

		 <div id="nextPart">
<div id="interesting" class="three">
<h2> Did you know that... </h2>
<p> ...an average person spends 38.5 days brushing their teeth over their lifetime. </p>
<p> ...many diseases are linked to your oral health, including heart disease, osteoporosis, and diabetes. </p>
<a href="http://www.123dentist.com/10-fun-facts-about-teeth/" target="_blank"> Read more >> </a>
</div>
<div id="text" class="three">
<h2> Welcome </h2>
<p> Welcome to the official page of Dental Polyclinc „Smile“. Years of experience in clinical and research work garanties you high level of dental services with individual approach to every patient.  In very pleasant environment we will enable the best dental care for You and Your family. Our knowledge, constant improvement and long experience are at Your service. </p>
	</div>
	<div id="video" class="three">
	<h2> Check out our new video </h2> 
	<video>
	</video>

	</div>
		 </div>
		 <hr>

		 <div id="footer">
		 	<p> Copyright &copy 2014 </p>
		 	<div id="find">
		 	<p> Find us on </p>
		 	<a href="https://www.facebook.com/StomatoloskaOrdinacijaBicakcic" target="_blank"><img src="fb.png" alt="Facebook" /></a>
		 	 </div>
		 </div>
</div>
</body>
</html>