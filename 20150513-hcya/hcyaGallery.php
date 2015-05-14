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
			<!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">	 -->	<!-- Pure(form style) -->
			<link rel="stylesheet" href="javascripts/960/960.css" />							<!-- Main 960 -->
            <link rel="stylesheet" href="javascripts/960/reset.css" />	 						<!-- 960 extras -->
            <!-- <link rel="stylesheet" href="javascripts/960/text.css" />	 	 -->				<!-- OPTIONAL 960 font -->

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
					<div class="gallerybox">
						<div class="gallerybox-container">
							<div class="text" style="font-size: 50; border-bottom: 1px inset white">Photos</div><br><br>
							<div class="container_12" style="padding:0">
								<div class="grid_3" style="padding:0"><p>Helloaisoaofaweifpaiwefpiawpeih</p></div>
								<div class="grid_3" style="padding:0"><p>Helloaisoaofaweifpaiwefpiawpeih</p></div>
								<div class="grid_3" style="padding:0"><p>Helloaisoaofaweifpaiwefpiawpeih</p></div>
								<div class="grid_3" style="padding:0"><p>Helloaisoaofaweifpaiwefpiawpeih</p></div>

								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"></div>

								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"></div>
								<div class="grid_3" style="padding:0"><img class="gallery-img" style="height:150px; width: auto;" src="gallery-imgs/tf-girls-2013.jpg"></div>
							</div>
						</div> <!-- end welcomebox container -->
					</div> <!-- end welcomebox -->
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
	<!-- * * * * * * * * * LOGIN * * * * * * * * *  -->
				<div id="loginbox" style="display:none;">
					<div id="loginbox-container">
						<img id="login-logo" alt="HCYA LOGO" src="imgs/logo_white.png">
						<form class="pure-form" action="login.php?page=index" method="POST" id="login-form">
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>					<br><br>
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>				<br><br>
		        			
		        			<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign In</button>	<br><br>
		        			<a class="pure-button submit-btn" href="new_user.php">Sign Up</a>
						</form>				
					</div>
				</div>
	<!-- * * * * * * * * * REGISTER * * * * * * * * *  -->
				<div id="signupbox" style="display:none;">
					<div id="signupbox-container">
						<img id="login-logo" alt="HCYA LOGO" src="imgs/logo_white.png">
						<form class="pure-form" action="addnew_user.php" method="POST" id="login-form">
			        		<input type="text" name="user" placeholder="Username" class="pure-input-1-2"/>		<br><br>			        		
			        		<input type="password" name="pass" placeholder="Password" class="pure-input-1-2"/>	<br><br>
		        			<input type="text" name="fname" placeholder="First name" class="pure-input-1-2"/>	<br><br>			        		
			        		<input type="text" name="email" placeholder="Email" class="pure-input-1-2"/>		<br><br>
		        			
		        			<button type="submit" class="pure-button-primary pure-button pure-input-1-2">Sign Up</button><br><br>
		        			<a class="pure-button submit-btn" href="index.php#showDiv()">Sign In</a>
						</form>				
					</div>
				</div>
	<!-- * * * * * * * * * STATUS BAR * * * * * * * * *  -->
				<div id="status-footer">
					<div id="status-footer-container">
						<?php 
							session_start();
							$name = $_SESSION['name'];
							
							if($_SESSION['logged_in'] == "YES" && $_SESSION['admin_logged_in'] !== "YES") {
								print("Welcome <a class='status-bar-item' href='hcyaAccount.php'>" . $name ."</a>!");
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="logout.php?page=index">Logout</a>'); 
							} 

							else if($_SESSION['admin_logged_in'] == "YES" && $_SESSION['logged_in'] !== "YES") {
								print('Welcome <a class="status-bar-item" href="hcyaAccount.php">ADMIN</a>!');
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="logout.php?page=index">Logout</a>'); 
							} 

							else {	
								print('<a class="hover status-bar-item" onclick="showDiv()">Login</a>');	
								print(' / ');
								print('<a class="hover status-bar-item" onclick="showDiv2()">Register</a>');
							}
						?>																												&nbsp; &#x2022; &nbsp;
						<a class ="status-bar-item status-social status-facebook" href="https://www.facebook.com/hcya.lions?fref=ts" 
						target="_blank">																			Facebook</a>		&nbsp; &#x2022; &nbsp;
						<a class ="status-bar-item status-social status-gmail" href="mailto:hcyalions@aol.com">		Gmail   </a>
						<?php 
							if($_SESSION['logged_in'] == "YES") {
								
							}  
							else {
								print('&nbsp; &#x2022; &nbsp;');
								print('<a class="status-bar-item" href="admin_view.php">Admin Panel</a>');
							}
						?>
						<span style="float:right; padding-right:1em;">&copy; 2014 Peter Dulworth. </span>
					</div>
				</div> 
			</div> <!-- content -->
			<script src="javascripts/scripts.js"></script>
		</body>
	</html> 