<?php 
	session_start(); 
	$problem = $_GET['problem'];
	if($problem == "")
?> 
<html !DOCTYPE>  
	<html> 	   
		<head> 
			<title>HCYA Lions | Home</title>
			
			<?php include('includes/head.php');?>
			
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
							<div class="text" style="font-size: 70">HCYA LIONS</div>
							<div class="text" style="font-size: 20">"I can do all things through Christ who strengthens me"</div>
							<div class="text" style="font-size: 15"> ~ Philippians 4:13</div>
							<div><img class="hover menu-img" alt="menu" src="imgs/menu.png" onMouseOver="toggle_visibility_slide('welcomebox-footer-container');" onclick="toggle_visibility_slide('welcomebox-footer-container');" /></div>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
				</div> <!-- end front -->

				<div class="back">
					<div clas="welcomebox">
						<div class="welcomebox-container">
							<div class="text" style="font-size: 70">"Back"</div>
							<div class="text" style="font-size: 20">"I can do all things through Christ who strengthens me"</div>
							<div class="text" style="font-size: 15"> ~ Philippians 4:13</div>
							<div><img class="hover menu-img" src="imgs/menu.png" onclick="toggle_visibility_slide('welcomebox-footer-container');"></div>
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