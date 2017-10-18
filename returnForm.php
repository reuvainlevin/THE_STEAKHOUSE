<?php
	$firstName = "-";
	$lastName = "-";
	$age = "-";
	$email = "-";
	$date = "-";
	$usa = "usa";
	$europe = "-";
	$other = "-";
	$recommend = "-";
	$range = "5";
	$comments = "-";
	if(!empty($_POST["firstName"])) {
		$firstName = $_POST["firstName"];
	}
	if(!empty($_POST["lastName"])) {
		$lastName = $_POST["lastName"];
	}
	if(!empty($_POST["age"])) {
		$age = $_POST["age"];
	}
	if(!empty($_POST["email"])) {
		$email = $_POST["email"];
	}
	if(!empty($_POST["date"])) {
		$date = $_POST["date"];
	}
	if(!empty($_POST["usa"])) {
		$usa = $_POST["usa"];
	}
	if(!empty($_POST["europe"])) {
		$europe = $_POST["europe"];
	}
	if(!empty($_POST["other"])) {
		$other = $_POST["other"];
	}
	if(!empty($_POST["recommend"])) {
		$recommend = $_POST["recommend"];
	}
	if(!empty($_POST["range"])) {
		$range = $_POST["range"];
	}
	if(!empty($_POST["comments"])) {
		$comments = $_POST["comments"];
	}
?>
<!DOCTYPE html> 
<html>
	<head>
		<title> &Tscr;he &Sscr;teakhouse </title>	
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="icon.png">
	</head>
	<body>
		<div class="logo">
			<hr class="bigl">
			<img class="mlogo" src="icon.png" alt="Logo">
			<h1 id="ts">  THE &lozf; STEAKHOUSE </h1>	
			<div id="main_info">
				<a class="ml" id="homelin" href="The Steakhouse.html"> Home </a>
				<a class="ml" href="menu.html"> Our Menu </a> 
				<a class="ml" href="our_chefs.html"> Our Chefs </a> 
				<a class="ml" href="contact_info.html"> Contact Us </a>
			</div>
			<div id="hrline">
				<hr class="bigl">
			</div>
		</div>
		<h2> 
			FirstName: <?=$firstName?>. <br> 
			LastName: <?=$lastName?>. <br> 
			Your Age: <?=$age?>. <br> 
			Your Email: <?=$email?>. <br> 
			Last time you visited us: <?=$date?>. <br> 
			You live in: <?=$usa?> <?=$europe?> <?=$other?>. <br> 
			Recommend: <?=$recommend?>. <br>
			<?php if(($_POST["range"]) > 3) : ?>
				Rate: <?=$range?>. We are very glad you enjoyed your visit! 
			<?php else : ?>
				Rate: <?=$range?>. We are sorry to hear that, give this code next time you come -002315- and receive a 20% discount! 
			<?php endif ?>
			<br> Comments: <?=$comments?>.
		<h2>
		<a id="fixed_mlogo" id="homelin" href="The Steakhouse.html"></a>
	</body>
</html>