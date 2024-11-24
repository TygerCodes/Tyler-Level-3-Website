<!DOCTYPE html>
<html lang="en">

	<head>

	 <!-- Meta tags, omg so many meta tags -->
	 

		<meta charset="utf-8"> <!-- Allows most characters to be used on the website -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes the website mobile safe -->
		<title>Taka-HEY Newsletter</title>
		<meta name="description" content="Upcoming game for PC and console. Learn more and sign up for development news"> <!-- For search engine purposes -->
		<meta name="author" content="Tyler Bertenshaw"> <!-- Means that searches for me will bring up website -->
		  <!--
		  <meta property="og:title" content="Put in something later">
		  <meta property="og:type" content="website">
		  <meta property="og:url" content="Put in something later">
		  <meta property="og:description" content="Put in something later">
		  <meta property="og:image" content="image.png"> All of these tags are for social media embeds, to make site information automantically pop up when the link is pasted. Nice, but 
		  not a high priority right now.
		  p{
			color: #2E8B57; Saved from CSS page
		  -->
		  <!--
		  <link rel="icon" href="/favicon.ico">
		  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
		  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
		  <link rel="stylesheet" href="styles.css"> All this code will display the icon in the tab. .ico is used for legacy browsers, .svg for modern and apple for when someone adds
		  the website to a Safari homepage.
		  -->
	  
	 <!-- MaxCDN Bootstrap Import -->

	  
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

	<!-- Personal Stylesheet Import -->
	  
		<link rel="stylesheet" href="styles.css"> 

	<!-- PHP Session Start -->
	
		
	<!-- PHP Data Upload -->
		
		
	</head>

	<body>
	<!-- Header/nav bar -->
			<!-- Bootstrap collapsable nav bar -->
			 <div class="navbar"> <!-- Goes for the "dark mode" black and white navbar in Bootstrap-->
				
				<div class="container-fluid"> <!-- Responsible for resizing elements for the website to work on multiple screens-->
					<div class="navbar-header navi"> <!-- The "title" of the navbar. Probably not always needed-->
					<!-- Below: Creates a button that collpases the navbar and expands again when on a small screen-->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- Makes button to let the bar collapse on mobile-->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand"> <img class="naviLogo" src="Feather1.png"> </div>
					</div>
					<!-- Below: Compiles the list of webpage names to click on-->
					<div class="collapse navbar-collapse" id="myNavbar"> <!-- Controls which bit collapses-->
					  <ul class="nav navbar-nav">
						<li><a class="navi" href="index.html">Home</a></li> <!-- For the page you're on-->
						<li class="active"><a class="navi" href="#">Newsletter</a></li>
						<li><a class="navi" href="#">About Us</a></li>
						<li><a class="navi" href="#">Platforms</a></li>
					  </ul>
					</div>
				</div>
			</div>
		
	<!-- Banner, maybe turn into slideshow past MVP stage? Note to self: Make placeholder image-->
	
		<div class="banner"> <!-- My banner class is needed for elements like the background that sits behind the jumbotron.-->
			<div class="container"> <!-- Keeps the jumbotron floating in the middle-->
				<h1 class="bannest">Sign Up For Free News On Our Games.</h1>
			</div>
		</div>
	<!-- Title of page-->
		<div class="pagehead"> <!-- Meant for page titles on sections without banners.-->
		</div>
		
	<!-- For overall body style decisions that are the same across the alternating color sections, we'll nest those inside a seperate div-->
		<div class="Mainpage">
		<!-- Section type 1, due to switching between purple and white sections for the body we'll need two sets of css code-->
			<form action="Form2.php" method="post">
			<div class="container">
				<fieldset>
				
					<legend>Sign up for exclusive newsletter:</legend>
					
					<label for="email">Email to send newsletter to:</label> </br>
					<input type="text" id="email" name="email"  maxlength="255" placeholder="i.e name@domain.com"> </br>
					
					<label for="isJapanese">I want to recieve the newsletter in Japanese:</label> 
					<input type="checkbox" id="isJapanese" name="isJapanese"> </br>
					
					<label for="isBacker">I want to recieve updates on Kickstarter backer perks:</label> 
					<input type="checkbox" id="isBacker" name="isBacker"> </br>
					
					<input name="submit" type="submit" id="submit" value="Submit")">
					 
				</fieldset>
			</div>
			</form>
		</div>
	<!-- Footer-->
		<div class="footer"> <!-- Classifies bottom of page-->
			<div class="row">
					<div class="col-sm-3"><p class="footerText">Privacy Policy</p></div>
					<div class="col-sm-3"><p class="footerText">Contact Us</p></div>
					<div class="col-sm-6"><p class="footerText">Copyright Nonsense</p></div> <!-- This one spans father in case I need a mini paragraph here -->
			</div> 
		</div>
		
	</body>

</html>