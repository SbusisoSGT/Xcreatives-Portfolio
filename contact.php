<?php
	require_once("app/csrf.php");	
	generateCsrfToken();
?>
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
	<title> Contact &bull; Xcreatives</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name="author" content="7entHouse Tech">
	<link rel="stylesheet" href="public/css/contact-min.css">
	<link rel="stylesheet" href="public/css/layouts/app-min.css">	
	<script src="public/js/layouts/app-min.js"></script>
	<link rel="icon" type="image/png" href="public/images/logo/Xcreatives.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/3ef12e339b.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Piedra&family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
	<div class="overlay hide-element">
		<i class="material-icons" id="close-icon">close</i>
	</div>
	<nav class="dropdown-container">
		<div class="dropdown-close">
			<i class="fa fa-close" onclick="closeDropdown()"></i>
		</div>
		<ul class="dropdown-links">
			<li><a href="/">HOME</a></li>
			<li><a href="/gallery.php">GALLERY</a></li>
			<li><a href="/about.php">ABOUT</a></li>
			<li id="active"><a href="/contact.php">CONTACT</a></li>
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
		<div class="contact-container">
			<h3 class="contact-header">Contact</h3>
			<div class="contact-content">
				<div class="contact-form">
					<h4 class="contact-form-header">Leave me a message</h4>
					<?php
						if(isset($_COOKIE['success']))
							echo "<span class='contact-form-alert alert-success'>".$_COOKIE['success']."</span>";
						else if(isset($_COOKIE['error']))
							echo "<span class='contact-form-alert alert-danger'>".$_COOKIE['error']."</span>";
					?>
					<form action="api/sendContactQueries.php" method="POST">
						<input type="hidden" name="csrf" value="<?php  echo $_SESSION['csrf']  ?>">
						<input type="text" class="form-input" name="fullName" placeholder="Full Name" required>
						<input type="email" class="form-input" name="email" placeholder="Email" required>
						<input type="text" class="form-input" name="mobileNumbers" placeholder="Mobile Numbers" required>
						<textarea class="form-textarea" name="message" placeholder="Your message" required></textarea>
						<button type="submit" class="form-submit"> Send <i class="far fa-paper-plane"></i></button>
					</form>
				</div>
				<div class="contact-info">
					<h4 class="contact-info-header">Get in touch</h4>
					<div class="contact-info-details">
						<div class="contact-detail">
							<i class="fas fa-phone-alt contact-icon"></i> <p>(+27)60 936 8929</p>
						</div>
						<div class="contact-detail">
							<i class="fas fa-envelope contact-icon"></i> <p>xakaweboss@gmail.com</p>
						</div>
						<div class="contact-detail">
							<i class="fab fa-whatsapp contact-icon"></i> <p>(+27)60 936 8929</p> 							
						</div>
						<div class="contact-detail">
							<i class="fas fa-map-marker-alt contact-icon"></i> 
							<p>
								03 Nelson street<br/>
								Station Hill<br/>
								Port Alfred <br/>
								6170<br/>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="copyright">
            <p>
            	<span>Copyright &copy Xcreatives</span>
                <span class="copyright-designed-with">
                    <span class="copyright-dot"> • </span> Designed with <i class='fas fa-heart'></i> by <span id="ht">7entHouse Tech</span>
                </span>
            </p>
        </div>
	</footer>
</body>
</html>
<script>
</script>