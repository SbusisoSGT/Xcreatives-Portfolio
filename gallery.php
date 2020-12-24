<!DOCTYPE html>

<!--
	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-
	
		 ________            __    __  __                                      ______               __
		/\_____  \          /\ \__/\ \/\ \                                    /\__  _\             /\ \
		\/___//'/' __    ___\ \ ,_\ \ \_\ \    ___   __  __    ____     __    \/_/\ \/    __    ___\ \ \___
			/' /'/'__`\/' _ `\ \ \/\ \  _  \  / __`\/\ \/\ \  /',__\  /'__`\     \ \ \  /'__`\ /'___\ \  _ `\
		  /' /' /\  __//\ \/\ \ \ \_\ \ \ \ \/\ \L\ \ \ \_\ \/\__, `\/\  __/      \ \ \/\  __//\ \__/\ \ \ \ \
		 /\_/   \ \____\ \_\ \_\ \__\\ \_\ \_\ \____/\ \____/\/\____/\ \____\      \ \_\ \____\ \____\\ \_\ \_\
		 \//     \/____/\/_/\/_/\/__/ \/_/\/_/\/___/  \/___/  \/___/  \/____/       \/_/\/____/\/____/ \/_/\/_/

	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-
	
	#	Author: 7entHouse Tech PTY(LTD)
	#	About: A House of Perfect Tech Solutions
	#	Website: www.7enthousetech.co.za
	#	Email: info@7enthousetech.co.za
	
	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-
	
-->


<html>
<head>
	<title>Gallery &bull; Xcreatives </title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name="author" content="7entHouse Tech">
	<link rel="stylesheet" href="public/css/gallery-min.css">
	<link rel="stylesheet" href="public/css/layouts/app-min.css">	
	<script src="public/js/layouts/app-min.js"></script>
	<script src="public/js/gallery-min.js"></script>
	<link rel="icon" type="image/png" href="public/images/logo/Xcreatives.png">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Piedra&family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
	<div class="overlay hide-element">
		<i class="material-icons" id="close-icon">close</i>
	</div>
	<div class="slide-up">
		<a href="#top-element"><i class="material-icons">arrow_upward</i></a>
	</div>
	<div class="full-artwork-container">
		<div class="full-artwork-close">
			<i class="fa fa-close" onclick="closeArtwork()"></i>
		</div>
		<div class="main-artwork-container">
			<img class="main-pic" src="">
		</div>
		<div class="artwork-slideshow">
		</div>
	</div>
	<nav class="dropdown-container">
		<div class="dropdown-close">
			<i class="fa fa-close" onclick="closeDropdown()"></i>
		</div>
		<ul class="dropdown-links">
			<li><a href="/">HOME</a></li>
			<li id="active"><a href="/gallery.php">GALLERY</a></li>
			<li><a href="/about.php">ABOUT</a></li>
			<li><a href="/contact.php">CONTACT</a></li>
		</ul>
		<div class="dropdown-contact">
			<!-- <a href="https://www.facebook.com/xcreatives" target="_blank"><i class='fab fa-facebook-f'></i></a> -->
			<a href="tel:+27609368929"><i class="fas fa-phone-alt contact-icon"></i></a>
			<a href="mailto:xakaweboss@gmail.com"><i class="fas fa-envelope"></i></a>
			<a href="https://wa.me/+27609368929"><i class="fab fa-whatsapp"></i></a>
		</div>
	</nav>
	<nav class="nav" id="top-element">
		<i id="menu-icon" class="material-icons" onclick="showDropdown()">menu</i>
		<div class="logo">
			<a href="/"><span class="logo-img">Xcreatives</span></a>
		</div>
	</nav>
	<main class="content">
		<div class="gallery-container">
			<h3 class="gallery-header">Gallery</h3>
			<div class="gallery-pics">
				<img class="artwork" src="public/images/portfolio/artwork11.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork1.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork22.jpeg" onclick="showArtwork(event)">			
				<img class="artwork" src="public/images/portfolio/artwork2.jpg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork3.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork4.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork5.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork17.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork6.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork7.jpg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork8.jpg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork9.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork10.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork12.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork16.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork14.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork15.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork18.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork19.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork20.jpeg" onclick="showArtwork(event)">
				<img class="artwork" src="public/images/portfolio/artwork21.jpeg" onclick="showArtwork(event)">
			</div>
		</div>
	</main>
	<footer class="footer">
		<span class="footer-text">
			Copyright &copy Xcreatives &bull; Designed with <i class='fas fa-heart'></i> by <span id="ht">7entHouse Tech</span>
		</span>
	</footer>
</body>
</html>