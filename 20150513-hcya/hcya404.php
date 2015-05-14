<?php 
	session_start(); 
	$problem = $_GET['problem'];
	if($problem == "")
?>
<html !DOCTYPE> 
	<html> 	
		<head>
			<title>HCYA Lions | Home</title>

			<meta charset="UTF-8">																					<!-- Unicode Encoding(1byte) -->
			<meta name="HCYA LIONS">																				<!-- Title -->
			<meta name="keywords" content="HCYA, Lions, Track and Field, Homeschool, XC, Cross Country">			<!-- Keywords -->
			<meta name="description" content="Homeschool Christian Youth Association Running Club. Houston Texas.">	<!-- Description -->
			<meta name="author" content="Peter Dulworth">															<!-- Author -->
			 
			<link rel="stylesheet" href="hcyaStyle.css">										<!-- StyleSheet(CSS) -->
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">		<!-- Pure(form style) -->
			<link rel="stylesheet" href="960/960.css" />										<!-- Main 960 -->
            <link rel="stylesheet" href="960/reset.css" />										<!-- 960 extras -->
            <link rel="stylesheet" href="960/text.css" />										<!-- OPTIONAL 960 font -->

			<?php include('includes/favicons.php');?>
        		
    		<script src="javascripts/jquery.min.js"></script>	<!-- JQUERY -->
    		<!-- Copryright © 2012 -->
        </head>

	<!-- * * * * * * * * LOADING PAGE * * * * * * * *  -->
 
		<body onLoad="preloader()">

			<div id="loading">
				  <div id="loading-div">
				    <center>
				    	<img alt="loading wheel" src="imgs/loading.gif" />
				    	<p>LOADING</p>
				    </center>
				  </div>
			</div>
	<!-- * * * * * * * * * CONTENT * * * * * * * * *  -->
			<div id="content">
				<div id="background">
					<img alt="background img" src="http://puu.sh/9sGWq/733fc082fb.jpg" />				
				</div>
				
				<?php include('includes/navbar.php');?>
	<!-- * * * * * * * * * WELCOME * * * * * * * * *  -->
			<div class="flip3D" id="flip3D" style="display:block">
				<div class="front" >
					<div class="welcomebox">
						<div class="welcomebox-container">
							<div class="text" style="font-size: 70">UH-OH</div>
							<div class="text" style="font-size: 20">This page doesn't exist.
								<?php 
									session_start(); 
									if($_SESSION['logged_in'] == 'YES')	{
										$name = $_SESSION['name'];
										print("" . "Also... Your name isn't " . $name . ".");
										}
								?>
							</div>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
				</div> <!-- end front -->

				<div class="back">
					<div clas="welcomebox">
						<div class="welcomebox-container">
							<div class="text" style="font-size: 70"><a href="index.php?page=404" style="color:white; text-decoration: none;">CLICK HERE</a></div>
							<div class="text" style="font-size: 20">To return to the Homepage</div>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
				</div> <!-- end back -->
			</div>  <!-- end flip3D -->
	<!-- * * * * * * * * * WELCOME DROPDOWN * * * * * * * * *  -->
				<div id="welcomebox-footer" style="display: block;">
					<div id="welcomebox-footer-container">
						<a id="facebookLink" href="https://www.facebook.com/hcya.lions?fref=ts" target="_block">Facebook</a>
						<?php 
							session_start();
							if($_SESSION['logged_in'] !== "YES") {print('<a class="hover" onclick="showDiv()">Login</a>');}
							else {print('<a class="hover" href="logout.php">Logout</a>');}
						?>
						<a class="hover" onclick="showDiv2()">Sign Up</a>
						<a id="gmailLink" href="mailto:pdulworth97@gmail.com">Gmail</a>
					</div>
				</div>
			<?php include('includes/statusbar.php');?>
			</div> <!-- content -->
			<script src="javascripts/scripts.js"></script>
		</body>
	</html> 